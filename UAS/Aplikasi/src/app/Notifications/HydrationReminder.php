namespace App\Notifications;

use Illuminate\Notifications\Notification;

class HydrationReminder extends Notification
{
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Jangan lupa minum air! Target harianmu masih kurang.',
        ];
    }
}
