<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    public function test_view_register_page()
    {
        $this->withoutExceptionHandling();
        $response = $this->get("/register");
        $response->assertViewIs('register');
        $response->assertSee('Register');
        $response->assertOk();
        $response->assertServerError();
    }
}
