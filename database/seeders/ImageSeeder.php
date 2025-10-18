<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Associa uma imagem a cada produto
        Product::all()->each(function ($product) {
            Image::factory()->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class,
            ]);
        });
    }
}
