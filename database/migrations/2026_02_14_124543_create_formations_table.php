<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('programme');
            $table->string('centre_formation');
            $table->date('date_debut');
            $table->time('heure_debut')->nullable(); // nullable si pas obligatoire
            $table->date('date_fin');
            $table->time('heure_fin')->nullable();   // nullable si pas obligatoire
            $table->integer('duree')->nullable();    // nullable ou default
            $table->string('unite_duree')->nullable(); // ex: "jours", "heures"
            $table->integer('nombre_places')->default(0);
            $table->string('type_formation')->nullable();
            $table->unsignedBigInteger('formateur_theorique_id')->nullable();
            $table->unsignedBigInteger('formateur_pratique_id')->nullable();
            $table->date('date_debut_inscriptions')->nullable();
            $table->date('date_cloture_inscriptions')->nullable();
            $table->timestamps();

            // Relations éventuelles avec formateurs
            // $table->foreign('formateur_theorique_id')->references('id')->on('formateurs')->onDelete('set null');
            // $table->foreign('formateur_pratique_id')->references('id')->on('formateurs')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
