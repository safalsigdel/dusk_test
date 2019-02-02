<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DuskViewTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/dusk-view')

                ->click('@click-link') //using dusk selector

                ->assertPathIs('/')

                ->assertSee('Laravel');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.1:8000/link-test')

                ->clickLink('Link test') //using normal selector

                ->assertDontSee('safal');
        });
        $this->browse(function (Browser $browser) {
            /*
             * to use dusk selector , place dusk='name' atribute in tag
             * and get the value using @name
             * for normal selector using any css selector such as class or id
             * */
//            $name = $browser->value('@first-name');
            $name = $browser->value('#firstName');

            $email = $browser->value('@email');

            $password = $browser->value('@password');


//            User::create(['name'=>$name,'email'=>$email,'password'=>bcrypt($password)]);

            $browser->visit('http://127.0.0.1:8000/link-test')
                    ->assertDontSee('ok');

        });

        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/link-test')

                ->click('#redirect')

                ->assertPathIs('/redirect-route')

                ->assertSee('redirected');
        });
    }
}
