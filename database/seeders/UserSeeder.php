<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'administrador@riobranco.ac.gov.br',
            'email_verified_at' => now(),
            'password' => Hash::make('master@2378'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
