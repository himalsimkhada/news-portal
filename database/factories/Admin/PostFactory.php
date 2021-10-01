<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory {
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
    public function definition() {
        $title = [
            'विराटनगरमाथि ललितपुरको ईपीएलकै ठूलो स्कोर प्रहार',
            'एमाले विधान महाधिवेशन : प्रतिनिधि गोदावरी पुगे, हल प्रवेश गर्ने क्रम सुरु',
            'बर्सेनि अर्बौं लगानी तर कुपोषण समस्या उस्तै',
            'भट्टराईको प्रश्न : द्वन्द्वका घाउ कोट्याएर क्यान्सर बनाउन खोजेको हो ?',
            'जडिबुटी संकलनले मुगुमा जनगणना प्रभावित',
            'एमसीसीमा विवाद गर्नु दुर्भाग्यपूर्ण : भट्टराई',
        ];
        $random_title = array_rand($title);
        return [
            'code' => rand(100000, 999999),
            'title' => $random_title,
            'code' => rand(100, 3000000),
            'slug' => Str::slug($this->faker->sentence),
            'category_id' => rand(1, 8),
            'author_id' => 1,
            'body' => '<p>' . 'जनता समाजवादी पार्टी नेपालका संघीय परिषद् अध्यक्ष बाबुराम भट्टराईले राष्ट्रिय सहमति जुटाएर एमसीसी पास गर्नुपर्ने बताएका छन् । जनता समाजवादीले सिन्धुलीमाढीमा मंगलबार आयोजना गरेको कार्यक्रममा भट्टराईले एमसीसी सहयोगको विरोध हुनु दुर्भाग्यपूर्ण भएको बताए ।'   . '</p>',
            'image' => 'news/post/default/adoBPqzQxJ4tkqosamu8L6ShhQ21Ag9jYnNfRUtN.jpg',
            'featured' => rand(0, 1),
            'status' => rand(0, 3),
        ];
    }
}
