<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
//use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // the artisan method
        //php artisan make:command UserContacts
        //'App\Console\Commands\UserContacts'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // the call method
//        $schedule->call(function (){
//            DB::table('contacts')
//               ->select('name', 'email', 'message')
//               ->whereBetween('updated_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])
//               ->get();
//        })->everyThirtyMinutes();

        // the artisan method
        //$schedule->command('contacts:user')->everyThirtyMinutes();

        // the exec method
        $host = config('database.connections.mysql.host');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $database = config('database.connections.mysql.database');

        $schedule->exec("mysqldump -h {$host} -u {$username} -p {$password} {$database}")
                 ->daily()
                 ->sendOutputTo('/backups/daily_backup.sql');
        //sendOutputTo, который позволяет вам собирать выходные данные команды.
        // или emailOutputTo, который позволяет отправлять выходные данные!

         //$schedule->command('inspire')->hourly();
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
