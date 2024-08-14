<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Allan',
            'lastName'  => 'Silva',
            'email'     => 'allan.ssilva@sp.senac.br',
            'password'  => bcrypt('12345678'),
        ]);
    }
}//fim da classe
