<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Entraineur;
use App\Models\Membre;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $membres = Membre::all();
        $entraineurs = Entraineur::all();
        $activites = Activite::all();
        return view('reservations.create', compact('membres', 'entraineurs', 'activites'));
    }

    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->membre_id = $request->membre_id;
        $reservation->entraineur_id = $request->entraineur_id;
        $reservation->activite_id = $request->activite_id;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->details = $request->details;
        $reservation->save();
        return redirect()->route('reservations.index');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $membres = Membre::all();
        $entraineurs = Entraineur::all();
        $activites = Activite::all();
        return view('reservations.edit', compact('reservation', 'activites', 'membres', 'entraineurs'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update([
            'membre_id' => $request->membre_id,
            'entraineur_id' => $request->entraineur_id,
            'activite_id' => $request->activite_id,
            'date_reservation' => $request->date_reservation,
            'details' => $request->details
        ]);
        return redirect()->route('reservations.index');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
