<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::where('slug', 'iphone-17')->first();

        if (!$product) return;

        ProductImage::create([
            'product_id' => $product->id,
            'image' => 'iphone17front.png',
            'position' => 1,
            'alt_text' => 'iPhone 17 front view', 
            'status' => 1
        ]);

        ProductImage::create([
            'product_id' => $product->id,
            'image' => 'iphone17back.png',
            'position' => 2,
            'alt_text' => 'iPhone 17 back view', 
            'status' => 1
        ]);
    }
}
