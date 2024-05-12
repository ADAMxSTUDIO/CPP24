<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'tarif'];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function entraineur()
    {
        return $this->belongsTo(Entraineur::class);
    }
}
