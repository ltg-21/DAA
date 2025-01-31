use App\Models\User;
use App\Notifications\HydrationReminder;

protected function schedule(Schedule $schedule)
{
    $schedule->call(function () {
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new HydrationReminder());
        }
    })->hourly();
}
