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
    public function testLogin()
    {
        /** @test */

        //$this->browser->resize(1920, 1080);
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel')
                ->clickLink('Login')
                ->assertSee('E-Mail Address')
                ->value('#email', 'omerevren06@gmail.com')
                ->value('#password', 'asdasd')
                ->press('Login');
        });
    }
}
