<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('priorities')->insert([
            'idPrioridad' => 1,
            'nombrePrioridad'=>"Baja",
            'ordenPrioridad'=> 3
        ]);
        DB::table('priorities')->insert([
            'idPrioridad' => 2,
            'nombrePrioridad'=>"Media",
            'ordenPrioridad'=> 2
        ]);
        DB::table('priorities')->insert([
            'idPrioridad' => 3,
            'nombrePrioridad'=>"Alta",
            'ordenPrioridad'=> 1
        ]);
    }
}
