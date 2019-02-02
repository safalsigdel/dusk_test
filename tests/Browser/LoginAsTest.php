<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginAsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit('/home')
//                    ->waitForText('ok') // we can give pause also
//                    ->waitForLocation('/')
//                    ->assertPathIs('/');
                        ->click('#launch')
                //to test modal first click on the id of the button and use whenAvailable function
                        ->whenAvailable('.modal', function ($modal) {
                            $modal->assertSee('Laravel');
                        })
                        ->click('#close')
                        ->assertSee('You are logged in');

        });
    }
}
