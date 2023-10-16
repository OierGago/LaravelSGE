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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id('idIncidencias');
            $table->string('tituloIncidencias');
            $table->string('descripcionIncidencias');
            $table->integer('tiempoIncidencia');
            $table->foreignId('idCategoria')->references('idCategoria')->on('categories');
            $table->foreignId('idDepartamento')->references('idDepartamento')->on('departments');
            $table->foreignId('idUsuarios')->references('idUsuarios')->on('users');
            $table->foreignId('idEstadoDeIncidencias')->references('idEstadoDeIncidencias')->on('incident_statuses');
            $table->foreignId('idPrioridad')->references('idPrioridad')->on('priorities');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
