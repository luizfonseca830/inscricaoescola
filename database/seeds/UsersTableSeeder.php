<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'administrador',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2021-01-14 11:38:50',
                'password' => '$2y$10$o2kP2zCu/G0BYapOZ6OE/eCMba3aeqpq0UbL2TN1kI1AQlPZ26ila',
                'remember_token' => 'EMp1QTWePmfowhewx7KxZo7k8HnYNzh10wsBDYpXNKdrClKWOe1kLw6qhlfA',
                'created_at' => '2021-01-14 11:38:50',
                'updated_at' => '2021-01-14 11:38:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Secretaria - Instituto São José',
                'email' => 'secretaria.isj@csmracre.com.br',
                'email_verified_at' => NULL,
                'password' => '$2y$10$k0amQ82LAgwrbeF7w59OYeDvRLDrCYB..K1oYwXKV3iYnmgn6eGZS',
                'remember_token' => 'QG1XfqRw2xWiwfmkescNAt1uWL4okbwJkSXuq2q4tQkLtZLlUMvOdmgbzV06',
                'created_at' => '2021-01-26 06:49:39',
                'updated_at' => '2021-02-18 06:07:44',
            ),
        ));
        
        
    }
}