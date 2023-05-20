<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'title' => 'Titanic',
            'description' => 'Um artista pobre e uma jovem rica se conhecem e se apaixonam na fatídica jornada do Titanic, em 1912. Embora esteja noiva do arrogante herdeiro de uma siderúrgica, a jovem desafia sua família e amigos em busca do verdadeiro amor.',
            'director' => 'James Cameron',
            'year' => 1997,
            'rate' => 9.4,
            'genre_id' => 1
        ]);

        DB::table('movies')->insert([
            'title' => 'Veloses e Furiosos 10',
            'description' => 'Dom Toretto e sua família devem lidar com o adversário mais letal que já enfrentaram. Alimentada pela vingança, uma ameaça terrível emerge das sombras do passado para destruir o mundo de Dom e todos que ele ama.',
            'director' => 'Louis Leterrier',
            'year' => 2023,
            'rate' => 9.3,
            'genre_id' => 2
        ]);

        DB::table('movies')->insert([
            'title' => 'Invocação do Mal 3: A Ordem do Demônio',
            'description' => 'Os investigadores paranormais Ed e Lorraine Warren assumem um dos casos mais sensacionais de suas carreiras quando um jovem suspeito de assassinato alega posse demoníaca como defesa.',
            'director' => 'Michael Chaves',
            'year' => 2021,
            'rate' => 7.8,
            'genre_id' => 3
        ]);

        DB::table('movies')->insert([
            'title' => 'Deu a Louca em Hollywood',
            'description' => 'Quatro adultos órfãos vivem uma aventura incrível em filmes de fantasias. Eles visitam um grotesco confeiteiro em uma fábrica de chocolate e entram em um reino mistico, no qual eles devem ajudar um sábio e vigoroso leão a se livrar da terra de uma feiticeira.',
            'director' => 'Jason Friedberg',
            'year' => 2007,
            'rate' => 5.8,
            'genre_id' => 5
        ]);
    }
}
