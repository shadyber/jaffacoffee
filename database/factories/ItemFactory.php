<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word,
            'slug'=>$this->faker->word,
            'detail'=>$this->faker->sentence,
            'photo'=>'/images/2000x2000.png',
            'thumb'=>'/images/main_cup.png',
            'item_size_id'=>random_int(1,3),
            'item_origion_id'=>random_int(1,3),
            'item_roast_type_id'=>random_int(1,1),
            'price'=>180,
            'user_id'=>$this->faker->numberBetween(1,2),
            'visit'=>$this->faker->numberBetween(1,300),
        ];
    }
}
