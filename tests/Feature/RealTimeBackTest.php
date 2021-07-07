<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RealTimeBackTest extends TestCase
{
    use RefreshDatabase;

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

    // Url to dynamic text component must exist
    public function testUrlToDynamicTextComponentMustExist()
    {
        $response = $this->get('/dynamictext');

        $response->assertStatus(200);
    }

    // View to dynamic text component must exist
    public function testViewToDynamicTextComponentMustExist()
    {
        $response = $this->get('/dynamictext');

        $response->assertViewIs('dynamictext.dynamicText');
    }

    // 3. It can see the same text in another place.
}
