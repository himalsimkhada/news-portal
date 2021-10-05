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
use Pratiksh\Adminetic\Models\Admin\Setting;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Setting::create([
            'setting_name' => 'site_name',
            'string_value' => 'News Portal',
            'setting_custom' => '"{\r\n    \"class\": \"site_name\",\r\n    \"id\": \"site_name\",\r\n    \"value\": \"Adminetic\",\r\n    \"placeholder\": \"Site Title Here!!\"\r\n}"',
            'setting_type' => 1,
            'setting_group' => 'site_settings',
        ]);
        Setting::create([
            'setting_name' => 'site_logo',
            'string_value' => 'News Portal',
            'setting_custom' => '"{\r\n    \"class\": \"site_logo\",\r\n    \"id\": \"site_logo\",\r\n    \"fit\": {\r\n        \"width\": \"300\",\r\n        \"height\": \"300\"\r\n    },\r\n    \"quality\": \"80\"\r\n}"',
            'setting_type' => 10,
            'setting_group' => 'site_settings',
        ]);
        Setting::create([
            'setting_name' => 'site_fav-icon',
            'string_value' => 'News Portal',
            'setting_custom' => '"{\r\n    \"class\": \"site_fav_icon\",\r\n    \"id\": \"site_fav_icon\",\r\n    \"fit\": {\r\n        \"width\": \"300\",\r\n        \"height\": \"300\"\r\n    },\r\n    \"quality\": \"80\"\r\n}"',
            'setting_type' => 10,
            'setting_group' => 'site_settings',
        ]);
        Setting::create([
            'setting_name' => 'homepage_video_link',
            'string_value' => 'News Portal',
            'setting_custom' => '"{\r\n    \"class\": \"homepage_video_link\",\r\n    \"id\": \"homepage_video_link\",\r\n    \"value\": \"Adminetic\",\r\n    \"placeholder\": \"Site Title Here!!\"\r\n}"',
            'setting_type' => 1,
            'setting_group' => 'homepage_setting',
        ]);



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
