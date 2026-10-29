<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->string('npi')->unique();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('profession')->nullable();
            $table->string('domicile');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('proprietaires'); }
};