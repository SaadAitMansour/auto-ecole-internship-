@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Bienvenue sur Auto École</h1>

    <h2>Liste des élèves</h2>
    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th>CIN</th>
                <th>Nom & Prénom</th>
                <th>Date de naissance</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eleves as $eleve)
                <tr>
                    <td>{{ $eleve->cin }}</td>
                    <td>{{ $eleve->nom_prenom }}</td>
                    <td>{{ $eleve->date_naissance }}</td>
                    <td>{{ $eleve->telephone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Liste des formations</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Programme</th>
                <th>Centre</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Places</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formations as $formation)
                <tr>
                    <td>{{ $formation->programme }}</td>
                    <td>{{ $formation->centre_formation }}</td>
                    <td>{{ $formation->date_debut }}</td>
                    <td>{{ $formation->date_fin }}</td>
                    <td>{{ $formation->nombre_places }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
