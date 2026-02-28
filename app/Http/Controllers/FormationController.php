<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    // Afficher la liste des formations
    public function index()
    {
        $formations = Formation::all(); // récupère toutes les formations
        return view('formations.index', compact('formations'));
    }

    // Formulaire de création
    public function create()
    {
        return view('formations.create');
    }

    // Enregistrer une nouvelle formation
    public function store(Request $request)
    {
        Formation::create($request->all());
        return redirect()->route('formations.index')->with('success', 'Formation ajoutée avec succès');
    }

    // Afficher une formation
    public function show(Formation $formation)
    {
        return view('formations.show', compact('formation'));
    }

    public function destroy(Formation $formation)
{
    $formation->delete();
    return redirect()->route('formations.index')->with('success', 'Formation supprimée avec succès');
}

}


