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
            'code' => rand(100000, 999999),
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id' => rand(1, 8),
            'author_id' => 1,
            'body' => '<p>' . $this->faker->paragraph() .'</p>',
            // 'image' => 'news/post/default/6tgxSWOEXBMd1WmSFkPRgFDCuyOzgux7tTpLDEAb.jpg',
        ];
    } 
}
