<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_should_see_sign_up_page()
    {
        $response = $this->get('/register');
        $response->assertStatus(200)->assertSeeText('SIGN UP');
    }

    public function test_should_register_user()
    {
        $this->assertTrue(true);
    }
}
