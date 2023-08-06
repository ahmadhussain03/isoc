<?php

namespace App\Notifications;

use App\Models\Campaign;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CampaignCreated extends Notification implements ShouldQueue
{
    use Queueable;

    private Campaign $campaign;

    /**
     * Create a new notification instance.
     */
    public function __construct(Campaign $campaign)
    {
        $this->campaign = $campaign;
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
            ->subject('ISOC Campaign')
            ->greeting('Hello, ' . $notifiable->first_name . ' ' . $notifiable->last_name)
            ->line("Campaign Has Started For " . Str::ucfirst(Str::replaceFirst('_', ' ', $this->campaign->type)) . '.')
            ->action('VOTE NOW', route('user.campaign.show', ['campaign' => $this->campaign]))
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
