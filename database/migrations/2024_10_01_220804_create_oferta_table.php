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
        Schema::create('oferta', function (Blueprint $table) {
            // Elimina -> nullable() de la definición de la clave primaria
            $table->id(); // Esto crea un BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY por defecto
            $table->bigInteger('id_Empresa')->index();
            $table->string('titulo');
            $table->text('descripcion');
            $table->text('requisitos');
            $table->bigInteger('duracion');
            $table->bigInteger('remuneracion');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->longText('habilidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oferta');
    }
};
