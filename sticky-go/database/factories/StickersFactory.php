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
            'price'=>$this->faker->numberBetween($min=0,$max=1000000),
            'product_profile'=>$this->faker->randomElement($stikers)
        ];
   
    }
}
