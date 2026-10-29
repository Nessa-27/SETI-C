<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('numero_dossier')->unique();
            $table->foreignId('proprietaire_id')->constrained('proprietaires')->onDelete('cascade');
            $table->foreignId('parcelle_id')->constrained('parcelles')->onDelete('cascade');
            $table->enum('type_procedure', ['demande_cadastre', 'avis_bornage', 'convocation_bornage']);
            $table->date('date_demande');
            $table->enum('statut', ['en_cours', 'valide', 'imprime'])->default('en_cours');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('dossiers'); }
};