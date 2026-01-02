<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
        $view->with('orderCounts', [
            'all'        => Order::count(),
            'inreview'    => Order::status('In Review')->count(),
            'pending'    => Order::status('Pending')->count(),
            'received'   => Order::status('Received')->count(),
            'invoiced'   => Order::status('Invoiced')->count(),
            'processing' => Order::status('Processing')->count(),
            'finalized'  => Order::status('Finalizing')->count(),
            'completed'  => Order::status('Completed')->count(),
            'downloaded' => Order::status('Downloaded')->count(),
            'canceled'   => Order::status('Canceled')->count(),
            'paid'       => Order::where('is_paid', 1)->count(),
        ]);
    });
    }
}
