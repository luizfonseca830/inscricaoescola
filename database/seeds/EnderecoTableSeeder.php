<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnderecoTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Endereco::class, 300)->create();


        \DB::table('endereco')->delete();

        \DB::table('endereco')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'endereco' => 'Travessa do Bueiro, Rio Branco - AC, 67',
                    'bairro' => 'Santa Inês',
                    'cep' => '69.907-755',
                    'created_at' => '2021-01-17 22:04:23',
                    'updated_at' => '2021-01-17 22:04:23',
                ),
            1 =>
                array (
                    'id' => 2,
                    'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 465',
                    'bairro' => 'Dom Giocondo',
                    'cep' => '69.900-324',
                    'created_at' => '2021-01-17 22:04:35',
                    'updated_at' => '2021-01-17 22:04:35',
                ),
            2 =>
                array (
                    'id' => 3,
                    'endereco' => 'Estrada do Calafate, Rio Branco - AC, 5103',
                    'bairro' => 'Calafate',
                    'cep' => '69.914-320',
                    'created_at' => '2021-01-17 22:04:48',
                    'updated_at' => '2021-01-17 22:04:48',
                ),
            3 =>
                array (
                    'id' => 4,
                    'endereco' => 'Travessa Vera Cruz, Rio Branco - AC, 152',
                    'bairro' => 'Morada do SOL',
                    'cep' => '69.901-040',
                    'created_at' => '2021-01-17 22:06:27',
                    'updated_at' => '2021-01-17 22:06:27',
                ),
            4 =>
                array (
                    'id' => 5,
                    'endereco' => 'Rua Rui Lino, Rio Branco - AC, 96',
                    'bairro' => 'João Eduardo I',
                    'cep' => '69.911-426',
                    'created_at' => '2021-01-17 22:07:06',
                    'updated_at' => '2021-01-17 22:07:06',
                ),
            5 =>
                array (
                    'id' => 6,
                    'endereco' => 'Rua Estado do Acre, Rio Branco - AC, 215',
                    'bairro' => 'Aeroporto Velho',
                    'cep' => '69.911-051',
                    'created_at' => '2021-01-17 22:07:26',
                    'updated_at' => '2021-01-17 22:07:26',
                ),
            6 =>
                array (
                    'id' => 7,
                    'endereco' => 'Rua Quintino Bocaiuva, Rio Branco - AC, 1391',
                    'bairro' => 'Bosque',
                    'cep' => '69.900-718',
                    'created_at' => '2021-01-17 22:07:29',
                    'updated_at' => '2021-01-17 22:07:29',
                ),
            7 =>
                array (
                    'id' => 8,
                    'endereco' => 'Rua Raimundo Malaquias, Rio Branco - AC, 44',
                    'bairro' => 'Floresta Sul',
                    'cep' => '69.912-338',
                    'created_at' => '2021-01-17 22:07:36',
                    'updated_at' => '2021-01-17 22:07:36',
                ),
            8 =>
                array (
                    'id' => 9,
                    'endereco' => 'Rua José de Araújo, Rio Branco - AC, 628',
                    'bairro' => 'Chico Mendes',
                    'cep' => '69.902-696',
                    'created_at' => '2021-01-17 22:07:54',
                    'updated_at' => '2021-01-17 22:07:54',
                ),
            9 =>
                array (
                    'id' => 10,
                    'endereco' => 'Rua Vitória, Rio Branco - AC, 464',
                    'bairro' => 'Nova Esperança',
                    'cep' => '69.915-232',
                    'created_at' => '2021-01-17 22:08:16',
                    'updated_at' => '2021-01-17 22:08:16',
                ),
            10 =>
                array (
                    'id' => 11,
                    'endereco' => 'Rua Gaivota II, Rio Branco - AC, 59',
                    'bairro' => 'Conjunto Ouricurí',
                    'cep' => '69.903-206',
                    'created_at' => '2021-01-17 22:09:37',
                    'updated_at' => '2021-01-17 22:09:37',
                ),
            11 =>
                array (
                    'id' => 12,
                    'endereco' => 'Ramal do Macarrão, Rio Branco - AC, 918',
                    'bairro' => 'Belo Jardim I',
                    'cep' => '69.907-824',
                    'created_at' => '2021-01-17 22:10:11',
                    'updated_at' => '2021-01-17 22:10:11',
                ),
            12 =>
                array (
                    'id' => 13,
                    'endereco' => 'Rua Santa Isabel, Rio Branco - AC, 50',
                    'bairro' => 'Areal',
                    'cep' => '69.906-027',
                    'created_at' => '2021-01-17 22:10:27',
                    'updated_at' => '2021-01-17 22:10:27',
                ),
            13 =>
                array (
                    'id' => 14,
                    'endereco' => 'Rua José de Araújo, Rio Branco - AC, 628',
                    'bairro' => 'Chico Mendes',
                    'cep' => '69.902-696',
                    'created_at' => '2021-01-17 22:11:57',
                    'updated_at' => '2021-01-17 22:11:57',
                ),
            14 =>
                array (
                    'id' => 15,
                    'endereco' => 'Rua Cristo rei , Rio Branco - AC, 361',
                    'bairro' => 'Nova Esperança',
                    'cep' => '69.915-192',
                    'created_at' => '2021-01-17 22:12:04',
                    'updated_at' => '2021-01-17 22:12:04',
                ),
            15 =>
                array (
                    'id' => 16,
                    'endereco' => 'Travessa Feijó, Rio Branco - AC, 51',
                    'bairro' => 'Seis de Agosto',
                    'cep' => '69.905-620',
                    'created_at' => '2021-01-17 22:14:38',
                    'updated_at' => '2021-01-17 22:14:38',
                ),
            16 =>
                array (
                    'id' => 17,
                    'endereco' => 'Travessa Praxedes, Rio Branco - AC, 210',
                    'bairro' => 'Seis de Agosto',
                    'cep' => '69.905-632',
                    'created_at' => '2021-01-17 22:15:56',
                    'updated_at' => '2021-01-17 22:15:56',
                ),
            17 =>
                array (
                    'id' => 18,
                    'endereco' => 'Rua Major Mendonça Lima, Rio Branco - AC, 48',
                    'bairro' => 'Vila Acre',
                    'cep' => '69.909-816',
                    'created_at' => '2021-01-17 22:16:21',
                    'updated_at' => '2021-01-17 22:16:21',
                ),
        ));


    }
}

