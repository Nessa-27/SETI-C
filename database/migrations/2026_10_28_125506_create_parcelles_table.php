<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('parcelles', function (Blueprint $table) {
            $table->id();
            $table->string('commune');
            $table->string('arrondissement');
            $table->string('quartier_village');
            $table->string('nom_lotissement')->nullable();
            $table->string('ilot')->nullable();
            $table->string('numero_parcelle');
            $table->string('references_el')->nullable();
            $table->string('references_rfu')->nullable();
            $table->string('code_bloc')->nullable();
            $table->decimal('surface_m2', 10, 2);
            $table->boolean('a_titre_foncier')->default(false);
            $table->string('numero_tf')->nullable();
            $table->string('limite_nord')->nullable();
            $table->string('limite_est')->nullable();
            $table->string('limite_sud')->nullable();
            $table->string('limite_ouest')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('parcelles'); }
};