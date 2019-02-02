<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FormInteractionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/interacting-with-form')
                ->click('@dRadio')
                ->assertDialogOpened('hello')
                ->click('@dCheck')
                ->assertSee('checkbox1')
                ->assertSee('radio1');
        });
    }
}
