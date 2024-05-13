<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PastEventsController extends Controller
{
    public function index()
    {
        // Get current date
        $currentDate = Carbon::now()->toDateString();
        
        // Get reservations and inscriptions that have passed the current date
        $passedReservations = Reservation::whereDate('date_reservation', '<', $currentDate)->get();
        $passedInscriptions = Inscription::whereDate('date_inscription', '<', $currentDate)->get();
        
        // Return view with passed reservations and inscriptions
        return view('index', compact('passedReservations', 'passedInscriptions'));
    }
}
