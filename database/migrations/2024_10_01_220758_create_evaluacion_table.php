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
        Schema::create('evaluacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_postulacion')->index();
            $table->bigInteger('id_tutor')->index();
            $table->string('tipo_tutor');
            $table->timestamp('fecha_evaluacion');
            $table->float('calificacion');
            $table->text('comentarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion');
    }
};
