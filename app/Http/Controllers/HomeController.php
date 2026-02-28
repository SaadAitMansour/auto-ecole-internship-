<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Formation;
use App\Models\EleveFormation;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $elevesCount = Eleve::count();
        $formationsCount = Formation::count();
        $inscriptionsCount = EleveFormation::count();

        // Regrouper les inscriptions par mois
        $inscriptionsParMois = EleveFormation::select(
            DB::raw('MONTH(created_at) as mois'),
            DB::raw('COUNT(*) as total')
        )
        ->groupBy('mois')
        ->orderBy('mois')
        ->pluck('total', 'mois');

        return view('home', [
            'elevesCount' => $elevesCount,
            'formationsCount' => $formationsCount,
            'inscriptionsCount' => $inscriptionsCount,
            'inscriptionsParMois' => $inscriptionsParMois,
        ]);
    }
}
