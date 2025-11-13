<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Mail\CustomerRequest;
use Illuminate\Support\Facades\Mail;


class EmailTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This generates an email for testing';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $msg ="Hola mundo :) ";
        Mail::to('rodogonzalez@msn.com')->send(new CustomerRequest($msg));
    }
}
