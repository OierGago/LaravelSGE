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
            'nombreEstadoDeIncidencias'=>"Abierto",
            'ordenEstadoDeIncidencias'=> 1
        ]);
    }
}
