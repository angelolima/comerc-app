<?php

namespace Tests\Cliente;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProdutoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGetProduct(): void
    {
        $response = $this->get('/api/produto');
        $response->assertStatus(200);
    }

    public function testInputProduct()
    {
        $data = [
            "nome" => "Pen Drive Multi Twist USB 2.0 128GB - PD587",
            "preco" => "123.90",
            "foto" => "1686150631.jpg",
        ];
        $response = $this->json('POST', '/api/produto',$data);
        $response->assertStatus(201);

    }
}
