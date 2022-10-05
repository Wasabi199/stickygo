<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personalInformation>
 */
class PersonalInformationFactory extends Factory
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
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'contact'=>$this->faker->phoneNumber(),
            'house_number'=> $this->faker->buildingNumber(),
            'barangay'=>$this->faker->streetName(),
            'city'=>$this->faker->city(),
            'province'=>$this->faker->state(),
        ];
    }
}
