<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    // Create URL must exist
    public function testCreateUserHaveAUrl()
    {
        $response = $this->get('/users/create');

        $response->assertStatus(200);
    }

    // Create VIEW must exist
    public function testCreateUserViewShouldExist()
    {
        $response = $this->get('/users/create');

        $response->assertViewIs('users.create');
    }

    // Create URL can save new users on database
    public function testAUserCanBeSavedOnDatabase()
    {
        $response = $this->post('/users', [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'jdoe@example.com',
        ]);

        $this->assertDatabaseCount('users', 1);
    }

    // Invalid user data should not be saved
    public function testInvalidUserDataShouldNotBeSabed()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/users', [
            'firstname' => '',
            'lastname' => 'A valid last name',
            'email' => 'avalidemail@example.com',
        ]);

        $this->assertDatabaseCount('users', 1);
    }
}
