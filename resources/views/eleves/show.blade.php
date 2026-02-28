@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Détails de l'élève</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h4>{{ $eleve->nom_prenom }} ({{ $eleve->cin }})</h4>
            <p><strong>Nationalité :</strong> {{ $eleve->nationalite }}</p>
            <p><strong>Date de naissance :</strong> {{ $eleve->date_naissance }}</p>
            <p><strong>Téléphone :</strong> {{ $eleve->telephone }}</p>
            <p><strong>Adresse :</strong> {{ $eleve->adresse }}</p>
        </div>
    </div>

    <h3>Formations suivies</h3>
    @if($eleve->formations->isEmpty())
        <p>Aucune formation suivie pour le moment.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Programme</th>
                    <th>Centre</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    <th>Date inscription</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eleve->formations as $formation)
                    <tr>
                        <td>{{ $formation->programme }}</td>
                        <td>{{ $formation->centre_formation }}</td>
                        <td>{{ $formation->date_debut }}</td>
                        <td>{{ $formation->date_fin }}</td>
                        <td>{{ $formation->pivot->date_inscription }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
