@extends('layouts.app')

@section('title', 'Créer une formation')

@section('content')
<div class="container">
    <h1 class="mb-4">Créer une formation</h1>

    <form action="{{ route('formations.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="programme" class="form-label">Programme</label>
            <input type="text" name="programme" id="programme" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="centre_formation" class="form-label">Centre de formation</label>
            <input type="text" name="centre_formation" id="centre_formation" class="form-control">
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date_debut" class="form-label">Date début</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="heure_debut" class="form-label">Heure début</label>
                <input type="time" name="heure_debut" id="heure_debut" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date_fin" class="form-label">Date fin</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="heure_fin" class="form-label">Heure fin</label>
                <input type="time" name="heure_fin" id="heure_fin" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="duree" class="form-label">Durée</label>
                <input type="number" name="duree" id="duree" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="unite_duree" class="form-label">Unité durée</label>
                <select name="unite_duree" id="unite_duree" class="form-select">
                    <option value="heures">Heures</option>
                    <option value="jours">Jours</option>
                    <option value="semaines">Semaines</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label for="nombre_places" class="form-label">Nombre de places</label>
            <input type="number" name="nombre_places" id="nombre_places" class="form-control">
        </div>

        <div class="mb-3">
            <label for="type_formation" class="form-label">Type de formation</label>
            <input type="text" name="type_formation" id="type_formation" class="form-control">
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="formateur_theorique_id" class="form-label">Formateur théorique (ID)</label>
                <input type="number" name="formateur_theorique_id" id="formateur_theorique_id" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="formateur_pratique_id" class="form-label">Formateur pratique (ID)</label>
                <input type="number" name="formateur_pratique_id" id="formateur_pratique_id" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="date_debut_inscriptions" class="form-label">Date début inscriptions</label>
                <input type="date" name="date_debut_inscriptions" id="date_debut_inscriptions" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="date_cloture_inscriptions" class="form-label">Date clôture inscriptions</label>
                <input type="date" name="date_cloture_inscriptions" id="date_cloture_inscriptions" class="form-control">
            </div>
        </div>

        <!-- created_at et updated_at sont gérés automatiquement par Laravel -->

        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
@endsection
