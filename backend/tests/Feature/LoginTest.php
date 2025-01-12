<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_login()
    {
        $response = $this->post('/connexion', [
            'email' => 'admin@chadenac.com',
            'password' => 'admin',
        ]);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Connexion réussie']);
    }
}