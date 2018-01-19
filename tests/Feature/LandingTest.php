<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_should_render_landing_page()
    {
        $response = $this->get('/');
        $response->assertSeeText('Apaa');
    }

    public function test_should_render_login_page()
    {
        $this->visit('/')
            ->click('SIGN IN')
            ->see('SIGN IN')
            ->seePageIs('/login');
    }

    public function test_should_render_register_page()
    {
        $this->visit('/')
            ->click('SIGN UP')
            ->see('SIGN IN')
            ->seePageIs('/register');
    }
}
