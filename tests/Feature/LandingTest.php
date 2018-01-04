<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_should_render_landing_page()
    {
        $response = $this->get('/');
        $response->assertSeeText('Apaa');

    }

    public function test_should_render_login_page()
    {
        $response = $this->get('/login');
        $response->assertSeeText('Log In');
    }

    public function test_should_render_register_page()
    {
        $response = $this->get('/register');
        $response->assertSeeText('SIGN UP');
    }
}
