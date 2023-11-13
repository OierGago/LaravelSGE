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
            $table->unsignedBigInteger('idCategoria')->nullable();
            $table->foreign('idCategoria')->references('idCategoria')->on('categories')->onDelete('set null');
            $table->foreignId('idDepartamento')->references('idDepartamento')->on('departments')->onDelete('cascade');
            $table->foreignId('idUsuarios')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('idEstadoDeIncidencias')->nullable();
            $table->foreign('idEstadoDeIncidencias')->references('idEstadoDeIncidencias')->on('incident_statuses')->onDelete('set null');
            $table->unsignedBigInteger('idPrioridad')->nullable();

            $table->foreign('idPrioridad')->references('idPrioridad')->on('priorities')->onDelete('set null');
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
        $table->dropForeign(['idCategoria']);
    }
};
