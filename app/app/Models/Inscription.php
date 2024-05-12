<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = ['membre_id', 'activite_id', 'date_inscription'];

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }
}
