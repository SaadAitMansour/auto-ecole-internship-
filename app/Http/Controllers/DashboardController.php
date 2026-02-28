<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Formation;
use App\Models\Inscription;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $elevesCount = Eleve::count();
        $formationsCount = Formation::count();
        $inscriptionsCount = \DB::table('eleve_formation')->count();

        // Regrouper inscriptions par mois

        $inscriptionsByMonth = DB::table('eleve_formation')
        ->select(DB::raw('MONTH(date_inscription) as month'), DB::raw('COUNT(*) as total')) ->groupBy('month')
        ->groupBy('month')
        ->orderBy('month') 
        ->get();

        return view('dashboard', compact('elevesCount', 'formationsCount', 'inscriptionsCount', 'inscriptionsByMonth')); }
    }

