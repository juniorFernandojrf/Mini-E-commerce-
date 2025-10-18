<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $name = $this->faker->unique()->words(3, true);;
        return [
            'name'        => $name,
            'description' => $this->faker->paragraph(),
            'price'       => $this->faker->randomFloat(2, 10, 500),
            'slug'        => Str()->slug($name),
            'stock'       => $this->faker->numberBetween(0, 100),
            'user_id'     => User::pluck('id')->random(),
            'category_id' => Category::pluck('id')->random(),
        ];
    }
}
