<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'nome' => 'Administrador',
            'email' => 'admin@email.com',
            'cpf' => '12345678910',
            'password' => Hash::make('123'),
        ]);
    }
}
