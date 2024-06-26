<?php

namespace Database\Factories;

use App\Models\Activite;
use App\Models\Entraineur;
use App\Models\Reservation;
use App\Models\Membre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'membre_id' => Membre::factory(),
            'entraineur_id' => Entraineur::factory(),
            'activite_id' => Activite::factory(),
            'date_reservation' => $this->faker->date,
            'details' => $this->faker->sentence,
        ];
    }
}
