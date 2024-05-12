<?php

namespace Database\Factories;

use App\Models\Inscription;
use App\Models\Membre;
use App\Models\Activite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class InscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'membre_id' => Membre::factory(),
            'activite_id' => Activite::factory(),
            'date_inscription' => $this->faker->date,
        ];
    }
}
