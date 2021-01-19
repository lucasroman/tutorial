<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReactTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/react')
                    ->assertSee('Hello, world Luke Roman!');
        });
    }

    1. Check send data to react component
    2. Check react component send data to back-end
    3. Check validatons
}
