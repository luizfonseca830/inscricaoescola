<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipotelaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tipotela')->delete();

        \DB::table('tipotela')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'tipo' => 'Tela',
                    'nome_anexo_mostrar' => NULL,
                    'nome_ou_anexo' => 'Inscrição',
                    'status_liberar' => 0,
                    'data_inicial' => '2021-01-18 00:00:00',
                    'data_final' => '2021-01-23 00:00:00',
                    'created_at' => NULL,
                    'updated_at' => '2021-01-14 11:40:10',
                ),
            1 =>
                array(
                    'id' => 2,
                    'tipo' => 'Tela',
                    'nome_anexo_mostrar' => NULL,
                    'nome_ou_anexo' => 'Protocolo',
                    'status_liberar' => 0,
                    'data_inicial' => '2021-01-18 00:00:00',
                    'data_final' => '2021-04-30 23:59:00',
                    'created_at' => NULL,
                    'updated_at' => '2021-01-29 08:19:38',
                ),
        ));


    }
}
