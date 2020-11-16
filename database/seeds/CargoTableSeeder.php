<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cargos')->insert([
            'escolaridade_id' => '1',
            'cargo' => 'Auxiliar de Topografia'
        ]);
        DB::table('cargos')->insert([
            'escolaridade_id' => '1',
            'cargo' => 'Encarregado de Campo'
        ]);

        DB::table('cargos')->insert([
            'escolaridade_id' => '2',
            'cargo' => 'Técnico em Agrimensura ou equivalente'
        ]);
        DB::table('cargos')->insert([
            'escolaridade_id' => '2',
            'cargo' => 'Topógrafo Prático'
        ]);

        DB::table('cargos')->insert([
            'escolaridade_id' => '3',
            'cargo' => 'Arquiteto e Urbanista'
        ]);
        DB::table('cargos')->insert([
            'escolaridade_id' => '3',
            'cargo' => 'Engenheiro Civil'
        ]);
        DB::table('cargos')->insert([
            'escolaridade_id' => '3',
            'cargo' => 'Engenheiro Eletricista'
        ]);    }
}
