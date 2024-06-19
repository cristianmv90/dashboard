<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic example.
     */
    public function testData()
    {
        $response = $this->get('/api/metrics');
        $response->assertStatus(200);
        $response->assertJson([
            'data' => [
                ['platform' => 'Facebook'],
                ['platform' => 'Twitter'],
                ['platform' => 'Instagram'],
                ['platform' => 'LinkedIn'],
            ],
        ]);
    }
}
