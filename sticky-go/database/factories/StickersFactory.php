<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\stickers>
 */
class StickersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->word(),
            'price'=>$this->faker->numberBetween($min=0,$max=1000000),
            'product_profile'=>'/images/Sticker.png'
        ];
    }
}
