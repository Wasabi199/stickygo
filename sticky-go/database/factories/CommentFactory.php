<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\stickers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class CommentFactory extends Factory
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
            'sticker_id'=>$this->faker->randomElement(stickers::where('id' ,'>' ,0)->pluck('id')->toArray()),
            'Comment'=>$this->faker->sentence($nbWords = 10, $variableNbWords = true),
        ];
    }
}
