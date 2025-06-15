<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => "Cuadro de musgo, combinación de musgo bajo verde claro y oscuro, marco rugoso - madera vieja",
            'image' => "sample.jpg",
            'price' => 177,
        ];
    }
}
