@extends('layouts.app')

@section('title', 'Nouvelle inscription')

@section('content')
<div class="container">
    <h1 class="mb-4">Nouvelle inscription</h1>

    <form action="{{ route('inscriptions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="eleve_id" class="form-label">Élève</label>
            <select name="eleve_id" id="eleve_id" class="form-select" required>
                @foreach($eleves as $eleve)
                    <option value="{{ $eleve->id }}">{{ $eleve->nom_prenom }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="formation_id" class="form-label">Formation</label>
            <select name="formation_id" id="formation_id" class="form-select" required>
                @foreach($formations as $formation)
                    <option value="{{ $formation->id }}">{{ $formation->programme }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date_inscription" class="form-label">Date d'inscription</label>
            <input type="date" name="date_inscription" id="date_inscription" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-warning">Inscrire</button>
    </form>
</div>
@endsection
