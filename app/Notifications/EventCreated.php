<?php

namespace App\Notifications;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventCreated extends Notification implements ShouldQueue
{
    use Queueable;

    private Event $event;

    /**
     * Create a new notification instance.
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('ISOC Event')
            ->greeting('Hello, ' . $notifiable->first_name . ' ' . $notifiable->last_name)
            ->line($this->event->title)
            ->line('Date: ' . $this->event->date->format('Y/m/d'))
            ->line('From ' . $this->event->from_time->format('h:i a') . ' To ' . $this->event->to_time->format('h:i a'))
            ->action('JOIN EVENT', route('user.event.show', ['event' => $this->event]))
            ->line('Thank you for using ISOC!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
