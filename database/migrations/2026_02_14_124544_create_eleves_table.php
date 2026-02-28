<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up(): void
{
    Schema::create('eleves', function (Blueprint $table) {
        $table->id();
        $table->string('cin')->unique();
        $table->string('nom_prenom');
        $table->string('nom_prenom_ar')->nullable();
        $table->string('nationalite')->default('Marocaine');
        $table->date('date_naissance');
        $table->string('adresse')->nullable();
        $table->string('residence')->nullable();
        $table->string('telephone')->nullable();
        $table->string('num_permis_conduire');
        $table->string('categorie_permis')->nullable();
        $table->date('date_delivrance_permis')->nullable();
        $table->string('type_activite')->nullable();
        $table->date('date_inscription');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('eleves');
}

};
