<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'     => 'Edgard Bertelli',
            'email'    => 'bertelliedgard@gmail.com',
            'password' => Hash::make('avidaeboa123'),
            'admin'    => true
        ]);

        DB::table('users')->insert([
            'name'     => 'João da Silva',
            'email'    => 'joaodasilva@gmail.com',
            'password' => Hash::make('avidaeboa123'),
            'admin'    => false
        ]);
    }
}
