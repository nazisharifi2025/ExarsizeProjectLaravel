<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->name(),
            "lastName"=>$this->faker->lastName(),
            "email"=>$this->faker->email(),
            "dob"=>$this->faker->date(),
            "gender"=>$this->faker->randomElement(["male" , 'female']),
            "userId"=>$this->faker->numberBetween(10,100),
            "classId"=>$this->faker->numberBetween(1,5),
        ];
    }
}
