<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RealTimeBackTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // 1. Test url exist.
    public function testUrlToDynamicTextComponentMustExist()
    {
        $response = $this->get('/dynamictext');

        $response->assertStatus(200);
    }
    // 2. Test wiew exist.
    // 3. It can see the same text in another place.
}
