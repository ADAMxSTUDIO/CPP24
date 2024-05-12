<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entraineur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'specialite', 'date_embauche', 'salaire'];

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
}
