<?php

namespace Database\Factories;

use App\Models\Activite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ActiviteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'description' => $this->faker->sentence,
            'tarif' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
