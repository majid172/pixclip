<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;

class NotificationTestController extends Controller
{
    /**
     * Send a test notification to the authenticated user
     */
    public function sendTestNotification()
    {
        $user = auth()->user();
        
        // Send test notification
        $user->notify(new OrderNotification([
            'title' => 'Test Notification',
            'message' => 'This is a test realtime notification sent at ' . now()->format('H:i:s'),
            'order_id' => null,
            'type' => 'test',
            'icon' => 'bell'
        ]));
        
        return response()->json([
            'success' => true,
            'message' => 'Test notification sent successfully!'
        ]);
    }
    
    /**
     * Send a test order notification
     */
    public function sendOrderNotification()
    {
        $user = auth()->user();
        
        // Send order notification
        $user->notify(new OrderNotification([
            'title' => 'Order Status Updated',
            'message' => 'Your order #12345 has been updated to Processing',
            'order_id' => 12345,
            'type' => 'order_status',
            'icon' => 'package'
        ]));
        
        return response()->json([
            'success' => true,
            'message' => 'Order notification sent successfully!'
        ]);
    }
}
