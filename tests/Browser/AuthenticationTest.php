<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthenticationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $user = User::find(1);
        $this->browse(function (Browser $browser)   {
            $browser->loginAs(User::find(1))
                ->visit('http://127.0.0.1:8000/home')
                ->assertSee('Dashboard');
        });
    }
}
