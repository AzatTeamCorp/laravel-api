<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SubmissionSavedListener
{

    /**
     * Create the event listener.
     */
    public function __construct(){
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionSaved $event): void{
        $submission = $event->submission;
        Log::info('Submission saved successfully, Name: '.$submission->name. ' Email: '.$submission->email);
    }
}
