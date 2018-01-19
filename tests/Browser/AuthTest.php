<?php

namespace Tests\Browser;

use Apaa\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_should_render_landing_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('APAA');
        });
    }

    public function test_should_render_sign_in_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('SIGN IN')
                    ->assertPathIs('/login');
        });
    }

    public function test_should_render_sign_in_user()
    {
        $user = factory(User::class)->create([
            'email' => 'koficodes@github.com',
            'password' => bcrypt('aaaaaa'),
            'user_type' => 1,
        ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'koficodes@github.com')
                    ->type('password', 'aaaaaa')
                    ->press('LOG IN')
                    ->assertPathIs('/home');
        });
    }

    public function test_should_render_sign_up_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('SIGN UP')
                ->assertPathIs('/register');
        });
    }

    public function test_should_register_new_user()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'Paul Karikari')
                ->type('email', 'koficodes@github.com')
                ->type('company', 'Awake company Ltd')
                ->type('phone', '45234523662')
                ->type('password', 'aaaaaa')
                ->type('password_confirmation', 'aaaaaa')
                ->radio('user_type', '1')
                ->press('SIGN UP')
                ->assertPathIs('/home');
        });
    }
}
