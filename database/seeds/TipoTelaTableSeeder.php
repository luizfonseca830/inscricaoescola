<?php

use Illuminate\Database\Seeder;

class TipoTelaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipotela')->insert([
            'tipo' => 'Tela',
            'nome_ou_anexo' => 'Inscrição',
            'status_liberar' => 0,
            'data_inicial' => null,
            'data_final' => null,
        ]);

        DB::table('tipotela')->insert([
            'tipo' => 'Tela',
            'nome_ou_anexo' => 'Protocolo',
            'status_liberar' => 0,
            'data_inicial' => null,
            'data_final' => null,
        ]);

    }
}
