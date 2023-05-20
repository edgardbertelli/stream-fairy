<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            'name' => 'romance'
        ]);

        DB::table('genres')->insert([
            'name' => 'aventura'
        ]);

        DB::table('genres')->insert([
            'name' => 'terror'
        ]);

        DB::table('genres')->insert([
            'name' => 'documentário'
        ]);

        DB::table('genres')->insert([
            'name' => 'comédia'
        ]);
    }
}
