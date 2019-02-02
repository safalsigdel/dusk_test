<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/register')
                ->assertSee('Register')
                ->type('name', 'Sagar')
                ->type('email', 'sagardu@gmail.com')
                ->type('password', 'secret')
                ->type('password_confirmation','secret')
                ->press('Register')
                ->assertSee('Dashboard');
        });
    }
}
