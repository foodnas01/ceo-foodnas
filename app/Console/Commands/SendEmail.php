<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use DB;
use Illuminate\Support\Facades\Log;

class SendEmail extends Command
{
    protected $signature = 'emails:send';

    protected $description = 'Sending emails to the users.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

          $users = DB::connection('mysql2')->select('select * from users');
            foreach ($users as $eachUser) {
                $to_email = $eachUser->email;
                $data = array(
                    'name' => $eachUser->first_name
                );
                $resp = Mail::send('emails.registerEmail', $data, function ($message) use ($to_email) {
                    $message->from('no-reply@foodnas.comm');
                    $message->to($to_email)->subject('Registraion Email');

                });

                // check for failures
                if (Mail::failures()) {
                    // return response showing failed emails
                    Log::info(json_encode(Mail::failures()));
                }
                DB::connection('mysql2')->update('update users set verfied = 1 where id = '.$eachUser->id.' ');
            }
        $this->info('The emails are send successfully!');
    }
}
