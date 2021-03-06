<?php

namespace App\Notifications;

use App\Vacant;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewApplicant extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Vacant $vacant)
    {
        $this->vacant = $vacant;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Hay un nuevo candidato para tu vacante.')
                    ->line('La vacante es: ' . $this->vacant->title . '.')
                    ->action('Ver candidatos', url('/applicants/'.$this->vacant->id))
                    ->line('Visita devJobs para ver más detalles sobre el nuevo candidato.');
    }

    public function toDatabase($notifiable)
    {
        return [
            'vacant' => $this->vacant
        ];
    }

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
