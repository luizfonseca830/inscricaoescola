<?php

use Illuminate\Database\Seeder;

class ModuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('modulo')->insert([
            'descricao' => 'Fundamental'
        ]);

        DB::table('modulo')->insert([
            'descricao' => 'Médio'
        ]);
    }
}
