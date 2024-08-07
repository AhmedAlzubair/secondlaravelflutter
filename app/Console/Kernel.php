<?php

namespace App\Console;

use App\Console\Commands\Expiration;
use App\Console\Commands\NotifyUser;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commends=[
        Expiration::class,
        NotifyUser::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('user:expire')->everyMinute();
       // $schedule->command('notify:email')->daily();
        $schedule->command('notify:email')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
       
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
       
    }
}
