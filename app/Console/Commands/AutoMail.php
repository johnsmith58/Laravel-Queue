<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\WelcomeNewCustomerMail;
use Illuminate\Support\Facades\Mail;

class AutoMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mail';

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
        // return 0;
        Mail::to('test@gmail.com')->send(new WelcomeNewCustomerMail);
    }
}
