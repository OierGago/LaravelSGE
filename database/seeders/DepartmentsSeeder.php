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
            'nombreDepartamento'=>"Web",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        DB::table('departments')->insert([
            'idDepartamento' => 2,
            'nombreDepartamento'=>"Multiplataforma",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('departments')->insert([
            'idDepartamento' => 3,
            'nombreDepartamento'=>"Redes",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
