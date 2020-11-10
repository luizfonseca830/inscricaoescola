<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('serie')->insert([
            'nivel_serie' => 'Pré-escola'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => 'Ensino Fundamental'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => 'Ensino Médio'
        ]);


    }
}
