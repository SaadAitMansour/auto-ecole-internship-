@extends('layouts.app')

@section('title', 'Liste des inscriptions')

@section('content')
<div class="container">
    <h1 class="mb-4">Liste des inscriptions</h1>
    <a href="{{ route('inscriptions.create') }}" class="btn btn-warning mb-3">➕ Nouvelle inscription</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Élève</th>
                <th>Formation</th>
                <th>Date d'inscription</th>
            </tr>
        </thead>
        <tbody>
            @forelse($inscriptions as $inscription)
                <tr>
                    <td>{{ $inscription->id }}</td>
                    <td>{{ $inscription->eleve_nom }}</td>
                    <td>{{ $inscription->formation_nom }}</td>
                    <td>{{ $inscription->date_inscription }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Aucune inscription trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
