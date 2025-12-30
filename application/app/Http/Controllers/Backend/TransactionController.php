<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class TransactionController extends Controller
{
    /**
     * Display a listing of all transactions (Admin only)
     */
    public function index(Request $request)
    {
        // Only admins can access all transactions
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized access');
        }

        $query = Transaction::with(['user', 'order']);

        // Filter by status
        if ($request->has('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        // Filter by payment method
        if ($request->has('payment_method') && $request->payment_method !== '') {
            $query->where('payment_method', $request->payment_method);
        }

        // Search by transaction ID or user name
        if ($request->has('search') && $request->search !== '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('transaction_id', 'like', "%{$search}%")
                  ->orWhereHas('user', function($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%");
                  });
            });
        }

        // Filter by date range
        if ($request->has('date_range') && $request->date_range !== '') {
            $dates = explode(' to ', $request->date_range);
            
            if (count($dates) == 1) {
                // Single date selected
                $query->whereDate('created_at', $dates[0]);
            } elseif (count($dates) == 2) {
                // Date range selected
                $query->whereDate('created_at', '>=', $dates[0])
                      ->whereDate('created_at', '<=', $dates[1]);
            }
        }

        // Sort by date
        $query->orderBy('created_at', 'desc');

        $transactions = $query->paginate(30);

        return view("panel.transactions.list", compact("transactions"));
    }

    /**
     * Display the specified transaction
     */
    public function show($id)
    {
        // Only admins can view transaction details
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized access');
        }

        $transaction = Transaction::with(['user', 'order'])->findOrFail($id);

        return view('panel.transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the transaction status
     */
    public function edit($id)
    {
        // Only admins can edit transactions
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized access');
        }

        $transaction = Transaction::with(['user', 'order'])->findOrFail($id);

        return view('panel.transactions.edit', compact('transaction'));
    }

    /**
     * Update the transaction status
     */
    public function update(Request $request, $id)
    {
        // Only admins can update transactions
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized action');
        }

        $validator = Validator::make($request->all(), [
            'status' => 'required|integer|in:1,2,3',
            'notes' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            DB::beginTransaction();

            $transaction = Transaction::findOrFail($id);
            $oldStatus = $transaction->status;
            $newStatus = $request->status;

            // Update transaction status
            $transaction->update([
                'status' => $newStatus,
            ]);

            // Update order payment status based on transaction status
            $order = Order::find($transaction->order_id);
            if ($order) {
                if ($newStatus == 2) { // Completed
                    $order->update(['is_paid' => 1]);
                } elseif ($newStatus == 3) { // Failed
                    $order->update(['is_paid' => 0]);
                }
            }

            // Log the status change
            Log::info('Transaction status updated', [
                'transaction_id' => $transaction->transaction_id,
                'old_status' => $oldStatus,
                'new_status' => $newStatus,
                'admin_id' => auth()->id(),
                'notes' => $request->notes,
            ]);

            DB::commit();

            return redirect()->route('transactions.index')
                ->with('success', 'Transaction status updated successfully.');
        } catch (Exception $e) {
            DB::rollBack();
            
            Log::error('Transaction update failed', [
                'error' => $e->getMessage(),
                'transaction_id' => $id,
            ]);

            return back()->with('error', 'Failed to update transaction: ' . $e->getMessage());
        }
    }

    /**
     * Update transaction status via AJAX
     */
    public function updateStatus(Request $request)
    {
        // Only admins can update status
        if (auth()->user()->is_admin != 1) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        $validator = Validator::make($request->all(), [
            'transaction_id' => 'required|exists:transactions,id',
            'status' => 'required|integer|in:1,2,3',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }

        try {
            DB::beginTransaction();

            $transaction = Transaction::findOrFail($request->transaction_id);
            $oldStatus = $transaction->status;
            $newStatus = $request->status;

            // Update transaction status
            $transaction->update(['status' => $newStatus]);

            // Update order payment status
            $order = Order::find($transaction->order_id);
            if ($order) {
                if ($newStatus == 2) { // Completed
                    $order->update(['is_paid' => 1]);
                } elseif ($newStatus == 3) { // Failed
                    $order->update(['is_paid' => 0]);
                }
            }

            // Log the change
            Log::info('Transaction status updated via AJAX', [
                'transaction_id' => $transaction->transaction_id,
                'old_status' => $oldStatus,
                'new_status' => $newStatus,
                'admin_id' => auth()->id(),
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Transaction status updated successfully.',
                'transaction' => $transaction
            ]);
        } catch (Exception $e) {
            DB::rollBack();
            
            Log::error('AJAX transaction update failed', [
                'error' => $e->getMessage(),
                'transaction_id' => $request->transaction_id,
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to update transaction status.'
            ], 500);
        }
    }

    /**
     * Get transaction statistics (Admin only)
     */
    public function statistics()
    {
        // Only admins can view statistics
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized access');
        }

        $stats = [
            'total_transactions' => Transaction::count(),
            'pending_transactions' => Transaction::where('status', 1)->count(),
            'completed_transactions' => Transaction::where('status', 2)->count(),
            'failed_transactions' => Transaction::where('status', 3)->count(),
            'total_revenue' => Transaction::where('status', 2)->sum('amount'),
            'pending_amount' => Transaction::where('status', 1)->sum('amount'),
        ];

        return view('panel.transactions.statistics', compact('stats'));
    }

    /**
     * Remove the specified transaction (soft delete)
     */
    public function destroy($id)
    {
        // Only admins can delete transactions
        if (auth()->user()->is_admin != 1) {
            abort(403, 'Unauthorized action');
        }

        try {
            $transaction = Transaction::findOrFail($id);
            
            // Log the deletion
            Log::warning('Transaction deleted', [
                'transaction_id' => $transaction->transaction_id,
                'admin_id' => auth()->id(),
            ]);

            $transaction->delete();

            return redirect()->route('transactions.index')
                ->with('success', 'Transaction deleted successfully.');
        } catch (Exception $e) {
            Log::error('Transaction deletion failed', [
                'error' => $e->getMessage(),
                'transaction_id' => $id,
            ]);

            return back()->with('error', 'Failed to delete transaction.');
        }
    }
}
