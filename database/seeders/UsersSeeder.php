<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nombreUsuarios' => "Markel",
            'mailUsuarios'=>"ddd@gmail.com",
            'passUsuarios'=>"12345678",
            'idDepartamento'=> 1
        ]);
        DB::table('users')->insert([
            'nombreUsuarios' => "Oier",
            'mailUsuarios'=>"rrr@gmail.com",
            'passUsuarios'=>"12345678",
            'idDepartamento'=>2
        ]);
    }
}
