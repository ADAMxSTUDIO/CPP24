<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Inscription;
use App\Models\Membre;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        $inscriptions = Inscription::all();
        return view('inscriptions.index', compact('inscriptions'));
    }

    public function create()
    {
        $membres = Membre::all();
        $activites = Activite::all();
        return view('inscriptions.create', compact('membres', 'activites'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'membre_id' => 'required|exists:membres,id',
            'activite_id' => 'required|exists:activites,id',
            'date_inscription' => 'required|date',
        ]);

        // Create the inscription record using the validated data
        Inscription::create($validatedData);

        return redirect()->route('inscriptions.index');
    }


    public function show(Inscription $inscription)
    {
        return view('inscriptions.show', compact('inscription'));
    }

    public function edit(Inscription $inscription)
    {
        $membres = Membre::all();
        $activites = Activite::all();
        return view('inscriptions.edit', compact('inscription', 'membres', 'activites'));
    }

    public function update(Request $request, Inscription $inscription)
    {
        $inscription->update($request->all());
        return redirect()->route('inscriptions.index');
    }

    public function destroy(Inscription $inscription)
    {
        $inscription->delete();
        return redirect()->route('inscriptions.index');
    }
}
