<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    //test login with correct email and pasword
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->type('email', 'safalsigdel381@gmail.com')
                ->type('password', 'secret')
                ->press('button[type="submit"]')
                ->assertPathIs('/home')
                ->assertSee('Dashboard');
        });
    }

   // test login with incorrect email and password
    public function loginTestFailed()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                ->assertSee('Login')
                ->type('email', 'safalsigdel381@gmail.com')
                ->type('password', 'secret123')
                ->press('Login')
                ->assertPathIs('/login')
                ->assertSee('These credentials do not match our record');
        });
    }
}
