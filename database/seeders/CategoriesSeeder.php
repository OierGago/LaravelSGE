<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'idCategoria' => 1,
            'nombreCategoria'=>"Desarrollo"
        ]);
        DB::table('categories')->insert([
            'idCategoria' => 2,
            'nombreCategoria'=>"Mantenimiento"
        ]);
        DB::table('categories')->insert([
            'idCategoria' => 3,
            'nombreCategoria'=>"Investigación"
        ]);
    }
}
