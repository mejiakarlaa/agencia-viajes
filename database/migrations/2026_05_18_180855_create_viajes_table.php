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
    Schema::create('viajes', function (Blueprint $table) {
        $table->id();

        $table->foreignId('destino_id')->constrained();
        $table->foreignId('hospedaje_id')->constrained();
        $table->foreignId('transporte_id')->constrained();

        $table->string('nombre');

        $table->date('fecha_inicio');
        $table->date('fecha_fin');

        $table->decimal('precio_total', 10, 2);

        $table->integer('capacidad');

        $table->text('itinerario')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
