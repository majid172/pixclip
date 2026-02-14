<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function read($id)
    {
        $notification = auth()->user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        if (isset($notification->data['order_id'])) {
            return redirect()->route('order.details', $notification->data['order_id']);
        }

        if (isset($notification->data['user_id'])) {
            return redirect()->route('user.show', $notification->data['user_id']);
        }

        return back();
    }

    public function index()
    {
        $notifications = auth()->user()->notifications()->paginate(10);
        return view('panel.notifications.index', compact('notifications'));
    }
}
