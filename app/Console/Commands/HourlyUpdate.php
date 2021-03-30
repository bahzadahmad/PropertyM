<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\TestEmail;
use Mail;
use DB;
class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'command:name';
    protected $signature = 'hour:update';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an hourly email to all the users';
    
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
     * @return int
     */
    public function handle()
    {
        $sCurrentTime = date('Y-m-d h:i:s');
        dd($sCurrentTime);
        $data = ['message' => 'testing hourly mail','subject' => 'hourly mail tesating'];
        Mail::to('bahzadahmadhsp@gmail.com')->send(new TestEmail($data));
        $this->info('Hourly Update has been send successfully');
    }
}
