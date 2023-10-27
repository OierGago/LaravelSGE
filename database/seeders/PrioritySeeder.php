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
            'ordenPrioridad'=> 3,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('priorities')->insert([
            'idPrioridad' => 2,
            'nombrePrioridad'=>"Media",
            'ordenPrioridad'=> 2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('priorities')->insert([
            'idPrioridad' => 3,
            'nombrePrioridad'=>"Alta",
            'ordenPrioridad'=> 1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
