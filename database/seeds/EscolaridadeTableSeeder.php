<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EscolaridadeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('escolaridade')->delete();

        \DB::table('escolaridade')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '1° ano do Ensino Fundamental I',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '2° ano do Ensino Fundamental I',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '3° ano do Ensino Fundamental I',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '4° ano do Ensino Fundamental I',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '5° ano do Ensino Fundamental I',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '6° ano do Ensino Fundamental II',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '7° ano do Ensino Fundamental II',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 8,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '8° ano do Ensino Fundamental II',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 9,
                    'modulo_id' => 1,
                    'nivel_escolaridade' => '9° ano do Ensino Fundamental II',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));


    }
}
