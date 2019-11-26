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
            $browser->maximize()->visit('http://127.0.0.1:8000/register')
                ->assertSee('Register')
                ->type('name', str_shuffle('abcdefghijklmnopqrstuvwxyz'))
                ->type('email', str_shuffle('abcdefghijklmnopqrstuvwxyz').'@gmail.com')
                ->type('password', 'secret')
                ->type('password_confirmation','secret');
                sleep(1);
                $browser->press('Register');
                $browser->assertSee('Dashboard');
                sleep(2);
                $browser->click('#launch');
        });
    }
}
