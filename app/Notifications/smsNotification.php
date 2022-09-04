<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Notifications\Notification;

class smsNotification extends Notification
{
    use Queueable;

    private $sms;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sms)
    {
        $this->sms = $sms;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['vonage'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toVonage($notifiable)
    {
        return (new VonageMessage)
                    ->greeting($this->sms['greeting'])
                    ->line($this->sms['body'])
                    ->action($this->sms['actionText'], $this->sms['actionURL'])
                    ->line($this->sms['thanks']);    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
