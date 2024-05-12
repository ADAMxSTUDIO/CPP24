<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Membre;
use App\Models\Entraineur;
use App\Models\Activite;
use App\Models\Inscription;
use App\Models\Reservation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();

        // Seed the database with fake data using factories
        Membre::factory(10)->create();
        Entraineur::factory(5)->create();
        Activite::factory(10)->create();
        Inscription::factory(20)->create();
        Reservation::factory(15)->create();
    }
}
