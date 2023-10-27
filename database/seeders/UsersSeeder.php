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
            'password'=>bcrypt('12345678'),
            'idDepartamento'=> 1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('users')->insert([
            'name' => "Oier",
            'email'=>"rrr@gmail.com",
            'password'=>bcrypt("12345678"),
            'idDepartamento'=>2,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('users')->insert([
            'name' => "Juan",
            'email'=>"juan@gmail.com",
            'password'=>bcrypt("12345678"),
            'idDepartamento'=>3,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('users')->insert([
            'name' => "Elorrieta",
            'email'=>"elorrieta@elorrieta.com",
            'password'=>bcrypt("12345678"),
            'idDepartamento'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
