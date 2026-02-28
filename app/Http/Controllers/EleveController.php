<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    public function create()
    {
        return view('eleves.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'cin' => 'required|string|max:20',
        'nom_prenom' => 'required|string|max:255',
        'nom_prenom_ar' => 'nullable|string|max:255',
        'nationalite' => 'nullable|string|max:100',
        'date_naissance' => 'nullable|date',
        'adresse' => 'nullable|string|max:255',
        'residence' => 'nullable|string|max:255',
        'telephone' => 'nullable|string|max:20',
        'num_permis_conduire' => 'required|string|max:50', // obligatoire
        'categorie_permis' => 'nullable|string|max:50',
        'date_delivrance_permis' => 'nullable|date',
        'type_activite' => 'nullable|string|max:100',
        'date_inscription' => 'nullable|date',
    ], [
        'num_permis_conduire.required' => 'Le numéro de permis de conduire est obligatoire.',
    ]);

    Eleve::create($request->all());

    return redirect()->route('eleves.index')->with('success', 'Élève ajouté avec succès.');
}



   public function show($id)
{
    $eleve = Eleve::findOrFail($id);
    return view('eleves.show', compact('eleve'));
}


  public function destroy($id)
{
    $eleve = Eleve::findOrFail($id);
    $eleve->delete();

    return redirect()->route('eleves.index')->with('success', 'Élève supprimé avec succès.');
}

public function edit($id)
{
    $eleve = Eleve::findOrFail($id);
    return view('eleves.edit', compact('eleve'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'cin' => 'required|string|max:20',
        'nom_prenom' => 'required|string|max:255',   // correspond à ta colonne en base
        'nom_prenom_ar' => 'nullable|string|max:255',
        'nationalite' => 'nullable|string|max:100',
        'date_naissance' => 'nullable|date',
        'adresse' => 'nullable|string|max:255',
        'residence' => 'nullable|string|max:255',
        'telephone' => 'nullable|string|max:20',
        'num_permis_conduire' => 'nullable|string|max:50', // correspond à ta colonne en base
        'categorie_permis' => 'nullable|string|max:50',
        'date_delivrance_permis' => 'nullable|date',
        'type_activite' => 'nullable|string|max:100',
        'date_inscription' => 'nullable|date',
    ]);

    $eleve = Eleve::findOrFail($id);
    $eleve->update($request->all());

    return redirect()->route('eleves.index')->with('success', 'Élève mis à jour avec succès.');
}



}
