<?php

namespace Tests\Cliente;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClienteControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGetStore(): void
    {
        $response = $this->get('/api/cliente');
        $response->assertStatus(200);
    }

    public function testInputStore()
    {
        $data = [
            "nome" => "Caramelo Lima",
            "email" => "emaildocaramelo2@domain.com",
            "dataNascimento" => "2020-04-22",
            "endereco" => "Rua XPTO, 1000",
            "complemento" => "Casa",
            "bairro" => "Vila da vila",
            "cep" => "00000-000",
        ];
        $response = $this->json('POST', '/api/cliente',$data);
        $response->assertStatus(201);

    }
}
