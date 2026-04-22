<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::where('slug', 'technology')->first();

        if (!$category) return;

        Product::create([
            'category_id' => $category->id,
            'name' => 'iPhone 17',
            'slug' => 'iphone-17',
            'description' => 'Latest iphone released', 
            'short_description' => 'Apple iPhone 17',
            'price' => 1500,
            'sale_price' => 1350,
            'sku' => 'IPHONE17-US-256',
            'stock' => 50,
            'featured' => 1,
            'meta_title' => 'Buy iPhone 17 online',
            'meta_description' => 'Best price for iPhone 17',
            'meta_keywords' => 'iphone, apple, mobile'
        ]);

        Product::create([
            'category_id' => $category->id,
            'name' => 'Samsung Galaxy S26',
            'slug' => 'samsung-galaxy-s-26',
            'description' => 'Samsung flagship smartphone', 
            'short_description' => 'Samsung flagship',
            'price' => 1300,
            'sale_price' => 1150,
            'sku' => 'SAMSUNGS26-US-256',
            'stock' => 40,
            'featured' => 0,
        ]);
    }
}
