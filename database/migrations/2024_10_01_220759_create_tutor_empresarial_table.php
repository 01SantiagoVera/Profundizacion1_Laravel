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
        Schema::create('tutor_empresarial', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_empresa')->index();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cargo');
            $table->string('email');
            $table->bigInteger('telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutor_empresarial');
    }
};
