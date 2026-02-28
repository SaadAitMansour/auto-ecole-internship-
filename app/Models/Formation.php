<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'programme', 'centre_formation', 'date_debut', 'heure_debut',
        'date_fin', 'heure_fin', 'duree', 'unite_duree',
        'nombre_places', 'type_formation',
        'formateur_theorique_id', 'formateur_pratique_id',
        'date_debut_inscriptions', 'date_cloture_inscriptions'
    ];

    public function eleves()
    {
        return $this->belongsToMany(Eleve::class, 'eleve_formation')
                    ->withPivot('date_inscription')
                    ->withTimestamps();
    }
}
