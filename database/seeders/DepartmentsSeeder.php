<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('departments')->insert([
            'idDepartamento' => 1,
            'nombreDepartamento'=>"Web"
        ]);

        DB::table('departments')->insert([
            'idDepartamento' => 2,
            'nombreDepartamento'=>"Multiplataforma"
        ]);
        DB::table('departments')->insert([
            'idDepartamento' => 3,
            'nombreDepartamento'=>"Redes"
        ]);
    }
}
