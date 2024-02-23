<?php

namespace App\Jobs;

use App\Events\SubmissionSaved;
use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveSubmission implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $submission;

    /**
     * Create a new job instance.
     */
    public function __construct($submission){
        $this->submission = $submission;
    }

    /**
     * Execute the job.
     */
    public function handle(): void{
        $submission = Submission::create($this->submission);
        SubmissionSaved::dispatch($submission);
    }
}
