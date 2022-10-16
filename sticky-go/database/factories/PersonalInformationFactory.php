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
        $gender=[
            'Male',
            'Female',
            'Other'
        ];
        return [
            //
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'contact'=>$this->faker->phoneNumber(),
            'house_number'=> $this->faker->buildingNumber(),
            'barangay'=>$this->faker->streetName(),
            'city'=>$this->faker->city(),
            'province'=>$this->faker->state(),
            'gender'=>$this->faker->randomElement($gender),
            'zip'=>$this->faker->postcode(),
            'about'=>$this->faker->paragraphs($nb = 3, $asText = true)
        ];
    }
}
