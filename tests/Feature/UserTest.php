<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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

    public function testCreateUserHaveAUrl()
    {
        $response = $this->get('/users/create');

        $response->assertStatus(200);
    }

    public function testAUserCanBeSavedOnDatabase()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/users', [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'jdoe@example.com',
        ]);

        $this->assertDatabaseCount('users', 1);
    }
}
