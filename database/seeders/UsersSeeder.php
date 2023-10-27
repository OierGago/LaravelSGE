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
            'name' => "Markel",
            'email'=>"ddd@gmail.com",
            'password'=>"12345678",
            'idDepartamento'=> 1
        ]);
        DB::table('users')->insert([
            'name' => "Oier",
            'email'=>"rrr@gmail.com",
            'password'=>"12345678",
            'idDepartamento'=>2
        ]);
        DB::table('users')->insert([
            'name' => "Juan",
            'email'=>"juan@juan.juan",
            'password'=>"12345678",
            'idDepartamento'=>2
        ]);
    }
}
