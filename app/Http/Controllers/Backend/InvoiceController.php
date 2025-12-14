<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'service_name' => 'required|array',
            'service_name.*' => 'required',
            'qty' => 'required|array',
            'qty.*' => 'required|numeric|min:1',
            'price' => 'required|array',
            'price.*' => 'required|numeric|min:0',
            'single_discount' => 'nullable|array',
            'row_sub_total' => 'required|array',
           
            'discount' => 'nullable|numeric|min:0',
            'discount_type' => 'required|in:Flat,Percent',
            'total_price' => 'required|numeric|min:0',
        ]);

        // Get order_id from request or URL
        $order_id = $request->input('order_id') ?? $request->route('order');
        
        if (!$order_id) {
            return redirect()->back()->with('error', 'Order ID is required.');
        }

        // Check if order exists
        $order = Order::find($order_id);
        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $flag = 0;
        
        // Check if invoice already exists
        $invoice = Invoice::where('order_id', $order_id)->first();
        
        if ($invoice) {
            // Update existing invoice
            $flag = 1;
            $invoice->service_name = json_encode($validated['service_name']);
            $invoice->comments = json_encode($request->input('comments', [])); // Handle optional comments
            $invoice->qty = json_encode($validated['qty']);
            $invoice->price = json_encode($validated['price']);
            $invoice->single_discount = json_encode($validated['single_discount'] ?? array_fill(0, count($validated['qty']), 0));
            $invoice->row_sub_total = json_encode($validated['row_sub_total']);
            $invoice->sub_total = $request->input('sub_total', 0);
            $invoice->discount = $validated['discount'] ?? 0;
            $invoice->discount_type = $validated['discount_type'];
            $invoice->grand_total = $validated['total_price'];
            $invoice->save();
        } else {
            // Create new invoice
            $invoice = Invoice::create([
                'order_id' => $order_id,
                'service_name' => json_encode($validated['service_name']),
                'comments' => json_encode($request->input('comments', [])), // Handle optional comments
                'qty' => json_encode($validated['qty']),
                'price' => json_encode($validated['price']),
                'single_discount' => json_encode($validated['single_discount'] ?? array_fill(0, count($validated['qty']), 0)),
                'row_sub_total' => json_encode($validated['row_sub_total']),
                'sub_total' => $request->input('sub_total', 0),
                'discount' => $validated['discount'] ?? 0,
                'discount_type' => $validated['discount_type'],
                'grand_total' => $validated['total_price']
            ]);
        }

        if ($invoice) {
            // Generate invoice ID if not exists
            if (!$invoice->invoice_id) {
                $invoice->invoice_id = 'PIXIN-' . date('ym') . '-' . sprintf('%04d', $invoice->id);
                $invoice->save();
            }

            // Update order
            $order->is_invoiced = 1;
            $order->price = $validated['total_price'];
            $order->status = 'Processing';
            $order->save();

            // Send mail to user (uncomment when ready)
            /*
            $user = $order->user;
            $body = 'Greeting From PIX Clipping Ltd. Your invoice is ready for order #' . $order->order_id . '. Please check the order details and proceed with payment.';
            $details = [
                'subject' => 'Invoice Created',
                'greeting' => 'Hello ' . $user->name,
                'body' => $body,
                'actionText' => 'View Invoice',
                'actionUrl' => route('panel.orders.details', $order->id),
                'endText' => ''
            ];
            Notification::send($user, new SendEmailNotification($details));
            */

            // Send mail to admin (uncomment when ready)
            /*
            $admin_body = 'New invoice created for order #' . $order->order_id . '. Please review the order.';
            $admin_details = [
                'subject' => 'Invoice Created',
                'greeting' => 'Hello ' . auth()->user()->name,
                'body' => $admin_body,
                'actionText' => 'View Order',
                'actionUrl' => route('panel.orders.details', $order->id),
                'endText' => ''
            ];
            Notification::send(auth()->user(), new SendEmailNotification($admin_details));
            */

            if ($flag === 1) {
                return redirect()->back()->with('success', 'Invoice updated successfully.');
            }
            return redirect()->back()->with('success', 'Invoice created successfully.');
        } else {
            return redirect()->back()->with('error', 'Invoice creation failed. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
