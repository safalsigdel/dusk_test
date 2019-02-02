<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class InsertTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
       $this->browse(function (Browser $browser) {
           $browser->visit('http://127.0.0.1:8000/sample-insert-test')
               ->type('name', 'Technorio Inc')
               ->type('email', 'connect5@technorio.com')
                ->type('password','secret')
                ->click('input[type="submit"]')
                ->assertSee('User created successfully');
       });
    }
}
