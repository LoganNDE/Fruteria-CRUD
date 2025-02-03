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
        Schema::create('frutas', function (Blueprint $table) {
            $table->id(); // Crea una columna id única y autoincremental
            $table->string('nombre'); // Columna string para el nombre
            $table->string('imagen')->nullable(); // Columna string para la imagen
            $table->string('temporada'); // Columna string para la temporada
            $table->integer('precio'); // Columna integer para el precio 
            $table->integer('stock'); // Columna integer para el stock
            $table->timestamps(); // Agrega columnas created_at y updated_at automáticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frutas');
    }
};
