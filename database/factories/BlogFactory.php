<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->sentence,
            'tags' => $this->faker->words(3,true),
            'detail' => $this->faker->sentence(5,true),
            'photo' => '/images/3000x2000.png',
            'thumb' => '/images/10128666_60x60.jpg',
            'user_id' => $this->faker->randomNumber(1,3),
            'blog_category_id' => $this->faker->randomNumber(1,2),
        ];
    }
}
