<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testMongo () 
    {
        try {
            DB::connection('mongodb')->getMongoDB();
            $this->assertTrue(true);
        } catch (\Exception $e) {
            $this->fail('Gagal: ' . $e->getMessage());
        }
    }
}
