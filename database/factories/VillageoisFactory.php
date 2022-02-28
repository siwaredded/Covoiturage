<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VillageoisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'entreprise_id' => rand(1,3)
            //
        ];
    }
}
