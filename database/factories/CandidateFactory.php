<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'    => $this->faker->firstName(),
            'last_name'     => $this->faker->lastName(),
            'email'         => $this->faker->email(),
            'contact_no'    => $this->faker->phoneNumber(),
            'joined_at'     => $this->faker->date('Y-m-d', 'now'),
            'last_active'   => $this->faker->dateTime('now'),
        ];
    }
}
