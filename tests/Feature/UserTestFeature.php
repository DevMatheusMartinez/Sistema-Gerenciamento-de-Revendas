<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTestFeature extends TestCase
{
    public function teste_login()
    {
        $response = $this->get('/clientes')->assertRedirect('/login');
    }
}
