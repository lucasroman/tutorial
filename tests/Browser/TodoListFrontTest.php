<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TodoListFrontTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */

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

    // Can't save empty item
    public function testCantSaveEmptyItem()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/todo')
                    ->assertMissing('li') // There is no item
                    ->type('input-field', '') // Input empty item
                    ->press('Add') // Try to save empty item
                    ->assertMissing('li'); // Empty item wasn't saved
        });
    }
}
