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
    }
}
