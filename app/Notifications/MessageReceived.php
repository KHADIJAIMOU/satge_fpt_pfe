<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;
use App\Models\Message;

class MessageReceived extends Notification
{
    use Queueable;

    public $message;

    /**
     * Create a new notification instance.
     *
     * @param Message $message
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // store notifications in database by default, adjust if you need mail/broadcast
        return ['database'];
    }

    /**
     * Get the array representation of the notification for database storage.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message_id' => $this->message->id ?? null,
            'from_id' => $this->message->from_id ?? null,
            'to_id' => $this->message->to_id ?? null,
            'content' => $this->message->content ?? null,
            'created_at' => isset($this->message->created_at) ? (string) $this->message->created_at : null,
        ];
    }
}
