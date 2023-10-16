<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'idComentario' => 1,
            'textoComentario'=>"Este es un buen aporte",
            'tiempoUtilizado' => 1,
            'idIncidencias' => 1,
        ]);
    }
}
