<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function index()
    {
        $activites = Activite::all();
        return view('activites.index', compact('activites'));
    }

    public function create()
    {
        return view('activites.create');
    }

    public function store(Request $request)
    {
        Activite::create($request->all());
        return redirect()->route('activites.index');
    }

    public function show(Activite $activite)
    {
        return view('activites.show', compact('activite'));
    }

    public function edit(Activite $activite)
    {
        return view('activites.edit', compact('activite'));
    }

    public function update(Request $request, Activite $activite)
    {
        $activite->update($request->all());
        return redirect()->route('activites.index');
    }

    public function destroy(Activite $activite)
    {
        $activite->delete();
        return redirect()->route('activites.index');
    }
}
