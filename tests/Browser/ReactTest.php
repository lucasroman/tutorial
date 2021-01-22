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
    public function testCanSeeComponentHelloWorld()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/react')
                    ->pause(2000)   /* IMPORTANT: Give it time to render
                                       otherwise it won't work! */
                    ->assertSee('Hello, world!');
        });
    }

    public function testReactComponentCanReceiveData()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/react')
                    ->pause(2000)
                    ->assertSee('hola');
        });
    }
}
