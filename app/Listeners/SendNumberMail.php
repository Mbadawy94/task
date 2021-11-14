<?php

namespace App\Listeners;

use App\Events\SendSchoolNumber;
use App\Mail\studentNotifyMail;
use App\Models\School;
use App\Notifications\SendStudentsNumberNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNumberMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public $school;
    public function __construct(School $school)
    {
        $this->school = $school;
    }

    /**
     * Handle the event.
     *
     * @param  SendSchoolNumber  $event
     * @return void
     */
    public function handle(SendSchoolNumber $event)
    {
        $this->sendEmail($event->school);    
    }

    function sendEmail($school)
    {
        return redirect()->route('send-email', $school);
    }
}
