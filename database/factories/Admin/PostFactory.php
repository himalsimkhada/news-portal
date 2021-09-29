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
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'code' => rand(100, 3000000),
            'slug' => Str::slug($title),
            'category_id' => rand(1, 8),
            'author_id' => 1,
            'body' => '<p>' . $this->faker->sentence() .'</p>',
            'image' => 'news/post/default/adoBPqzQxJ4tkqosamu8L6ShhQ21Ag9jYnNfRUtN.jpg',
            'featured' => rand(0, 1),
            'status' => rand(0, 3),
        ];
    }
}
