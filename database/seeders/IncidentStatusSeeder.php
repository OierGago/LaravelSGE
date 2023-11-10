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
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 2,
            'nombreEstadoDeIncidencias'=>"Pendiente",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 3,
            'nombreEstadoDeIncidencias'=>"Abierto",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('incident_statuses')->insert([
            'idEstadoDeIncidencias' => 4,
            'nombreEstadoDeIncidencias'=>"Solucionado",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
