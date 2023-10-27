<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IncidentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 1,
            'nombreEstadoDeIncidencias'=>"Nuevo",
            'ordenEstadoDeIncidencias'=> 1
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 2,
            'nombreEstadoDeIncidencias'=>"Pendiente",
            'ordenEstadoDeIncidencias'=> 2
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 3,
            'nombreEstadoDeIncidencias'=>"Abierto",
            'ordenEstadoDeIncidencias'=> 3
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 4,
            'nombreEstadoDeIncidencias'=>"Solucionado",
            'ordenEstadoDeIncidencias'=> 4
        ]);
    }
}
