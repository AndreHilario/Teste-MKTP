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
            'cep' => function () {
                $cep = rand(10000000, 99999999); // Gera um número de CEP aleatório

                // Formata o número para o padrão de CEP XXXXX-XXX
                return substr_replace($cep, '-', 5, 0);
            },
        ];
    }
}
