<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_making_a_create_view_return(): void
    {
        $response = $this->get('/products/create');
 
        $response
            ->assertStatus(200);
    }

    public function test_invalid_input_response(): void
    {
        $response = $this->post('/api/products', [
            'id_code' => 'Test@',
            'name' => 'Test',
            'url' => 'test',
            'price' => 0,
            'cep' =>'invalid_cep'
        ]);

        $response->assertStatus(302);
    }

    public function test_data_format_received_correctly(): void
    {
        $response = $this->post('/api/products', [
            'id_code' => '12345abcde',
            'name' => 'Test',
            'url' => 'https://www.google.com.br/?hl=pt-BR',
            'price' => 1000.10,
            'cep' => '12230-001'
        ]);

        $response
            ->assertStatus(200);
    }

    public function test_inserting_data_to_database(): void
    {
        $productData = [
            'id_code' => '12345abcde',
            'name' => 'Test',
            'url' => 'https://www.google.com.br/?hl=pt-BR',
            'price' => 1000.10,
            'cep' => '12230-001'
        ];

        $this->post('/api/products', $productData);

        $this->assertDatabaseHas('products', [
            'id_code' => '12345abcde',
            'name' => 'Test',
            'url' => 'https://www.google.com.br/?hl=pt-BR',
            'price' => 1000.10,
            'cep' => '12230-001'
        ]);
    }

    public function test_not_found_response_in_nonexistent_route(): void
    {
        $response = $this->get('/products'); 

        $response->assertStatus(404);
    }
}
