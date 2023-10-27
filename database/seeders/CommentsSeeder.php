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
        DB::table('comments')->insert([
            'idComentario' => 1,
            'textoComentario'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'tiempoUtilizado' => 1,
            'idUsuarios' =>1,
            'idIncidencias' => 1,
        ]);
        DB::table('comments')->insert([
            'idComentario' => 2,
            'textoComentario'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'tiempoUtilizado' => 10,
            'idUsuarios' => 2,
            'idIncidencias' => 2,
        ]);
        DB::table('comments')->insert([
            'idComentario' => 3,
            'textoComentario'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            'tiempoUtilizado' => 6,
            'idUsuarios' => 3,
            'idIncidencias' => 3,
        ]);
    }
}
