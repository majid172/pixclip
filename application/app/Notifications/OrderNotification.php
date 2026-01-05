<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;

class OrderNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $notificationData;

    /**
     * Create a new notification instance.
     */
    public function __construct(array $data)
    {
        dd(123);
        $this->notificationData = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'broadcast'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => $this->notificationData['title'] ?? 'New Notification',
            'message' => $this->notificationData['message'] ?? '',
            'order_id' => $this->notificationData['order_id'] ?? null,
            'type' => $this->notificationData['type'] ?? 'general',
            'icon' => $this->notificationData['icon'] ?? 'bell',
        ];
    }

    /**
     * Get the broadcastable representation of the notification.
     */
    public function toBroadcast(object $notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            'title' => $this->notificationData['title'] ?? 'New Notification',
            'message' => $this->notificationData['message'] ?? '',
            'order_id' => $this->notificationData['order_id'] ?? null,
            'type' => $this->notificationData['type'] ?? 'general',
            'icon' => $this->notificationData['icon'] ?? 'bell',
            'created_at' => now()->toISOString(),
        ]);
    }

    /**
     * Get the type of the notification being broadcast.
     */
    public function broadcastType(): string
    {
        return 'order.notification';
    }
}
