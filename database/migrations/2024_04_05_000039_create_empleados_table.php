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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('puesto');
            $table->unsignedBigInteger('codigo_farmacia')->nullable(); // Columna para el código de la farmacia
            $table->timestamps();
        
            // Definición de la clave foránea para el código de la farmacia
            $table->foreign('codigo_farmacia')->references('id')->on('farmacias')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
