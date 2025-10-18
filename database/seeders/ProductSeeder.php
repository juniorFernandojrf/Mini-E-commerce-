<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Garante que existam usuários e categorias
        $users = User::factory(5)->create();
        $categories = Category::factory(5)->create();

        // Cria produtos associando randomicamente usuários e categorias
        Product::factory(30)->make()->each(function ($product) use ($users, $categories) {
            $product->user_id = $users->random()->id;
            $product->category_id = $categories->random()->id;
            $product->save();
        });
    }
}
