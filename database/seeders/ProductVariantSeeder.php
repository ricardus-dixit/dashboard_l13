<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::where('slug', 'iphone-17')->first();

        if (!$product) return;

        ProductVariant::create([
            'product_id' => $product->id,
            'size' => '256gb', 
            'sku' =>  'iphone17-256',
            'price' => 1500,
            'stock' => 15,
            'position' => 1
        ]);

        ProductVariant::create([
            'product_id' => $product->id,
            'size' => '512gb', 
            'sku' =>  'iphone17-512',
            'price' => 1700,
            'stock' => 20,
            'position' => 2
        ]);
    }
}
