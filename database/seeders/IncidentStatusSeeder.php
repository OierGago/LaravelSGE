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
            'ordenEstadoDeIncidencias'=> 1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 2,
            'nombreEstadoDeIncidencias'=>"Pendiente",
            'ordenEstadoDeIncidencias'=> 2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 3,
            'nombreEstadoDeIncidencias'=>"Abierto",
            'ordenEstadoDeIncidencias'=> 3,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 4,
            'nombreEstadoDeIncidencias'=>"Solucionado",
            'ordenEstadoDeIncidencias'=> 4,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
