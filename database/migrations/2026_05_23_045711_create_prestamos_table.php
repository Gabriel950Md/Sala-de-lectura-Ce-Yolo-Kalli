<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_libro');
            $table->string('a_quien');
            $table->string('telefono');
            $table->string('id_libro');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->string('estatus')->default('prestado');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};