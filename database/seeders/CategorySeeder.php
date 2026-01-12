<?php
// database/seeders/CategorySeeder.php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Sneakers',
                'slug' => 'sneakers',
                'description' => 'Sepatu Sneakers Untuk Pria Dan Wanita',
                'image' => 'categories/sneakers.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Sports Shoes',
                'slug' => 'sports-shoes',
                'description' => 'Sepatu Olahraga Untuk Pria Dan Wanita',
                'image' => 'categories/sports.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $this->command->info('✅ Categories seeded successfully!');
    }
}