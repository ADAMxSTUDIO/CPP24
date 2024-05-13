<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['membre_id', 'entraineur_id', 'activite_id', 'date_reservation', 'details'];

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }
    public function entraineur()
    {
        return $this->belongsTo(Entraineur::class);
    }
    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }
}
