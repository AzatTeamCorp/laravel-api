<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Jobs\SaveSubmission;

class SubmissionController extends Controller{
    
    public function store(SubmissionRequest $submissionRequest){
        $validatedSubmission = $submissionRequest->validated();
        SaveSubmission::dispatch($validatedSubmission)->delay(now());
        return response()->json(['sucess' => true]);
    }

}
