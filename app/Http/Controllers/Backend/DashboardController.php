<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Order;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $orderQuery = Order::query();

        $data = [
            'orders'        => (clone $orderQuery)->where('status', '!=', 'Redo')->latest()->take(5)->get(),
            'recent_orders' => (clone $orderQuery)->latest()->take(10)->get(),
            'total_orders'  => (clone $orderQuery)->latest()->get(),
            'progress'      => (clone $orderQuery)->where('status', 'Processing')->get(),
            'unpaid_amount' => (clone $orderQuery)->where('is_paid', 0)->sum('price'),
            'today_orders'  => (clone $orderQuery)->whereDate('created_at', today())->get(),
            'statusCount'   => Order::groupBy('status')
                ->select('status')
                ->selectRaw('COUNT(*) as count')
                ->pluck('count', 'status'),
            'total_price'   => (clone $orderQuery)->sum('price'),
        ];

        $data['statusLabels'] = $data['statusCount']->keys();
        $data['statusValues'] = array_map('intval', $data['statusCount']->values()->toArray());
        $notices              = Notice::where('status', 1)->limit(3)->orderBy('publish_date','desc')->get();

        $countries = UserDetails::select('country_id', DB::raw('COUNT(*) as total'))
            ->whereHas('country', function ($q) {
                $q->where('status', 'Active');
            })
            ->with(['country:id,name,short_name,image'])
            ->groupBy('country_id')
            ->get();
  
    
        // $payment              = Payment::select('gateway')
        //     ->selectRaw('count(*) as count')
        //     ->groupBy('gateway')
        //     ->get()
        //     ->pluck('count', 'gateway');

        // $paymentLabels = $payment->keys();
        // $paymentValues = array_map('intval', $payment->values()->toArray());
        return view('panel.dashboard', $data, compact('notices','countries'));
    }
}
