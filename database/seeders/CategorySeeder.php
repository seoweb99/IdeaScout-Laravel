<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // These are the same categories as in your install.php
        $categories = [
            ['name' => 'Crafts & Sewing'],
            ['name' => 'Automotive & Powersports'],
            ['name' => 'Baby Products'],
            ['name' => 'Beauty & Personal Care'],
            ['name' => 'Books'],
            ['name' => 'Business, Industry and Science'],
            ['name' => 'Camera & Photo'],
            ['name' => 'Cell Phones & Accessories'],
            ['name' => 'Clothing, Shoes & Jewelry'],
            ['name' => 'Collectibles & Fine Art'],
            ['name' => 'Computers'],
            ['name' => 'Consumer Electronics'],
            ['name' => 'DIY and Tools'],
            ['name' => 'Electronics'],
            ['name' => 'Garden & Outdoor'],
            ['name' => 'Grocery & Gourmet Foods'],
            ['name' => 'Handmade Products'],
            ['name' => 'Health & Personal Care'],
            ['name' => 'Home & Garden'],
            ['name' => 'Home & Kitchen'],
            ['name' => 'Industrial & Scientific'],
            ['name' => 'Jewelry'],
            ['name' => 'Office Products'],
            ['name' => 'Pet Supplies'],
            ['name' => 'Sports & Outdoors'],
            ['name' => 'Toys & Games'],
            ['name' => 'Watches'],
        ];

        // Using the model for insertion
        Category::insert($categories);
    }
}