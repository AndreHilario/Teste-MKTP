<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function test_making_a_create_view_return(): void
    {
        $response = $this->get('/products/create');
 
        $response
            ->assertStatus(200);
    }
}
