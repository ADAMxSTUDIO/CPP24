<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'date_naissance', 'adresse', 'email', 'telephone'];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
