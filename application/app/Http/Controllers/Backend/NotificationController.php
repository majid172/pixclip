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

<<<<<<< HEAD
        if (isset($notification->data['user_id'])) {
            return redirect()->route('user.show', $notification->data['user_id']);
        }

=======
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
        return back();
    }

    public function index()
    {
        $notifications = auth()->user()->notifications()->paginate(10);
        return view('panel.notifications.index', compact('notifications'));
    }
<<<<<<< HEAD
=======

    /**
     * Mark all notifications as read
     */
    public function markAllAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
        
        if (request()->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'All notifications marked as read'
            ]);
        }

        return back()->with('success', 'All notifications marked as read');
    }

    /**
     * Get unread notification count
     */
    public function getUnreadCount()
    {
        $count = auth()->user()->unreadNotifications()->count();
        
        return response()->json([
            'count' => $count
        ]);
    }
>>>>>>> f4487809c6336aa094a5037239790f3f6100af79
}
