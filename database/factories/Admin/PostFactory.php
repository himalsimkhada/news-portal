<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $title = ['people', 'earth', 'planet', 'galaxy', 'parent', 'murder', 'child', 'gun', 'drugs', 'home', 'family', 'food', 'place', 'game', 'climate', 'sun', 'star'];
        // $tags = [];
        // for($i = 1; $i <= rand(3, count($title)); $i++){
        //     array_push($tags, $title[$i]);
        // }
        $title = $this->faker->sentence();
        return [
            'code' => rand(100000, 999999),
            'title' => $title,
            'code' => rand(100, 3000000),
            'slug' => Str::slug($title),
            'category_id' => rand(1, 8),
            'author_id' => 1,
            'body' => '<p>' . $this->faker->paragraph() .'</p>',
            // 'tags' => $tags,
            // 'image' => 'news/post/default/6tgxSWOEXBMd1WmSFkPRgFDCuyOzgux7tTpLDEAb.jpg',
        ];
    }
}
