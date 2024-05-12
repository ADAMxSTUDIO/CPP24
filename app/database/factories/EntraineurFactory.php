<?php

namespace Database\Factories;

use App\Models\Entraineur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class EntraineurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entraineur::class;

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
            'specialite' => $this->faker->jobTitle,
            'date_embauche' => $this->faker->date,
            'salaire' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }
}
