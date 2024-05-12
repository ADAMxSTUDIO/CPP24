<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(Request $request)
    {
        // Check if the request is POST and if a specific membre ID is provided
        if ($request->isMethod('post') && $request->filled('filter')) {
            $membre_id = $request->filter;
            $membre = Membre::findOrFail($membre_id);
            return view('membres.index', compact('membre'));
        } else {
            // Handle GET request to retrieve all membres
            $membres = Membre::orderBy('created_at')->paginate(5);
            return view('membres.index', compact('membres'));
        }
    }

    public function create()
    {
        return view('membres.create');
    }

    public function store(Request $request)
    {
        Membre::create($request->all());
        return redirect()->route('membres.index');
    }

    public function edit(Membre $membre)
    {
        return view('membres.edit', compact('membre'));
    }

    public function update(Request $request, Membre $membre)
    {
        $membre->update($request->all());
        return redirect()->route('membres.index');
    }

    public function destroy(Membre $membre)
    {
        $membre->delete();
        return redirect()->route('membres.index');
    }
}
