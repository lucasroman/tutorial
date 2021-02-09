<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontUserTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */

    // Check it can log with valid user
    public function testShouldLoginWithValidUser()
    {
        $user = User::factory()->make();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/users/create')
                    ->type('firstName', $user->fistName)
                    ->type('lastName', $user->lastName)
                    ->press('create')
                    ->assertPathIs('/users/create');
        });
    }
}
