<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serie')->insert([
            'nivel_serie' => '1° ano do ensino fundamental I'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '2° ano do ensino fundamental I'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '3°ano do ensino fundamental I'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '4° ano do ensino fundamental I'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '5° ano do ensino fundamental I'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '6° ano do ensino fundamental II'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '7° ano do ensino fundamental II'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '8°ano do ensino fundamental II'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '9° ano do ensino fundamental II'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '1° ANO - ENSINO MÉDIO'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '2° ANO - ENSINO MÉDIO'
        ]);

        DB::table('serie')->insert([
            'nivel_serie' => '3° ANO - ENSINO MÉDIO'
        ]);

    }
}
