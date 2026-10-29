<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('bornages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_id')->constrained('dossiers')->onDelete('cascade');
            $table->date('date_bornage');
            $table->time('heure_bornage')->nullable();
            $table->string('lieu_rdv');
            $table->string('geometre_nom')->default('Ephrem C. Jean-Pierre DOSSOU');
            $table->string('cabinet_nom')->default('SETI-C BTP');
            $table->string('lieu_etablissement')->default('Calavi');
            $table->date('date_etablissement');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('bornages'); }
};