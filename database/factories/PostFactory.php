<?php

namespace Database\Factories;

use App\Models\Post;
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
        $title = $this->faker->realText($maxNbChars = 50, $indexSize = 2);
        $category = [1, 2, 3, 4, 5, 6, 7, 8];
        shuffle($category);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id' => $category[1],
            'author_id' => 1,
            'body' => '<p>' . $this->faker->faker->realText($maxNbChars = 400, $indexSize = 2) .'</p>',
            // 'image' => 'news/post/default/6tgxSWOEXBMd1WmSFkPRgFDCuyOzgux7tTpLDEAb.jpg',
        ];
    } 
}
