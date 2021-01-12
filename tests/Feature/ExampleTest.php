<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testShowWelcomeMessage()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/react');
        sleep(5);

        $response->assertSee('Hello, world Luke Roman!');
    }
}
