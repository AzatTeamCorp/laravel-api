<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    /**
     * Test submission submit method returns success
     */
    public function test_submission_submit_method_returns_success(): void
    {
        $response = $this->post('/api/submit', [
            'name'=>'John Doe',
            'email' => 'john2example.com',
            'message' => 'Lorem'
        ]);
        $response->assertStatus(200);
    }
}
