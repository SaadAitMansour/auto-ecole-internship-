<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Formation;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
    // Afficher la liste des inscriptions
    public function index()
    {
        $inscriptions = DB::table('eleve_formation')
            ->join('eleves', 'eleve_formation.eleve_id', '=', 'eleves.id')
            ->join('formations', 'eleve_formation.formation_id', '=', 'formations.id')
            ->select(
                'eleve_formation.id',
                'eleves.nom_prenom as eleve_nom',
                'formations.programme as formation_nom',
                'eleve_formation.date_inscription'
            )
            ->get();

        return view('inscriptions.index', compact('inscriptions'));
    }

    // Formulaire de création
    public function create()
    {
        $eleves = Eleve::all();
        $formations = Formation::all();
        return view('inscriptions.create', compact('eleves', 'formations'));
    }

    // Enregistrer une nouvelle inscription
    public function store(Request $request)
    {
        DB::table('eleve_formation')->insert([
            'eleve_id' => $request->eleve_id,
            'formation_id' => $request->formation_id,
            'date_inscription' => $request->date_inscription,
        ]);

        return redirect()->route('inscriptions.index')->with('success', 'Inscription ajoutée avec succès');
    }

    public function destroy($id)
{
    DB::table('eleve_formation')->where('id', $id)->delete();
    return redirect()->route('inscriptions.index')->with('success', 'Inscription supprimée avec succès');
}

}
