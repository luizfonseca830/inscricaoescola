<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('26061986'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
