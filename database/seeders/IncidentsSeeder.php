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
            'tituloIncidencias'=>"No adapter attached; skipping layout",
            'descripcionIncidencias'=>"A la hora de intentar asociarle un adapter a una vista no se pone",
            'tiempoIncidencia'=>3,
            'idCategoria'=>1,
            'idDepartamento'=>1,
            'idUsuarios'=>1,
            'idEstadoDeIncidencias'=>1,
            'idPrioridad'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
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
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('incidents')->insert([
            'idIncidencias' => 3,
            'tituloIncidencias'=>"Adapter no actualiza la lista",
            'descripcionIncidencias'=>"El observer de la aplicación notifica que hay un cambio en la lista pero el adapter no cambia la lista",
            'tiempoIncidencia'=>20,
            'idCategoria'=>3,
            'idDepartamento'=>3,
            'idUsuarios'=>3,
            'idEstadoDeIncidencias'=>2,
            'idPrioridad'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
