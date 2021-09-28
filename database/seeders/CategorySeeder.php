<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'जीवनशैली',
            'slug' => 'lifestyle',
            'active' => 1,
            'position' => 3,
            'description' => 'Test',
        ]);
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'अन्तर्राष्ट्रिय',
            'slug' => 'international',
            'active' => 1,
            'position' => 2,
            'description' => 'Test',
        ]);
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'खेलकुद',
            'slug' => 'sports',
            'active' => 1,
            'position' => 6,
            'description' => 'Test',
        ]);
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'सूचना प्रविधि',
            'slug' => 'communications',
            'active' => 1,
            'position' => 4,
            'description' => 'Test',
        ]);
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'मनोरन्जन',
            'slug' => 'entertainment',
            'active' => 1,
            'position' => 5,
            'description' => 'Test',
        ]);
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'अर्थ',
            'slug' => 'finance',
            'active' => 1,
            'position' => 7,
            'description' => 'Test',
        ]);
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'अन्य',
            'slug' => 'others',
            'active' => 1,
            'position' => 8,
            'description' => 'Test',
        ]);
        Category::create([
            'code' => rand(4000, 9000),
            'name' => 'प्रदेश',
            'slug' => 'state',
            'active' => 1,
            'position' => 1,
            'description' => 'Test',
        ]);
    }
}
