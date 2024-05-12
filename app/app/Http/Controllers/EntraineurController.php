<?php

namespace App\Http\Controllers;

use App\Models\Entraineur;
use Illuminate\Http\Request;

class EntraineurController extends Controller
{
    public function index()
    {
        $entraineurs = Entraineur::all();
        return view('entraineurs.index', compact('entraineurs'));
    }

    public function create()
    {
        return view('entraineurs.create');
    }

    public function store(Request $request)
    {
        Entraineur::create($request->all());
        return redirect()->route('entraineurs.index');
    }

    public function edit(Entraineur $entraineur)
    {
        return view('entraineurs.edit', compact('entraineur'));
    }

    public function update(Request $request, Entraineur $entraineur)
    {
        $entraineur->update($request->all());
        return redirect()->route('entraineurs.index');
    }

    public function destroy(Entraineur $entraineur)
    {
        $entraineur->delete();
        return redirect()->route('entraineurs.index');
    }
}
