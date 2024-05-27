<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Massas',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Sopas',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Carne',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Aves',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Sobremesas',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Peixes',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Lanches',
        ]);
    }
}
