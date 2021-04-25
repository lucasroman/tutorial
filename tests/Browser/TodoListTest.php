<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TodoListTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    // Add new item without reloading
    public function testUserCanAddANewItem()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/todo')
                    ->assertDontSee('A new item') // Item doesn't exist yet
                    ->type('input-field', 'A new item')
                    ->press('Add')
                    ->assertSee('A new item'); // Item exist now
        });

    }
}
