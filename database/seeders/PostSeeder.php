<?php

namespace Database\Seeders;

use App\Models\Admin\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Post::factory()->count(100)->create();
    }
}
