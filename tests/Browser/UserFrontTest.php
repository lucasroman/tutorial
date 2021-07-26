<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserFrontTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */

    public function testShowMessageWhenThereAreNoUsers()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/users')
                    ->assertSee('There are no users.');
        });
    }
}
