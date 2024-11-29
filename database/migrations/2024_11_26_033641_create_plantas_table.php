<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('plantas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->date('fecha_ingreso');
            $table->integer('importe');
            $table->boolean('activo');
            $table->string('email');
            $table->unsignedBigInteger('producto_id'); // Declaración del campo para la relación
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade'); // Relación foránea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantas');
    }
};
