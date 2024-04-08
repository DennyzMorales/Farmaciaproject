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
        Schema::create('comprobante_medicamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comprobante_id');
            $table->unsignedBigInteger('medicamento_id');
            $table->timestamps();

            // Claves 
            $table->foreign('comprobante_id')->references('id')->on('comprobantes')->onDelete('cascade');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobante_medicamento');
    }
};
