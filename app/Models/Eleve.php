<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    // Colonnes modifiables (doivent correspondre aux "name" du formulaire)
    protected $fillable = [
        'cin',
        'nom_prenom',      // correspond à ton champ Nom & Prénom (FR)
        'nom_prenom_ar',      // correspond à ton champ Nom & Prénom (AR)
        'nationalite',
        'date_naissance',
        'adresse',
        'residence',
        'telephone',
        'num_permis_conduire',         // harmonisé avec ton formulaire
        'categorie_permis',
        'date_delivrance_permis',
        'type_activite',
        'date_inscription',
    ];

    // Relation avec les formations
    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'eleve_formation', 'eleve_id', 'formation_id')
                    ->withPivot('date_inscription')
                    ->withTimestamps();
    }
}
