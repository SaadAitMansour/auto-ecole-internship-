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
    Schema::create('eleve_formation', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('eleve_id');
        $table->unsignedBigInteger('formation_id');
        $table->date('date_inscription');
        $table->timestamps();

        $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('cascade');
        $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
    });
}

public function down(): void
{
    Schema::dropIfExists('eleve_formation');
}
};
