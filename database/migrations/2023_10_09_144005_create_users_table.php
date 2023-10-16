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
        Schema::create('users', function (Blueprint $table) {
            $table->id('idUsuarios');
            $table->string('nombreUsuarios');
            $table->string('mailUsuarios')->unique();
            $table->string('passUsuarios');
            //$table->id('idDepartamento')->unsigned();
            $table->foreignId('idDepartamento')->references('idDepartamento')->on('departments');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
