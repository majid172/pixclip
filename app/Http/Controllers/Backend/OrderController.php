<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $title = "Orders List";
        $orders = Order::get();
        return view('panel.orders.list',compact('orders','title'));
    }

    public function tracking()
    {
        $title = "Tracking Orders";
        $orders = Order::status('In Review')->get();
        return view('panel.orders.list',compact('orders','title'));
    }

    public function pending()
    {
        $title = "Pending Orders";
        $orders = Order::status('Pending')->get();
        return view('panel.orders.list',compact('orders','title'));
    }
    public function received()
    {
        $title = "Received Orders";
        $orders = Order::status('Received')->get();
        return view('panel.orders.list',compact('orders','title'));
    }
    public function invoiced()
    {
        $title = "Invoiced Orders";
        $orders = Order::status('Invoiced')->get();
        return view('panel.orders.list',compact('orders','title'));
    }
    public function processing()
    {
        $title = "Processing Orders";
        $orders = Order::status('Processing')->get();
        return view('panel.orders.list',compact('orders','title'));
    }
    public function finalized()
    {
        $title = "Finalized Orders";
        $orders = Order::status('Finalizing')->get();
        return view('panel.orders.list',compact('orders','title'));
    }
    public function completed()
    {
        $title = "Completed Orders";
        $orders = Order::status('Completed')->get();
        return view('panel.orders.list',compact('orders','title'));
    }
    public function downloaded()
    {
        $title = "Downloaded Orders";
        $orders = Order::status('Downloaded')->get();
        return view('panel.orders.list',compact('orders','title'));
    }
    public function canceled()
    {
        $title = "Canceled Orders";
        $orders = Order::status('Canceled')->get();
        return view('panel.orders.list',compact('orders','title'));
    }

    public function paid()
    {
        $title = "Paid Orders";
        $orders = Order::where('is_paid',1)->get();
        return view('panel.orders.list',compact('orders','title'));
    }
}
