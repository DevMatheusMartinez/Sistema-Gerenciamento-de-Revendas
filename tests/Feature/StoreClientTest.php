<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreClientTest extends TestCase
{
    use RefreshDatabase;
    protected User $user;
    protected string $jwt;
    public function setUp():void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        
    }

    public function teste_um_usuario_pode_cadastrar_um_cliente()
    {
        $this->withoutExceptionHandling();

        $response = $this->postJson('api/login', [
            "email" => $this->user->email,
            "password" => "123456"
        ]);
        
        $this->jwt = "bearer ".$response['token'];
       
         $this->postJson('api/clientes', [
            "nome" => "Matheus Martinez",
            "cpf" => "87623462413",
            "email" => "matheusmari2@hotmail.com",
            "telefone" => "9918322786782"
        ], [
            "Authorization"=> $this->jwt
        ])->assertOk()->assertJson([
            'data' => "Cliente cadastrado com sucesso!"
        ]);

        $this->assertDatabaseHas('clients', [
            "user_id" => $this->user->id,
            "nome" => "Matheus Martinez",
            "cpf" => "87623462413",
            "email" => "matheusmari2@hotmail.com",
            "telefone" => "9918322786782"
        ]);

    }
}
