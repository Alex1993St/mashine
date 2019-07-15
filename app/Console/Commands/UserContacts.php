<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UserContacts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contacts:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get today callback';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       DB::table('contacts')
               ->select('name', 'email', 'message')
               ->whereBetween('updated_at', [date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')])
               ->get();
    }
}
