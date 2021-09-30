<?php

namespace Database\Seeders;

use App\Models\Admin\Post;
use App\Models\Admin\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Pratiksh\Adminetic\Models\Admin\Role;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        // Artisan::call('adminetic:dummy');
        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            ModulePermissionSeeder::class
        ]);
        $post = Post::all();
        foreach ($post as $post) {
            $tag = Tag::limit(rand(3, 7))->get();
            foreach ($tag as $tag) {
                DB::table('post_tag')->insert([
                    'tag_id' => $tag['id'],
                    'post_id' => $post['id'],
                ]);
            }
        }
    }
}
