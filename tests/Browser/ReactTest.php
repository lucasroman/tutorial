<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReactTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCanSeeABasicComponent()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/react')
                    ->pause(2000)   /* IMPORTANT: Give it time to render
                                       otherwise it won't work! */
                    ->assertSee('Hello, world!');
        });
    }

    // 1. Check send data to react component
    public function testReactComponentCanReceiveData()
    {
        $this->markTestIncomplete('Set up database before run this test');

        $this->browse(function (Browser $browser) {
        //     $browser->visit('/react')->
        });
    }
    // 2. Check react component send data to back-end
    // 3. Check validatons
}
