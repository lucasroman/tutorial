<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FrontUserTest extends DuskTestCase
{
    use DatabaseMigrations;

    // Create view should show a form and redirect to same page after submit
    public function testShouldRedirectToAfterCreateUser()
    {
        $user = User::factory()->make();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/users/create')
                    ->type('firstName', $user->firstName)
                    ->type('lastName', $user->lastName)
                    ->press('create')
                    ->assertDialogOpened("First name: {$user->firstName}\nLast name: {$user->lastName}");
        });
    }
}
