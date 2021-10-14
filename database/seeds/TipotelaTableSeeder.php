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
        
        \DB::table('tipotela')->insert(array (
            0 => 
            array (
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
            array (
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
            2 => 
            array (
                'id' => 3,
                'tipo' => 'PDF',
                'nome_anexo_mostrar' => 'EDITAL PARA SORTEIO DE VAGAS Nº. 01/ISJ',
                'nome_ou_anexo' => NULL,
                'status_liberar' => 0,
                'data_inicial' => NULL,
                'data_final' => NULL,
                'created_at' => '2021-01-14 11:41:40',
                'updated_at' => '2021-08-26 06:57:13',
            ),
            3 => 
            array (
                'id' => 5,
                'tipo' => 'PDF',
                'nome_anexo_mostrar' => 'INSCRITOS PARA O SORTEIO DE VAGAS Nº. 01/ISJ',
                'nome_ou_anexo' => '1611724817-.INSCRITOS PARA O SORTEIO DE VAGAS - 01-ISJ2021.pdf',
                'status_liberar' => 0,
                'data_inicial' => '2021-01-27 13:30:00',
                'data_final' => '2021-04-30 23:59:00',
                'created_at' => '2021-01-26 21:41:18',
                'updated_at' => '2021-01-26 22:20:17',
            ),
            4 => 
            array (
                'id' => 6,
                'tipo' => 'PDF',
                'nome_anexo_mostrar' => 'ALUNOS SORTEADOS Nº. 01/ISJ',
                'nome_ou_anexo' => NULL,
                'status_liberar' => 0,
                'data_inicial' => NULL,
                'data_final' => NULL,
                'created_at' => '2021-01-28 22:24:29',
                'updated_at' => '2021-08-26 06:59:39',
            ),
        ));
        
        
    }
}