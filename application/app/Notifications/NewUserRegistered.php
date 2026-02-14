<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserRegistered extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;

    /**
     * Create a new notification instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('New User Registration Pending Approval')
                    ->line('A new user has registered and verified their email.')
                    ->line('Name: ' . $this->user->name)
                    ->line('Email: ' . $this->user->email)
                    ->action('Approve User', \Illuminate\Support\Facades\URL::signedRoute('user.approve.signed', ['user' => $this->user->id]))
                    ->line('Please approve or reject this user from the admin panel.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'New User Registration',
            'message' => 'New user registered: ' . $this->user->name,
            'user_id' => $this->user->id,
        ];
    }
}
