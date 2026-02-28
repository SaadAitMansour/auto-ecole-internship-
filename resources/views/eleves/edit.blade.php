@extends('layouts.app')

@section('title', 'Modifier un élève')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Modifier l'élève</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cin" class="form-label">CIN</label>
                        <input type="text" name="cin" id="cin" class="form-control" value="{{ $eleve->cin }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nom_prenom" class="form-label">Nom & Prénom</label>
                        <input type="text" name="nom_prenom" id="nom_prenom" class="form-control" value="{{ $eleve->nom_prenom }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nom_prenom_ar" class="form-label">Nom & Prénom (AR)</label>
                        <input type="text" name="nom_prenom_ar" id="nom_prenom_ar" class="form-control" value="{{ $eleve->nom_prenom_ar }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nationalite" class="form-label">Nationalité</label>
                        <input type="text" name="nationalite" id="nationalite" class="form-control" value="{{ $eleve->nationalite }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="date_naissance" class="form-label">Date de naissance</label>
                        <input type="date" name="date_naissance" id="date_naissance" class="form-control" value="{{ $eleve->date_naissance }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $eleve->adresse }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="residence" class="form-label">Résidence</label>
                        <input type="text" name="residence" id="residence" class="form-control" value="{{ $eleve->residence }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $eleve->telephone }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="num_permis_conduire" class="form-label">Numéro permis de conduire</label>
                        <input type="text" name="num_permis_conduire" id="num_permis_conduire" class="form-control" value="{{ $eleve->num_permis_conduire }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="categorie_permis" class="form-label">Catégorie permis</label>
                        <input type="text" name="categorie_permis" id="categorie_permis" class="form-control" value="{{ $eleve->categorie_permis }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="date_delivrance_permis" class="form-label">Date délivrance permis</label>
                        <input type="date" name="date_delivrance_permis" id="date_delivrance_permis" class="form-control" value="{{ $eleve->date_delivrance_permis }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type_activite" class="form-label">Type d'activité</label>
                        <input type="text" name="type_activite" id="type_activite" class="form-control" value="{{ $eleve->type_activite }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="date_inscription" class="form-label">Date d'inscription</label>
                        <input type="date" name="date_inscription" id="date_inscription" class="form-control" value="{{ $eleve->date_inscription }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection
