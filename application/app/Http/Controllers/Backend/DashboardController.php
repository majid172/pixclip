<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Invoice; // Added
use App\Models\Notice;
use App\Models\Order;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $orderQuery = auth()->user()->is_admin == 1
            ? Order::query()
            : Order::where('user_id', auth()->user()->id);


        $data = [
            'orders'        => (clone $orderQuery)->where('status', '!=', 'Redo')->latest()->take(5)->get(),
            'recent_orders' => (clone $orderQuery)->latest()->take(10)->get(),
            'total_orders'  => (clone $orderQuery)->latest()->limit(5)->get(),
            'progress'      => (clone $orderQuery)->where('status', 'Processing')->get(),
            'unpaid_amount' => (clone $orderQuery)->where('is_paid', 0)->sum('price'),
            'today_orders'  => (clone $orderQuery)->whereDate('created_at', today())->get(),
            'statusCount'   => (clone $orderQuery)->groupBy('status')
                ->select('status')
                ->selectRaw('COUNT(*) as count')
                ->pluck('count', 'status'),
            'total_price'   => (clone $orderQuery)->sum('price'),
            
            // New Card Data
            'sales_trend'   => (clone $orderQuery)->sum('price'),
            'total_profit'  => (clone $orderQuery)->where('is_paid', 1)->sum('price'),
            'refunds'       => (clone $orderQuery)->where('status', 'Canceled')->sum('price'),
            // 'discounts'     => Invoice::whereIn('order_id', (clone $orderQuery)->pluck('id'))->sum('discount'),
        ];

        $data['statusLabels'] = $data['statusCount']->keys();
        $data['statusValues'] = array_map('intval', $data['statusCount']->values()->toArray());
        $notices              = Notice::where('status', 1)->limit(3)->orderBy('publish_date', 'desc')->get();

        $countryQuery = auth()->user()->is_admin == 1
            ? UserDetails::query()
            : UserDetails::where('user_id', auth()->user()->id);
        $countries = $countryQuery->select('country_id', DB::raw('COUNT(*) as total'))
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
        return view('panel.dashboard', $data, compact('notices', 'countries'));
    }
}
