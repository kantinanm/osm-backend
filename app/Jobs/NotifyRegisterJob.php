<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail; 
use Config;
use Illuminate\Support\Facades\Log;
use App\Mail\SendEMailRegister;

class NotifyRegisterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */


    private $email;
    private $name;
    private $student_id;


    public $tries = 5;
    // The number of seconds the job can run before timing out.
    public $timeout = 120;

    public function __construct($email,$name,$student_id)
    {
        //
        $this->email = $email;
        $this->name = $name;
        $this->student_id = $student_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Mail::to($this->email)
        ->send(new SendEMailRegister($this->name,$this->student_id));
    }

    //Determine the time at which the job should timeout.
    public function retryUntil()
    {
        return now()->addSeconds(20);
    }

    public function failed(Exception $exception)
    {
        // Send user notification of failure, etc...
        $message=" Job failed ";
        Log::info($message);
        Log::error($exception->getMessage());
    }
}
