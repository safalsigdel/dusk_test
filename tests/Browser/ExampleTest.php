<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
//        $this->browse(function (Browser $browser) {
//            $browser->visit('http://127.0.0.1:8000/dusk-test')
//                    ->assertSee('This is the first test using laravel dusk');
//        });
//        $this->browse(function (Browser $browser) {
//            $browser->visit('http://127.0.0.1:8000/click-link')
//            ->clickLink('click here')
//            ->assertSee('link clicked');
//        });

    }
}
