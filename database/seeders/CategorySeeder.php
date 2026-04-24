<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technology = Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'position' => 1,
            'level' => 1
        ]);

        $smartphones = $technology->children()->create([
            'name' => 'Smartphones',
            'slug' => 'smartphones',
            'position' => 1,
            'level' => 2
        ]);

        $smartphones->children()->create([
            'name' => 'Smartwatch',
            'slug' => 'smartwatch',
            'position' => 1,
            'level' => 3
        ]);

        Category::create([
            'name' => 'Home',
            'slug' => 'home',
            'position' => 2,
            'level' => 1
        ]);

        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'position' => 3,
            'level' => 1
        ]);
    }
}
