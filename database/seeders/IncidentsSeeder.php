<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IncidentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incidents')->insert([
            'idIncidencias' => 1,
            'tituloIncidencias'=>"Incidencia1",
            'descripcionIncidencias'=>"Esto es la primera incidencia",
            'tiempoIncidencia'=>3,
            'idCategoria'=>1,
            'idDepartamento'=>1,
            'idUsuarios'=>1,
            'idEstadoDeIncidencias'=>1,
            'idPrioridad'=>1,
        ]);
        DB::table('incidents')->insert([
            'idIncidencias' => 2,
            'tituloIncidencias'=>"Incidencia OutOfBounds",
            'descripcionIncidencias'=>"Error out of Bounds Java",
            'tiempoIncidencia'=>6,
            'idCategoria'=>2,
            'idDepartamento'=>2,
            'idUsuarios'=>2,
            'idEstadoDeIncidencias'=>1,
            'idPrioridad'=>1,
        ]);
        DB::table('incidents')->insert([
            'idIncidencias' => 3,
            'tituloIncidencias'=>"Incidencia Bucle inverso",
            'descripcionIncidencias'=>"Al hacer un bucle for pasa por todos los números negativos antes de pasar a los positivos de nuevo",
            'tiempoIncidencia'=>20,
            'idCategoria'=>3,
            'idDepartamento'=>3,
            'idUsuarios'=>3,
            'idEstadoDeIncidencias'=>2,
            'idPrioridad'=>3,
        ]);
    }
}
