<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // User instantiated but not saved in the database
        $this->user = User::make([
            'first_name' => 'Jhon',
            'last_name' => 'Doe',
            'email' => 'jdoe@example.com',
        ]);
    }

    // ------------------------------------------------------------------------
    // User create tests
    // ------------------------------------------------------------------------

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

    // Invalid username should not be saved
    public function testInvalidUserNameShouldNotBeSaved()
    {
        $response = $this->post('/users', [
            'firstname' => '',
            'lastname' => 'A valid last name',
            'email' => 'avalidemail@example.com',
        ]);

        // Exist an error in firstname field
        $response->assertSessionHasErrors(['firstName']);
        // The new user has not been saved on database
        $this->assertDatabaseCount('users', 0);
    }

    // Invalid user's last name should not be saved
    public function testInvalidUserLastNameShouldNotBeSaved()
    {
        $response = $this->post('/users', [
            'firstName' => 'John',
            'lastName' => '',
            'email' => 'validEmail@example.com',
        ]);

        // Exist an error in lastname field
        $response->assertSessionHasErrors(['lastName']);
        // The new user has not been saved on database
        $this->assertDatabaseCount('users', 0);
    }

    // Invalid user's email should not be saved
    public function testInvalidUserEmailShouldNotBeSaved()
    {
        $response = $this->post('/users', [
            'firstName' => 'A valid firstname',
            'lastName' => 'A valid lastname',
            'email' => '',
        ]);

        // Exist an error in email field
        $response->assertSessionHasErrors(['email']);
        // The new user has not been saved on database
        $this->assertDatabaseCount('users', 0);
    }

    // ------------------------------------------------------------------------
    // User index tests
    // ------------------------------------------------------------------------

    // Users list route must exist (index view and action)
    public function testUsersListUrlMustExist()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    // Users list view must exist
    public function testUsersUrlShowAllUsersInDatabase()
    {
        // There are no users in the database
        $this->assertDatabaseCount('users', 0);

        // Save a new users
        $users = User::factory()->count(2)->create();

        // Check that the new users are in the database
        $this->assertDatabaseCount('users', 2);

        $response = $this->get('/users');
        // First user is visible in '/users' url
        $response->assertSee($users[0]->first_name);
        $response->assertSee($users[0]->last_name);
        $response->assertSee($users[0]->email);

        // Second user is visible in '/users' url
        $response->assertSee($users[1]->first_name);
        $response->assertSee($users[1]->last_name);
        $response->assertSee($users[1]->email);
    }
}
