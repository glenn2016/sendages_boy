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
        Schema::create('sondages_options', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sondages_id');
            $table->unsignedBigInteger('candidat_id');
            // Ajoutez d'autres colonnes au besoin
            $table->foreign('sondages_id')->references('id')->on('sondages')->onDelete('cascade');
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sondages_options');
    }
};
