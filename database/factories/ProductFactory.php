<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_code' => $this->faker->word,
            'name' => $this->faker->sentence,
            'url' => $this->faker->url,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'cep' => $this->faker->postcode,
        ];
    }
}
