@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Détails de la formation</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h4>{{ $formation->programme }}</h4>
            <p><strong>Centre :</strong> {{ $formation->centre_formation }}</p>
            <p><strong>Date début :</strong> {{ $formation->date_debut }}</p>
            <p><strong>Date fin :</strong> {{ $formation->date_fin }}</p>
            <p><strong>Nombre de places :</strong> {{ $formation->nombre_places }}</p>
        </div>
    </div>

    <h3>Élèves inscrits</h3>
    @if($formation->eleves->isEmpty())
        <p>Aucun élève inscrit pour le moment.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>CIN</th>
                    <th>Nom & Prénom</th>
                    <th>Date d'inscription</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formation->eleves as $eleve)
                    <tr>
                        <td>{{ $eleve->cin }}</td>
                        <td>{{ $eleve->nom_prenom }}</td>
                        <td>{{ $eleve->pivot->date_inscription }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
