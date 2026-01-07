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
            if (auth()->check()) {
                $view->with('orderCounts', [
                    'all'        => Order::checkUser()->count(),
                    'inreview'   => Order::status('In Review')->checkUser()->count(),
                    'pending'    => Order::status('Pending')->checkUser()->count(),
                    'received'   => Order::status('Received')->checkUser()->count(),
                    'invoiced'   => Order::status('Invoiced')->checkUser()->count(),
                    'processing' => Order::status('Processing')->checkUser()->count(),
                    'finalized'  => Order::status('Finalizing')->checkUser()->count(),
                    'redo'       => Order::status('Redo')->checkUser()->count(),
                    'completed'  => Order::status('Completed')->checkUser()->count(),
                    'downloaded' => Order::status('Downloaded')->checkUser()->count(),
                    'canceled'   => Order::status('Canceled')->checkUser()->count(),
                    'paid'       => Order::where('is_paid', 1)->checkUser()->count(),
                ]);
            }
        });
    }
}
