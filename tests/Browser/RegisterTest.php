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
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel')
                ->clickLink('Register')
                ->assertSee('Name')
                ->value('#name', 'Ömer EVREN')
                ->value('#email', 'omerevren06@gmail.com')
                ->value('#password', 'asdasd')
                ->value('#password-confirm', 'asdasd')
                ->press('Register');
        });
    }
}
