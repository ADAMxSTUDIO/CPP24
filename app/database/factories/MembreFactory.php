<?php

namespace Database\Factories;

use App\Models\Membre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class MembreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Membre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->date,
            'adresse' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber,
        ];
    }
}