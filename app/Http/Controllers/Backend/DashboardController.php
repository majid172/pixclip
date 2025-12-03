<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Order;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $orderQuery = Order::query();

        $data = [
            'orders'        => (clone $orderQuery)->where('status', '!=', 'Redo')->latest()->take(5)->get(),
            'recent_orders'  => (clone $orderQuery)->latest()->take(10)->get(),
            'total_orders'  => (clone $orderQuery)->latest()->take(10)->get(),
            'progress'      => (clone $orderQuery)->where('status', 'Processing')->get(),
            'unpaid_amount' => (clone $orderQuery)->where('is_paid', 0)->sum('price'),
            'today_orders'  => (clone $orderQuery)->whereDate('created_at', today())->get(),
            'statusCount'   => Order::groupBy('status')
                ->select('status')
                ->selectRaw('COUNT(*) as count')
                ->pluck('count', 'status'),
        ];

        $data['statusLabels'] = $data['statusCount']->keys();
        $data['statusValues'] = array_map('intval', $data['statusCount']->values()->toArray());
        $notices = Notice::where('status',1)->limit(5)->latest()->get();
        // $payment              = Payment::select('gateway')
        //     ->selectRaw('count(*) as count')
        //     ->groupBy('gateway')
        //     ->get()
        //     ->pluck('count', 'gateway');

        // $paymentLabels = $payment->keys();
        // $paymentValues = array_map('intval', $payment->values()->toArray());
        return view('panel.dashboard',$data,compact('notices'));
    }
}
