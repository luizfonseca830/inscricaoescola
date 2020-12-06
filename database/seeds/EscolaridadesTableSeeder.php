<?php

use Illuminate\Database\Seeder;

class EscolaridadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '1° ano do Ensino Fundamental I'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '2° ano do Ensino Fundamental I'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '3° ano do Ensino Fundamental I'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '4° ano do Ensino Fundamental I'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '5° ano do Ensino Fundamental I'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '6° ano do Ensino Fundamental II'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '7° ano do Ensino Fundamental II'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '8° ano do Ensino Fundamental II'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '9° ano do Ensino Fundamental II'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '1° ano do Ensino Médio'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '2° ano do Ensino Médio'
        ]);

        DB::table('escolaridade')->insert([
            'nivel_escolaridade' => '3° ano do Ensino Médio'
        ]);
    }
}
