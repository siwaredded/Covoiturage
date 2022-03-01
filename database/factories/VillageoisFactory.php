<?php

namespace Database\Factories;

use App\Models\villageois;
use Illuminate\Database\Eloquent\Factories\Factory;

class VillageoisFactory extends Factory
      
{ 
    /**
     * the name pf the factory's corresponding model.
     *    @var string
     */  

     

         protected $model = villageois::class;

    /** 
     * Define the model's default state.
     * 
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
           
        ];
    }
}
