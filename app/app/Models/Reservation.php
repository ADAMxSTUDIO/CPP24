<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['membre_id', 'date_reservation', 'details'];

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }
}
