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
        $stikers=[
            '/images/Sticker.png',
            '/images/Sticker1.png',
            '/images/Sticker2.png',
           
        ];
        return [
            //
            'title'=>$this->faker->word(),
            'price'=>$this->faker->numberBetween($min=9,$max=20),
            'product_profile'=>$this->faker->randomElement($stikers),
            'description'=>$this->faker->paragraphs($nb = 3, $asText = true),
        ];
   
    }
}
