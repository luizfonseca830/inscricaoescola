<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnderecoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

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
            18 => 
            array (
                'id' => 19,
                'endereco' => 'Travessa Virgílio de Lima, Rio Branco - AC, 185',
                'bairro' => 'Seis de AGOSTO',
                'cep' => '69.905-676',
                'created_at' => '2021-01-17 22:17:16',
                'updated_at' => '2021-01-17 22:17:16',
            ),
            19 => 
            array (
                'id' => 20,
                'endereco' => 'Rua São Peregrino, Rio Branco - AC, 213',
                'bairro' => 'Conjunto Bela VISTA',
                'cep' => '69.911-349',
                'created_at' => '2021-01-17 22:19:04',
                'updated_at' => '2021-01-17 22:19:04',
            ),
            20 => 
            array (
                'id' => 21,
                'endereco' => 'Rua Manoel Cesário, Rio Branco - AC, 418',
                'bairro' => 'CAPOEIRA',
                'cep' => '69.905-018',
                'created_at' => '2021-01-17 22:19:35',
                'updated_at' => '2021-01-17 22:19:35',
            ),
            21 => 
            array (
                'id' => 22,
                'endereco' => 'Rua Colômbia, Rio Branco - AC, 329',
                'bairro' => 'Bosque',
                'cep' => '69.900-679',
                'created_at' => '2021-01-17 22:20:18',
                'updated_at' => '2021-01-17 22:20:18',
            ),
            22 => 
            array (
                'id' => 23,
                'endereco' => 'Travessa São José, Rio Branco - AC, 54',
                'bairro' => 'Triângulo Novoriangulo',
                'cep' => '69.906-264',
                'created_at' => '2021-01-17 22:23:42',
                'updated_at' => '2021-01-17 22:23:42',
            ),
            23 => 
            array (
                'id' => 24,
                'endereco' => 'Rua Pôr-do-sol, Rio Branco - AC, 63',
                'bairro' => 'Montanhês',
                'cep' => '69.921-518',
                'created_at' => '2021-01-17 22:23:57',
                'updated_at' => '2021-01-17 22:23:57',
            ),
            24 => 
            array (
                'id' => 25,
                'endereco' => 'Ramal do Macarrão, Rio Branco - AC, 918',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-824',
                'created_at' => '2021-01-17 22:24:13',
                'updated_at' => '2021-01-17 22:24:13',
            ),
            25 => 
            array (
                'id' => 26,
                'endereco' => '..., 361',
                'bairro' => '...',
                'cep' => '69.915-216',
                'created_at' => '2021-01-17 22:24:22',
                'updated_at' => '2021-01-17 22:24:22',
            ),
            26 => 
            array (
                'id' => 27,
                'endereco' => 'Rua Benjamin Constant, Rio Branco - AC, 110',
                'bairro' => 'Base',
                'cep' => '69.900-043',
                'created_at' => '2021-01-17 22:25:22',
                'updated_at' => '2021-01-17 22:25:22',
            ),
            27 => 
            array (
                'id' => 28,
                'endereco' => 'Rodovia AC-40, Rio Branco - AC, 2666',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-788',
                'created_at' => '2021-01-17 22:30:53',
                'updated_at' => '2021-01-17 22:30:53',
            ),
            28 => 
            array (
                'id' => 29,
                'endereco' => 'Rua Japurá, Rio Branco - AC, 40',
                'bairro' => 'Conjunto Rui Lino 3',
                'cep' => '69.919-896',
                'created_at' => '2021-01-17 22:33:34',
                'updated_at' => '2021-01-17 22:33:34',
            ),
            29 => 
            array (
                'id' => 30,
                'endereco' => 'Estrada das Placas, Rio Branco - AC, 1146',
                'bairro' => 'PLACAS',
                'cep' => '69.902-770',
                'created_at' => '2021-01-17 22:33:53',
                'updated_at' => '2021-01-17 22:33:53',
            ),
            30 => 
            array (
                'id' => 31,
                'endereco' => 'Rua santos dumont, Rio Branco - AC, 286',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-030',
                'created_at' => '2021-01-17 22:33:54',
                'updated_at' => '2021-01-17 22:33:54',
            ),
            31 => 
            array (
                'id' => 32,
                'endereco' => 'Rua Virola, Rio Branco - AC, 627',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-872',
                'created_at' => '2021-01-17 22:33:59',
                'updated_at' => '2021-01-17 22:33:59',
            ),
            32 => 
            array (
                'id' => 33,
                'endereco' => 'Rua Raimundo Lima, 41',
                'bairro' => 'ivete vargas',
                'cep' => '69.906-118',
                'created_at' => '2021-01-17 22:35:57',
                'updated_at' => '2021-01-17 22:35:57',
            ),
            33 => 
            array (
                'id' => 34,
                'endereco' => 'Estrada das Placas, Rio Branco - AC, 1146',
                'bairro' => 'Placas',
                'cep' => '69.902-770',
                'created_at' => '2021-01-17 22:38:29',
                'updated_at' => '2021-01-17 22:38:29',
            ),
            34 => 
            array (
                'id' => 35,
                'endereco' => 'Rua Edmundo Pinto, Rio Branco - AC, 114',
                'bairro' => 'Xavier Maia - placas',
                'cep' => '69.903-007',
                'created_at' => '2021-01-17 22:38:40',
                'updated_at' => '2021-01-17 22:38:40',
            ),
            35 => 
            array (
                'id' => 36,
                'endereco' => 'Rua Tiradentes, Rio Branco - AC, 10',
                'bairro' => 'Vilage Tiradentes',
                'cep' => '69.914-090',
                'created_at' => '2021-01-17 22:39:10',
                'updated_at' => '2021-01-17 22:39:10',
            ),
            36 => 
            array (
                'id' => 37,
                'endereco' => 'Rodovia BR-364, Rio Branco - AC km 22, ',
                'bairro' => 'Baixa verde',
                'cep' => '69.909-040',
                'created_at' => '2021-01-17 22:39:46',
                'updated_at' => '2021-01-17 22:39:46',
            ),
            37 => 
            array (
                'id' => 38,
                'endereco' => 'Rua Wilde Viana das Neves Filho, Rio Branco - AC, 130',
                'bairro' => 'Conjunto Guiomard Santos I Qd 03 Cs 13 Bosque',
                'cep' => '69.901-438',
                'created_at' => '2021-01-17 22:43:06',
                'updated_at' => '2021-01-17 22:43:06',
            ),
            38 => 
            array (
                'id' => 39,
                'endereco' => 'Rua Altamira 2, Rio Branco - AC, 167',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-368',
                'created_at' => '2021-01-17 22:43:14',
                'updated_at' => '2021-01-17 22:43:14',
            ),
            39 => 
            array (
                'id' => 40,
                'endereco' => 'Rua N6, Rio Branco - AC, 261',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-793',
                'created_at' => '2021-01-17 22:46:04',
                'updated_at' => '2021-01-17 22:46:04',
            ),
            40 => 
            array (
                'id' => 41,
                'endereco' => 'Rua Altamira 2, Rio Branco - AC, 167',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-368',
                'created_at' => '2021-01-17 22:48:09',
                'updated_at' => '2021-01-17 22:48:09',
            ),
            41 => 
            array (
                'id' => 42,
                'endereco' => 'Rodovia AC-40, Rio Branco - AC, 2686',
                'bairro' => 'Vila da Acre',
                'cep' => '69.909-640',
                'created_at' => '2021-01-17 22:53:38',
                'updated_at' => '2021-01-17 22:53:38',
            ),
            42 => 
            array (
                'id' => 43,
                'endereco' => 'Rua Padre Paulino, Rio Branco - AC, 220',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-830',
                'created_at' => '2021-01-17 22:56:54',
                'updated_at' => '2021-01-17 22:56:54',
            ),
            43 => 
            array (
                'id' => 44,
                'endereco' => 'Rua Princesa Isabel, Rio Branco - AC, 312',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-176',
                'created_at' => '2021-01-17 22:59:18',
                'updated_at' => '2021-01-17 22:59:18',
            ),
            44 => 
            array (
                'id' => 45,
                'endereco' => 'Rua Abraim Farhat, Rio Branco - AC, 122',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-580',
                'created_at' => '2021-01-17 23:03:47',
                'updated_at' => '2021-01-17 23:03:47',
            ),
            45 => 
            array (
                'id' => 46,
                'endereco' => 'Rua Padre Cícero, Rio Branco - AC, 422',
                'bairro' => 'Conquista',
                'cep' => '69.918-836',
                'created_at' => '2021-01-17 23:03:52',
                'updated_at' => '2021-01-17 23:03:52',
            ),
            46 => 
            array (
                'id' => 47,
                'endereco' => 'Rua Delmar Pismel, Rio Branco - AC, 166',
                'bairro' => 'Conjunto Guiomard Santos',
                'cep' => '69.901-411',
                'created_at' => '2021-01-17 23:09:05',
                'updated_at' => '2021-01-17 23:09:05',
            ),
            47 => 
            array (
                'id' => 48,
                'endereco' => 'Rua Padre Cícero, Rio Branco - AC, 422',
                'bairro' => 'Conquista',
                'cep' => '69.918-836',
                'created_at' => '2021-01-17 23:09:29',
                'updated_at' => '2021-01-17 23:09:29',
            ),
            48 => 
            array (
                'id' => 49,
                'endereco' => 'Rua do Limão, Rio Branco - AC, 328',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-048',
                'created_at' => '2021-01-17 23:43:51',
                'updated_at' => '2021-01-17 23:43:51',
            ),
            49 => 
            array (
                'id' => 50,
                'endereco' => 'Rua do Galpão, Rio Branco - AC, 124',
                'bairro' => 'Conj Universitário',
                'cep' => '69.917-692',
                'created_at' => '2021-01-17 23:51:25',
                'updated_at' => '2021-01-17 23:51:25',
            ),
            50 => 
            array (
                'id' => 51,
                'endereco' => 'Rua Fernando Lira, Rio Branco - AC, 187',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-282',
                'created_at' => '2021-01-18 00:29:41',
                'updated_at' => '2021-01-18 00:29:41',
            ),
            51 => 
            array (
                'id' => 52,
                'endereco' => 'Área Rural, Rio Branco - AC, 1591',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 00:32:24',
                'updated_at' => '2021-01-18 00:32:24',
            ),
            52 => 
            array (
                'id' => 53,
                'endereco' => 'Rua Sena Madureira, Rio Branco - AC, 49',
                'bairro' => 'Base',
                'cep' => '69.900-016',
                'created_at' => '2021-01-18 02:50:25',
                'updated_at' => '2021-01-18 02:50:25',
            ),
            53 => 
            array (
                'id' => 54,
                'endereco' => 'Rua Cidade Nova, Rio Branco - AC, 136',
                'bairro' => 'Loteamento Joafra',
                'cep' => '69.919-382',
                'created_at' => '2021-01-18 03:04:43',
                'updated_at' => '2021-01-18 03:04:43',
            ),
            54 => 
            array (
                'id' => 55,
                'endereco' => 'Área Rural, Rio Branco - AC, 2889',
                'bairro' => 'Ramal do rodo km 3 - amapa',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 03:27:04',
                'updated_at' => '2021-01-18 03:27:04',
            ),
            55 => 
            array (
                'id' => 56,
                'endereco' => 'Rua Heros, Rio Branco - AC, 15',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-227',
                'created_at' => '2021-01-18 03:32:20',
                'updated_at' => '2021-01-18 03:32:20',
            ),
            56 => 
            array (
                'id' => 57,
                'endereco' => 'Travessa Rio de Janeiro, Rio Branco - AC, 43',
                'bairro' => 'Eldorado',
                'cep' => '69.902-482',
                'created_at' => '2021-01-18 03:37:40',
                'updated_at' => '2021-01-18 03:37:40',
            ),
            57 => 
            array (
                'id' => 58,
                'endereco' => 'Rua Fontenele de Castro, Rio Branco - AC, 323',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-188',
                'created_at' => '2021-01-18 03:38:30',
                'updated_at' => '2021-01-18 03:38:30',
            ),
            58 => 
            array (
                'id' => 59,
                'endereco' => 'Rua da Sanacre, Rio Branco - AC, 326',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-731',
                'created_at' => '2021-01-18 03:39:09',
                'updated_at' => '2021-01-18 03:39:09',
            ),
            59 => 
            array (
                'id' => 60,
                'endereco' => 'Travessa Guarani, Rio Branco - AC, 512',
                'bairro' => 'Aviário',
                'cep' => '69.900-845',
                'created_at' => '2021-01-18 03:40:20',
                'updated_at' => '2021-01-18 03:40:20',
            ),
            60 => 
            array (
                'id' => 61,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 1277',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-232',
                'created_at' => '2021-01-18 03:41:41',
                'updated_at' => '2021-01-18 03:41:41',
            ),
            61 => 
            array (
                'id' => 62,
                'endereco' => 'Ramal Menino Jesus, Rio Branco - AC, 452',
                'bairro' => 'Taquarí',
                'cep' => '69.906-472',
                'created_at' => '2021-01-18 03:43:00',
                'updated_at' => '2021-01-18 03:43:00',
            ),
            62 => 
            array (
                'id' => 63,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 1277',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-232',
                'created_at' => '2021-01-18 03:47:06',
                'updated_at' => '2021-01-18 03:47:06',
            ),
            63 => 
            array (
                'id' => 64,
                'endereco' => '...rua sereia, 193',
                'bairro' => 'Belo jardim 1',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 03:54:21',
                'updated_at' => '2021-01-18 03:54:21',
            ),
            64 => 
            array (
                'id' => 65,
                'endereco' => 'Trav por do sol, 38',
                'bairro' => 'Areal',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 03:59:28',
                'updated_at' => '2021-01-18 03:59:28',
            ),
            65 => 
            array (
                'id' => 66,
                'endereco' => 'Rua Francisco Ferreira do Nascimento, Rio Branco - AC, 444',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-782',
                'created_at' => '2021-01-18 04:00:08',
                'updated_at' => '2021-01-18 04:00:08',
            ),
            66 => 
            array (
                'id' => 67,
                'endereco' => 'Rua Severino Israel de Lima, Rio Branco - AC, 110',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-783',
                'created_at' => '2021-01-18 04:02:55',
                'updated_at' => '2021-01-18 04:02:55',
            ),
            67 => 
            array (
                'id' => 68,
                'endereco' => 'Rua Francisco Augusto Bacuraru Vieira Nunes, Rio Branco - AC, 1191',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-334',
                'created_at' => '2021-01-18 04:04:21',
                'updated_at' => '2021-01-18 04:04:21',
            ),
            68 => 
            array (
                'id' => 69,
                'endereco' => 'Travessa Santa Inês, Rio Branco - AC, 212',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-310',
                'created_at' => '2021-01-18 04:07:03',
                'updated_at' => '2021-01-18 04:07:03',
            ),
            69 => 
            array (
                'id' => 70,
                'endereco' => 'Rua Paraguai, Rio Branco - AC, 17',
                'bairro' => 'Baixada da HABITASA',
                'cep' => '69.905-157',
                'created_at' => '2021-01-18 04:09:02',
                'updated_at' => '2021-01-18 04:09:02',
            ),
            70 => 
            array (
                'id' => 71,
                'endereco' => 'Rua Padre José, Rio Branco - AC, 80',
                'bairro' => 'Triângulo Novo',
                'cep' => '69.906-262',
                'created_at' => '2021-01-18 04:10:37',
                'updated_at' => '2021-01-18 04:10:37',
            ),
            71 => 
            array (
                'id' => 72,
                'endereco' => 'Rua João Amâncio, Rio Branco - AC, 183',
                'bairro' => 'Ayrton sena',
                'cep' => '69.911-868',
                'created_at' => '2021-01-18 04:14:40',
                'updated_at' => '2021-01-18 04:14:40',
            ),
            72 => 
            array (
                'id' => 73,
                'endereco' => 'Rua Santa Terezinha, Rio Branco - AC, 55',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-666',
                'created_at' => '2021-01-18 04:16:22',
                'updated_at' => '2021-01-18 04:16:22',
            ),
            73 => 
            array (
                'id' => 74,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 1015',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-684',
                'created_at' => '2021-01-18 04:23:54',
                'updated_at' => '2021-01-18 04:23:54',
            ),
            74 => 
            array (
                'id' => 75,
                'endereco' => 'Rua Geraldo Leite, Rio Branco - AC, 33',
                'bairro' => 'Cidade do POVO',
                'cep' => '69.909-192',
                'created_at' => '2021-01-18 04:25:07',
                'updated_at' => '2021-01-18 04:25:07',
            ),
            75 => 
            array (
                'id' => 76,
                'endereco' => 'Rua 12, Rio Branco - AC, 323',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 04:26:13',
                'updated_at' => '2021-01-18 04:26:13',
            ),
            76 => 
            array (
                'id' => 77,
                'endereco' => 'Rua 15 de Junho, Rio Branco - AC, 295',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-301',
                'created_at' => '2021-01-18 04:31:59',
                'updated_at' => '2021-01-18 04:31:59',
            ),
            77 => 
            array (
                'id' => 78,
                'endereco' => 'Avenida Ceará, Rio Branco - AC, 20131',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-303',
                'created_at' => '2021-01-18 04:39:29',
                'updated_at' => '2021-01-18 04:39:29',
            ),
            78 => 
            array (
                'id' => 79,
                'endereco' => 'Rua 16 de Outubro, Rio Branco - AC, 119',
                'bairro' => 'Quinze',
                'cep' => '69.905-524',
                'created_at' => '2021-01-18 04:41:43',
                'updated_at' => '2021-01-18 04:41:43',
            ),
            79 => 
            array (
                'id' => 80,
                'endereco' => 'Rua Primavera, Rio Branco - AC, 140',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-722',
                'created_at' => '2021-01-18 04:42:30',
                'updated_at' => '2021-01-18 04:42:30',
            ),
            80 => 
            array (
                'id' => 81,
                'endereco' => 'Rua Pedro Vaz de Caminha, Rio Branco - AC, 203',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-546',
                'created_at' => '2021-01-18 04:43:03',
                'updated_at' => '2021-01-18 04:43:03',
            ),
            81 => 
            array (
                'id' => 82,
                'endereco' => '...floresta sul, 200',
                'bairro' => 'Rua Francisco Vieira',
                'cep' => '69.906-211',
                'created_at' => '2021-01-18 04:53:51',
                'updated_at' => '2021-01-18 04:53:51',
            ),
            82 => 
            array (
                'id' => 83,
                'endereco' => 'Rua Santa Rosa, Rio Branco - AC, 11',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-302',
                'created_at' => '2021-01-18 04:57:15',
                'updated_at' => '2021-01-18 04:57:15',
            ),
            83 => 
            array (
                'id' => 84,
                'endereco' => 'Rua america, 290',
                'bairro' => 'Bairro nova estação',
                'cep' => '69.908-970',
                'created_at' => '2021-01-18 04:58:08',
                'updated_at' => '2021-01-18 04:58:08',
            ),
            84 => 
            array (
                'id' => 85,
                'endereco' => 'Rua Baguari, Rio Branco - AC, 1976',
                'bairro' => 'TAQUARÍ',
                'cep' => '69.906-426',
                'created_at' => '2021-01-18 05:01:29',
                'updated_at' => '2021-01-18 05:01:29',
            ),
            85 => 
            array (
                'id' => 86,
                'endereco' => 'Rua Afonso Amoedo, Rio Branco - AC, 393',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-184',
                'created_at' => '2021-01-18 05:05:18',
                'updated_at' => '2021-01-18 05:05:18',
            ),
            86 => 
            array (
                'id' => 87,
                'endereco' => 'Rua ROUXINOL 52, Rio Branco - AC, 10',
                'bairro' => 'Loteamento Andirá',
                'cep' => '69.903-445',
                'created_at' => '2021-01-18 05:06:06',
                'updated_at' => '2021-01-18 05:06:06',
            ),
            87 => 
            array (
                'id' => 88,
                'endereco' => 'Travessa Guarani, Rio Branco - AC, 341',
                'bairro' => 'Aviárioaviário',
                'cep' => '69.900-845',
                'created_at' => '2021-01-18 05:08:24',
                'updated_at' => '2021-01-18 05:08:24',
            ),
            88 => 
            array (
                'id' => 89,
                'endereco' => 'Rua Enedina Coelho, Rio Branco - AC, 76',
                'bairro' => 'Vila Santa Cecília',
                'cep' => '69.908-124',
                'created_at' => '2021-01-18 05:11:32',
                'updated_at' => '2021-01-18 05:11:32',
            ),
            89 => 
            array (
                'id' => 90,
                'endereco' => 'Travessa Rosa Menezes, Rio Branco - AC, 138',
                'bairro' => 'Preventório',
                'cep' => '69.900-183',
                'created_at' => '2021-01-18 05:12:18',
                'updated_at' => '2021-01-18 05:12:18',
            ),
            90 => 
            array (
                'id' => 91,
                'endereco' => 'Rua Padre Cícero, Rio Branco - AC, 609',
                'bairro' => 'Conquista',
                'cep' => '69.918-836',
                'created_at' => '2021-01-18 05:12:34',
                'updated_at' => '2021-01-18 05:12:34',
            ),
            91 => 
            array (
                'id' => 92,
                'endereco' => 'Rua ROUXINOL 52, Rio Branco - AC, 10',
                'bairro' => 'Loteamento Andirá',
                'cep' => '69.903-445',
                'created_at' => '2021-01-18 05:12:52',
                'updated_at' => '2021-01-18 05:12:52',
            ),
            92 => 
            array (
                'id' => 93,
                'endereco' => 'Área Rural, Rio Branco - AC, 468',
                'bairro' => 'Área Rural de Rio Branco/ amapá',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 05:14:07',
                'updated_at' => '2021-01-18 05:14:07',
            ),
            93 => 
            array (
                'id' => 94,
                'endereco' => '...Rio Branco /  Acre, 999663040',
                'bairro' => 'Canaã',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 05:14:43',
                'updated_at' => '2021-01-18 05:14:43',
            ),
            94 => 
            array (
                'id' => 95,
                'endereco' => 'Rua 24 de Janeiro, Rio Branco - AC, 51',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-596',
                'created_at' => '2021-01-18 05:16:08',
                'updated_at' => '2021-01-18 05:16:08',
            ),
            95 => 
            array (
                'id' => 96,
                'endereco' => 'Rua Família, Rio Branco - AC, 57',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-695',
                'created_at' => '2021-01-18 05:18:36',
                'updated_at' => '2021-01-18 05:18:36',
            ),
            96 => 
            array (
                'id' => 97,
                'endereco' => 'RAMAL Chico sobrinho, 710',
                'bairro' => 'belo jardim 1',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 05:22:30',
                'updated_at' => '2021-01-18 05:22:30',
            ),
            97 => 
            array (
                'id' => 98,
                'endereco' => 'Travessa Bandeirante, Rio Branco - AC, 47',
                'bairro' => 'Bahia VELHA',
                'cep' => '69.911-584',
                'created_at' => '2021-01-18 05:22:45',
                'updated_at' => '2021-01-18 05:22:45',
            ),
            98 => 
            array (
                'id' => 99,
                'endereco' => 'Rua Família, Rio Branco - AC, 57',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-695',
                'created_at' => '2021-01-18 05:22:54',
                'updated_at' => '2021-01-18 05:22:54',
            ),
            99 => 
            array (
                'id' => 100,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 426',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 05:23:18',
                'updated_at' => '2021-01-18 05:23:18',
            ),
            100 => 
            array (
                'id' => 101,
                'endereco' => 'Rua Abacaxi, Rio Branco - AC, 53',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-043',
                'created_at' => '2021-01-18 05:24:39',
                'updated_at' => '2021-01-18 05:24:39',
            ),
            101 => 
            array (
                'id' => 102,
                'endereco' => 'Rua 11 de Março, Rio Branco - AC, 143',
                'bairro' => 'Placas',
                'cep' => '69.902-754',
                'created_at' => '2021-01-18 05:29:43',
                'updated_at' => '2021-01-18 05:29:43',
            ),
            102 => 
            array (
                'id' => 103,
                'endereco' => 'Rua dos Morenos, Rio Branco - AC, 81',
                'bairro' => 'Conjunto Paulo César de Oliveira',
                'cep' => '69.919-126',
                'created_at' => '2021-01-18 05:31:26',
                'updated_at' => '2021-01-18 05:31:26',
            ),
            103 => 
            array (
                'id' => 104,
                'endereco' => 'Avenida Nordeste, Rio Branco - AC, 180',
                'bairro' => 'Conjunto TucUMA',
                'cep' => '69.919-778',
                'created_at' => '2021-01-18 05:32:20',
                'updated_at' => '2021-01-18 05:32:20',
            ),
            104 => 
            array (
                'id' => 105,
                'endereco' => 'Rua Estácio de Sá, Rio Branco - AC, 359',
                'bairro' => 'Bahia VELHa',
                'cep' => '69.911-590',
                'created_at' => '2021-01-18 05:33:28',
                'updated_at' => '2021-01-18 05:33:28',
            ),
            105 => 
            array (
                'id' => 106,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 426',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 05:35:00',
                'updated_at' => '2021-01-18 05:35:00',
            ),
            106 => 
            array (
                'id' => 107,
                'endereco' => 'Rua João Amâncio, Rio Branco - AC, 183',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-868',
                'created_at' => '2021-01-18 05:35:16',
                'updated_at' => '2021-01-18 05:35:16',
            ),
            107 => 
            array (
                'id' => 108,
                'endereco' => 'Rua Veterano R. Pinto, Rio Branco - AC, 46',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-412',
                'created_at' => '2021-01-18 05:35:36',
                'updated_at' => '2021-01-18 05:35:36',
            ),
            108 => 
            array (
                'id' => 109,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 1528',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 05:36:36',
                'updated_at' => '2021-01-18 05:36:36',
            ),
            109 => 
            array (
                'id' => 110,
                'endereco' => '..., 337',
                'bairro' => '...',
                'cep' => '69.912-180',
                'created_at' => '2021-01-18 05:37:53',
                'updated_at' => '2021-01-18 05:37:53',
            ),
            110 => 
            array (
                'id' => 111,
                'endereco' => 'Alameda Projetada 516, Rio Branco - AC, 068',
                'bairro' => 'Jardim de Alah',
                'cep' => '69.915-524',
                'created_at' => '2021-01-18 05:39:40',
                'updated_at' => '2021-01-18 05:39:40',
            ),
            111 => 
            array (
                'id' => 112,
                'endereco' => 'Rua Rio Tejo, Rio Branco - AC, 447',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-789',
                'created_at' => '2021-01-18 05:39:53',
                'updated_at' => '2021-01-18 05:39:53',
            ),
            112 => 
            array (
                'id' => 113,
                'endereco' => 'Rua do Silêncio, Rio Branco - AC, 94',
                'bairro' => 'Xavier Maia',
                'cep' => '69.903-060',
                'created_at' => '2021-01-18 05:40:03',
                'updated_at' => '2021-01-18 05:40:03',
            ),
            113 => 
            array (
                'id' => 114,
                'endereco' => 'Rua José de Melo, Rio Branco - AC, 419',
                'bairro' => 'Bosque',
                'cep' => '69.900-403',
                'created_at' => '2021-01-18 05:41:34',
                'updated_at' => '2021-01-18 05:41:34',
            ),
            114 => 
            array (
                'id' => 115,
                'endereco' => 'Rua Edmundo Pinto, Rio Branco - AC, 109',
                'bairro' => 'Conjunto Guiomard Santos 1',
                'cep' => '69.901-432',
                'created_at' => '2021-01-18 05:43:01',
                'updated_at' => '2021-01-18 05:43:01',
            ),
            115 => 
            array (
                'id' => 116,
                'endereco' => '...RIO Branco/  acre, 999663040',
                'bairro' => 'Canaã',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 05:44:14',
                'updated_at' => '2021-01-18 05:44:14',
            ),
            116 => 
            array (
                'id' => 117,
                'endereco' => 'Beco São Cristóvão, Rio Branco - AC, 41',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-719',
                'created_at' => '2021-01-18 05:45:08',
                'updated_at' => '2021-01-18 05:45:08',
            ),
            117 => 
            array (
                'id' => 118,
                'endereco' => 'Rua Joaquim Nabuco, Rio Branco - AC, 45',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-142',
                'created_at' => '2021-01-18 05:45:37',
                'updated_at' => '2021-01-18 05:45:37',
            ),
            118 => 
            array (
                'id' => 119,
                'endereco' => 'Rua Nossa Senhora de Fátima, Rio Branco - AC, 285',
                'bairro' => 'Calafate',
                'cep' => '69.914-372',
                'created_at' => '2021-01-18 05:46:53',
                'updated_at' => '2021-01-18 05:46:53',
            ),
            119 => 
            array (
                'id' => 120,
                'endereco' => 'Rua Santa CECILIA , Rio Branco - AC, 191',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-438',
                'created_at' => '2021-01-18 05:48:33',
                'updated_at' => '2021-01-18 05:48:33',
            ),
            120 => 
            array (
                'id' => 121,
                'endereco' => 'Rua Maria José Domingos, Rio Branco - AC, 74',
                'bairro' => 'CALAFATE',
                'cep' => '69.914-314',
                'created_at' => '2021-01-18 05:48:37',
                'updated_at' => '2021-01-18 05:48:37',
            ),
            121 => 
            array (
                'id' => 122,
                'endereco' => 'Rua Cedro, Rio Branco - AC, 276',
                'bairro' => 'Loteamento Joafra',
                'cep' => '69.919-400',
                'created_at' => '2021-01-18 05:48:44',
                'updated_at' => '2021-01-18 05:48:44',
            ),
            122 => 
            array (
                'id' => 123,
                'endereco' => 'Rua Primavera, Rio Branco - AC, 140',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-722',
                'created_at' => '2021-01-18 05:49:13',
                'updated_at' => '2021-01-18 05:49:13',
            ),
            123 => 
            array (
                'id' => 124,
                'endereco' => 'Rua Família, Rio Branco - AC, 182',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-695',
                'created_at' => '2021-01-18 05:49:40',
                'updated_at' => '2021-01-18 05:49:40',
            ),
            124 => 
            array (
                'id' => 125,
                'endereco' => 'Rua Grêmio Alberto Sampaio, Rio Branco - AC, 58',
                'bairro' => 'José Augusto',
                'cep' => '69.900-797',
                'created_at' => '2021-01-18 05:50:42',
                'updated_at' => '2021-01-18 05:50:42',
            ),
            125 => 
            array (
                'id' => 126,
                'endereco' => 'Travessa Jaguari, Rio Branco - AC, 70',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-248',
                'created_at' => '2021-01-18 05:51:29',
                'updated_at' => '2021-01-18 05:51:29',
            ),
            126 => 
            array (
                'id' => 127,
                'endereco' => 'Rua Santa cecilia, Rio Branco - AC, 191',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-438',
                'created_at' => '2021-01-18 05:52:41',
                'updated_at' => '2021-01-18 05:52:41',
            ),
            127 => 
            array (
                'id' => 128,
                'endereco' => 'Rua Independência, Rio Branco - AC, 181',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-292',
                'created_at' => '2021-01-18 05:54:50',
                'updated_at' => '2021-01-18 05:54:50',
            ),
            128 => 
            array (
                'id' => 129,
                'endereco' => 'Rua 1º de Maio, Rio Branco - AC, 29',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-331',
                'created_at' => '2021-01-18 05:55:13',
                'updated_at' => '2021-01-18 05:55:13',
            ),
            129 => 
            array (
                'id' => 130,
                'endereco' => 'Rua Marte, Rio Branco - AC, 203',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-306',
                'created_at' => '2021-01-18 05:55:33',
                'updated_at' => '2021-01-18 05:55:33',
            ),
            130 => 
            array (
                'id' => 131,
                'endereco' => 'Travessa do Pescador, Rio Branco - AC, 1176',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-780',
                'created_at' => '2021-01-18 05:57:38',
                'updated_at' => '2021-01-18 05:57:38',
            ),
            131 => 
            array (
                'id' => 132,
                'endereco' => 'Travessa Canaã, Rio Branco - AC, 125',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-692',
                'created_at' => '2021-01-18 05:59:35',
                'updated_at' => '2021-01-18 05:59:35',
            ),
            132 => 
            array (
                'id' => 133,
                'endereco' => 'Travessa Ramos Ferreira, Rio Branco - AC, 36',
                'bairro' => 'PISTA',
                'cep' => '69.911-190',
                'created_at' => '2021-01-18 06:03:02',
                'updated_at' => '2021-01-18 06:03:02',
            ),
            133 => 
            array (
                'id' => 134,
                'endereco' => 'Rua Alércio Dias, Rio Branco - AC, 237',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-244',
                'created_at' => '2021-01-18 06:03:10',
                'updated_at' => '2021-01-18 06:03:10',
            ),
            134 => 
            array (
                'id' => 135,
                'endereco' => 'Travessa Fagundes Varela, Rio Branco - AC, 59',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-150',
                'created_at' => '2021-01-18 06:03:29',
                'updated_at' => '2021-01-18 06:03:29',
            ),
            135 => 
            array (
                'id' => 136,
                'endereco' => 'Estrada do São Francisco, Rio Branco - AC, 1840',
                'bairro' => 'VitÓRIA',
                'cep' => '69.901-815',
                'created_at' => '2021-01-18 06:03:47',
                'updated_at' => '2021-01-18 06:03:47',
            ),
            136 => 
            array (
                'id' => 137,
                'endereco' => 'Travessa Canaã, Rio Branco - AC, 125',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-692',
                'created_at' => '2021-01-18 06:03:50',
                'updated_at' => '2021-01-18 06:03:50',
            ),
            137 => 
            array (
                'id' => 138,
                'endereco' => 'Rua Tamarindo, Rio Branco - AC, 238',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-361',
                'created_at' => '2021-01-18 06:03:52',
                'updated_at' => '2021-01-18 06:03:52',
            ),
            138 => 
            array (
                'id' => 139,
                'endereco' => 'Rua Vitória II, Rio Branco - AC, 125',
                'bairro' => 'Jorge LAVOCAT',
                'cep' => '69.922-022',
                'created_at' => '2021-01-18 06:04:43',
                'updated_at' => '2021-01-18 06:04:43',
            ),
            139 => 
            array (
                'id' => 140,
                'endereco' => 'Rua da Laranja, Rio Branco - AC, 902',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-076',
                'created_at' => '2021-01-18 06:04:46',
                'updated_at' => '2021-01-18 06:04:46',
            ),
            140 => 
            array (
                'id' => 141,
                'endereco' => 'Estrada da floresta, rua sport gardens da Amazônia, 315',
                'bairro' => 'Floresta sul',
                'cep' => '69.900-000',
                'created_at' => '2021-01-18 06:05:31',
                'updated_at' => '2021-01-18 06:05:31',
            ),
            141 => 
            array (
                'id' => 142,
                'endereco' => 'Rua do Eucalipto, Rio Branco - AC, 97',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-283',
                'created_at' => '2021-01-18 06:05:43',
                'updated_at' => '2021-01-18 06:05:43',
            ),
            142 => 
            array (
                'id' => 143,
                'endereco' => 'Rua Governador Artur Reis, Rio Branco - AC, 45',
                'bairro' => 'Conjunto Castelo Branco',
                'cep' => '69.911-235',
                'created_at' => '2021-01-18 06:05:50',
                'updated_at' => '2021-01-18 06:05:50',
            ),
            143 => 
            array (
                'id' => 144,
                'endereco' => 'Rua do Cajú, Rio Branco - AC, 361',
                'bairro' => 'Mocinha Magalhãesmoci',
                'cep' => '69.920-082',
                'created_at' => '2021-01-18 06:06:13',
                'updated_at' => '2021-01-18 06:06:13',
            ),
            144 => 
            array (
                'id' => 145,
                'endereco' => 'Quadra 22c casa 34, 869',
                'bairro' => 'Raimundo Gomes de Oliveira',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 06:06:28',
                'updated_at' => '2021-01-18 06:06:28',
            ),
            145 => 
            array (
                'id' => 146,
                'endereco' => 'Rua Santa Terezinha, Rio Branco - AC, 186',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-510',
                'created_at' => '2021-01-18 06:06:32',
                'updated_at' => '2021-01-18 06:06:32',
            ),
            146 => 
            array (
                'id' => 147,
                'endereco' => 'Rua Elise, Rio Branco - AC, 271',
                'bairro' => 'Loteamento Joafra',
                'cep' => '69.919-388',
                'created_at' => '2021-01-18 06:06:43',
                'updated_at' => '2021-01-18 06:06:43',
            ),
            147 => 
            array (
                'id' => 148,
                'endereco' => 'Rua Jorge Amado, Rio Branco - AC, 44',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-355',
                'created_at' => '2021-01-18 06:09:11',
                'updated_at' => '2021-01-18 06:09:11',
            ),
            148 => 
            array (
                'id' => 149,
                'endereco' => 'Rua do Eucalipto, Rio Branco - AC, 99',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-283',
                'created_at' => '2021-01-18 06:10:45',
                'updated_at' => '2021-01-18 06:10:45',
            ),
            149 => 
            array (
                'id' => 150,
                'endereco' => 'Rua Alércio Dias, Rio Branco - AC, 151',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-244',
                'created_at' => '2021-01-18 06:10:57',
                'updated_at' => '2021-01-18 06:10:57',
            ),
            150 => 
            array (
                'id' => 151,
                'endereco' => 'Avenida Nações Unidas, Rio Branco - AC, 163',
                'bairro' => 'Bosque',
                'cep' => '69.900-721',
                'created_at' => '2021-01-18 06:11:32',
                'updated_at' => '2021-01-18 06:11:32',
            ),
            151 => 
            array (
                'id' => 152,
                'endereco' => 'Rua Maria das Dores, Rio Branco - AC, 647',
                'bairro' => 'Conjunto ESPERANÇA',
                'cep' => '69.915-154',
                'created_at' => '2021-01-18 06:12:05',
                'updated_at' => '2021-01-18 06:12:05',
            ),
            152 => 
            array (
                'id' => 153,
                'endereco' => 'Rua Padre José, Rio Branco - AC, 492',
                'bairro' => 'Triângulo Novo',
                'cep' => '69.906-262',
                'created_at' => '2021-01-18 06:12:27',
                'updated_at' => '2021-01-18 06:12:27',
            ),
            153 => 
            array (
                'id' => 154,
                'endereco' => 'Travessa Vera Cruz, Rio Branco - AC, 64',
                'bairro' => 'João EDUARdo 2',
                'cep' => '69.911-534',
                'created_at' => '2021-01-18 06:12:30',
                'updated_at' => '2021-01-18 06:12:30',
            ),
            154 => 
            array (
                'id' => 155,
                'endereco' => 'Rua da AMIZADE, travessa pereira, 198',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 06:13:22',
                'updated_at' => '2021-01-18 06:13:22',
            ),
            155 => 
            array (
                'id' => 156,
                'endereco' => 'Rua Rouxinol, Rio Branco - AC, 240',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-445',
                'created_at' => '2021-01-18 06:13:46',
                'updated_at' => '2021-01-18 06:13:46',
            ),
            156 => 
            array (
                'id' => 157,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 664',
                'bairro' => 'Preventório',
                'cep' => '69.900-120',
                'created_at' => '2021-01-18 06:13:52',
                'updated_at' => '2021-01-18 06:13:52',
            ),
            157 => 
            array (
                'id' => 158,
                'endereco' => 'Rua dos Lírios, Rio Branco - AC, 87',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-242',
                'created_at' => '2021-01-18 06:14:56',
                'updated_at' => '2021-01-18 06:14:56',
            ),
            158 => 
            array (
                'id' => 159,
                'endereco' => 'Rua Mário Maia, Rio Branco - AC, 136',
                'bairro' => 'Jardim de Alah',
                'cep' => '69.915-516',
                'created_at' => '2021-01-18 06:16:27',
                'updated_at' => '2021-01-18 06:16:27',
            ),
            159 => 
            array (
                'id' => 160,
                'endereco' => 'Rua Padre Paulino, Rio Branco - AC, 45',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-830',
                'created_at' => '2021-01-18 06:16:37',
                'updated_at' => '2021-01-18 06:16:37',
            ),
            160 => 
            array (
                'id' => 161,
                'endereco' => 'Rua Barro, Rio Branco - AC, 289',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-816',
                'created_at' => '2021-01-18 06:16:53',
                'updated_at' => '2021-01-18 06:16:53',
            ),
            161 => 
            array (
                'id' => 162,
                'endereco' => 'Rua dos Lírios, Rio Branco - AC, 87',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-242',
                'created_at' => '2021-01-18 06:16:57',
                'updated_at' => '2021-01-18 06:16:57',
            ),
            162 => 
            array (
                'id' => 163,
                'endereco' => 'Travessa Mogno, Rio Branco - AC, 90',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-846',
                'created_at' => '2021-01-18 06:18:37',
                'updated_at' => '2021-01-18 06:18:37',
            ),
            163 => 
            array (
                'id' => 164,
                'endereco' => 'Rua Rouxinol, Rio Branco - AC, 240',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-445',
                'created_at' => '2021-01-18 06:20:13',
                'updated_at' => '2021-01-18 06:20:13',
            ),
            164 => 
            array (
                'id' => 165,
                'endereco' => 'Rua São Salvador, Rio Branco - AC, 315',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-542',
                'created_at' => '2021-01-18 06:20:30',
                'updated_at' => '2021-01-18 06:20:30',
            ),
            165 => 
            array (
                'id' => 166,
                'endereco' => '..., 148',
                'bairro' => 'rua 25 de dezembro, n 148, bairro tancredo neves',
                'cep' => '69.921-806',
                'created_at' => '2021-01-18 06:21:15',
                'updated_at' => '2021-01-18 06:21:15',
            ),
            166 => 
            array (
                'id' => 167,
                'endereco' => 'Rua Rubens Carneiro, Rio Branco - AC, 149',
                'bairro' => 'Abraão Alab',
                'cep' => '69.918-044',
                'created_at' => '2021-01-18 06:21:16',
                'updated_at' => '2021-01-18 06:21:16',
            ),
            167 => 
            array (
                'id' => 168,
                'endereco' => 'Rua Veterano R. Pinto, Rio Branco - AC, 46',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-412',
                'created_at' => '2021-01-18 06:21:48',
                'updated_at' => '2021-01-18 06:21:48',
            ),
            168 => 
            array (
                'id' => 169,
                'endereco' => 'Travessa Paraíso, Rio Branco - AC, 40',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-503',
                'created_at' => '2021-01-18 06:22:11',
                'updated_at' => '2021-01-18 06:22:11',
            ),
            169 => 
            array (
                'id' => 170,
                'endereco' => 'Rua S1, Rio Branco - AC, 172',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-706',
                'created_at' => '2021-01-18 06:22:35',
                'updated_at' => '2021-01-18 06:22:35',
            ),
            170 => 
            array (
                'id' => 171,
                'endereco' => 'Rua Diamantina, Rio Branco - AC, 458',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-424',
                'created_at' => '2021-01-18 06:25:22',
                'updated_at' => '2021-01-18 06:25:22',
            ),
            171 => 
            array (
                'id' => 172,
                'endereco' => 'Rua Maria das Dores, Rio Branco - AC, 1065',
                'bairro' => 'Conjunto Esperança III',
                'cep' => '69.915-154',
                'created_at' => '2021-01-18 06:25:28',
                'updated_at' => '2021-01-18 06:25:28',
            ),
            172 => 
            array (
                'id' => 173,
                'endereco' => 'Rua Edmundo Pinto, Rio Branco - AC, 307',
                'bairro' => 'Belo Jardim',
                'cep' => '69.908-058',
                'created_at' => '2021-01-18 06:27:15',
                'updated_at' => '2021-01-18 06:27:15',
            ),
            173 => 
            array (
                'id' => 174,
                'endereco' => 'Rua da União, Rio Branco - AC, 208',
                'bairro' => 'Vitória',
                'cep' => '69.901-707',
                'created_at' => '2021-01-18 06:27:15',
                'updated_at' => '2021-01-18 06:27:15',
            ),
            174 => 
            array (
                'id' => 175,
                'endereco' => 'Travessa Castanheira, Rio Branco - AC, 11',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-179',
                'created_at' => '2021-01-18 06:27:21',
                'updated_at' => '2021-01-18 06:27:21',
            ),
            175 => 
            array (
                'id' => 176,
                'endereco' => 'Rua S1, Rio Branco - AC, 172',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-706',
                'created_at' => '2021-01-18 06:27:25',
                'updated_at' => '2021-01-18 06:27:25',
            ),
            176 => 
            array (
                'id' => 177,
                'endereco' => 'Quadra 9 casa 2, 32',
                'bairro' => 'Rui Lino 3',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 06:27:29',
                'updated_at' => '2021-01-18 06:27:29',
            ),
            177 => 
            array (
                'id' => 178,
                'endereco' => 'Rua Abiu, Rio Branco - AC, 90',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-367',
                'created_at' => '2021-01-18 06:27:46',
                'updated_at' => '2021-01-18 06:27:46',
            ),
            178 => 
            array (
                'id' => 179,
                'endereco' => 'Travessa Ramos Ferreira, Rio Branco - AC, 28',
                'bairro' => 'Pista',
                'cep' => '69.911-190',
                'created_at' => '2021-01-18 06:28:09',
                'updated_at' => '2021-01-18 06:28:09',
            ),
            179 => 
            array (
                'id' => 180,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 151',
                'bairro' => 'Placas',
                'cep' => '69.902-768',
                'created_at' => '2021-01-18 06:29:02',
                'updated_at' => '2021-01-18 06:29:02',
            ),
            180 => 
            array (
                'id' => 181,
                'endereco' => 'Beco da Cigana, Rio Branco - AC, 16',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-608',
                'created_at' => '2021-01-18 06:29:24',
                'updated_at' => '2021-01-18 06:29:24',
            ),
            181 => 
            array (
                'id' => 182,
                'endereco' => 'Rua Poços de Caldas, Rio Branco - AC, 463',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-440',
                'created_at' => '2021-01-18 06:30:01',
                'updated_at' => '2021-01-18 06:30:01',
            ),
            182 => 
            array (
                'id' => 183,
                'endereco' => 'Rua Almirante Barbosa, Rio Branco - AC, 435',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-298',
                'created_at' => '2021-01-18 06:30:03',
                'updated_at' => '2021-01-18 06:30:03',
            ),
            183 => 
            array (
                'id' => 184,
                'endereco' => 'Rua Rio de Janeiro, Rio Branco - AC, ',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-749',
                'created_at' => '2021-01-18 06:30:39',
                'updated_at' => '2021-01-18 06:30:39',
            ),
            184 => 
            array (
                'id' => 185,
                'endereco' => 'Rua Diamantina, Rio Branco - AC, 458',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-424',
                'created_at' => '2021-01-18 06:31:32',
                'updated_at' => '2021-01-18 06:31:32',
            ),
            185 => 
            array (
                'id' => 186,
                'endereco' => 'Rua Ubatuba, Rio Branco - AC, 301',
                'bairro' => 'Bairro calafate conjunto arueira',
                'cep' => '69.918-506',
                'created_at' => '2021-01-18 06:32:13',
                'updated_at' => '2021-01-18 06:32:13',
            ),
            186 => 
            array (
                'id' => 187,
                'endereco' => 'Rua Jerusalém II, Rio Branco - AC, 61',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-018',
                'created_at' => '2021-01-18 06:32:56',
                'updated_at' => '2021-01-18 06:32:56',
            ),
            187 => 
            array (
                'id' => 188,
                'endereco' => 'Rua São José, Rio Branco - AC, 155',
                'bairro' => 'Residencial Araçá',
                'cep' => '69.915-362',
                'created_at' => '2021-01-18 06:33:28',
                'updated_at' => '2021-01-18 06:33:28',
            ),
            188 => 
            array (
                'id' => 189,
                'endereco' => 'Rua Pereira, Rio Branco - AC, 81',
                'bairro' => 'Waldemar Maciel',
                'cep' => '69.914-270',
                'created_at' => '2021-01-18 06:34:48',
                'updated_at' => '2021-01-18 06:34:48',
            ),
            189 => 
            array (
                'id' => 190,
                'endereco' => 'Rua das Oliveiras, Rio Branco - AC, 655',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-224',
                'created_at' => '2021-01-18 06:34:55',
                'updated_at' => '2021-01-18 06:34:55',
            ),
            190 => 
            array (
                'id' => 191,
                'endereco' => 'Rua Rio de Janeiro, Rio Branco - AC, ',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-749',
                'created_at' => '2021-01-18 06:35:00',
                'updated_at' => '2021-01-18 06:35:00',
            ),
            191 => 
            array (
                'id' => 192,
                'endereco' => 'Rua Quinha Gomes, Rio Branco - AC, 131',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-235',
                'created_at' => '2021-01-18 06:35:03',
                'updated_at' => '2021-01-18 06:35:03',
            ),
            192 => 
            array (
                'id' => 193,
                'endereco' => 'Rua 25 de Dezembro, Rio Branco - AC, 194',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-204',
                'created_at' => '2021-01-18 06:35:47',
                'updated_at' => '2021-01-18 06:35:47',
            ),
            193 => 
            array (
                'id' => 194,
                'endereco' => 'Travessa do Galo, Rio Branco - AC, 81',
                'bairro' => 'São Francisco',
                'cep' => '69.901-546',
                'created_at' => '2021-01-18 06:36:00',
                'updated_at' => '2021-01-18 06:36:00',
            ),
            194 => 
            array (
                'id' => 195,
                'endereco' => 'Rua 12 de Julho, Rio Branco - AC, 41',
                'bairro' => 'Doca Furtado',
                'cep' => '69.918-134',
                'created_at' => '2021-01-18 06:37:00',
                'updated_at' => '2021-01-18 06:37:00',
            ),
            195 => 
            array (
                'id' => 196,
                'endereco' => 'Rua Senador Kairala, Rio Branco - AC, 525',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-358',
                'created_at' => '2021-01-18 06:37:27',
                'updated_at' => '2021-01-18 06:37:27',
            ),
            196 => 
            array (
                'id' => 197,
                'endereco' => 'Rua João Pessoa, Rio Branco - AC, 92',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-606',
                'created_at' => '2021-01-18 06:37:29',
                'updated_at' => '2021-01-18 06:37:29',
            ),
            197 => 
            array (
                'id' => 198,
                'endereco' => 'Avenida General Vieira de Melo, 1180',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.918-178',
                'created_at' => '2021-01-18 06:38:12',
                'updated_at' => '2021-01-18 06:38:12',
            ),
            198 => 
            array (
                'id' => 199,
                'endereco' => 'Rua Álvaro Inácio, Rio Branco - AC, 798',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-118',
                'created_at' => '2021-01-18 06:39:18',
                'updated_at' => '2021-01-18 06:39:18',
            ),
            199 => 
            array (
                'id' => 200,
                'endereco' => 'Avenida Recanto Verde, Rio Branco - AC, 550',
                'bairro' => 'Residencial la reserve residence',
                'cep' => '69.919-182',
                'created_at' => '2021-01-18 06:39:28',
                'updated_at' => '2021-01-18 06:39:28',
            ),
            200 => 
            array (
                'id' => 201,
                'endereco' => 'Rua São Francisco, Rio Branco - AC, 104',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-446',
                'created_at' => '2021-01-18 06:40:15',
                'updated_at' => '2021-01-18 06:40:15',
            ),
            201 => 
            array (
                'id' => 202,
                'endereco' => 'Rua Major Martins, Rio Branco - AC, 46',
                'bairro' => 'CONJUNTO.Tangara',
                'cep' => '69.915-020',
                'created_at' => '2021-01-18 06:41:06',
                'updated_at' => '2021-01-18 06:41:06',
            ),
            202 => 
            array (
                'id' => 203,
                'endereco' => 'Rua Botafogo, Rio Branco - AC, 980',
                'bairro' => 'Paz',
                'cep' => '69.919-264',
                'created_at' => '2021-01-18 06:41:06',
                'updated_at' => '2021-01-18 06:41:06',
            ),
            203 => 
            array (
                'id' => 204,
                'endereco' => 'Rua 1º de Maio, Rio Branco - AC, 895',
                'bairro' => 'Seis de AGOSTO',
                'cep' => '69.905-626',
                'created_at' => '2021-01-18 06:41:08',
                'updated_at' => '2021-01-18 06:41:08',
            ),
            204 => 
            array (
                'id' => 205,
                'endereco' => 'Rua Havai, Rio Branco - AC, 121',
                'bairro' => 'Glória',
                'cep' => '69.911-126',
                'created_at' => '2021-01-18 06:42:32',
                'updated_at' => '2021-01-18 06:42:32',
            ),
            205 => 
            array (
                'id' => 206,
                'endereco' => '...travessa Alzira, 173',
                'bairro' => 'Vila bem fica',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 06:42:40',
                'updated_at' => '2021-01-18 06:42:40',
            ),
            206 => 
            array (
                'id' => 207,
                'endereco' => 'Travessa Monte Alegre, Rio Branco - AC, 195',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-743',
                'created_at' => '2021-01-18 06:42:42',
                'updated_at' => '2021-01-18 06:42:42',
            ),
            207 => 
            array (
                'id' => 208,
                'endereco' => 'Rua São Marcos, Rio Branco - AC, 271',
                'bairro' => 'Conjunto Habitar Brasil',
                'cep' => '69.915-380',
                'created_at' => '2021-01-18 06:42:56',
                'updated_at' => '2021-01-18 06:42:56',
            ),
            208 => 
            array (
                'id' => 209,
                'endereco' => 'Rua 25 de Dezembro, Rio Branco - AC, 194',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-204',
                'created_at' => '2021-01-18 06:43:40',
                'updated_at' => '2021-01-18 06:43:40',
            ),
            209 => 
            array (
                'id' => 210,
                'endereco' => 'Rua Botafogo, Rio Branco - AC, 980',
                'bairro' => 'Paz',
                'cep' => '69.919-264',
                'created_at' => '2021-01-18 06:43:44',
                'updated_at' => '2021-01-18 06:43:44',
            ),
            210 => 
            array (
                'id' => 211,
                'endereco' => 'Rua Rio de Janeiro, Rio Branco - AC, 988',
                'bairro' => 'Abraão Alab',
                'cep' => '69.918-060',
                'created_at' => '2021-01-18 06:43:45',
                'updated_at' => '2021-01-18 06:43:45',
            ),
            211 => 
            array (
                'id' => 212,
                'endereco' => 'Rua João Pessoa, Rio Branco - AC, 92',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-606',
                'created_at' => '2021-01-18 06:44:40',
                'updated_at' => '2021-01-18 06:44:40',
            ),
            212 => 
            array (
                'id' => 213,
                'endereco' => 'Rua Hidelfonso Cordeiro, Rio Branco - AC, 781',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-808',
                'created_at' => '2021-01-18 06:45:04',
                'updated_at' => '2021-01-18 06:45:04',
            ),
            213 => 
            array (
                'id' => 214,
                'endereco' => 'Rua Santa Helena, Rio Branco - AC, 333',
                'bairro' => 'Isaura PARENTE',
                'cep' => '69.918-296',
                'created_at' => '2021-01-18 06:45:56',
                'updated_at' => '2021-01-18 06:45:56',
            ),
            214 => 
            array (
                'id' => 215,
                'endereco' => 'Rua Cristo Rei, Rio Branco - AC, 90',
                'bairro' => 'Nova ESPERANÇA',
                'cep' => '69.915-216',
                'created_at' => '2021-01-18 06:46:00',
                'updated_at' => '2021-01-18 06:46:00',
            ),
            215 => 
            array (
                'id' => 216,
                'endereco' => 'Travessa São Sebastião, Rio Branco - AC, 59',
                'bairro' => 'Isaura parente',
                'cep' => '69.918-326',
                'created_at' => '2021-01-18 06:46:13',
                'updated_at' => '2021-01-18 06:46:13',
            ),
            216 => 
            array (
                'id' => 217,
                'endereco' => 'ramal castanheira / travessa da família, 117',
                'bairro' => 'santa maria',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 06:47:10',
                'updated_at' => '2021-01-18 06:47:10',
            ),
            217 => 
            array (
                'id' => 218,
                'endereco' => 'Rua São Marcos, Rio Branco - AC, 271',
                'bairro' => 'Conjunto Habitar Brasil',
                'cep' => '69.915-380',
                'created_at' => '2021-01-18 06:47:55',
                'updated_at' => '2021-01-18 06:47:55',
            ),
            218 => 
            array (
                'id' => 219,
                'endereco' => 'Rua Valdomiro Lopes, Rio Branco - AC, 1443',
                'bairro' => 'Geraldo FLEMING',
                'cep' => '69.918-860',
                'created_at' => '2021-01-18 06:48:13',
                'updated_at' => '2021-01-18 06:48:13',
            ),
            219 => 
            array (
                'id' => 220,
                'endereco' => 'Estrada Raimundo Irineu Serra, Rio Branco - AC, 879',
                'bairro' => 'Loteamento Novo Horizonte',
                'cep' => '69.921-134',
                'created_at' => '2021-01-18 06:48:54',
                'updated_at' => '2021-01-18 06:48:54',
            ),
            220 => 
            array (
                'id' => 221,
                'endereco' => 'Rua Coelho Ramos, Rio Branco - AC, 46',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-454',
                'created_at' => '2021-01-18 06:49:10',
                'updated_at' => '2021-01-18 06:49:10',
            ),
            221 => 
            array (
                'id' => 222,
                'endereco' => 'Rua Havai, Rio Branco - AC, 121',
                'bairro' => 'Glória',
                'cep' => '69.911-126',
                'created_at' => '2021-01-18 06:50:25',
                'updated_at' => '2021-01-18 06:50:25',
            ),
            222 => 
            array (
                'id' => 223,
                'endereco' => 'Rua Ciro Facundo de Almeida, Rio Branco - AC, 388',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-838',
                'created_at' => '2021-01-18 06:50:30',
                'updated_at' => '2021-01-18 06:50:30',
            ),
            223 => 
            array (
                'id' => 224,
                'endereco' => 'Travessa São Sebastião, Rio Branco - AC, 59',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-326',
                'created_at' => '2021-01-18 06:50:51',
                'updated_at' => '2021-01-18 06:50:51',
            ),
            224 => 
            array (
                'id' => 225,
                'endereco' => 'Rua Saulo, Rio Branco - AC, 268',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-350',
                'created_at' => '2021-01-18 06:51:03',
                'updated_at' => '2021-01-18 06:51:03',
            ),
            225 => 
            array (
                'id' => 226,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 150',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-208',
                'created_at' => '2021-01-18 06:52:14',
                'updated_at' => '2021-01-18 06:52:14',
            ),
            226 => 
            array (
                'id' => 227,
                'endereco' => 'Rua Nonato Correia Lima, Rio Branco - AC, 401',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-852',
                'created_at' => '2021-01-18 06:52:24',
                'updated_at' => '2021-01-18 06:52:24',
            ),
            227 => 
            array (
                'id' => 228,
                'endereco' => 'Travessa da Melancia, Rio Branco - AC, 200',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-084',
                'created_at' => '2021-01-18 06:52:38',
                'updated_at' => '2021-01-18 06:52:38',
            ),
            228 => 
            array (
                'id' => 229,
                'endereco' => 'Avenida Beira Rio, Rio Branco - AC, 476',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-404',
                'created_at' => '2021-01-18 06:53:13',
                'updated_at' => '2021-01-18 06:53:13',
            ),
            229 => 
            array (
                'id' => 230,
                'endereco' => 'Rua Francisco Freitas, Rio Branco - AC, 283',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-280',
                'created_at' => '2021-01-18 06:53:17',
                'updated_at' => '2021-01-18 06:53:17',
            ),
            230 => 
            array (
                'id' => 231,
                'endereco' => 'Rua Padre Eustáquio, Rio Branco - AC, 49',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-232',
                'created_at' => '2021-01-18 06:53:56',
                'updated_at' => '2021-01-18 06:53:56',
            ),
            231 => 
            array (
                'id' => 232,
                'endereco' => 'Travessa São Sebastião, Rio Branco - AC, 59',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-326',
                'created_at' => '2021-01-18 06:54:28',
                'updated_at' => '2021-01-18 06:54:28',
            ),
            232 => 
            array (
                'id' => 233,
                'endereco' => 'Rua Nobre, Rio Branco - AC, 161',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-738',
                'created_at' => '2021-01-18 06:54:29',
                'updated_at' => '2021-01-18 06:54:29',
            ),
            233 => 
            array (
                'id' => 234,
                'endereco' => 'Rua 11 de Dezembro, Rio Branco - AC, 188',
                'bairro' => 'Sobral',
                'cep' => '69.912-006',
                'created_at' => '2021-01-18 06:54:33',
                'updated_at' => '2021-01-18 06:54:33',
            ),
            234 => 
            array (
                'id' => 235,
                'endereco' => 'Rua Projetada 1043, Rio Branco - AC, 05',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-100',
                'created_at' => '2021-01-18 06:55:21',
                'updated_at' => '2021-01-18 06:55:21',
            ),
            235 => 
            array (
                'id' => 236,
                'endereco' => 'Travessa Manuel Bandeira, Rio Branco - AC, 101',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-012',
                'created_at' => '2021-01-18 06:55:33',
                'updated_at' => '2021-01-18 06:55:33',
            ),
            236 => 
            array (
                'id' => 237,
                'endereco' => 'Rua I, Rio Branco - AC, 64',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-758',
                'created_at' => '2021-01-18 06:56:49',
                'updated_at' => '2021-01-18 06:56:49',
            ),
            237 => 
            array (
                'id' => 238,
                'endereco' => 'Rua 25 de Dezembro, Rio Branco - AC, 194',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-204',
                'created_at' => '2021-01-18 06:56:53',
                'updated_at' => '2021-01-18 06:56:53',
            ),
            238 => 
            array (
                'id' => 239,
                'endereco' => 'Rua Niterói, Rio Branco - AC, 21',
                'bairro' => 'Conquista',
                'cep' => '69.918-788',
                'created_at' => '2021-01-18 06:56:59',
                'updated_at' => '2021-01-18 06:56:59',
            ),
            239 => 
            array (
                'id' => 240,
                'endereco' => 'Rua Allan Victor, Rio Branco - AC, 161',
                'bairro' => 'Sobral',
                'cep' => '69.912-014',
                'created_at' => '2021-01-18 06:57:01',
                'updated_at' => '2021-01-18 06:57:01',
            ),
            240 => 
            array (
                'id' => 241,
                'endereco' => 'Rua Padre Eustáquio, Rio Branco - AC, 49',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-232',
                'created_at' => '2021-01-18 06:57:06',
                'updated_at' => '2021-01-18 06:57:06',
            ),
            241 => 
            array (
                'id' => 242,
                'endereco' => 'Rua Longuinho da Silva, Rio Branco - AC, 229',
                'bairro' => 'Tangará',
                'cep' => '69.915-028',
                'created_at' => '2021-01-18 06:58:04',
                'updated_at' => '2021-01-18 06:58:04',
            ),
            242 => 
            array (
                'id' => 243,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1893',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-18 06:58:18',
                'updated_at' => '2021-01-18 06:58:18',
            ),
            243 => 
            array (
                'id' => 244,
                'endereco' => 'Estrada do Panorama, Rio Branco - AC, 2722',
                'bairro' => 'Loteamento Jardim São Francisco',
                'cep' => '69.902-100',
                'created_at' => '2021-01-18 06:58:23',
                'updated_at' => '2021-01-18 06:58:23',
            ),
            244 => 
            array (
                'id' => 245,
                'endereco' => 'Rua Delmar Pismel, Rio Branco - AC, 107',
                'bairro' => 'Conjunto Guiomard Santos',
                'cep' => '69.901-411',
                'created_at' => '2021-01-18 06:58:24',
                'updated_at' => '2021-01-18 06:58:24',
            ),
            245 => 
            array (
                'id' => 246,
                'endereco' => 'Travessa Amazônia, 104',
                'bairro' => 'Areal',
                'cep' => '69.905-887',
                'created_at' => '2021-01-18 06:59:10',
                'updated_at' => '2021-01-18 06:59:10',
            ),
            246 => 
            array (
                'id' => 247,
                'endereco' => '..., 357',
                'bairro' => '...',
                'cep' => '69.907-665',
                'created_at' => '2021-01-18 06:59:11',
                'updated_at' => '2021-01-18 06:59:11',
            ),
            247 => 
            array (
                'id' => 248,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 150',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-208',
                'created_at' => '2021-01-18 06:59:13',
                'updated_at' => '2021-01-18 06:59:13',
            ),
            248 => 
            array (
                'id' => 249,
                'endereco' => 'Rua Santa Luzia, Rio Branco - AC, 249',
                'bairro' => 'Eldorado',
                'cep' => '69.902-422',
                'created_at' => '2021-01-18 06:59:50',
                'updated_at' => '2021-01-18 06:59:50',
            ),
            249 => 
            array (
                'id' => 250,
                'endereco' => 'Rua Tiradentes, Rio Branco - AC, 02',
                'bairro' => 'Quinze',
                'cep' => '69.905-500',
                'created_at' => '2021-01-18 07:01:07',
                'updated_at' => '2021-01-18 07:01:07',
            ),
            250 => 
            array (
                'id' => 251,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC V08 AP103, 1893',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-18 07:01:56',
                'updated_at' => '2021-01-18 07:01:56',
            ),
            251 => 
            array (
                'id' => 252,
                'endereco' => 'Rua Álvaro Inácio, Rio Branco - AC, 351',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-118',
                'created_at' => '2021-01-18 07:01:57',
                'updated_at' => '2021-01-18 07:01:57',
            ),
            252 => 
            array (
                'id' => 253,
                'endereco' => 'Rua Severiano, Rio Branco - AC, 395',
                'bairro' => 'Bosque',
                'cep' => '69.900-511',
                'created_at' => '2021-01-18 07:01:58',
                'updated_at' => '2021-01-18 07:01:58',
            ),
            253 => 
            array (
                'id' => 254,
                'endereco' => 'Avenida Recanto Verde, Rio Branco - AC, 550',
                'bairro' => 'residencial la reserve residence',
                'cep' => '69.919-182',
                'created_at' => '2021-01-18 07:02:14',
                'updated_at' => '2021-01-18 07:02:14',
            ),
            254 => 
            array (
                'id' => 255,
                'endereco' => 'Rua 12, Rio Branco - AC, 39',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 07:02:50',
                'updated_at' => '2021-01-18 07:02:50',
            ),
            255 => 
            array (
                'id' => 256,
                'endereco' => '..., 122',
                'bairro' => '...',
                'cep' => '69.912-060',
                'created_at' => '2021-01-18 07:03:06',
                'updated_at' => '2021-01-18 07:03:06',
            ),
            256 => 
            array (
                'id' => 257,
                'endereco' => 'Rua 25 de Dezembro, Rio Branco - AC, ',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-204',
                'created_at' => '2021-01-18 07:03:09',
                'updated_at' => '2021-01-18 07:03:09',
            ),
            257 => 
            array (
                'id' => 258,
                'endereco' => 'Rua Veterano R. Pinto, Rio Branco - AC, 184',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-412',
                'created_at' => '2021-01-18 07:03:09',
                'updated_at' => '2021-01-18 07:03:09',
            ),
            258 => 
            array (
                'id' => 259,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 150',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-208',
                'created_at' => '2021-01-18 07:04:12',
                'updated_at' => '2021-01-18 07:04:12',
            ),
            259 => 
            array (
                'id' => 260,
                'endereco' => 'Avenida Sul, Rio Branco - AC, 558',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-676',
                'created_at' => '2021-01-18 07:04:16',
                'updated_at' => '2021-01-18 07:04:16',
            ),
            260 => 
            array (
                'id' => 261,
                'endereco' => 'Rua Geraldo Mesquita, Rio Branco - AC, 154',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-202',
                'created_at' => '2021-01-18 07:05:38',
                'updated_at' => '2021-01-18 07:05:38',
            ),
            261 => 
            array (
                'id' => 262,
                'endereco' => 'Travessa Franco Silva, Rio Branco - AC, 46',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-090',
                'created_at' => '2021-01-18 07:05:46',
                'updated_at' => '2021-01-18 07:05:46',
            ),
            262 => 
            array (
                'id' => 263,
                'endereco' => 'Travessa do Hemoacre, Rio Branco - AC, 246',
                'bairro' => 'BOSQUE',
                'cep' => '69.900-604',
                'created_at' => '2021-01-18 07:06:37',
                'updated_at' => '2021-01-18 07:06:37',
            ),
            263 => 
            array (
                'id' => 264,
                'endereco' => 'Travessa da Hosana, Rio Branco - AC, 299',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-676',
                'created_at' => '2021-01-18 07:06:52',
                'updated_at' => '2021-01-18 07:06:52',
            ),
            264 => 
            array (
                'id' => 265,
                'endereco' => 'Rua Santa Luzia, Rio Branco - AC, 450',
                'bairro' => 'Eldorado',
                'cep' => '69.902-422',
                'created_at' => '2021-01-18 07:07:32',
                'updated_at' => '2021-01-18 07:07:32',
            ),
            265 => 
            array (
                'id' => 266,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 453',
                'bairro' => 'Seis de Agostos',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 07:07:34',
                'updated_at' => '2021-01-18 07:07:34',
            ),
            266 => 
            array (
                'id' => 267,
                'endereco' => 'Ramal da Judia, Rio Branco - AC, 208',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-860',
                'created_at' => '2021-01-18 07:08:18',
                'updated_at' => '2021-01-18 07:08:18',
            ),
            267 => 
            array (
                'id' => 268,
                'endereco' => 'Avenida Altamira, Rio Branco - AC, 350',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-672',
                'created_at' => '2021-01-18 07:08:52',
                'updated_at' => '2021-01-18 07:08:52',
            ),
            268 => 
            array (
                'id' => 269,
                'endereco' => 'Rua Cruzeiro do Sul, Rio Branco - AC, 652',
                'bairro' => 'LBA Vila Betel',
                'cep' => '69.915-288',
                'created_at' => '2021-01-18 07:08:58',
                'updated_at' => '2021-01-18 07:08:58',
            ),
            269 => 
            array (
                'id' => 270,
                'endereco' => 'Rua Lourival Ribeiro, Rio Branco - AC, 151',
                'bairro' => 'Taquarí',
                'cep' => '69.906-408',
                'created_at' => '2021-01-18 07:09:11',
                'updated_at' => '2021-01-18 07:09:11',
            ),
            270 => 
            array (
                'id' => 271,
                'endereco' => 'Travessa Monte Sinai, Rio Branco - AC, 795',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-662',
                'created_at' => '2021-01-18 07:09:38',
                'updated_at' => '2021-01-18 07:09:38',
            ),
            271 => 
            array (
                'id' => 272,
                'endereco' => 'Rua Paris, Rio Branco - AC, 30',
                'bairro' => 'Baixada da Habitasa',
                'cep' => '69.905-154',
                'created_at' => '2021-01-18 07:10:04',
                'updated_at' => '2021-01-18 07:10:04',
            ),
            272 => 
            array (
                'id' => 273,
                'endereco' => 'Rua 10 de Junho, Rio Branco - AC, 166',
                'bairro' => 'Casa Nova',
                'cep' => '69.901-270',
                'created_at' => '2021-01-18 07:10:43',
                'updated_at' => '2021-01-18 07:10:43',
            ),
            273 => 
            array (
                'id' => 274,
                'endereco' => 'Rua Jerusalém, Rio Branco - AC, 338',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-682',
                'created_at' => '2021-01-18 07:11:07',
                'updated_at' => '2021-01-18 07:11:07',
            ),
            274 => 
            array (
                'id' => 275,
                'endereco' => 'Rua Flamengo, Rio Branco - AC, 315',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-238',
                'created_at' => '2021-01-18 07:11:16',
                'updated_at' => '2021-01-18 07:11:16',
            ),
            275 => 
            array (
                'id' => 276,
                'endereco' => 'Travessa Baixa da Colina, Rio Branco - AC, 68',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-334',
                'created_at' => '2021-01-18 07:11:30',
                'updated_at' => '2021-01-18 07:11:30',
            ),
            276 => 
            array (
                'id' => 277,
                'endereco' => 'Rua Raimundo Guerra, Rio Branco - AC, 93',
                'bairro' => 'Comara',
                'cep' => '69.906-348',
                'created_at' => '2021-01-18 07:11:40',
                'updated_at' => '2021-01-18 07:11:40',
            ),
            277 => 
            array (
                'id' => 278,
                'endereco' => 'Travessa Santa Rosa, Rio Branco - AC, 170',
                'bairro' => 'Calafate',
                'cep' => '69.914-336',
                'created_at' => '2021-01-18 07:12:15',
                'updated_at' => '2021-01-18 07:12:15',
            ),
            278 => 
            array (
                'id' => 279,
                'endereco' => 'Rua Maria Ribeiro, Rio Branco - AC, 27',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-226',
                'created_at' => '2021-01-18 07:13:16',
                'updated_at' => '2021-01-18 07:13:16',
            ),
            279 => 
            array (
                'id' => 280,
                'endereco' => 'Rua Bom Jesus, Rio Branco - AC, 59',
                'bairro' => 'Bahia Velha',
                'cep' => '69.911-580',
                'created_at' => '2021-01-18 07:14:09',
                'updated_at' => '2021-01-18 07:14:09',
            ),
            280 => 
            array (
                'id' => 281,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 27',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-420',
                'created_at' => '2021-01-18 07:14:13',
                'updated_at' => '2021-01-18 07:14:13',
            ),
            281 => 
            array (
                'id' => 282,
                'endereco' => 'Avenida Altamira, Rio Branco - AC, ',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-672',
                'created_at' => '2021-01-18 07:14:28',
                'updated_at' => '2021-01-18 07:14:28',
            ),
            282 => 
            array (
                'id' => 283,
                'endereco' => 'Rodovia ac- 40 km 10 travessa KATERINE, 57',
                'bairro' => 'SANTA Maria',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 07:14:53',
                'updated_at' => '2021-01-18 07:14:53',
            ),
            283 => 
            array (
                'id' => 284,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 664',
                'bairro' => 'Preventório',
                'cep' => '69.900-120',
                'created_at' => '2021-01-18 07:14:53',
                'updated_at' => '2021-01-18 07:14:53',
            ),
            284 => 
            array (
                'id' => 285,
                'endereco' => 'Travessa do Beijo, Rio Branco - AC, 80',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-280',
                'created_at' => '2021-01-18 07:15:37',
                'updated_at' => '2021-01-18 07:15:37',
            ),
            285 => 
            array (
                'id' => 286,
                'endereco' => 'Travessa Rio Branco, Rio Branco - AC, 70',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-832',
                'created_at' => '2021-01-18 07:16:12',
                'updated_at' => '2021-01-18 07:16:12',
            ),
            286 => 
            array (
                'id' => 287,
                'endereco' => 'Rua Flamengo, Rio Branco - AC, 315',
                'bairro' => 'Alto ALEGRE',
                'cep' => '69.921-238',
                'created_at' => '2021-01-18 07:17:17',
                'updated_at' => '2021-01-18 07:17:17',
            ),
            287 => 
            array (
                'id' => 288,
                'endereco' => 'rua boa vista, 88',
                'bairro' => 'Conjunto mariana',
                'cep' => '69.919-194',
                'created_at' => '2021-01-18 07:17:26',
                'updated_at' => '2021-01-18 07:17:26',
            ),
            288 => 
            array (
                'id' => 289,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 20',
                'bairro' => 'Conjunto Adalberto SEna',
                'cep' => '69.921-194',
                'created_at' => '2021-01-18 07:17:32',
                'updated_at' => '2021-01-18 07:17:32',
            ),
            289 => 
            array (
                'id' => 290,
                'endereco' => 'Rua Acre, Rio Branco - AC, 78',
                'bairro' => 'Vila da AMIZADE',
                'cep' => '69.909-669',
                'created_at' => '2021-01-18 07:17:41',
                'updated_at' => '2021-01-18 07:17:41',
            ),
            290 => 
            array (
                'id' => 291,
                'endereco' => 'Rua Plácido de Castro, Rio Branco - AC, 150',
                'bairro' => 'Aeroporto Velhoaeroporto',
                'cep' => '69.911-063',
                'created_at' => '2021-01-18 07:18:59',
                'updated_at' => '2021-01-18 07:18:59',
            ),
            291 => 
            array (
                'id' => 292,
                'endereco' => 'Travessa No Limite, Rio Branco - AC, 41',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-138',
                'created_at' => '2021-01-18 07:19:08',
                'updated_at' => '2021-01-18 07:19:08',
            ),
            292 => 
            array (
                'id' => 293,
                'endereco' => 'Estrada da Floresta,Cond via parque, Rio Branco - AC, 1893',
                'bairro' => 'Floresta SUL',
                'cep' => '69.912-452',
                'created_at' => '2021-01-18 07:19:19',
                'updated_at' => '2021-01-18 07:19:19',
            ),
            293 => 
            array (
                'id' => 294,
                'endereco' => 'Travessa Morada do Sol, Rio Branco - AC, 145',
                'bairro' => 'Taquarí',
                'cep' => '69.906-476',
                'created_at' => '2021-01-18 07:19:40',
                'updated_at' => '2021-01-18 07:19:40',
            ),
            294 => 
            array (
                'id' => 295,
                'endereco' => 'Rua Estácio de Sá, Rio Branco - AC, 171',
                'bairro' => 'José Augusto',
                'cep' => '69.900-794',
                'created_at' => '2021-01-18 07:19:43',
                'updated_at' => '2021-01-18 07:19:43',
            ),
            295 => 
            array (
                'id' => 296,
                'endereco' => 'Rua Maria Ribeiro, Rio Branco - AC, 27',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-226',
                'created_at' => '2021-01-18 07:19:59',
                'updated_at' => '2021-01-18 07:19:59',
            ),
            296 => 
            array (
                'id' => 297,
                'endereco' => 'Rua General Vieira de Melo, Rio Branco - AC, 830',
                'bairro' => 'Conjunto ESPERANÇA',
                'cep' => '69.915-178',
                'created_at' => '2021-01-18 07:20:19',
                'updated_at' => '2021-01-18 07:20:19',
            ),
            297 => 
            array (
                'id' => 298,
                'endereco' => 'Rua 16 de Julho, Rio Branco - AC, 490',
                'bairro' => 'Boa união',
                'cep' => '69.911-780',
                'created_at' => '2021-01-18 07:21:43',
                'updated_at' => '2021-01-18 07:21:43',
            ),
            298 => 
            array (
                'id' => 299,
                'endereco' => 'Rua Raimundo Herculano, Rio Branco - AC, 339',
                'bairro' => 'Rosa Linda',
                'cep' => '69.909-072',
                'created_at' => '2021-01-18 07:21:56',
                'updated_at' => '2021-01-18 07:21:56',
            ),
            299 => 
            array (
                'id' => 300,
                'endereco' => 'Rua Ayrton Senna, Rio Branco - AC, 262',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-032',
                'created_at' => '2021-01-18 07:22:04',
                'updated_at' => '2021-01-18 07:22:04',
            ),
            300 => 
            array (
                'id' => 301,
                'endereco' => 'Travessa Rio Branco, Rio Branco - AC, 70',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-832',
                'created_at' => '2021-01-18 07:22:31',
                'updated_at' => '2021-01-18 07:22:31',
            ),
            301 => 
            array (
                'id' => 302,
                'endereco' => 'Rua Tijuca, Rio Branco - AC, 89',
                'bairro' => 'Conjunto Mascarenhas de Moraes',
                'cep' => '69.918-026',
                'created_at' => '2021-01-18 07:22:54',
                'updated_at' => '2021-01-18 07:22:54',
            ),
            302 => 
            array (
                'id' => 303,
                'endereco' => 'Avenida Edmundo Pinto, Rio Branco - AC, 246',
                'bairro' => 'Tangará',
                'cep' => '69.915-014',
                'created_at' => '2021-01-18 07:23:03',
                'updated_at' => '2021-01-18 07:23:03',
            ),
            303 => 
            array (
                'id' => 304,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 27',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-420',
                'created_at' => '2021-01-18 07:23:35',
                'updated_at' => '2021-01-18 07:23:35',
            ),
            304 => 
            array (
                'id' => 305,
                'endereco' => 'Avenida Doutor Mário Maia, Rio Branco - AC, 397',
                'bairro' => 'Conjunto Oscar Passos',
                'cep' => '69.901-664',
                'created_at' => '2021-01-18 07:25:22',
                'updated_at' => '2021-01-18 07:25:22',
            ),
            305 => 
            array (
                'id' => 306,
                'endereco' => 'Rua Londrina, Rio Branco - AC, 01',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-350',
                'created_at' => '2021-01-18 07:27:15',
                'updated_at' => '2021-01-18 07:27:15',
            ),
            306 => 
            array (
                'id' => 307,
                'endereco' => 'Rua dos Engenheiros ll, Rio Branco - AC, 62',
                'bairro' => 'Loteamento dos Engenheiros',
                'cep' => '69.919-056',
                'created_at' => '2021-01-18 07:29:12',
                'updated_at' => '2021-01-18 07:29:12',
            ),
            307 => 
            array (
                'id' => 308,
                'endereco' => 'Rua Margarida, Rio Branco - AC, 160',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-218',
                'created_at' => '2021-01-18 07:29:49',
                'updated_at' => '2021-01-18 07:29:49',
            ),
            308 => 
            array (
                'id' => 309,
                'endereco' => '..., 83',
                'bairro' => 'Cidade nova',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 07:29:54',
                'updated_at' => '2021-01-18 07:29:54',
            ),
            309 => 
            array (
                'id' => 310,
                'endereco' => 'Travessa Monte Sinai, Rio Branco - AC, 795',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-662',
                'created_at' => '2021-01-18 07:29:58',
                'updated_at' => '2021-01-18 07:29:58',
            ),
            310 => 
            array (
                'id' => 311,
                'endereco' => 'Rua Tomé de Souza, Rio Branco - AC, 89',
                'bairro' => 'Conjunto Castelo Branco',
                'cep' => '69.911-253',
                'created_at' => '2021-01-18 07:30:52',
                'updated_at' => '2021-01-18 07:30:52',
            ),
            311 => 
            array (
                'id' => 312,
                'endereco' => 'Rua Mulungu, Rio Branco - AC, 290',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-881',
                'created_at' => '2021-01-18 07:31:14',
                'updated_at' => '2021-01-18 07:31:14',
            ),
            312 => 
            array (
                'id' => 313,
                'endereco' => 'Beco da Alegria, Rio Branco - AC, 86',
                'bairro' => 'Vila ACRE',
                'cep' => '69.909-764',
                'created_at' => '2021-01-18 07:31:15',
                'updated_at' => '2021-01-18 07:31:15',
            ),
            313 => 
            array (
                'id' => 314,
                'endereco' => 'Rua São Lucas, Rio Branco - AC, 144',
                'bairro' => 'Glória',
                'cep' => '69.911-132',
                'created_at' => '2021-01-18 07:31:39',
                'updated_at' => '2021-01-18 07:31:39',
            ),
            314 => 
            array (
                'id' => 315,
                'endereco' => 'Rua 20 de Novembro, Rio Branco - AC, 321',
                'bairro' => 'Boa União',
                'cep' => '69.911-776',
                'created_at' => '2021-01-18 07:31:41',
                'updated_at' => '2021-01-18 07:31:41',
            ),
            315 => 
            array (
                'id' => 316,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 1528',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 07:31:42',
                'updated_at' => '2021-01-18 07:31:42',
            ),
            316 => 
            array (
                'id' => 317,
                'endereco' => 'Seis de Agosto, 665',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-590',
                'created_at' => '2021-01-18 07:32:16',
                'updated_at' => '2021-01-18 07:32:16',
            ),
            317 => 
            array (
                'id' => 318,
                'endereco' => 'Travessa Alexandre Lopes, Rio Branco - AC, 202',
                'bairro' => 'José Augusto',
                'cep' => '69.900-770',
                'created_at' => '2021-01-18 07:32:28',
                'updated_at' => '2021-01-18 07:32:28',
            ),
            318 => 
            array (
                'id' => 319,
                'endereco' => 'Rua Santo Antônio, Rio Branco - AC, 24',
                'bairro' => 'José Augusto',
                'cep' => '69.900-791',
                'created_at' => '2021-01-18 07:32:30',
                'updated_at' => '2021-01-18 07:32:30',
            ),
            319 => 
            array (
                'id' => 320,
                'endereco' => 'Rua Venezuela, Rio Branco - AC, 599',
                'bairro' => 'Habitasa',
                'cep' => '69.905-112',
                'created_at' => '2021-01-18 07:32:46',
                'updated_at' => '2021-01-18 07:32:46',
            ),
            320 => 
            array (
                'id' => 321,
                'endereco' => 'Rua Manoel Cassiano, Rio Branco - AC, 307',
                'bairro' => 'Bosque',
                'cep' => '69.900-436',
                'created_at' => '2021-01-18 07:32:53',
                'updated_at' => '2021-01-18 07:32:53',
            ),
            321 => 
            array (
                'id' => 322,
                'endereco' => 'Rua Primavera, Rio Branco - AC, 251',
                'bairro' => 'Baixa da Colina Aviário',
                'cep' => '69.901-349',
                'created_at' => '2021-01-18 07:32:58',
                'updated_at' => '2021-01-18 07:32:58',
            ),
            322 => 
            array (
                'id' => 323,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 56',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-292',
                'created_at' => '2021-01-18 07:34:00',
                'updated_at' => '2021-01-18 07:34:00',
            ),
            323 => 
            array (
                'id' => 324,
                'endereco' => 'Rua Antonio Ribeiro, Rio Branco - AC, 1276',
                'bairro' => 'Loteamento Santo',
                'cep' => '69.908-886',
                'created_at' => '2021-01-18 07:34:07',
                'updated_at' => '2021-01-18 07:34:07',
            ),
            324 => 
            array (
                'id' => 325,
                'endereco' => 'Rua Plácido de Castro, Rio Branco - AC, 29',
                'bairro' => 'Conjunto Laélia Alcântara',
                'cep' => '69.914-474',
                'created_at' => '2021-01-18 07:35:11',
                'updated_at' => '2021-01-18 07:35:11',
            ),
            325 => 
            array (
                'id' => 326,
                'endereco' => 'Rua Doutor Adalberto Costa e Silva, Rio Branco - AC, 81',
                'bairro' => 'Conjunto Guiomard Santos',
                'cep' => '69.901-375',
                'created_at' => '2021-01-18 07:35:51',
                'updated_at' => '2021-01-18 07:35:51',
            ),
            326 => 
            array (
                'id' => 327,
                'endereco' => 'Estrada das Placas, Rio Branco - AC, 870',
                'bairro' => 'Placas',
                'cep' => '69.902-770',
                'created_at' => '2021-01-18 07:36:01',
                'updated_at' => '2021-01-18 07:36:01',
            ),
            327 => 
            array (
                'id' => 328,
                'endereco' => 'Travessa Monte Sinai, Rio Branco - AC, 795',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-662',
                'created_at' => '2021-01-18 07:37:03',
                'updated_at' => '2021-01-18 07:37:03',
            ),
            328 => 
            array (
                'id' => 329,
            'endereco' => 'Área Rural, Rio Branco - AC (rua castro), 221',
            'bairro' => 'Área Rural de Rio Branco (benfica)',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 07:37:39',
                'updated_at' => '2021-01-18 07:37:39',
            ),
            329 => 
            array (
                'id' => 330,
                'endereco' => 'Rua Raimundo Escócio de Farias, Rio Branco - AC, 216',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-416',
                'created_at' => '2021-01-18 07:37:49',
                'updated_at' => '2021-01-18 07:37:49',
            ),
            330 => 
            array (
                'id' => 331,
                'endereco' => 'Rua Maria Ribeiro, Rio Branco - AC, 27',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-226',
                'created_at' => '2021-01-18 07:37:57',
                'updated_at' => '2021-01-18 07:37:57',
            ),
            331 => 
            array (
                'id' => 332,
                'endereco' => 'Rua Joaquim Macêdo, Rio Branco - AC, 1046',
                'bairro' => 'São Francisco',
                'cep' => '69.901-585',
                'created_at' => '2021-01-18 07:38:05',
                'updated_at' => '2021-01-18 07:38:05',
            ),
            332 => 
            array (
                'id' => 333,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 54',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-18 07:38:12',
                'updated_at' => '2021-01-18 07:38:12',
            ),
            333 => 
            array (
                'id' => 334,
                'endereco' => 'Rua Edmundo pinto, 378',
                'bairro' => 'São Francisco',
                'cep' => '69.901-640',
                'created_at' => '2021-01-18 07:39:00',
                'updated_at' => '2021-01-18 07:39:00',
            ),
            334 => 
            array (
                'id' => 335,
                'endereco' => '..., 389',
                'bairro' => '...',
                'cep' => '69.914-280',
                'created_at' => '2021-01-18 07:39:18',
                'updated_at' => '2021-01-18 07:39:18',
            ),
            335 => 
            array (
                'id' => 336,
                'endereco' => 'Travessa 11 de Agosto, Rio Branco - AC, 14',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-335',
                'created_at' => '2021-01-18 07:40:41',
                'updated_at' => '2021-01-18 07:40:41',
            ),
            336 => 
            array (
                'id' => 337,
                'endereco' => 'Rua Cajui, Rio Branco - AC, 195',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-346',
                'created_at' => '2021-01-18 07:41:02',
                'updated_at' => '2021-01-18 07:41:02',
            ),
            337 => 
            array (
                'id' => 338,
                'endereco' => 'Travessa Santa Bárbara, Rio Branco - AC, 230',
                'bairro' => 'Wanderley DANTAS',
                'cep' => '69.902-819',
                'created_at' => '2021-01-18 07:42:32',
                'updated_at' => '2021-01-18 07:42:32',
            ),
            338 => 
            array (
                'id' => 339,
                'endereco' => 'Rua Ponta Porã, Rio Branco - AC, 79',
                'bairro' => 'José Augusto',
                'cep' => '69.900-812',
                'created_at' => '2021-01-18 07:42:47',
                'updated_at' => '2021-01-18 07:42:47',
            ),
            339 => 
            array (
                'id' => 340,
                'endereco' => 'Travessa Amapá, Rio Branco - AC, 197',
                'bairro' => 'Cerâmica',
                'cep' => '69.905-060',
                'created_at' => '2021-01-18 07:42:55',
                'updated_at' => '2021-01-18 07:42:55',
            ),
            340 => 
            array (
                'id' => 341,
                'endereco' => 'Estrada das Placas, Rio Branco - AC, 870',
                'bairro' => 'PlacaS',
                'cep' => '69.902-770',
                'created_at' => '2021-01-18 07:43:47',
                'updated_at' => '2021-01-18 07:43:47',
            ),
            341 => 
            array (
                'id' => 342,
                'endereco' => 'Rua Rui Lino, Rio Branco - AC, 22',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-426',
                'created_at' => '2021-01-18 07:44:56',
                'updated_at' => '2021-01-18 07:44:56',
            ),
            342 => 
            array (
                'id' => 343,
                'endereco' => 'Residencial Macaua rua Sumaré, 47',
                'bairro' => 'Apolônio Sales',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 07:45:04',
                'updated_at' => '2021-01-18 07:45:04',
            ),
            343 => 
            array (
                'id' => 344,
                'endereco' => 'Rua Poços de Caldas, Rio Branco - AC, 523',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-440',
                'created_at' => '2021-01-18 07:45:06',
                'updated_at' => '2021-01-18 07:45:06',
            ),
            344 => 
            array (
                'id' => 345,
                'endereco' => 'Rua Murupi, Rio Branco - AC, 357',
                'bairro' => 'VITÓRIA',
                'cep' => '69.901-755',
                'created_at' => '2021-01-18 07:45:29',
                'updated_at' => '2021-01-18 07:45:29',
            ),
            345 => 
            array (
                'id' => 346,
                'endereco' => 'Rua João Nascimento, Rio Branco - AC, 70',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-162',
                'created_at' => '2021-01-18 07:45:39',
                'updated_at' => '2021-01-18 07:45:39',
            ),
            346 => 
            array (
                'id' => 347,
                'endereco' => 'Rua das flores, Rio Branco - AC, 302',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-663',
                'created_at' => '2021-01-18 07:46:07',
                'updated_at' => '2021-01-18 07:46:07',
            ),
            347 => 
            array (
                'id' => 348,
                'endereco' => 'Rua Jacarandá, Rio Branco - AC, 35',
                'bairro' => 'Loteamento Novo Horizonte',
                'cep' => '69.921-116',
                'created_at' => '2021-01-18 07:46:11',
                'updated_at' => '2021-01-18 07:46:11',
            ),
            348 => 
            array (
                'id' => 349,
                'endereco' => 'Travessa Santa Bárbara, Rio Branco - AC, 230',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-819',
                'created_at' => '2021-01-18 07:46:21',
                'updated_at' => '2021-01-18 07:46:21',
            ),
            349 => 
            array (
                'id' => 350,
                'endereco' => 'Ramal da escola, 20',
                'bairro' => 'Vila acre',
                'cep' => '68.909-800',
                'created_at' => '2021-01-18 07:46:39',
                'updated_at' => '2021-01-18 07:46:39',
            ),
            350 => 
            array (
                'id' => 351,
                'endereco' => 'Rua São Judas Tadeu, Rio Branco - AC, 305',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-696',
                'created_at' => '2021-01-18 07:47:11',
                'updated_at' => '2021-01-18 07:47:11',
            ),
            351 => 
            array (
                'id' => 352,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 2095',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 07:48:05',
                'updated_at' => '2021-01-18 07:48:05',
            ),
            352 => 
            array (
                'id' => 353,
                'endereco' => 'Estrada do Panorama, Rio Branco - AC, 2404',
                'bairro' => 'Loteamento Jardim São FRANCISco',
                'cep' => '69.902-100',
                'created_at' => '2021-01-18 07:48:37',
                'updated_at' => '2021-01-18 07:48:37',
            ),
            353 => 
            array (
                'id' => 354,
                'endereco' => 'Avenida Principal, Rio Branco - AC, 530',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-760',
                'created_at' => '2021-01-18 07:49:11',
                'updated_at' => '2021-01-18 07:49:11',
            ),
            354 => 
            array (
                'id' => 355,
                'endereco' => 'Rua Idelfonso de Almeida, Rio Branco - AC, 383',
                'bairro' => 'Wanderley DANTAS',
                'cep' => '69.902-855',
                'created_at' => '2021-01-18 07:49:32',
                'updated_at' => '2021-01-18 07:49:32',
            ),
            355 => 
            array (
                'id' => 356,
                'endereco' => 'Rua Campo Novo, Rio Branco - AC, 432',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-856',
                'created_at' => '2021-01-18 07:50:02',
                'updated_at' => '2021-01-18 07:50:02',
            ),
            356 => 
            array (
                'id' => 357,
                'endereco' => 'Rua Corumbá, Rio Branco - AC, 133',
                'bairro' => 'Nova ESTAÇÃO',
                'cep' => '69.918-374',
                'created_at' => '2021-01-18 07:51:51',
                'updated_at' => '2021-01-18 07:51:51',
            ),
            357 => 
            array (
                'id' => 358,
                'endereco' => 'Rua José Bispo, Rio Branco - AC, 40',
                'bairro' => 'Vila Nova',
                'cep' => '69.921-072',
                'created_at' => '2021-01-18 07:51:59',
                'updated_at' => '2021-01-18 07:51:59',
            ),
            358 => 
            array (
                'id' => 359,
                'endereco' => 'Ramal da Escola, Rio Branco - AC, 20',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-800',
                'created_at' => '2021-01-18 07:52:07',
                'updated_at' => '2021-01-18 07:52:07',
            ),
            359 => 
            array (
                'id' => 360,
                'endereco' => 'Rua Dom Bosco 2, Rio Branco - AC, 669',
                'bairro' => 'Bosque',
                'cep' => '69.900-676',
                'created_at' => '2021-01-18 07:52:26',
                'updated_at' => '2021-01-18 07:52:26',
            ),
            360 => 
            array (
                'id' => 361,
                'endereco' => 'Rua Leblon, Rio Branco - AC, 226',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-190',
                'created_at' => '2021-01-18 07:52:30',
                'updated_at' => '2021-01-18 07:52:30',
            ),
            361 => 
            array (
                'id' => 362,
                'endereco' => 'Rua das Rosas, Rio Branco - AC, 90',
                'bairro' => 'Via verde.Conjunto girasol',
                'cep' => '69.906-667',
                'created_at' => '2021-01-18 07:52:31',
                'updated_at' => '2021-01-18 07:52:31',
            ),
            362 => 
            array (
                'id' => 363,
                'endereco' => 'Rua Idelfonso de Almeida, Rio Branco - AC, 383',
                'bairro' => 'Wanderley DANTAS',
                'cep' => '69.902-855',
                'created_at' => '2021-01-18 07:53:02',
                'updated_at' => '2021-01-18 07:53:02',
            ),
            363 => 
            array (
                'id' => 364,
                'endereco' => 'Rua Maria da Conceição, Rio Branco - AC, 127',
                'bairro' => 'Tangará',
                'cep' => '69.915-026',
                'created_at' => '2021-01-18 07:53:46',
                'updated_at' => '2021-01-18 07:53:46',
            ),
            364 => 
            array (
                'id' => 365,
                'endereco' => 'Rua da Castanheira, Rio Branco - AC, 283',
                'bairro' => 'Vilage Wilde Maciel',
                'cep' => '69.918-488',
                'created_at' => '2021-01-18 07:54:19',
                'updated_at' => '2021-01-18 07:54:19',
            ),
            365 => 
            array (
                'id' => 366,
                'endereco' => 'Rua das Mangueiras, Rio Branco - AC, 90',
                'bairro' => 'Boa União',
                'cep' => '69.911-796',
                'created_at' => '2021-01-18 07:55:30',
                'updated_at' => '2021-01-18 07:55:30',
            ),
            366 => 
            array (
                'id' => 367,
                'endereco' => 'Rua Boulevard Augusto Monteiro, Rio Branco - AC, 23',
                'bairro' => 'Quinze',
                'cep' => '69.905-518',
                'created_at' => '2021-01-18 07:56:00',
                'updated_at' => '2021-01-18 07:56:00',
            ),
            367 => 
            array (
                'id' => 368,
                'endereco' => 'Rua Copaíba, Rio Branco - AC, 381',
                'bairro' => 'Vila Nova',
                'cep' => '69.921-094',
                'created_at' => '2021-01-18 07:56:08',
                'updated_at' => '2021-01-18 07:56:08',
            ),
            368 => 
            array (
                'id' => 369,
                'endereco' => 'Avenida Francisco Ribeiro, Rio Branco - AC, 329',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-890',
                'created_at' => '2021-01-18 07:56:28',
                'updated_at' => '2021-01-18 07:56:28',
            ),
            369 => 
            array (
                'id' => 370,
                'endereco' => 'Rua Veterano R. Pinto, Rio Branco - AC, 121',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-412',
                'created_at' => '2021-01-18 07:57:43',
                'updated_at' => '2021-01-18 07:57:43',
            ),
            370 => 
            array (
                'id' => 371,
                'endereco' => 'Rua Santa Rosa, Rio Branco - AC, 43',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-302',
                'created_at' => '2021-01-18 07:58:06',
                'updated_at' => '2021-01-18 07:58:06',
            ),
            371 => 
            array (
                'id' => 372,
                'endereco' => 'Travessa Manancial, Rio Branco - AC, 77',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-855',
                'created_at' => '2021-01-18 07:58:27',
                'updated_at' => '2021-01-18 07:58:27',
            ),
            372 => 
            array (
                'id' => 373,
                'endereco' => 'Rua Dom Bosco 2, Rio Branco - AC, 669',
                'bairro' => 'Bosque',
                'cep' => '69.900-676',
                'created_at' => '2021-01-18 07:58:46',
                'updated_at' => '2021-01-18 07:58:46',
            ),
            373 => 
            array (
                'id' => 374,
                'endereco' => 'Rua Gregório Filho, Rio Branco - AC, 56',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-690',
                'created_at' => '2021-01-18 07:58:59',
                'updated_at' => '2021-01-18 07:58:59',
            ),
            374 => 
            array (
                'id' => 375,
                'endereco' => ', Bujari - AC, 411',
                'bairro' => 'Centro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-18 07:59:07',
                'updated_at' => '2021-01-18 07:59:07',
            ),
            375 => 
            array (
                'id' => 376,
                'endereco' => 'Travessa Manoel Urbano, Rio Branco - AC, 51',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-178',
                'created_at' => '2021-01-18 08:00:27',
                'updated_at' => '2021-01-18 08:00:27',
            ),
            376 => 
            array (
                'id' => 377,
                'endereco' => 'Rua João Pereira, Rio Branco - AC, 29',
                'bairro' => 'Irineu Serra',
                'cep' => '69.922-218',
                'created_at' => '2021-01-18 08:00:34',
                'updated_at' => '2021-01-18 08:00:34',
            ),
            377 => 
            array (
                'id' => 378,
                'endereco' => 'Rua Guanabara, Rio Branco - AC, 375',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-852',
                'created_at' => '2021-01-18 08:00:34',
                'updated_at' => '2021-01-18 08:00:34',
            ),
            378 => 
            array (
                'id' => 379,
                'endereco' => 'Rua Rio Negro, Rio Branco - AC, 686',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-732',
                'created_at' => '2021-01-18 08:01:59',
                'updated_at' => '2021-01-18 08:01:59',
            ),
            379 => 
            array (
                'id' => 380,
                'endereco' => 'Avenida Principal, Rio Branco - AC, 20',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-760',
                'created_at' => '2021-01-18 08:02:17',
                'updated_at' => '2021-01-18 08:02:17',
            ),
            380 => 
            array (
                'id' => 381,
                'endereco' => 'Rua Ouro Verde, Rio Branco - AC, 68984253152',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-364',
                'created_at' => '2021-01-18 08:02:47',
                'updated_at' => '2021-01-18 08:02:47',
            ),
            381 => 
            array (
                'id' => 382,
                'endereco' => 'Avenida Francisco Ribeiro, Rio Branco - AC, 329',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-890',
                'created_at' => '2021-01-18 08:02:58',
                'updated_at' => '2021-01-18 08:02:58',
            ),
            382 => 
            array (
                'id' => 383,
                'endereco' => 'Travessa Jaguari, Rio Branco - AC, 124',
                'bairro' => 'Isaura PARENTE',
                'cep' => '69.918-248',
                'created_at' => '2021-01-18 08:03:59',
                'updated_at' => '2021-01-18 08:03:59',
            ),
            383 => 
            array (
                'id' => 384,
                'endereco' => 'Rua Campo Novo, Rio Branco - AC, 714',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-856',
                'created_at' => '2021-01-18 08:04:03',
                'updated_at' => '2021-01-18 08:04:03',
            ),
            384 => 
            array (
                'id' => 385,
                'endereco' => 'Rua Casa Nova ll, Rio Branco - AC, 100',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-322',
                'created_at' => '2021-01-18 08:04:09',
                'updated_at' => '2021-01-18 08:04:09',
            ),
            385 => 
            array (
                'id' => 386,
                'endereco' => 'Estrada do Calafate, Rio Branco - AC, 3391',
                'bairro' => 'Calafate',
                'cep' => '69.914-324',
                'created_at' => '2021-01-18 08:04:18',
                'updated_at' => '2021-01-18 08:04:18',
            ),
            386 => 
            array (
                'id' => 387,
                'endereco' => 'Rua São Luiz, Rio Branco - AC, 222',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-454',
                'created_at' => '2021-01-18 08:04:22',
                'updated_at' => '2021-01-18 08:04:22',
            ),
            387 => 
            array (
                'id' => 388,
                'endereco' => 'Rua Arraial do cabo, 106',
                'bairro' => 'Calafate aroeira',
                'cep' => '69.918-506',
                'created_at' => '2021-01-18 08:05:02',
                'updated_at' => '2021-01-18 08:05:02',
            ),
            388 => 
            array (
                'id' => 389,
                'endereco' => 'Rua Tavares do Couto, Rio Branco - AC, 177',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-826',
                'created_at' => '2021-01-18 08:05:23',
                'updated_at' => '2021-01-18 08:05:23',
            ),
            389 => 
            array (
                'id' => 390,
                'endereco' => 'Rua Guariuba, Rio Branco - AC, 124',
                'bairro' => 'Loteamento Santa Luzia, Apolônio Sales',
                'cep' => '69.903-364',
                'created_at' => '2021-01-18 08:06:13',
                'updated_at' => '2021-01-18 08:06:13',
            ),
            390 => 
            array (
                'id' => 391,
                'endereco' => 'Rua 12, Rio Branco - AC, 154',
                'bairro' => 'Parque dos SABIÁS',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 08:06:16',
                'updated_at' => '2021-01-18 08:06:16',
            ),
            391 => 
            array (
                'id' => 392,
                'endereco' => 'Rua São Francisco, Rio Branco - AC, 210',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-446',
                'created_at' => '2021-01-18 08:06:16',
                'updated_at' => '2021-01-18 08:06:16',
            ),
            392 => 
            array (
                'id' => 393,
                'endereco' => 'Rua Rio Negro, Rio Branco - AC, 686',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-732',
                'created_at' => '2021-01-18 08:06:42',
                'updated_at' => '2021-01-18 08:06:42',
            ),
            393 => 
            array (
                'id' => 394,
                'endereco' => 'Rua Marte, Rio Branco - AC, 550',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-154',
                'created_at' => '2021-01-18 08:06:45',
                'updated_at' => '2021-01-18 08:06:45',
            ),
            394 => 
            array (
                'id' => 395,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 353',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-292',
                'created_at' => '2021-01-18 08:07:00',
                'updated_at' => '2021-01-18 08:07:00',
            ),
            395 => 
            array (
                'id' => 396,
                'endereco' => 'Travessa Sucupira, Rio Branco - AC, 118',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-479',
                'created_at' => '2021-01-18 08:07:15',
                'updated_at' => '2021-01-18 08:07:15',
            ),
            396 => 
            array (
                'id' => 397,
                'endereco' => 'Rua José de Melo, Rio Branco - AC, 64',
                'bairro' => 'Raimundo MElo',
                'cep' => '69.921-014',
                'created_at' => '2021-01-18 08:08:45',
                'updated_at' => '2021-01-18 08:08:45',
            ),
            397 => 
            array (
                'id' => 398,
                'endereco' => 'Rua Absolon Almeida, Rio Branco - AC, 05',
                'bairro' => 'Capoeira',
                'cep' => '69.905-034',
                'created_at' => '2021-01-18 08:09:30',
                'updated_at' => '2021-01-18 08:09:30',
            ),
            398 => 
            array (
                'id' => 399,
                'endereco' => 'Rua Rio Negro, Rio Branco - AC, 686',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-732',
                'created_at' => '2021-01-18 08:09:43',
                'updated_at' => '2021-01-18 08:09:43',
            ),
            399 => 
            array (
                'id' => 400,
                'endereco' => 'Travessa Rosas de Saron, Rio Branco - AC, 86',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-398',
                'created_at' => '2021-01-18 08:09:47',
                'updated_at' => '2021-01-18 08:09:47',
            ),
            400 => 
            array (
                'id' => 401,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, ',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 08:10:03',
                'updated_at' => '2021-01-18 08:10:03',
            ),
            401 => 
            array (
                'id' => 402,
                'endereco' => 'Rua São João, Rio Branco - AC, 204',
                'bairro' => 'Conjunto Habitar Brasil',
                'cep' => '69.915-372',
                'created_at' => '2021-01-18 08:10:26',
                'updated_at' => '2021-01-18 08:10:26',
            ),
            402 => 
            array (
                'id' => 403,
                'endereco' => 'Rua Oriente, Rio Branco - AC, 263',
                'bairro' => 'Doca Furtado',
                'cep' => '69.918-140',
                'created_at' => '2021-01-18 08:10:47',
                'updated_at' => '2021-01-18 08:10:47',
            ),
            403 => 
            array (
                'id' => 404,
                'endereco' => 'Rua Marechal Rondon, Rio Branco - AC, 85',
                'bairro' => 'PAPOUCO',
                'cep' => '69.900-104',
                'created_at' => '2021-01-18 08:11:36',
                'updated_at' => '2021-01-18 08:11:36',
            ),
            404 => 
            array (
                'id' => 405,
                'endereco' => 'Travessa 7 de Setembro, Rio Branco -, 155',
                'bairro' => 'Areal',
                'cep' => '69.906-033',
                'created_at' => '2021-01-18 08:11:38',
                'updated_at' => '2021-01-18 08:11:38',
            ),
            405 => 
            array (
                'id' => 406,
                'endereco' => 'Rua São Francisco, Rio Branco - AC, 210',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-446',
                'created_at' => '2021-01-18 08:12:26',
                'updated_at' => '2021-01-18 08:12:26',
            ),
            406 => 
            array (
                'id' => 407,
                'endereco' => 'Rua Quixadá, Rio Branco - AC, 3460',
                'bairro' => 'Eldorado',
                'cep' => '69.902-387',
                'created_at' => '2021-01-18 08:12:59',
                'updated_at' => '2021-01-18 08:12:59',
            ),
            407 => 
            array (
                'id' => 408,
                'endereco' => 'Travessa da Pupunha, Rio Branco - AC, 248',
                'bairro' => 'Eldorado',
                'cep' => '69.902-515',
                'created_at' => '2021-01-18 08:13:06',
                'updated_at' => '2021-01-18 08:13:06',
            ),
            408 => 
            array (
                'id' => 409,
                'endereco' => 'Rua Hélio Melo, Rio Branco - AC, 524',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-198',
                'created_at' => '2021-01-18 08:13:26',
                'updated_at' => '2021-01-18 08:13:26',
            ),
            409 => 
            array (
                'id' => 410,
                'endereco' => 'Travessa Monte Sinai, Rio Branco - AC, 762',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-662',
                'created_at' => '2021-01-18 08:13:38',
                'updated_at' => '2021-01-18 08:13:38',
            ),
            410 => 
            array (
                'id' => 411,
                'endereco' => 'Rua José Maria Rios, Rio Branco - AC, 159',
                'bairro' => 'Santa QUITÉRIA',
                'cep' => '69.918-718',
                'created_at' => '2021-01-18 08:15:19',
                'updated_at' => '2021-01-18 08:15:19',
            ),
            411 => 
            array (
                'id' => 412,
                'endereco' => 'TRAVESSA 10 DE JUNHO, 708',
                'bairro' => 'CASA NOVA',
                'cep' => '69.901-270',
                'created_at' => '2021-01-18 08:15:36',
                'updated_at' => '2021-01-18 08:15:36',
            ),
            412 => 
            array (
                'id' => 413,
                'endereco' => 'Rua Mizael Martins, Rio Branco - AC, 583',
                'bairro' => 'Calafate',
                'cep' => '69.914-358',
                'created_at' => '2021-01-18 08:16:32',
                'updated_at' => '2021-01-18 08:16:32',
            ),
            413 => 
            array (
                'id' => 414,
                'endereco' => 'Rua Nossa Senhora da Conceição, Rio Branco - AC, 400',
                'bairro' => 'QUINZE',
                'cep' => '69.905-496',
                'created_at' => '2021-01-18 08:16:44',
                'updated_at' => '2021-01-18 08:16:44',
            ),
            414 => 
            array (
                'id' => 415,
                'endereco' => 'Rua Severiano, Rio Branco - AC, 193',
                'bairro' => 'Bosque',
                'cep' => '69.900-511',
                'created_at' => '2021-01-18 08:16:57',
                'updated_at' => '2021-01-18 08:16:57',
            ),
            415 => 
            array (
                'id' => 416,
                'endereco' => 'BAIRRO PLACAS, 32',
                'bairro' => 'RUA TARUMA N32',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 08:17:19',
                'updated_at' => '2021-01-18 08:17:19',
            ),
            416 => 
            array (
                'id' => 417,
                'endereco' => 'Rua Quixadá, Rio Branco - AC KM 03, 3460',
                'bairro' => 'Eldorado',
                'cep' => '69.902-387',
                'created_at' => '2021-01-18 08:17:58',
                'updated_at' => '2021-01-18 08:17:58',
            ),
            417 => 
            array (
                'id' => 418,
                'endereco' => 'Rua Cajui, Rio Branco - AC, 156',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-346',
                'created_at' => '2021-01-18 08:18:04',
                'updated_at' => '2021-01-18 08:18:04',
            ),
            418 => 
            array (
                'id' => 419,
                'endereco' => 'Rua Álvaro Inácio, Rio Branco - AC, 798',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-118',
                'created_at' => '2021-01-18 08:18:47',
                'updated_at' => '2021-01-18 08:18:47',
            ),
            419 => 
            array (
                'id' => 420,
                'endereco' => 'Rua Principal 1, Rio Branco - AC, 183',
                'bairro' => 'Pedro Roseno',
                'cep' => '69.917-670',
                'created_at' => '2021-01-18 08:19:43',
                'updated_at' => '2021-01-18 08:19:43',
            ),
            420 => 
            array (
                'id' => 421,
                'endereco' => 'Rua Guajará, Rio Branco - AC, 459',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-426',
                'created_at' => '2021-01-18 08:20:26',
                'updated_at' => '2021-01-18 08:20:26',
            ),
            421 => 
            array (
                'id' => 422,
                'endereco' => 'Rua da Zeli, Rio Branco - AC, 30',
                'bairro' => 'Vila Nova',
                'cep' => '69.921-090',
                'created_at' => '2021-01-18 08:20:35',
                'updated_at' => '2021-01-18 08:20:35',
            ),
            422 => 
            array (
                'id' => 423,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 01',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-444',
                'created_at' => '2021-01-18 08:20:40',
                'updated_at' => '2021-01-18 08:20:40',
            ),
            423 => 
            array (
                'id' => 424,
                'endereco' => 'Rua Rio Negro, Rio Branco - AC, 686',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-732',
                'created_at' => '2021-01-18 08:21:14',
                'updated_at' => '2021-01-18 08:21:14',
            ),
            424 => 
            array (
                'id' => 425,
                'endereco' => 'Rio branco/Ac, 38',
                'bairro' => 'Rosa LINDA_ lot. Holsback',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 08:21:56',
                'updated_at' => '2021-01-18 08:21:56',
            ),
            425 => 
            array (
                'id' => 426,
                'endereco' => 'Rua São Raimundo Nonato, Rio Branco - AC, 387',
                'bairro' => 'Vitória',
                'cep' => '69.901-863',
                'created_at' => '2021-01-18 08:22:20',
                'updated_at' => '2021-01-18 08:22:20',
            ),
            426 => 
            array (
                'id' => 427,
                'endereco' => 'Travessa Apucarana, Rio Branco - AC, 84',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-506',
                'created_at' => '2021-01-18 08:22:40',
                'updated_at' => '2021-01-18 08:22:40',
            ),
            427 => 
            array (
                'id' => 428,
                'endereco' => 'Rua Alberto Barros, 101',
                'bairro' => 'Bemfica',
                'cep' => '69.909-992',
                'created_at' => '2021-01-18 08:23:05',
                'updated_at' => '2021-01-18 08:23:05',
            ),
            428 => 
            array (
                'id' => 429,
                'endereco' => 'Via Verde, Rio Branco - AC, 2556',
                'bairro' => 'Praia do Amapá',
                'cep' => '69.906-644',
                'created_at' => '2021-01-18 08:23:33',
                'updated_at' => '2021-01-18 08:23:33',
            ),
            429 => 
            array (
                'id' => 430,
                'endereco' => 'Rua dos Anturios, Rio Branco - AC, 621',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.906-212',
                'created_at' => '2021-01-18 08:24:20',
                'updated_at' => '2021-01-18 08:24:20',
            ),
            430 => 
            array (
                'id' => 431,
                'endereco' => 'Rua 7 de Julho, Rio Branco - AC, 90',
                'bairro' => 'Calafate',
                'cep' => '69.914-342',
                'created_at' => '2021-01-18 08:24:20',
                'updated_at' => '2021-01-18 08:24:20',
            ),
            431 => 
            array (
                'id' => 432,
                'endereco' => 'Rua Bolívia, Rio Branco - AC, 572',
                'bairro' => 'HABITASa',
                'cep' => '69.905-116',
                'created_at' => '2021-01-18 08:24:43',
                'updated_at' => '2021-01-18 08:24:43',
            ),
            432 => 
            array (
                'id' => 433,
                'endereco' => 'Rua Silvestre Coelho, Rio Branco - AC, 431',
                'bairro' => 'José Augusto',
                'cep' => '69.900-773',
                'created_at' => '2021-01-18 08:26:28',
                'updated_at' => '2021-01-18 08:26:28',
            ),
            433 => 
            array (
                'id' => 434,
                'endereco' => 'ROD. Ac-40 km- 09 ramal castanheira, 1362',
                'bairro' => 'Santa Maria',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 08:26:35',
                'updated_at' => '2021-01-18 08:26:35',
            ),
            434 => 
            array (
                'id' => 435,
                'endereco' => 'Via Verde, Rio Branco - AC, 2556',
                'bairro' => 'Praia do Amapá',
                'cep' => '69.906-644',
                'created_at' => '2021-01-18 08:26:58',
                'updated_at' => '2021-01-18 08:26:58',
            ),
            435 => 
            array (
                'id' => 436,
                'endereco' => 'Rua Thaumaturgo Filho, Rio Branco - AC, 46',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-316',
                'created_at' => '2021-01-18 08:27:33',
                'updated_at' => '2021-01-18 08:27:33',
            ),
            436 => 
            array (
                'id' => 437,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 141',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-444',
                'created_at' => '2021-01-18 08:27:50',
                'updated_at' => '2021-01-18 08:27:50',
            ),
            437 => 
            array (
                'id' => 438,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 462',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-18 08:28:10',
                'updated_at' => '2021-01-18 08:28:10',
            ),
            438 => 
            array (
                'id' => 439,
                'endereco' => '...Rio branco /ac, 38',
                'bairro' => 'Rosa linda_lot. Holsback',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 08:28:36',
                'updated_at' => '2021-01-18 08:28:36',
            ),
            439 => 
            array (
                'id' => 440,
                'endereco' => 'Rua Renascimento, Rio Branco - AC, 848',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-786',
                'created_at' => '2021-01-18 08:28:44',
                'updated_at' => '2021-01-18 08:28:44',
            ),
            440 => 
            array (
                'id' => 441,
                'endereco' => 'Estrada do Panorama, Rio Branco - AC, 84',
                'bairro' => 'Loteamento Jardim São Francisco',
                'cep' => '69.902-100',
                'created_at' => '2021-01-18 08:29:06',
                'updated_at' => '2021-01-18 08:29:06',
            ),
            441 => 
            array (
                'id' => 442,
                'endereco' => 'Travessa Roraima, Rio Branco - AC, 36',
                'bairro' => 'Capoeira',
                'cep' => '69.905-014',
                'created_at' => '2021-01-18 08:29:11',
                'updated_at' => '2021-01-18 08:29:11',
            ),
            442 => 
            array (
                'id' => 443,
                'endereco' => 'Rua Silvestre Coelho, Rio Branco - AC, 431',
                'bairro' => 'José Augusto',
                'cep' => '69.900-773',
                'created_at' => '2021-01-18 08:29:13',
                'updated_at' => '2021-01-18 08:29:13',
            ),
            443 => 
            array (
                'id' => 444,
                'endereco' => 'Travessa São Francisco, Rio Branco - AC, 02',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-012',
                'created_at' => '2021-01-18 08:29:14',
                'updated_at' => '2021-01-18 08:29:14',
            ),
            444 => 
            array (
                'id' => 445,
                'endereco' => 'Rua das Flores, Rio Branco - AC, 232',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-840',
                'created_at' => '2021-01-18 08:29:34',
                'updated_at' => '2021-01-18 08:29:34',
            ),
            445 => 
            array (
                'id' => 446,
                'endereco' => 'Rua Estado do Acre, Rio Branco - AC, 115',
                'bairro' => 'Base',
                'cep' => '69.900-010',
                'created_at' => '2021-01-18 08:30:11',
                'updated_at' => '2021-01-18 08:30:11',
            ),
            446 => 
            array (
                'id' => 447,
                'endereco' => 'Rua Quinauá, Rio Branco - AC, 67',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-828',
                'created_at' => '2021-01-18 08:31:39',
                'updated_at' => '2021-01-18 08:31:39',
            ),
            447 => 
            array (
                'id' => 448,
                'endereco' => '..., 62',
                'bairro' => 'Estação Experimental',
                'cep' => '69.917-056',
                'created_at' => '2021-01-18 08:31:51',
                'updated_at' => '2021-01-18 08:31:51',
            ),
            448 => 
            array (
                'id' => 449,
                'endereco' => 'Rua Carmópolis, Rio Branco - AC, 39',
                'bairro' => 'Abraão Alab',
                'cep' => '69.918-062',
                'created_at' => '2021-01-18 08:33:00',
                'updated_at' => '2021-01-18 08:33:00',
            ),
            449 => 
            array (
                'id' => 450,
                'endereco' => 'Rua Tamarindo, Rio Branco - AC, 97',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-361',
                'created_at' => '2021-01-18 08:33:06',
                'updated_at' => '2021-01-18 08:33:06',
            ),
            450 => 
            array (
                'id' => 451,
                'endereco' => 'Rua José Luis, Rio Branco - AC, 513',
                'bairro' => 'Santa INÊS',
                'cep' => '69.907-677',
                'created_at' => '2021-01-18 08:33:08',
                'updated_at' => '2021-01-18 08:33:08',
            ),
            451 => 
            array (
                'id' => 452,
                'endereco' => 'Rua 15 de Novembro, Rio Branco - AC, 672',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-844',
                'created_at' => '2021-01-18 08:33:11',
                'updated_at' => '2021-01-18 08:33:11',
            ),
            452 => 
            array (
                'id' => 453,
                'endereco' => 'Travessa Cabanelas, Rio Branco - AC, 131',
                'bairro' => 'Seis de AGOSTo',
                'cep' => '69.905-660',
                'created_at' => '2021-01-18 08:35:20',
                'updated_at' => '2021-01-18 08:35:20',
            ),
            453 => 
            array (
                'id' => 454,
                'endereco' => 'Rua Shalon, Rio Branco - AC, 191',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-665',
                'created_at' => '2021-01-18 08:35:28',
                'updated_at' => '2021-01-18 08:35:28',
            ),
            454 => 
            array (
                'id' => 455,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 707',
                'bairro' => 'Conquista',
                'cep' => '69.918-780',
                'created_at' => '2021-01-18 08:38:22',
                'updated_at' => '2021-01-18 08:38:22',
            ),
            455 => 
            array (
                'id' => 456,
                'endereco' => 'Rua Bela Vista, Rio Branco - AC, 93',
                'bairro' => 'Bosque',
                'cep' => '69.900-418',
                'created_at' => '2021-01-18 08:41:16',
                'updated_at' => '2021-01-18 08:41:16',
            ),
            456 => 
            array (
                'id' => 457,
                'endereco' => 'Rua Marte, 07',
                'bairro' => 'Vila betel conjunto lba',
                'cep' => '69.915-306',
                'created_at' => '2021-01-18 08:41:43',
                'updated_at' => '2021-01-18 08:41:43',
            ),
            457 => 
            array (
                'id' => 458,
                'endereco' => 'Travessa Raimundo Vieira, Rio Branco - AC, 90',
                'bairro' => 'Vila Santa Cecília',
                'cep' => '69.908-140',
                'created_at' => '2021-01-18 08:41:58',
                'updated_at' => '2021-01-18 08:41:58',
            ),
            458 => 
            array (
                'id' => 459,
                'endereco' => 'Rua do Eucalipto, Rio Branco - AC, 49',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-283',
                'created_at' => '2021-01-18 08:42:19',
                'updated_at' => '2021-01-18 08:42:19',
            ),
            459 => 
            array (
                'id' => 460,
                'endereco' => 'Travessa Roraima, Rio Branco - AC, 36',
                'bairro' => 'Capoeira',
                'cep' => '69.905-014',
                'created_at' => '2021-01-18 08:43:05',
                'updated_at' => '2021-01-18 08:43:05',
            ),
            460 => 
            array (
                'id' => 461,
                'endereco' => 'Rua Tapajós, Rio Branco - AC, 264',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-262',
                'created_at' => '2021-01-18 08:43:59',
                'updated_at' => '2021-01-18 08:43:59',
            ),
            461 => 
            array (
                'id' => 462,
                'endereco' => 'Rua Jaguari, Rio Branco - AC, 215',
                'bairro' => 'Isaura PARENTe',
                'cep' => '69.918-244',
                'created_at' => '2021-01-18 08:44:07',
                'updated_at' => '2021-01-18 08:44:07',
            ),
            462 => 
            array (
                'id' => 463,
                'endereco' => 'Rua 13 de Maio, Rio Branco - AC, 41',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-205',
                'created_at' => '2021-01-18 08:44:08',
                'updated_at' => '2021-01-18 08:44:08',
            ),
            463 => 
            array (
                'id' => 464,
                'endereco' => 'Rua Belo Horizonte, Rio Branco - AC, 44',
                'bairro' => 'Ivete VARGAS',
                'cep' => '69.900-244',
                'created_at' => '2021-01-18 08:45:29',
                'updated_at' => '2021-01-18 08:45:29',
            ),
            464 => 
            array (
                'id' => 465,
                'endereco' => 'Rua João Pessoa, Rio Branco - AC, 59',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-606',
                'created_at' => '2021-01-18 08:46:07',
                'updated_at' => '2021-01-18 08:46:07',
            ),
            465 => 
            array (
                'id' => 466,
                'endereco' => 'Rua Juricaba, Rio Branco - AC, 170',
                'bairro' => 'João Paulo',
                'cep' => '69.912-060',
                'created_at' => '2021-01-18 08:46:13',
                'updated_at' => '2021-01-18 08:46:13',
            ),
            466 => 
            array (
                'id' => 467,
                'endereco' => '..., 187',
                'bairro' => '...',
                'cep' => '69.905-718',
                'created_at' => '2021-01-18 08:46:20',
                'updated_at' => '2021-01-18 08:46:20',
            ),
            467 => 
            array (
                'id' => 468,
                'endereco' => 'Rua Conquista, Rio Branco - AC, 391',
                'bairro' => 'Geraldo Fleming',
                'cep' => '69.918-864',
                'created_at' => '2021-01-18 08:46:26',
                'updated_at' => '2021-01-18 08:46:26',
            ),
            468 => 
            array (
                'id' => 469,
                'endereco' => 'Rua Petrópolis, Rio Branco - AC, 184',
                'bairro' => 'Loteamento aroeira, calafate',
                'cep' => '69.915-062',
                'created_at' => '2021-01-18 08:47:25',
                'updated_at' => '2021-01-18 08:47:25',
            ),
            469 => 
            array (
                'id' => 470,
                'endereco' => 'Rua Marte, Rio Branco - AC, 07',
                'bairro' => 'LBA Vila BEtel',
                'cep' => '69.915-306',
                'created_at' => '2021-01-18 08:49:40',
                'updated_at' => '2021-01-18 08:49:40',
            ),
            470 => 
            array (
                'id' => 471,
                'endereco' => '...rua OBECIDES NUNES OLIVEIRA, 171',
                'bairro' => 'Major MENDONÇA / VILA acre',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 08:50:07',
                'updated_at' => '2021-01-18 08:50:07',
            ),
            471 => 
            array (
                'id' => 472,
                'endereco' => 'Rua São Nicolau, Rio Branco - AC, 84',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-452',
                'created_at' => '2021-01-18 08:51:37',
                'updated_at' => '2021-01-18 08:51:37',
            ),
            472 => 
            array (
                'id' => 473,
                'endereco' => 'Rua Juricaba, Rio Branco - AC, 170',
                'bairro' => 'João Paulo',
                'cep' => '69.912-060',
                'created_at' => '2021-01-18 08:51:48',
                'updated_at' => '2021-01-18 08:51:48',
            ),
            473 => 
            array (
                'id' => 474,
                'endereco' => 'Travessa Maria R. Siqueira, Rio Branco - AC, 119',
                'bairro' => 'Areal',
                'cep' => '69.905-861',
                'created_at' => '2021-01-18 08:51:55',
                'updated_at' => '2021-01-18 08:51:55',
            ),
            474 => 
            array (
                'id' => 475,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 306',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 08:52:07',
                'updated_at' => '2021-01-18 08:52:07',
            ),
            475 => 
            array (
                'id' => 476,
                'endereco' => 'Rua Gideões, Rio Branco - AC, 164',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-652',
                'created_at' => '2021-01-18 08:52:11',
                'updated_at' => '2021-01-18 08:52:11',
            ),
            476 => 
            array (
                'id' => 477,
                'endereco' => 'Rua São Mateus, Rio Branco - AC, 150',
                'bairro' => 'Residencial Araçá',
                'cep' => '69.915-354',
                'created_at' => '2021-01-18 08:52:22',
                'updated_at' => '2021-01-18 08:52:22',
            ),
            477 => 
            array (
                'id' => 478,
                'endereco' => 'Travessa Raimundo Vieira, Rio Branco - AC, 90',
                'bairro' => 'Vila Santa Cecília',
                'cep' => '69.908-140',
                'created_at' => '2021-01-18 08:52:43',
                'updated_at' => '2021-01-18 08:52:43',
            ),
            478 => 
            array (
                'id' => 479,
                'endereco' => 'Travessa Beija-flor, Rio Branco - AC, 187',
                'bairro' => 'AREal',
                'cep' => '69.906-104',
                'created_at' => '2021-01-18 08:53:14',
                'updated_at' => '2021-01-18 08:53:14',
            ),
            479 => 
            array (
                'id' => 480,
                'endereco' => 'Avenida Principal, Rio Branco - AC, 509',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-760',
                'created_at' => '2021-01-18 08:53:35',
                'updated_at' => '2021-01-18 08:53:35',
            ),
            480 => 
            array (
                'id' => 481,
                'endereco' => 'Ramal da União, Rio Branco - AC, 362',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-006',
                'created_at' => '2021-01-18 08:53:57',
                'updated_at' => '2021-01-18 08:53:57',
            ),
            481 => 
            array (
                'id' => 482,
                'endereco' => 'Rua Renascimento, Rio Branco - AC, 710',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-786',
                'created_at' => '2021-01-18 08:54:57',
                'updated_at' => '2021-01-18 08:54:57',
            ),
            482 => 
            array (
                'id' => 483,
                'endereco' => 'Rua Topázio, Rio Branco - AC, 39',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-891',
                'created_at' => '2021-01-18 08:55:57',
                'updated_at' => '2021-01-18 08:55:57',
            ),
            483 => 
            array (
                'id' => 484,
                'endereco' => 'Estrada Dias Martins, Rio Branco - AC, 5621',
                'bairro' => 'Chácara Ipê',
                'cep' => '69.917-520',
                'created_at' => '2021-01-18 08:56:38',
                'updated_at' => '2021-01-18 08:56:38',
            ),
            484 => 
            array (
                'id' => 485,
                'endereco' => 'Rodovia Transacreana, Rio Branco - AC, 1109',
                'bairro' => 'Boa Vista',
                'cep' => '69.912-120',
                'created_at' => '2021-01-18 08:58:57',
                'updated_at' => '2021-01-18 08:58:57',
            ),
            485 => 
            array (
                'id' => 486,
                'endereco' => 'Travessa Jacó, Rio Branco - AC, 191',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-496',
                'created_at' => '2021-01-18 08:59:07',
                'updated_at' => '2021-01-18 08:59:07',
            ),
            486 => 
            array (
                'id' => 487,
                'endereco' => 'Rua Campos LINDOS Qd 01 - parque Bonsucesso i, 17',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-552',
                'created_at' => '2021-01-18 09:01:07',
                'updated_at' => '2021-01-18 09:01:07',
            ),
            487 => 
            array (
                'id' => 488,
                'endereco' => 'Rua Belo Jardim, Rio Branco - AC, 21',
                'bairro' => 'Geraldo Fleming',
                'cep' => '69.918-870',
                'created_at' => '2021-01-18 09:01:21',
                'updated_at' => '2021-01-18 09:01:21',
            ),
            488 => 
            array (
                'id' => 489,
            'endereco' => 'TRAVESSA COWBOY (RURAL), 223',
                'bairro' => 'VILA ACRE',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 09:01:23',
                'updated_at' => '2021-01-18 09:01:23',
            ),
            489 => 
            array (
                'id' => 490,
                'endereco' => 'Rua Raimundo Melo, Rio Branco - AC, 86',
                'bairro' => 'Montanhês',
                'cep' => '69.921-464',
                'created_at' => '2021-01-18 09:01:42',
                'updated_at' => '2021-01-18 09:01:42',
            ),
            490 => 
            array (
                'id' => 491,
                'endereco' => 'Ramal Bom Futuro, Rio Branco - AC, 600',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-794',
                'created_at' => '2021-01-18 09:03:08',
                'updated_at' => '2021-01-18 09:03:08',
            ),
            491 => 
            array (
                'id' => 492,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, Q05, casa 13, condomínio Vila Rio Verde, 2095',
                'bairro' => 'Alto ALEGRe',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 09:04:37',
                'updated_at' => '2021-01-18 09:04:37',
            ),
            492 => 
            array (
                'id' => 493,
                'endereco' => '..., 60',
                'bairro' => '...',
                'cep' => '69.912-030',
                'created_at' => '2021-01-18 09:04:47',
                'updated_at' => '2021-01-18 09:04:47',
            ),
            493 => 
            array (
                'id' => 494,
                'endereco' => 'Travessa do Divisor, Rio Branco - AC, 86',
                'bairro' => 'Eldorado',
                'cep' => '69.902-416',
                'created_at' => '2021-01-18 09:05:23',
                'updated_at' => '2021-01-18 09:05:23',
            ),
            494 => 
            array (
                'id' => 495,
                'endereco' => 'Rua Bom Jesus, Rio Branco - AC, 59',
                'bairro' => 'Bahia Velha',
                'cep' => '69.911-580',
                'created_at' => '2021-01-18 09:06:13',
                'updated_at' => '2021-01-18 09:06:13',
            ),
            495 => 
            array (
                'id' => 496,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 21',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-18 09:06:40',
                'updated_at' => '2021-01-18 09:06:40',
            ),
            496 => 
            array (
                'id' => 497,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 401',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-324',
                'created_at' => '2021-01-18 09:06:54',
                'updated_at' => '2021-01-18 09:06:54',
            ),
            497 => 
            array (
                'id' => 498,
                'endereco' => 'Ramal Bom Jesus, Rio Branco - AC, 55',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-744',
                'created_at' => '2021-01-18 09:07:12',
                'updated_at' => '2021-01-18 09:07:12',
            ),
            498 => 
            array (
                'id' => 499,
                'endereco' => 'Travessa Raimundo Vieira, Rio Branco - AC, 100',
                'bairro' => 'Vila Santa Cecília',
                'cep' => '69.908-140',
                'created_at' => '2021-01-18 09:07:21',
                'updated_at' => '2021-01-18 09:07:21',
            ),
            499 => 
            array (
                'id' => 500,
                'endereco' => 'Travessa Beija-flor, Rio Branco - AC, 11',
                'bairro' => 'Areal',
                'cep' => '69.906-104',
                'created_at' => '2021-01-18 09:07:37',
                'updated_at' => '2021-01-18 09:07:37',
            ),
        ));
        \DB::table('endereco')->insert(array (
            0 => 
            array (
                'id' => 501,
                'endereco' => 'Rua Cabo Euriberto, Rio Branco - AC, 91',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-260',
                'created_at' => '2021-01-18 09:09:24',
                'updated_at' => '2021-01-18 09:09:24',
            ),
            1 => 
            array (
                'id' => 502,
                'endereco' => 'Travessa Beija-flor, Rio Branco - AC, 11',
                'bairro' => 'Areal',
                'cep' => '69.906-104',
                'created_at' => '2021-01-18 09:09:28',
                'updated_at' => '2021-01-18 09:09:28',
            ),
            2 => 
            array (
                'id' => 503,
                'endereco' => 'Rua Quinauá, Rio Branco - AC, 31',
                'bairro' => 'Portal da AMAZÔNIA',
                'cep' => '69.915-828',
                'created_at' => '2021-01-18 09:10:07',
                'updated_at' => '2021-01-18 09:10:07',
            ),
            3 => 
            array (
                'id' => 504,
                'endereco' => 'Rua Rubens Carneiro, Rio Branco - AC, 253',
                'bairro' => 'Abraão Alab',
                'cep' => '69.918-044',
                'created_at' => '2021-01-18 09:12:15',
                'updated_at' => '2021-01-18 09:12:15',
            ),
            4 => 
            array (
                'id' => 505,
                'endereco' => 'Rua 12, Rio Branco - AC, 201',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 09:13:18',
                'updated_at' => '2021-01-18 09:13:18',
            ),
            5 => 
            array (
                'id' => 506,
                'endereco' => 'Travessa Princesinha, Rio Branco - AC, 50',
                'bairro' => 'Montanhês',
                'cep' => '69.921-428',
                'created_at' => '2021-01-18 09:14:01',
                'updated_at' => '2021-01-18 09:14:01',
            ),
            6 => 
            array (
                'id' => 507,
                'endereco' => 'Avenida Dorval Camilo, Rio Branco - AC, 948',
                'bairro' => 'AREAl',
                'cep' => '69.905-859',
                'created_at' => '2021-01-18 09:14:09',
                'updated_at' => '2021-01-18 09:14:09',
            ),
            7 => 
            array (
                'id' => 508,
                'endereco' => 'Rua Mercúrio, Rio Branco - AC, 26',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-186',
                'created_at' => '2021-01-18 09:14:24',
                'updated_at' => '2021-01-18 09:14:24',
            ),
            8 => 
            array (
                'id' => 509,
                'endereco' => 'Rua Venezuela, Rio Branco - AC, 316',
                'bairro' => 'Habitasa',
                'cep' => '69.905-112',
                'created_at' => '2021-01-18 09:15:41',
                'updated_at' => '2021-01-18 09:15:41',
            ),
            9 => 
            array (
                'id' => 510,
                'endereco' => 'Rua 1, Rio Branco - AC, 186',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-416',
                'created_at' => '2021-01-18 09:15:48',
                'updated_at' => '2021-01-18 09:15:48',
            ),
            10 => 
            array (
                'id' => 511,
                'endereco' => 'Rua Antônio Boto, Rio Branco - AC, 355',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-066',
                'created_at' => '2021-01-18 09:16:02',
                'updated_at' => '2021-01-18 09:16:02',
            ),
            11 => 
            array (
                'id' => 512,
                'endereco' => 'Rua 12 de Junho, Rio Branco - AC, 160',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-800',
                'created_at' => '2021-01-18 09:16:02',
                'updated_at' => '2021-01-18 09:16:02',
            ),
            12 => 
            array (
                'id' => 513,
                'endereco' => 'Rua Nossa Senhora das Graças, Rio Branco - AC, 119',
                'bairro' => 'Quinze',
                'cep' => '69.905-504',
                'created_at' => '2021-01-18 09:16:55',
                'updated_at' => '2021-01-18 09:16:55',
            ),
            13 => 
            array (
                'id' => 514,
                'endereco' => 'Rua Belo Jardim, Rio Branco - AC, 21',
                'bairro' => 'Geraldo Fleming',
                'cep' => '69.918-870',
                'created_at' => '2021-01-18 09:17:02',
                'updated_at' => '2021-01-18 09:17:02',
            ),
            14 => 
            array (
                'id' => 515,
                'endereco' => 'Rua Cupuaçú, Rio Branco - AC, 265',
                'bairro' => 'Conjunto Jardim São Francisco',
                'cep' => '69.901-015',
                'created_at' => '2021-01-18 09:17:24',
                'updated_at' => '2021-01-18 09:17:24',
            ),
            15 => 
            array (
                'id' => 516,
                'endereco' => 'Rua Andrade Silva, Rio Branco - AC, 249',
                'bairro' => 'São Francisco',
                'cep' => '69.901-549',
                'created_at' => '2021-01-18 09:17:47',
                'updated_at' => '2021-01-18 09:17:47',
            ),
            16 => 
            array (
                'id' => 517,
                'endereco' => 'Rua Itaúba, Rio Branco - AC, 286',
                'bairro' => 'Loteamento Novo Horizonte',
                'cep' => '69.921-128',
                'created_at' => '2021-01-18 09:17:55',
                'updated_at' => '2021-01-18 09:17:55',
            ),
            17 => 
            array (
                'id' => 518,
                'endereco' => 'Rua Jorge Rivasplata, Rio Branco - AC, 249',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-669',
                'created_at' => '2021-01-18 09:18:02',
                'updated_at' => '2021-01-18 09:18:02',
            ),
            18 => 
            array (
                'id' => 519,
                'endereco' => 'Travessa Zona Ampliada, Rio Branco - AC, 55',
                'bairro' => 'Capoeira',
                'cep' => '69.905-002',
                'created_at' => '2021-01-18 09:18:22',
                'updated_at' => '2021-01-18 09:18:22',
            ),
            19 => 
            array (
                'id' => 520,
                'endereco' => 'Rua Mercúrio, Rio Branco - AC, 26',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-186',
                'created_at' => '2021-01-18 09:18:33',
                'updated_at' => '2021-01-18 09:18:33',
            ),
            20 => 
            array (
                'id' => 521,
                'endereco' => 'Rua Conquista, Rio Branco - AC, 170',
                'bairro' => 'Geraldo Fleming',
                'cep' => '69.918-864',
                'created_at' => '2021-01-18 09:18:41',
                'updated_at' => '2021-01-18 09:18:41',
            ),
            21 => 
            array (
                'id' => 522,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 483',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-684',
                'created_at' => '2021-01-18 09:19:40',
                'updated_at' => '2021-01-18 09:19:40',
            ),
            22 => 
            array (
                'id' => 523,
                'endereco' => 'Rua São João, Rio Branco - AC, 165',
                'bairro' => 'Conjunto Habitar Brasil',
                'cep' => '69.915-372',
                'created_at' => '2021-01-18 09:20:36',
                'updated_at' => '2021-01-18 09:20:36',
            ),
            23 => 
            array (
                'id' => 524,
                'endereco' => 'Rua São Francisco de Assis, Rio Branco - AC, 131',
                'bairro' => 'Preventório',
                'cep' => '69.900-138',
                'created_at' => '2021-01-18 09:21:13',
                'updated_at' => '2021-01-18 09:21:13',
            ),
            24 => 
            array (
                'id' => 525,
                'endereco' => 'Rua Plácido de Castro, Rio Branco - AC, 74',
                'bairro' => 'Xavier MAIa',
                'cep' => '69.903-008',
                'created_at' => '2021-01-18 09:21:46',
                'updated_at' => '2021-01-18 09:21:46',
            ),
            25 => 
            array (
                'id' => 526,
                'endereco' => 'Travessa Heros, Rio Branco - AC, 55',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-188',
                'created_at' => '2021-01-18 09:22:06',
                'updated_at' => '2021-01-18 09:22:06',
            ),
            26 => 
            array (
                'id' => 527,
                'endereco' => 'Rua 1, Rio Branco - AC, 186',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-416',
                'created_at' => '2021-01-18 09:22:11',
                'updated_at' => '2021-01-18 09:22:11',
            ),
            27 => 
            array (
                'id' => 528,
                'endereco' => 'Rua São José, Rio Branco - AC, 296',
                'bairro' => 'Nova ESPERANÇA',
                'cep' => '69.915-202',
                'created_at' => '2021-01-18 09:22:15',
                'updated_at' => '2021-01-18 09:22:15',
            ),
            28 => 
            array (
                'id' => 529,
                'endereco' => 'Ramal Bom Jesus, Rio Branco - AC, 55',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-744',
                'created_at' => '2021-01-18 09:22:17',
                'updated_at' => '2021-01-18 09:22:17',
            ),
            29 => 
            array (
                'id' => 530,
                'endereco' => 'Rua Coronel Honório Alves, Rio Branco - AC, 253',
                'bairro' => 'QUINZE',
                'cep' => '69.905-508',
                'created_at' => '2021-01-18 09:22:24',
                'updated_at' => '2021-01-18 09:22:24',
            ),
            30 => 
            array (
                'id' => 531,
                'endereco' => 'Rua Mercúrio, Rio Branco - AC, 26',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-186',
                'created_at' => '2021-01-18 09:22:42',
                'updated_at' => '2021-01-18 09:22:42',
            ),
            31 => 
            array (
                'id' => 532,
                'endereco' => 'Rua Brilhante, Rio Branco - AC, 23',
                'bairro' => 'Tangará',
                'cep' => '69.915-012',
                'created_at' => '2021-01-18 09:23:22',
                'updated_at' => '2021-01-18 09:23:22',
            ),
            32 => 
            array (
                'id' => 533,
                'endereco' => 'Rua Mamão, Rio Branco - AC, 157',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-109',
                'created_at' => '2021-01-18 09:24:42',
                'updated_at' => '2021-01-18 09:24:42',
            ),
            33 => 
            array (
                'id' => 534,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 41',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-375',
                'created_at' => '2021-01-18 09:24:53',
                'updated_at' => '2021-01-18 09:24:53',
            ),
            34 => 
            array (
                'id' => 535,
                'endereco' => 'Rua Sanhaçu, Rio Branco - AC, 04',
                'bairro' => 'Andirá',
                'cep' => '69.903-273',
                'created_at' => '2021-01-18 09:25:19',
                'updated_at' => '2021-01-18 09:25:19',
            ),
            35 => 
            array (
                'id' => 536,
                'endereco' => 'Rua da Abelha, Rio Branco - AC, 358',
                'bairro' => 'Conquista',
                'cep' => '69.918-754',
                'created_at' => '2021-01-18 09:25:35',
                'updated_at' => '2021-01-18 09:25:35',
            ),
            36 => 
            array (
                'id' => 537,
                'endereco' => 'Avenida Dorval Camilo, Rio Branco - AC, 329',
                'bairro' => 'AREAL',
                'cep' => '69.905-859',
                'created_at' => '2021-01-18 09:26:00',
                'updated_at' => '2021-01-18 09:26:00',
            ),
            37 => 
            array (
                'id' => 538,
                'endereco' => 'Rua do Manoelito, Rio Branco - AC, 81',
                'bairro' => 'Vila Nova',
                'cep' => '69.921-086',
                'created_at' => '2021-01-18 09:26:08',
                'updated_at' => '2021-01-18 09:26:08',
            ),
            38 => 
            array (
                'id' => 539,
                'endereco' => 'Rua Primavera, Rio Branco - AC, 35',
                'bairro' => 'Aviário',
                'cep' => '69.900-875',
                'created_at' => '2021-01-18 09:27:08',
                'updated_at' => '2021-01-18 09:27:08',
            ),
            39 => 
            array (
                'id' => 540,
                'endereco' => 'Rua São Mateus, Rio Branco - AC, 150',
                'bairro' => 'Residencial Araçá',
                'cep' => '69.915-354',
                'created_at' => '2021-01-18 09:30:07',
                'updated_at' => '2021-01-18 09:30:07',
            ),
            40 => 
            array (
                'id' => 541,
                'endereco' => 'Avenida Beira Rio, Rio Branco - AC, 180',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-404',
                'created_at' => '2021-01-18 09:31:26',
                'updated_at' => '2021-01-18 09:31:26',
            ),
            41 => 
            array (
                'id' => 542,
                'endereco' => 'Rua 12, Rio Branco - AC, 323',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 09:31:51',
                'updated_at' => '2021-01-18 09:31:51',
            ),
            42 => 
            array (
                'id' => 543,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 104',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-18 09:32:17',
                'updated_at' => '2021-01-18 09:32:17',
            ),
            43 => 
            array (
                'id' => 544,
                'endereco' => 'Rua Eldorado, Rio Branco - AC, 555',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-014',
                'created_at' => '2021-01-18 09:33:25',
                'updated_at' => '2021-01-18 09:33:25',
            ),
            44 => 
            array (
                'id' => 545,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 694',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-232',
                'created_at' => '2021-01-18 09:33:33',
                'updated_at' => '2021-01-18 09:33:33',
            ),
            45 => 
            array (
                'id' => 546,
                'endereco' => 'Travessa Boa Fé, Rio Branco - AC, 87',
                'bairro' => 'Areal',
                'cep' => '69.905-869',
                'created_at' => '2021-01-18 09:33:51',
                'updated_at' => '2021-01-18 09:33:51',
            ),
            46 => 
            array (
                'id' => 547,
                'endereco' => 'Rua Peru, Rio Branco - AC, 602',
                'bairro' => 'Habitasa',
                'cep' => '69.905-106',
                'created_at' => '2021-01-18 09:34:11',
                'updated_at' => '2021-01-18 09:34:11',
            ),
            47 => 
            array (
                'id' => 548,
                'endereco' => 'Rua Olga Abud, Rio Branco - AC, 257',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-706',
                'created_at' => '2021-01-18 09:35:15',
                'updated_at' => '2021-01-18 09:35:15',
            ),
            48 => 
            array (
                'id' => 549,
                'endereco' => 'Rua São Mateus, Rio Branco - AC, 150',
                'bairro' => 'Residencial Araçá',
                'cep' => '69.915-354',
                'created_at' => '2021-01-18 09:36:06',
                'updated_at' => '2021-01-18 09:36:06',
            ),
            49 => 
            array (
                'id' => 550,
                'endereco' => 'Travessa Canaã, Rio Branco - AC, 164',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-692',
                'created_at' => '2021-01-18 09:36:18',
                'updated_at' => '2021-01-18 09:36:18',
            ),
            50 => 
            array (
                'id' => 551,
                'endereco' => 'Avenida dos Ipês, Rio Branco - AC, 664',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-343',
                'created_at' => '2021-01-18 09:36:35',
                'updated_at' => '2021-01-18 09:36:35',
            ),
            51 => 
            array (
                'id' => 552,
                'endereco' => 'Avenida Beira Rio, Rio Branco - AC, 180',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-404',
                'created_at' => '2021-01-18 09:37:37',
                'updated_at' => '2021-01-18 09:37:37',
            ),
            52 => 
            array (
                'id' => 553,
                'endereco' => 'Rua Fluminense, Rio Branco - AC, 151',
                'bairro' => 'ELDORADO',
                'cep' => '69.902-389',
                'created_at' => '2021-01-18 09:37:56',
                'updated_at' => '2021-01-18 09:37:56',
            ),
            53 => 
            array (
                'id' => 554,
                'endereco' => 'Rua Lázaro Teixeira dos Santos, Rio Branco - AC, 134',
                'bairro' => 'Vila da Amizade',
                'cep' => '69.909-646',
                'created_at' => '2021-01-18 09:38:02',
                'updated_at' => '2021-01-18 09:38:02',
            ),
            54 => 
            array (
                'id' => 555,
                'endereco' => 'Rua Tamarindo, Rio Branco - AC, 60',
                'bairro' => 'Loteamento Santa LUZIa',
                'cep' => '69.903-361',
                'created_at' => '2021-01-18 09:38:20',
                'updated_at' => '2021-01-18 09:38:20',
            ),
            55 => 
            array (
                'id' => 556,
                'endereco' => 'Rua Peru, Rio Branco - AC, 505',
                'bairro' => 'Habitasa',
                'cep' => '69.905-106',
                'created_at' => '2021-01-18 09:38:48',
                'updated_at' => '2021-01-18 09:38:48',
            ),
            56 => 
            array (
                'id' => 557,
                'endereco' => 'Rua Olga Abud, Rio Branco - AC, 257',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-706',
                'created_at' => '2021-01-18 09:39:08',
                'updated_at' => '2021-01-18 09:39:08',
            ),
            57 => 
            array (
                'id' => 558,
                'endereco' => 'Rua B, Rio Branco - AC, 328',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-744',
                'created_at' => '2021-01-18 09:40:16',
                'updated_at' => '2021-01-18 09:40:16',
            ),
            58 => 
            array (
                'id' => 559,
                'endereco' => 'Rua Cruzeiro do Sul, Rio Branco - AC, 23',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-288',
                'created_at' => '2021-01-18 09:40:34',
                'updated_at' => '2021-01-18 09:40:34',
            ),
            59 => 
            array (
                'id' => 560,
                'endereco' => 'Rua Jorge Rivasplata, Rio Branco - AC, 249',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-669',
                'created_at' => '2021-01-18 09:41:30',
                'updated_at' => '2021-01-18 09:41:30',
            ),
            60 => 
            array (
                'id' => 561,
                'endereco' => 'Travessa Flamengo, Rio Branco - AC, 235',
                'bairro' => 'Aviário',
                'cep' => '69.900-851',
                'created_at' => '2021-01-18 09:41:39',
                'updated_at' => '2021-01-18 09:41:39',
            ),
            61 => 
            array (
                'id' => 562,
                'endereco' => 'Rua Peru, Rio Branco - AC, 590',
                'bairro' => 'Habitasa',
                'cep' => '69.905-106',
                'created_at' => '2021-01-18 09:41:50',
                'updated_at' => '2021-01-18 09:41:50',
            ),
            62 => 
            array (
                'id' => 563,
                'endereco' => 'Rua Maria José Domingos, Rio Branco - AC. Bloco a1 ap. 4 - Residencial Calafate 1, 74',
                'bairro' => 'Calafate',
                'cep' => '69.914-314',
                'created_at' => '2021-01-18 09:42:36',
                'updated_at' => '2021-01-18 09:42:36',
            ),
            63 => 
            array (
                'id' => 564,
                'endereco' => 'Rua Peru, Rio Branco - AC, 505',
                'bairro' => 'Habitasa',
                'cep' => '69.905-106',
                'created_at' => '2021-01-18 09:43:22',
                'updated_at' => '2021-01-18 09:43:22',
            ),
            64 => 
            array (
                'id' => 565,
                'endereco' => 'Rua 12, Rio Branco - AC, ',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 09:43:29',
                'updated_at' => '2021-01-18 09:43:29',
            ),
            65 => 
            array (
                'id' => 566,
                'endereco' => 'Rodovia BR-364, Rio Branco - AC, 6037',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-000',
                'created_at' => '2021-01-18 09:44:04',
                'updated_at' => '2021-01-18 09:44:04',
            ),
            66 => 
            array (
                'id' => 567,
                'endereco' => 'Rua Projetada 225, Rio Branco - AC, 226',
                'bairro' => 'Pedro Roseno',
                'cep' => '69.917-662',
                'created_at' => '2021-01-18 09:44:10',
                'updated_at' => '2021-01-18 09:44:10',
            ),
            67 => 
            array (
                'id' => 568,
                'endereco' => 'Avenida dos Ipês, Rio Branco - AC, 664',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-343',
                'created_at' => '2021-01-18 09:44:13',
                'updated_at' => '2021-01-18 09:44:13',
            ),
            68 => 
            array (
                'id' => 569,
                'endereco' => 'Travessa Flamengo, Rio Branco - AC, 235',
                'bairro' => 'Aviário',
                'cep' => '69.900-851',
                'created_at' => '2021-01-18 09:44:50',
                'updated_at' => '2021-01-18 09:44:50',
            ),
            69 => 
            array (
                'id' => 570,
                'endereco' => 'Beco da Cigana, Rio Branco - AC, 343',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-608',
                'created_at' => '2021-01-18 09:44:51',
                'updated_at' => '2021-01-18 09:44:51',
            ),
            70 => 
            array (
                'id' => 571,
                'endereco' => 'Rua A, Rio Branco - AC, 1055',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-420',
                'created_at' => '2021-01-18 09:45:00',
                'updated_at' => '2021-01-18 09:45:00',
            ),
            71 => 
            array (
                'id' => 572,
                'endereco' => 'Rua Mercúrio, Rio Branco - AC, 18',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-115',
                'created_at' => '2021-01-18 09:45:02',
                'updated_at' => '2021-01-18 09:45:02',
            ),
            72 => 
            array (
                'id' => 573,
                'endereco' => 'Ramal da Judia, Rio Branco - AC, 1309',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-796',
                'created_at' => '2021-01-18 09:45:06',
                'updated_at' => '2021-01-18 09:45:06',
            ),
            73 => 
            array (
                'id' => 574,
                'endereco' => 'Rua Franco Silva, Rio Branco - AC, 2490',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-314',
                'created_at' => '2021-01-18 09:47:40',
                'updated_at' => '2021-01-18 09:47:40',
            ),
            74 => 
            array (
                'id' => 575,
                'endereco' => 'Rua 15 de Dezembro, Rio Branco - AC, 217',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-226',
                'created_at' => '2021-01-18 09:47:49',
                'updated_at' => '2021-01-18 09:47:49',
            ),
            75 => 
            array (
                'id' => 576,
                'endereco' => 'Avenida Ceará, Rio Branco - AC, 1755',
                'bairro' => 'Centro',
                'cep' => '69.900-088',
                'created_at' => '2021-01-18 09:48:26',
                'updated_at' => '2021-01-18 09:48:26',
            ),
            76 => 
            array (
                'id' => 577,
                'endereco' => 'Rua Peru, Rio Branco - AC, 590',
                'bairro' => 'Habitasa',
                'cep' => '69.905-106',
                'created_at' => '2021-01-18 09:48:35',
                'updated_at' => '2021-01-18 09:48:35',
            ),
            77 => 
            array (
                'id' => 578,
                'endereco' => '..., 37',
                'bairro' => 'Tv Maria Helena, bom Jesus, Vila acre',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 09:49:07',
                'updated_at' => '2021-01-18 09:49:07',
            ),
            78 => 
            array (
                'id' => 579,
                'endereco' => 'Rua Montreal, Rio Branco - AC, 49',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-112',
                'created_at' => '2021-01-18 09:49:30',
                'updated_at' => '2021-01-18 09:49:30',
            ),
            79 => 
            array (
                'id' => 580,
                'endereco' => 'Rua São Nicolau, Rio Branco - AC, 148',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-452',
                'created_at' => '2021-01-18 09:49:58',
                'updated_at' => '2021-01-18 09:49:58',
            ),
            80 => 
            array (
                'id' => 581,
                'endereco' => 'Rua Poços de Caldas, Rio Branco - Acre, 30',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-418',
                'created_at' => '2021-01-18 09:50:50',
                'updated_at' => '2021-01-18 09:50:50',
            ),
            81 => 
            array (
                'id' => 582,
                'endereco' => 'Rua Sena Madureira, Rio Branco - AC, 250',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-319',
                'created_at' => '2021-01-18 09:50:57',
                'updated_at' => '2021-01-18 09:50:57',
            ),
            82 => 
            array (
                'id' => 583,
                'endereco' => 'Rua Nabuco de Araújo, Rio Branco - AC, 268',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-160',
                'created_at' => '2021-01-18 09:50:59',
                'updated_at' => '2021-01-18 09:50:59',
            ),
            83 => 
            array (
                'id' => 584,
                'endereco' => 'Rua Mangueira, Rio Branco - Ac, 268',
                'bairro' => 'Plácido de Castro',
                'cep' => '69.912-184',
                'created_at' => '2021-01-18 09:51:10',
                'updated_at' => '2021-01-18 09:51:10',
            ),
            84 => 
            array (
                'id' => 585,
                'endereco' => 'Estrada Raimundo Irineu Serra, Rio Branco - AC, 745',
                'bairro' => 'Loteamento Novo Horizonte',
                'cep' => '69.921-134',
                'created_at' => '2021-01-18 09:51:23',
                'updated_at' => '2021-01-18 09:51:23',
            ),
            85 => 
            array (
                'id' => 586,
                'endereco' => 'Rua Gabino Besouro, Rio Branco - AC, 358',
                'bairro' => 'Preventório',
                'cep' => '69.900-159',
                'created_at' => '2021-01-18 09:52:24',
                'updated_at' => '2021-01-18 09:52:24',
            ),
            86 => 
            array (
                'id' => 587,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 120',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 09:52:51',
                'updated_at' => '2021-01-18 09:52:51',
            ),
            87 => 
            array (
                'id' => 588,
                'endereco' => 'Rua Poços de Caldas, Rio Branco - Acre, 30',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-418',
                'created_at' => '2021-01-18 09:54:44',
                'updated_at' => '2021-01-18 09:54:44',
            ),
            88 => 
            array (
                'id' => 589,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 219',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-844',
                'created_at' => '2021-01-18 09:55:50',
                'updated_at' => '2021-01-18 09:55:50',
            ),
            89 => 
            array (
                'id' => 590,
                'endereco' => '..., 37',
                'bairro' => 'Tv.maria Helena,bom Jesus, Vila acre',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 09:56:10',
                'updated_at' => '2021-01-18 09:56:10',
            ),
            90 => 
            array (
                'id' => 591,
                'endereco' => 'Rua Gabino Besouro, Rio Branco - AC, 348',
                'bairro' => 'Preventório',
                'cep' => '69.900-159',
                'created_at' => '2021-01-18 09:57:35',
                'updated_at' => '2021-01-18 09:57:35',
            ),
            91 => 
            array (
                'id' => 592,
                'endereco' => ', Bujari - AC, 211',
                'bairro' => 'Centro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-18 09:57:41',
                'updated_at' => '2021-01-18 09:57:41',
            ),
            92 => 
            array (
                'id' => 593,
                'endereco' => 'Rua São Pedro, Rio Branco - AC, 11',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-229',
                'created_at' => '2021-01-18 09:57:57',
                'updated_at' => '2021-01-18 09:57:57',
            ),
            93 => 
            array (
                'id' => 594,
                'endereco' => 'Ramal da Judia, Rio Branco - AC, 1309',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-796',
                'created_at' => '2021-01-18 09:58:04',
                'updated_at' => '2021-01-18 09:58:04',
            ),
            94 => 
            array (
                'id' => 595,
                'endereco' => 'Travessa Feijó, q 06 c 93 Rio Branco - AC, 104',
                'bairro' => 'Eldorado',
                'cep' => '69.902-311',
                'created_at' => '2021-01-18 09:58:54',
                'updated_at' => '2021-01-18 09:58:54',
            ),
            95 => 
            array (
                'id' => 596,
                'endereco' => 'Estrada do São Francisco, Rio Branco - AC, 2019',
                'bairro' => 'Vitória',
                'cep' => '69.901-815',
                'created_at' => '2021-01-18 10:00:31',
                'updated_at' => '2021-01-18 10:00:31',
            ),
            96 => 
            array (
                'id' => 597,
                'endereco' => 'Travessa Osasco, Rio Branco - AC, 29',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-428',
                'created_at' => '2021-01-18 10:02:03',
                'updated_at' => '2021-01-18 10:02:03',
            ),
            97 => 
            array (
                'id' => 598,
                'endereco' => 'Rua 11 de Dezembro, Rio Branco - AC, 43',
                'bairro' => 'Sobral',
                'cep' => '69.912-006',
                'created_at' => '2021-01-18 10:03:22',
                'updated_at' => '2021-01-18 10:03:22',
            ),
            98 => 
            array (
                'id' => 599,
                'endereco' => 'Rua Pequena Jéssca, Rio Branco - AC, 49',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-873',
                'created_at' => '2021-01-18 10:03:47',
                'updated_at' => '2021-01-18 10:03:47',
            ),
            99 => 
            array (
                'id' => 600,
                'endereco' => 'Rua Barra do Sol, Rio Branco - AC, 398',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-428',
                'created_at' => '2021-01-18 10:04:41',
                'updated_at' => '2021-01-18 10:04:41',
            ),
            100 => 
            array (
                'id' => 601,
                'endereco' => 'Estrada do Calafate, Rio Branco - AC, 3391',
                'bairro' => 'Calafate',
                'cep' => '69.914-324',
                'created_at' => '2021-01-18 10:06:16',
                'updated_at' => '2021-01-18 10:06:16',
            ),
            101 => 
            array (
                'id' => 602,
                'endereco' => 'Rua Edmundo Pinto, Rio Branco - AC, 156',
                'bairro' => 'Jardim Brasil',
                'cep' => '69.919-508',
                'created_at' => '2021-01-18 10:06:33',
                'updated_at' => '2021-01-18 10:06:33',
            ),
            102 => 
            array (
                'id' => 603,
                'endereco' => 'Rua Pequena Jéssca, Rio Branco - AC, 49',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-873',
                'created_at' => '2021-01-18 10:07:49',
                'updated_at' => '2021-01-18 10:07:49',
            ),
            103 => 
            array (
                'id' => 604,
                'endereco' => 'Travessa Coral, Rio Branco - AC, 13',
                'bairro' => 'Areal',
                'cep' => '69.906-101',
                'created_at' => '2021-01-18 10:08:06',
                'updated_at' => '2021-01-18 10:08:06',
            ),
            104 => 
            array (
                'id' => 605,
                'endereco' => 'Avenida dos Ipês, Rio Branco - AC, 124',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-343',
                'created_at' => '2021-01-18 10:10:42',
                'updated_at' => '2021-01-18 10:10:42',
            ),
            105 => 
            array (
                'id' => 606,
                'endereco' => 'Rua Santa Luzia, Rio Branco - AC, 215',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-444',
                'created_at' => '2021-01-18 10:11:00',
                'updated_at' => '2021-01-18 10:11:00',
            ),
            106 => 
            array (
                'id' => 607,
                'endereco' => 'Rua Joaquim Macêdo, Rio Branco - AC, 1693',
                'bairro' => 'São Francisco',
                'cep' => '69.901-591',
                'created_at' => '2021-01-18 10:11:18',
                'updated_at' => '2021-01-18 10:11:18',
            ),
            107 => 
            array (
                'id' => 608,
                'endereco' => 'Rua Topázio, Rio Branco - AC, 39',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-891',
                'created_at' => '2021-01-18 10:13:17',
                'updated_at' => '2021-01-18 10:13:17',
            ),
            108 => 
            array (
                'id' => 609,
                'endereco' => 'Rua Pequena Jéssca, Rio Branco - AC, 49',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-873',
                'created_at' => '2021-01-18 10:13:32',
                'updated_at' => '2021-01-18 10:13:32',
            ),
            109 => 
            array (
                'id' => 610,
                'endereco' => 'Rua México, Rio Branco - AC, 153',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-199',
                'created_at' => '2021-01-18 10:15:17',
                'updated_at' => '2021-01-18 10:15:17',
            ),
            110 => 
            array (
                'id' => 611,
                'endereco' => 'Ramal da Judia, Rio Branco - AC, 1268',
                'bairro' => 'Belo Jardim i',
                'cep' => '69.907-796',
                'created_at' => '2021-01-18 10:15:26',
                'updated_at' => '2021-01-18 10:15:26',
            ),
            111 => 
            array (
                'id' => 612,
                'endereco' => 'Rua 13 de Maio, Rio Branco - AC, 201',
                'bairro' => 'Boa UNIÃO',
                'cep' => '69.911-760',
                'created_at' => '2021-01-18 10:15:42',
                'updated_at' => '2021-01-18 10:15:42',
            ),
            112 => 
            array (
                'id' => 613,
                'endereco' => 'Rua Santa Luzia, Rio Branco - AC, 215',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-444',
                'created_at' => '2021-01-18 10:15:45',
                'updated_at' => '2021-01-18 10:15:45',
            ),
            113 => 
            array (
                'id' => 614,
                'endereco' => 'Rua Iguaçu da Glória, Rio Branco - AC, 60',
                'bairro' => 'Vitória',
                'cep' => '69.901-695',
                'created_at' => '2021-01-18 10:15:46',
                'updated_at' => '2021-01-18 10:15:46',
            ),
            114 => 
            array (
                'id' => 615,
                'endereco' => 'Rua Manoel Cesário, Rio Branco - AC, 108',
                'bairro' => 'Capoeira',
                'cep' => '69.905-006',
                'created_at' => '2021-01-18 10:15:55',
                'updated_at' => '2021-01-18 10:15:55',
            ),
            115 => 
            array (
                'id' => 616,
                'endereco' => 'Travessa Chalub Leite, Rio Branco - AC, 158',
                'bairro' => 'Nova ESTAÇÃO',
                'cep' => '69.918-346',
                'created_at' => '2021-01-18 10:16:07',
                'updated_at' => '2021-01-18 10:16:07',
            ),
            116 => 
            array (
                'id' => 617,
                'endereco' => 'Travessa Chalub Leite, Rio Branco - AC, 158',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-346',
                'created_at' => '2021-01-18 10:16:47',
                'updated_at' => '2021-01-18 10:16:47',
            ),
            117 => 
            array (
                'id' => 618,
                'endereco' => 'Rua da Sanacre, Rio Branco - AC, 843',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-731',
                'created_at' => '2021-01-18 10:16:57',
                'updated_at' => '2021-01-18 10:16:57',
            ),
            118 => 
            array (
                'id' => 619,
                'endereco' => '..., 98',
                'bairro' => '...',
                'cep' => '69.907-870',
                'created_at' => '2021-01-18 10:18:21',
                'updated_at' => '2021-01-18 10:18:21',
            ),
            119 => 
            array (
                'id' => 620,
                'endereco' => 'Rua Antônio Carlos, Rio Branco - AC, 61',
                'bairro' => 'São FRANCISCO',
                'cep' => '69.901-555',
                'created_at' => '2021-01-18 10:20:13',
                'updated_at' => '2021-01-18 10:20:13',
            ),
            120 => 
            array (
                'id' => 621,
                'endereco' => 'Antônio José Nogueira, 116',
                'bairro' => 'João Eduardo',
                'cep' => '69.911-434',
                'created_at' => '2021-01-18 10:22:03',
                'updated_at' => '2021-01-18 10:22:03',
            ),
            121 => 
            array (
                'id' => 622,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 229',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-629',
                'created_at' => '2021-01-18 10:23:58',
                'updated_at' => '2021-01-18 10:23:58',
            ),
            122 => 
            array (
                'id' => 623,
                'endereco' => 'Beco São Cristóvão, Rio Branco - AC, 71',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-719',
                'created_at' => '2021-01-18 10:24:24',
                'updated_at' => '2021-01-18 10:24:24',
            ),
            123 => 
            array (
                'id' => 624,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 136',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 10:24:26',
                'updated_at' => '2021-01-18 10:24:26',
            ),
            124 => 
            array (
                'id' => 625,
                'endereco' => 'Travessa Santa Inês, Rio Branco - AC, 274',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-310',
                'created_at' => '2021-01-18 10:24:26',
                'updated_at' => '2021-01-18 10:24:26',
            ),
            125 => 
            array (
                'id' => 626,
                'endereco' => 'Rua Quintino Bocaiuva, Rio Branco - AC, 1630',
                'bairro' => 'Bosque',
                'cep' => '69.900-718',
                'created_at' => '2021-01-18 10:24:50',
                'updated_at' => '2021-01-18 10:24:50',
            ),
            126 => 
            array (
                'id' => 627,
                'endereco' => 'Rua Minas Gerais, Rio Branco - AC, 1253',
                'bairro' => 'Preventório',
                'cep' => '69.900-180',
                'created_at' => '2021-01-18 10:24:57',
                'updated_at' => '2021-01-18 10:24:57',
            ),
            127 => 
            array (
                'id' => 628,
                'endereco' => 'Rua Xapuri, Rio Branco - AC, 164',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-072',
                'created_at' => '2021-01-18 10:25:42',
                'updated_at' => '2021-01-18 10:25:42',
            ),
            128 => 
            array (
                'id' => 629,
                'endereco' => 'Rua 1º de Maio, Rio Branco - AC, 469',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-626',
                'created_at' => '2021-01-18 10:25:47',
                'updated_at' => '2021-01-18 10:25:47',
            ),
            129 => 
            array (
                'id' => 630,
                'endereco' => 'Travessa Cruzeiro do Sul, Rio Branco - AC, 61',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-009',
                'created_at' => '2021-01-18 10:25:50',
                'updated_at' => '2021-01-18 10:25:50',
            ),
            130 => 
            array (
                'id' => 631,
                'endereco' => 'rua da amizade, 0',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 10:26:05',
                'updated_at' => '2021-01-18 10:26:05',
            ),
            131 => 
            array (
                'id' => 632,
                'endereco' => 'Rua Maria Bertoldo, Rio Branco - AC, 140',
                'bairro' => 'Vila Santa Cecília',
                'cep' => '69.908-120',
                'created_at' => '2021-01-18 10:26:43',
                'updated_at' => '2021-01-18 10:26:43',
            ),
            132 => 
            array (
                'id' => 633,
                'endereco' => 'Travessa do Pescador, Rio Branco - AC, 992',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-780',
                'created_at' => '2021-01-18 10:33:15',
                'updated_at' => '2021-01-18 10:33:15',
            ),
            133 => 
            array (
                'id' => 634,
                'endereco' => 'Rua Rosas, Rio Branco - AC, 107',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-048',
                'created_at' => '2021-01-18 10:33:36',
                'updated_at' => '2021-01-18 10:33:36',
            ),
            134 => 
            array (
                'id' => 635,
                'endereco' => 'Ramal da Escola, Rio Branco - AC, 199',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-800',
                'created_at' => '2021-01-18 10:35:24',
                'updated_at' => '2021-01-18 10:35:24',
            ),
            135 => 
            array (
                'id' => 636,
                'endereco' => 'Rua Antônio José Nogueira, Rio Branco - AC, 116',
                'bairro' => 'João Eduardo',
                'cep' => '69.911-434',
                'created_at' => '2021-01-18 10:37:55',
                'updated_at' => '2021-01-18 10:37:55',
            ),
            136 => 
            array (
                'id' => 637,
                'endereco' => 'Rua Cisne, Rio Branco - AC, 161',
                'bairro' => 'Conjunto Ouricurí',
                'cep' => '69.903-215',
                'created_at' => '2021-01-18 10:38:33',
                'updated_at' => '2021-01-18 10:38:33',
            ),
            137 => 
            array (
                'id' => 638,
                'endereco' => '..., 166',
                'bairro' => '...',
                'cep' => '69.905-278',
                'created_at' => '2021-01-18 10:38:39',
                'updated_at' => '2021-01-18 10:38:39',
            ),
            138 => 
            array (
                'id' => 639,
                'endereco' => ', Bujari - AC, 210',
                'bairro' => 'Cebtro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-18 10:40:00',
                'updated_at' => '2021-01-18 10:40:00',
            ),
            139 => 
            array (
                'id' => 640,
                'endereco' => 'Rua Pio XII, Rio Branco - AC, 142',
                'bairro' => 'Conjunto Mascarenhas de Moraes',
                'cep' => '69.918-030',
                'created_at' => '2021-01-18 10:41:45',
                'updated_at' => '2021-01-18 10:41:45',
            ),
            140 => 
            array (
                'id' => 641,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 316',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 10:42:17',
                'updated_at' => '2021-01-18 10:42:17',
            ),
            141 => 
            array (
                'id' => 642,
                'endereco' => 'Rua Seringueira, Rio Branco - AC, 110',
                'bairro' => 'Vila ACRE',
                'cep' => '69.909-734',
                'created_at' => '2021-01-18 10:44:41',
                'updated_at' => '2021-01-18 10:44:41',
            ),
            142 => 
            array (
                'id' => 643,
                'endereco' => 'Rua Pio XII, Rio Branco - AC, 142',
                'bairro' => 'Conjunto Mascarenhas de Moraes',
                'cep' => '69.918-030',
                'created_at' => '2021-01-18 10:45:05',
                'updated_at' => '2021-01-18 10:45:05',
            ),
            143 => 
            array (
                'id' => 644,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 199',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-444',
                'created_at' => '2021-01-18 10:46:23',
                'updated_at' => '2021-01-18 10:46:23',
            ),
            144 => 
            array (
                'id' => 645,
                'endereco' => 'Rua São Caetano, Rio Branco - AC, 29',
                'bairro' => 'Oscar passos',
                'cep' => '69.901-513',
                'created_at' => '2021-01-18 10:47:52',
                'updated_at' => '2021-01-18 10:47:52',
            ),
            145 => 
            array (
                'id' => 646,
                'endereco' => 'Rua Parati, Rio Branco - AC, 17',
                'bairro' => 'Novo Horizonte -fLORESTA',
                'cep' => '69.911-401',
                'created_at' => '2021-01-18 10:47:57',
                'updated_at' => '2021-01-18 10:47:57',
            ),
            146 => 
            array (
                'id' => 647,
                'endereco' => 'Rua Elias MANSOUR, Rio Branco - AC, 166',
                'bairro' => 'Baixada da Cadeia VELHA',
                'cep' => '69.905-278',
                'created_at' => '2021-01-18 10:48:01',
                'updated_at' => '2021-01-18 10:48:01',
            ),
            147 => 
            array (
                'id' => 648,
                'endereco' => 'Rua Cristo Rei, Rio Branco - AC, 449',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-216',
                'created_at' => '2021-01-18 10:48:06',
                'updated_at' => '2021-01-18 10:48:06',
            ),
            148 => 
            array (
                'id' => 649,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 1402',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-232',
                'created_at' => '2021-01-18 10:49:18',
                'updated_at' => '2021-01-18 10:49:18',
            ),
            149 => 
            array (
                'id' => 650,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 1402',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-232',
                'created_at' => '2021-01-18 10:54:03',
                'updated_at' => '2021-01-18 10:54:03',
            ),
            150 => 
            array (
                'id' => 651,
                'endereco' => 'Travessa Pipira, 20',
                'bairro' => 'Santa Maria',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 10:55:08',
                'updated_at' => '2021-01-18 10:55:08',
            ),
            151 => 
            array (
                'id' => 652,
                'endereco' => 'Rua Pequena Jéssca, Rio Branco - AC, 509',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-873',
                'created_at' => '2021-01-18 10:55:58',
                'updated_at' => '2021-01-18 10:55:58',
            ),
            152 => 
            array (
                'id' => 653,
                'endereco' => 'Rua B, Rio Branco - AC, 105',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-744',
                'created_at' => '2021-01-18 10:57:44',
                'updated_at' => '2021-01-18 10:57:44',
            ),
            153 => 
            array (
                'id' => 654,
                'endereco' => 'Rua Gilson Nogueira Barros, Rio Branco - AC, 473',
                'bairro' => 'Calafate',
                'cep' => '69.914-370',
                'created_at' => '2021-01-18 10:57:58',
                'updated_at' => '2021-01-18 10:57:58',
            ),
            154 => 
            array (
                'id' => 655,
                'endereco' => 'Rua José Mendes, Rio Branco - AC, 355',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-236',
                'created_at' => '2021-01-18 11:00:19',
                'updated_at' => '2021-01-18 11:00:19',
            ),
            155 => 
            array (
                'id' => 656,
                'endereco' => 'Rua José Luis, Rio Branco - AC, 299',
                'bairro' => 'Santa Inêssa',
                'cep' => '69.907-677',
                'created_at' => '2021-01-18 11:00:35',
                'updated_at' => '2021-01-18 11:00:35',
            ),
            156 => 
            array (
                'id' => 657,
                'endereco' => '..., 949',
                'bairro' => '...',
                'cep' => '69.900-574',
                'created_at' => '2021-01-18 11:01:35',
                'updated_at' => '2021-01-18 11:01:35',
            ),
            157 => 
            array (
                'id' => 658,
                'endereco' => 'Rua Acre, Rio Branco - AC, 76',
                'bairro' => 'Vila da Amizade',
                'cep' => '69.909-669',
                'created_at' => '2021-01-18 11:02:12',
                'updated_at' => '2021-01-18 11:02:12',
            ),
            158 => 
            array (
                'id' => 659,
                'endereco' => 'Travessa da Hosana, Rio Branco - AC, 276',
                'bairro' => 'Loteamento Santa HELENA',
                'cep' => '69.908-676',
                'created_at' => '2021-01-18 11:04:25',
                'updated_at' => '2021-01-18 11:04:25',
            ),
            159 => 
            array (
                'id' => 660,
                'endereco' => 'Rua Jambo, Rio Branco - AC, 208',
                'bairro' => 'Xavier Maia',
                'cep' => '69.903-024',
                'created_at' => '2021-01-18 11:05:45',
                'updated_at' => '2021-01-18 11:05:45',
            ),
            160 => 
            array (
                'id' => 661,
                'endereco' => 'Rua Gilson Nogueira Barros, Rio Branco - AC, 473',
                'bairro' => 'Calafate',
                'cep' => '69.914-370',
                'created_at' => '2021-01-18 11:06:13',
                'updated_at' => '2021-01-18 11:06:13',
            ),
            161 => 
            array (
                'id' => 662,
                'endereco' => 'Estrada do Calafate, Rio Branco - AC, 4360',
                'bairro' => 'Calafate',
                'cep' => '69.914-312',
                'created_at' => '2021-01-18 11:06:31',
                'updated_at' => '2021-01-18 11:06:31',
            ),
            162 => 
            array (
                'id' => 663,
                'endereco' => 'Rua Ametista, Rio Branco - AC, 319',
                'bairro' => 'Jardim Primavera',
                'cep' => '69.919-622',
                'created_at' => '2021-01-18 11:06:53',
                'updated_at' => '2021-01-18 11:06:53',
            ),
            163 => 
            array (
                'id' => 664,
                'endereco' => 'Rua São João, Rio Branco - AC, 100',
                'bairro' => 'PISTA',
                'cep' => '69.911-182',
                'created_at' => '2021-01-18 11:07:29',
                'updated_at' => '2021-01-18 11:07:29',
            ),
            164 => 
            array (
                'id' => 665,
                'endereco' => 'Rua Alcimar Leitão, Rio Branco - AC, 217',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-720',
                'created_at' => '2021-01-18 11:08:01',
                'updated_at' => '2021-01-18 11:08:01',
            ),
            165 => 
            array (
                'id' => 666,
                'endereco' => 'Rua w8, 21',
                'bairro' => 'Tucu6',
                'cep' => '69.919-724',
                'created_at' => '2021-01-18 11:08:03',
                'updated_at' => '2021-01-18 11:08:03',
            ),
            166 => 
            array (
                'id' => 667,
                'endereco' => 'Rua Cristo Rei, Rio Branco - AC, 449',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-216',
                'created_at' => '2021-01-18 11:08:11',
                'updated_at' => '2021-01-18 11:08:11',
            ),
            167 => 
            array (
                'id' => 668,
                'endereco' => 'Rua Saturno, Rio Branco - AC, 41',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-148',
                'created_at' => '2021-01-18 11:08:19',
                'updated_at' => '2021-01-18 11:08:19',
            ),
            168 => 
            array (
                'id' => 669,
                'endereco' => 'Rua Deodápolis, Rio Branco - AC, 34',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-689',
                'created_at' => '2021-01-18 11:08:59',
                'updated_at' => '2021-01-18 11:08:59',
            ),
            169 => 
            array (
                'id' => 670,
                'endereco' => 'Avenida Recanto Verde, Rio Branco - AC, 203',
                'bairro' => 'Residencial Petrópolis',
                'cep' => '69.919-182',
                'created_at' => '2021-01-18 11:09:30',
                'updated_at' => '2021-01-18 11:09:30',
            ),
            170 => 
            array (
                'id' => 671,
                'endereco' => 'Rua Veríssimo Costa Neto, Rio Branco - AC, 206',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-864',
                'created_at' => '2021-01-18 11:11:21',
                'updated_at' => '2021-01-18 11:11:21',
            ),
            171 => 
            array (
                'id' => 672,
                'endereco' => 'Ramal Raimundo Saldanha, Rio Branco - AC, 230',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-802',
                'created_at' => '2021-01-18 11:11:40',
                'updated_at' => '2021-01-18 11:11:40',
            ),
            172 => 
            array (
                'id' => 673,
                'endereco' => 'Rua São Judas Tadeu, Rio Branco - AC, 361',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-696',
                'created_at' => '2021-01-18 11:12:03',
                'updated_at' => '2021-01-18 11:12:03',
            ),
            173 => 
            array (
                'id' => 674,
                'endereco' => 'Travessa São Joaquim, Rio Branco - AC, 10',
                'bairro' => 'Taquarí',
                'cep' => '69.906-432',
                'created_at' => '2021-01-18 11:12:04',
                'updated_at' => '2021-01-18 11:12:04',
            ),
            174 => 
            array (
                'id' => 675,
                'endereco' => 'Rua do Centro, Rio Branco - AC, 64',
                'bairro' => 'Vila NOVa',
                'cep' => '69.921-092',
                'created_at' => '2021-01-18 11:13:29',
                'updated_at' => '2021-01-18 11:13:29',
            ),
            175 => 
            array (
                'id' => 676,
                'endereco' => 'Rua Aloízio de Azevedo, Rio Branco - AC, 209',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-174',
                'created_at' => '2021-01-18 11:14:33',
                'updated_at' => '2021-01-18 11:14:33',
            ),
            176 => 
            array (
                'id' => 677,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 339',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-18 11:15:24',
                'updated_at' => '2021-01-18 11:15:24',
            ),
            177 => 
            array (
                'id' => 678,
                'endereco' => 'Rua Nonato correia lima-loteamento Santa luzia, rio BRANCO-ac, 190',
                'bairro' => 'Apolônio sales',
                'cep' => '69.903-416',
                'created_at' => '2021-01-18 11:16:01',
                'updated_at' => '2021-01-18 11:16:01',
            ),
            178 => 
            array (
                'id' => 679,
                'endereco' => 'Rua Latorre, Rio Branco - AC, 315',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-212',
                'created_at' => '2021-01-18 11:16:15',
                'updated_at' => '2021-01-18 11:16:15',
            ),
            179 => 
            array (
                'id' => 680,
                'endereco' => 'Travessa da Judia, Rio Branco - AC, 735',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-518',
                'created_at' => '2021-01-18 11:16:32',
                'updated_at' => '2021-01-18 11:16:32',
            ),
            180 => 
            array (
                'id' => 681,
                'endereco' => 'Rua Hidaldo de Lima, Rio Branco - AC, 141',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-680',
                'created_at' => '2021-01-18 11:17:03',
                'updated_at' => '2021-01-18 11:17:03',
            ),
            181 => 
            array (
                'id' => 682,
                'endereco' => 'Rua 7 de Setembro, Rio Branco - AC, ',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-894',
                'created_at' => '2021-01-18 11:17:11',
                'updated_at' => '2021-01-18 11:17:11',
            ),
            182 => 
            array (
                'id' => 683,
                'endereco' => 'bairro pista, 32',
                'bairro' => 'rua f',
                'cep' => '69.911-168',
                'created_at' => '2021-01-18 11:17:27',
                'updated_at' => '2021-01-18 11:17:27',
            ),
            183 => 
            array (
                'id' => 684,
                'endereco' => 'Rua Baguari, Rio Branco - AC, 2698',
                'bairro' => 'TAQUARI',
                'cep' => '69.906-426',
                'created_at' => '2021-01-18 11:17:59',
                'updated_at' => '2021-01-18 11:17:59',
            ),
            184 => 
            array (
                'id' => 685,
                'endereco' => 'Rua Romã, Rio Branco - AC, 49',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-724',
                'created_at' => '2021-01-18 11:18:16',
                'updated_at' => '2021-01-18 11:18:16',
            ),
            185 => 
            array (
                'id' => 686,
                'endereco' => 'Rua Romã, Rio Branco - AC, 49',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-724',
                'created_at' => '2021-01-18 11:19:16',
                'updated_at' => '2021-01-18 11:19:16',
            ),
            186 => 
            array (
                'id' => 687,
                'endereco' => 'Rua Sanhaçu, Rio Branco - AC, 365',
                'bairro' => 'Ilson Ribeiro',
                'cep' => '69.914-544',
                'created_at' => '2021-01-18 11:21:09',
                'updated_at' => '2021-01-18 11:21:09',
            ),
            187 => 
            array (
                'id' => 688,
                'endereco' => 'Rua Principal do Areal, Rio Branco - AC, 364',
                'bairro' => 'Areal',
                'cep' => '69.906-084',
                'created_at' => '2021-01-18 11:21:54',
                'updated_at' => '2021-01-18 11:21:54',
            ),
            188 => 
            array (
                'id' => 689,
                'endereco' => 'Rua Tancredo Neves, Rio Branco - AC, 485',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-024',
                'created_at' => '2021-01-18 11:23:09',
                'updated_at' => '2021-01-18 11:23:09',
            ),
            189 => 
            array (
                'id' => 690,
                'endereco' => 'Rua do Areal, Rio Branco - AC, 1807',
                'bairro' => 'Areal',
                'cep' => '69.906-083',
                'created_at' => '2021-01-18 11:25:29',
                'updated_at' => '2021-01-18 11:25:29',
            ),
            190 => 
            array (
                'id' => 691,
                'endereco' => 'Rua 12, Rio Branco - AC, 375',
                'bairro' => 'Calafate',
                'cep' => '69.914-368',
                'created_at' => '2021-01-18 11:27:15',
                'updated_at' => '2021-01-18 11:27:15',
            ),
            191 => 
            array (
                'id' => 692,
                'endereco' => 'Rua Floriano Peixoto, Rio Branco - AC, 798',
                'bairro' => 'Centro',
                'cep' => '69.900-090',
                'created_at' => '2021-01-18 11:29:11',
                'updated_at' => '2021-01-18 11:29:11',
            ),
            192 => 
            array (
                'id' => 693,
                'endereco' => 'rodovia ac 40km 08  travessa pereira, 85',
                'bairro' => 'vila benfica',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 11:29:38',
                'updated_at' => '2021-01-18 11:29:38',
            ),
            193 => 
            array (
                'id' => 694,
                'endereco' => 'Rua Latorre, Rio Branco - AC, 315',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-212',
                'created_at' => '2021-01-18 11:29:39',
                'updated_at' => '2021-01-18 11:29:39',
            ),
            194 => 
            array (
                'id' => 695,
                'endereco' => 'Rua Nossa Senhora da Conceição, Rio Branco - AC, 245',
                'bairro' => 'QUINZE',
                'cep' => '69.905-496',
                'created_at' => '2021-01-18 11:29:49',
                'updated_at' => '2021-01-18 11:29:49',
            ),
            195 => 
            array (
                'id' => 696,
                'endereco' => 'Rua Mariana, Rio Branco - AC, 260',
                'bairro' => 'Vila da AMIZADE',
                'cep' => '69.909-658',
                'created_at' => '2021-01-18 11:30:00',
                'updated_at' => '2021-01-18 11:30:00',
            ),
            196 => 
            array (
                'id' => 697,
                'endereco' => 'Rua Menderson, Rio Branco - AC, 69',
                'bairro' => 'Conjunto Guiomard Santos',
                'cep' => '69.901-384',
                'created_at' => '2021-01-18 11:31:05',
                'updated_at' => '2021-01-18 11:31:05',
            ),
            197 => 
            array (
                'id' => 698,
                'endereco' => 'Rua Rádio Farol, Rio Branco - AC, 94',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-060',
                'created_at' => '2021-01-18 11:31:16',
                'updated_at' => '2021-01-18 11:31:16',
            ),
            198 => 
            array (
                'id' => 699,
                'endereco' => 'Rua 12, Rio Branco - AC, 375',
                'bairro' => 'Calafate',
                'cep' => '69.914-368',
                'created_at' => '2021-01-18 11:32:06',
                'updated_at' => '2021-01-18 11:32:06',
            ),
            199 => 
            array (
                'id' => 700,
                'endereco' => 'Travessa Jaguari, Rio Branco - AC, 124',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-248',
                'created_at' => '2021-01-18 11:33:03',
                'updated_at' => '2021-01-18 11:33:03',
            ),
            200 => 
            array (
                'id' => 701,
                'endereco' => 'Rua Valerio Magalhães, Rio Branco - AC, 14',
                'bairro' => 'Bosque',
                'cep' => '69.900-685',
                'created_at' => '2021-01-18 11:33:27',
                'updated_at' => '2021-01-18 11:33:27',
            ),
            201 => 
            array (
                'id' => 702,
                'endereco' => 'Rua Bem-te-vi, Rio Branco - AC, 177',
                'bairro' => 'Loteamento Jaguar',
                'cep' => '69.903-285',
                'created_at' => '2021-01-18 11:33:50',
                'updated_at' => '2021-01-18 11:33:50',
            ),
            202 => 
            array (
                'id' => 703,
                'endereco' => 'Rua Xapuri, Rio Branco - AC, 78',
                'bairro' => 'Base',
                'cep' => '69.900-019',
                'created_at' => '2021-01-18 11:34:24',
                'updated_at' => '2021-01-18 11:34:24',
            ),
            203 => 
            array (
                'id' => 704,
                'endereco' => 'Rua 19 de Novembro, Rio Branco - AC, 55',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-244',
                'created_at' => '2021-01-18 11:35:30',
                'updated_at' => '2021-01-18 11:35:30',
            ),
            204 => 
            array (
                'id' => 705,
                'endereco' => 'Rua 12, Rio Branco - AC, 39',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 11:35:38',
                'updated_at' => '2021-01-18 11:35:38',
            ),
            205 => 
            array (
                'id' => 706,
                'endereco' => 'Travessa Dom Pedro, Rio Branco - AC, 34',
                'bairro' => 'Bahia Velha',
                'cep' => '69.911-570',
                'created_at' => '2021-01-18 11:36:28',
                'updated_at' => '2021-01-18 11:36:28',
            ),
            206 => 
            array (
                'id' => 707,
                'endereco' => 'Rua Santa Rita, Rio Branco - AC, 612',
                'bairro' => 'Bahia Velha',
                'cep' => '69.911-582',
                'created_at' => '2021-01-18 11:38:07',
                'updated_at' => '2021-01-18 11:38:07',
            ),
            207 => 
            array (
                'id' => 708,
                'endereco' => 'Rua do Areal, Rio Branco - AC, 1807',
                'bairro' => 'Areal',
                'cep' => '69.906-083',
                'created_at' => '2021-01-18 11:38:20',
                'updated_at' => '2021-01-18 11:38:20',
            ),
            208 => 
            array (
                'id' => 709,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 184',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-18 11:38:41',
                'updated_at' => '2021-01-18 11:38:41',
            ),
            209 => 
            array (
                'id' => 710,
                'endereco' => 'Rua Almirante Jaceguais, Rio Branco - AC, 119',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-305',
                'created_at' => '2021-01-18 11:39:06',
                'updated_at' => '2021-01-18 11:39:06',
            ),
            210 => 
            array (
                'id' => 711,
                'endereco' => '..., 1115',
                'bairro' => '...',
                'cep' => '69.906-037',
                'created_at' => '2021-01-18 11:40:21',
                'updated_at' => '2021-01-18 11:40:21',
            ),
            211 => 
            array (
                'id' => 712,
                'endereco' => 'Rua 12, Rio Branco - AC, 39',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 11:41:01',
                'updated_at' => '2021-01-18 11:41:01',
            ),
            212 => 
            array (
                'id' => 713,
                'endereco' => 'Rua Antonio Ribeiro, Rio Branco - AC, 165',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-886',
                'created_at' => '2021-01-18 11:41:59',
                'updated_at' => '2021-01-18 11:41:59',
            ),
            213 => 
            array (
                'id' => 714,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 184',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-18 11:42:12',
                'updated_at' => '2021-01-18 11:42:12',
            ),
            214 => 
            array (
                'id' => 715,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 178',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-18 11:42:47',
                'updated_at' => '2021-01-18 11:42:47',
            ),
            215 => 
            array (
                'id' => 716,
                'endereco' => 'Rua 12, Rio Branco - AC, 39',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 11:43:23',
                'updated_at' => '2021-01-18 11:43:23',
            ),
            216 => 
            array (
                'id' => 717,
                'endereco' => 'Rua 26 de Junho, Rio Branco - AC, 439',
                'bairro' => 'Sobral',
                'cep' => '69.912-002',
                'created_at' => '2021-01-18 11:43:37',
                'updated_at' => '2021-01-18 11:43:37',
            ),
            217 => 
            array (
                'id' => 718,
                'endereco' => 'Travessa Baixa da Colina, Rio Branco - AC, 76',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-334',
                'created_at' => '2021-01-18 11:43:48',
                'updated_at' => '2021-01-18 11:43:48',
            ),
            218 => 
            array (
                'id' => 719,
                'endereco' => 'Rua Perpétua, Rio Branco - AC, 442',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-192',
                'created_at' => '2021-01-18 11:46:02',
                'updated_at' => '2021-01-18 11:46:02',
            ),
            219 => 
            array (
                'id' => 720,
                'endereco' => '...estrada Apolônio sales, 5259',
                'bairro' => 'Placas',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 11:46:22',
                'updated_at' => '2021-01-18 11:46:22',
            ),
            220 => 
            array (
                'id' => 721,
                'endereco' => 'Rua São Mateus, Rio Branco - AC, 150',
                'bairro' => 'Residencial Araçá',
                'cep' => '69.915-354',
                'created_at' => '2021-01-18 11:46:42',
                'updated_at' => '2021-01-18 11:46:42',
            ),
            221 => 
            array (
                'id' => 722,
                'endereco' => 'Rua Chico Mendes, Rio Branco - AC, 310',
                'bairro' => 'Calafate',
                'cep' => '69.914-360',
                'created_at' => '2021-01-18 11:48:37',
                'updated_at' => '2021-01-18 11:48:37',
            ),
            222 => 
            array (
                'id' => 723,
                'endereco' => 'Rua Romaria, Rio Branco - AC, 104',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-325',
                'created_at' => '2021-01-18 11:50:02',
                'updated_at' => '2021-01-18 11:50:02',
            ),
            223 => 
            array (
                'id' => 724,
                'endereco' => 'Rua Plácido de Castro, Rio Branco - AC, 18',
                'bairro' => 'Aeroporto VELHO',
                'cep' => '69.911-063',
                'created_at' => '2021-01-18 11:50:51',
                'updated_at' => '2021-01-18 11:50:51',
            ),
            224 => 
            array (
                'id' => 725,
                'endereco' => 'Rua Romaria, Rio Branco - AC, 104',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-325',
                'created_at' => '2021-01-18 11:53:21',
                'updated_at' => '2021-01-18 11:53:21',
            ),
            225 => 
            array (
                'id' => 726,
                'endereco' => 'Rua Mariana, Rio Branco - AC, 260',
                'bairro' => 'Vila da Amizade',
                'cep' => '69.909-658',
                'created_at' => '2021-01-18 11:55:20',
                'updated_at' => '2021-01-18 11:55:20',
            ),
            226 => 
            array (
                'id' => 727,
                'endereco' => 'Rua Orleir Cameli, Rio Branco - AC, 117',
                'bairro' => 'Boa Vista',
                'cep' => '69.912-128',
                'created_at' => '2021-01-18 11:56:56',
                'updated_at' => '2021-01-18 11:56:56',
            ),
            227 => 
            array (
                'id' => 728,
                'endereco' => 'Rua Fé de Deus, Rio Branco - AC, 49',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-223',
                'created_at' => '2021-01-18 11:57:34',
                'updated_at' => '2021-01-18 11:57:34',
            ),
            228 => 
            array (
                'id' => 729,
                'endereco' => 'Rua São Pedro, Rio Branco - AC, 38',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-229',
                'created_at' => '2021-01-18 11:58:28',
                'updated_at' => '2021-01-18 11:58:28',
            ),
            229 => 
            array (
                'id' => 730,
                'endereco' => 'Travessa Edson Cadaxo, Rio Branco - AC, 184',
                'bairro' => 'São Francisco',
                'cep' => '69.901-543',
                'created_at' => '2021-01-18 11:58:32',
                'updated_at' => '2021-01-18 11:58:32',
            ),
            230 => 
            array (
                'id' => 731,
                'endereco' => 'rua cearense, 70',
                'bairro' => '6 de agosto',
                'cep' => '69.905-703',
                'created_at' => '2021-01-18 11:59:31',
                'updated_at' => '2021-01-18 11:59:31',
            ),
            231 => 
            array (
                'id' => 732,
                'endereco' => 'Rua 2 de Abril, Rio Branco - AC, 183',
                'bairro' => 'Placas',
                'cep' => '69.902-762',
                'created_at' => '2021-01-18 11:59:50',
                'updated_at' => '2021-01-18 11:59:50',
            ),
            232 => 
            array (
                'id' => 733,
                'endereco' => 'Rua Santa Inês, Rio Branco - AC, 22',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-668',
                'created_at' => '2021-01-18 11:59:56',
                'updated_at' => '2021-01-18 11:59:56',
            ),
            233 => 
            array (
                'id' => 734,
                'endereco' => 'Rua do Futuro, Rio Branco - AC, 234',
                'bairro' => 'Bosque',
                'cep' => '69.900-709',
                'created_at' => '2021-01-18 12:00:23',
                'updated_at' => '2021-01-18 12:00:23',
            ),
            234 => 
            array (
                'id' => 735,
                'endereco' => 'Rua Evaldo Abreu Curity, Rio Branco - AC, 115',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-846',
                'created_at' => '2021-01-18 12:01:28',
                'updated_at' => '2021-01-18 12:01:28',
            ),
            235 => 
            array (
                'id' => 736,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 144',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-422',
                'created_at' => '2021-01-18 12:01:40',
                'updated_at' => '2021-01-18 12:01:40',
            ),
            236 => 
            array (
                'id' => 737,
                'endereco' => 'Rua 7 de Setembro, Rio Branco - AC, 88',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-803',
                'created_at' => '2021-01-18 12:02:03',
                'updated_at' => '2021-01-18 12:02:03',
            ),
            237 => 
            array (
                'id' => 738,
                'endereco' => 'Rua 7 de Dezembro, Rio Branco - AC, 704',
                'bairro' => 'Placas',
                'cep' => '69.902-756',
                'created_at' => '2021-01-18 12:02:31',
                'updated_at' => '2021-01-18 12:02:31',
            ),
            238 => 
            array (
                'id' => 739,
                'endereco' => 'Estrada do São Francisco, Rio Branco - AC, 1679',
                'bairro' => 'VITÓRIA',
                'cep' => '69.901-815',
                'created_at' => '2021-01-18 12:04:11',
                'updated_at' => '2021-01-18 12:04:11',
            ),
            239 => 
            array (
                'id' => 740,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 193',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-629',
                'created_at' => '2021-01-18 12:04:33',
                'updated_at' => '2021-01-18 12:04:33',
            ),
            240 => 
            array (
                'id' => 741,
                'endereco' => 'Rua 26 de Setembro, Rio Branco - AC, 159',
                'bairro' => 'Boa UNIÃo',
                'cep' => '69.911-768',
                'created_at' => '2021-01-18 12:05:52',
                'updated_at' => '2021-01-18 12:05:52',
            ),
            241 => 
            array (
                'id' => 742,
                'endereco' => 'Área Rural, Rio Branco - AC, 186',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 12:07:34',
                'updated_at' => '2021-01-18 12:07:34',
            ),
            242 => 
            array (
                'id' => 743,
                'endereco' => 'Avenida Oeste, Rio Branco - AC, 60',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-673',
                'created_at' => '2021-01-18 12:08:36',
                'updated_at' => '2021-01-18 12:08:36',
            ),
            243 => 
            array (
                'id' => 744,
                'endereco' => 'Estrada do São Francisco, Rio Branco - AC, 1679',
                'bairro' => 'VITÓRIA',
                'cep' => '69.901-815',
                'created_at' => '2021-01-18 12:11:17',
                'updated_at' => '2021-01-18 12:11:17',
            ),
            244 => 
            array (
                'id' => 745,
                'endereco' => 'Rua Senador Mário Maia, Rio Branco - AC, 72',
                'bairro' => 'Montanhês',
                'cep' => '69.921-545',
                'created_at' => '2021-01-18 12:11:47',
                'updated_at' => '2021-01-18 12:11:47',
            ),
            245 => 
            array (
                'id' => 746,
                'endereco' => 'Rua Caxias, Rio Branco - AC, 251',
                'bairro' => 'Quinze',
                'cep' => '69.905-502',
                'created_at' => '2021-01-18 12:12:26',
                'updated_at' => '2021-01-18 12:12:26',
            ),
            246 => 
            array (
                'id' => 747,
                'endereco' => 'Rua Luiz Pereira, Rio Branco - AC, 104',
                'bairro' => 'São Francisco',
                'cep' => '69.901-573',
                'created_at' => '2021-01-18 12:12:38',
                'updated_at' => '2021-01-18 12:12:38',
            ),
            247 => 
            array (
                'id' => 748,
                'endereco' => 'Rua 17 de Março, 289, Rio Branco - AC,, ',
                'bairro' => 'Vila Ivonete - conjunto procon',
                'cep' => '69.918-646',
                'created_at' => '2021-01-18 12:13:07',
                'updated_at' => '2021-01-18 12:13:07',
            ),
            248 => 
            array (
                'id' => 749,
                'endereco' => 'Rua Corinthians, Rio Branco - AC, 133',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-084',
                'created_at' => '2021-01-18 12:14:02',
                'updated_at' => '2021-01-18 12:14:02',
            ),
            249 => 
            array (
                'id' => 750,
                'endereco' => 'Rua 10 de Julho, Rio Branco - AC, ',
                'bairro' => 'Placas',
                'cep' => '69.902-758',
                'created_at' => '2021-01-18 12:14:46',
                'updated_at' => '2021-01-18 12:14:46',
            ),
            250 => 
            array (
                'id' => 751,
                'endereco' => 'Rua Elzo Rodrigues, Rio Branco - AC, 183',
                'bairro' => 'Eldorado',
                'cep' => '69.902-440',
                'created_at' => '2021-01-18 12:15:21',
                'updated_at' => '2021-01-18 12:15:21',
            ),
            251 => 
            array (
                'id' => 752,
                'endereco' => 'Rua Idelfonso de Almeida, Rio Branco - AC, 191',
                'bairro' => 'Wanderley DANTAs',
                'cep' => '69.902-855',
                'created_at' => '2021-01-18 12:16:15',
                'updated_at' => '2021-01-18 12:16:15',
            ),
            252 => 
            array (
                'id' => 753,
                'endereco' => 'Rua Isaura Parente, Rio Branco - AC, 2356',
                'bairro' => 'Estação EXPERIMENTAl',
                'cep' => '69.918-218',
                'created_at' => '2021-01-18 12:16:35',
                'updated_at' => '2021-01-18 12:16:35',
            ),
            253 => 
            array (
                'id' => 754,
                'endereco' => 'Rua Santa Terezinha, Rio Branco - AC, 84',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-666',
                'created_at' => '2021-01-18 12:17:37',
                'updated_at' => '2021-01-18 12:17:37',
            ),
            254 => 
            array (
                'id' => 755,
                'endereco' => 'Rua Aderbal Brasil, Bloco E3 Ap 212, RIO BRANCO - AC, 196',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-18 12:17:54',
                'updated_at' => '2021-01-18 12:17:54',
            ),
            255 => 
            array (
                'id' => 756,
                'endereco' => 'Rua Vital Brasil, Rio Branco - AC, 219',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-178',
                'created_at' => '2021-01-18 12:18:46',
                'updated_at' => '2021-01-18 12:18:46',
            ),
            256 => 
            array (
                'id' => 757,
                'endereco' => 'Ramal da Judia, Rio Branco - AC, 996',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-796',
                'created_at' => '2021-01-18 12:19:30',
                'updated_at' => '2021-01-18 12:19:30',
            ),
            257 => 
            array (
                'id' => 758,
                'endereco' => 'Travessa Serrana, Rio Branco - AC, 22',
                'bairro' => 'Areal',
                'cep' => '69.906-095',
                'created_at' => '2021-01-18 12:19:56',
                'updated_at' => '2021-01-18 12:19:56',
            ),
            258 => 
            array (
                'id' => 759,
                'endereco' => 'Rua Padre José, Rio Branco - AC, 545',
                'bairro' => 'Triângulo Novo',
                'cep' => '69.906-262',
                'created_at' => '2021-01-18 12:20:06',
                'updated_at' => '2021-01-18 12:20:06',
            ),
            259 => 
            array (
                'id' => 760,
                'endereco' => 'Rua Idelfonso de Almeida, Rio Branco - AC, 191',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-855',
                'created_at' => '2021-01-18 12:21:40',
                'updated_at' => '2021-01-18 12:21:40',
            ),
            260 => 
            array (
                'id' => 761,
                'endereco' => 'Avenida Iguaçu da Glória, Rio Branco - AC, 95',
                'bairro' => 'Vitória',
                'cep' => '69.901-686',
                'created_at' => '2021-01-18 12:21:42',
                'updated_at' => '2021-01-18 12:21:42',
            ),
            261 => 
            array (
                'id' => 762,
                'endereco' => 'Rua Guajará, Rio Branco - AC, 507',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-426',
                'created_at' => '2021-01-18 12:22:47',
                'updated_at' => '2021-01-18 12:22:47',
            ),
            262 => 
            array (
                'id' => 763,
                'endereco' => 'Rua Cearense, Rio Branco - AC, 51',
                'bairro' => 'bairro 6 de agosto',
                'cep' => '69.905-703',
                'created_at' => '2021-01-18 12:23:35',
                'updated_at' => '2021-01-18 12:23:35',
            ),
            263 => 
            array (
                'id' => 764,
                'endereco' => 'Rua da Pista, Rio Branco - AC, 70',
                'bairro' => 'Areal',
                'cep' => '69.906-110',
                'created_at' => '2021-01-18 12:24:19',
                'updated_at' => '2021-01-18 12:24:19',
            ),
            264 => 
            array (
                'id' => 765,
                'endereco' => 'Avenida Dorval Camilo, Rio Branco - AC, 70',
                'bairro' => 'Areal',
                'cep' => '69.905-859',
                'created_at' => '2021-01-18 12:25:25',
                'updated_at' => '2021-01-18 12:25:25',
            ),
            265 => 
            array (
                'id' => 766,
                'endereco' => 'Rua Elzo Rodrigues, Rio Branco - AC, 183',
                'bairro' => 'Eldorado',
                'cep' => '69.902-440',
                'created_at' => '2021-01-18 12:28:25',
                'updated_at' => '2021-01-18 12:28:25',
            ),
            266 => 
            array (
                'id' => 767,
                'endereco' => 'Rua Dom Próspero Bernardi, Rio Branco - AC, 2324',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-184',
                'created_at' => '2021-01-18 12:28:26',
                'updated_at' => '2021-01-18 12:28:26',
            ),
            267 => 
            array (
                'id' => 768,
                'endereco' => 'Travessa São Domingos, Rio Branco - AC, 215',
                'bairro' => 'Triângulo Novo',
                'cep' => '69.906-286',
                'created_at' => '2021-01-18 12:28:32',
                'updated_at' => '2021-01-18 12:28:32',
            ),
            268 => 
            array (
                'id' => 769,
                'endereco' => 'Avenida Dorval Camilo, Rio Branco - AC, 70',
                'bairro' => 'Canaã',
                'cep' => '69.905-859',
                'created_at' => '2021-01-18 12:30:48',
                'updated_at' => '2021-01-18 12:30:48',
            ),
            269 => 
            array (
                'id' => 770,
                'endereco' => 'Avenida Adalberto Sena, Rio Branco - AC, 30',
                'bairro' => 'Plácido de Castro',
                'cep' => '69.912-208',
                'created_at' => '2021-01-18 12:30:49',
                'updated_at' => '2021-01-18 12:30:49',
            ),
            270 => 
            array (
                'id' => 771,
                'endereco' => 'Rua São José, Rio Branco - AC, 217',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-448',
                'created_at' => '2021-01-18 12:31:47',
                'updated_at' => '2021-01-18 12:31:47',
            ),
            271 => 
            array (
                'id' => 772,
                'endereco' => 'Rua 10 de Novembro, Rio Branco - AC, 301',
                'bairro' => 'Boa União',
                'cep' => '69.911-774',
                'created_at' => '2021-01-18 12:31:55',
                'updated_at' => '2021-01-18 12:31:55',
            ),
            272 => 
            array (
                'id' => 773,
                'endereco' => 'Rua Veterano R. Pinto, Rio Branco - AC, 381',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-412',
                'created_at' => '2021-01-18 12:31:56',
                'updated_at' => '2021-01-18 12:31:56',
            ),
            273 => 
            array (
                'id' => 774,
                'endereco' => 'Rua Plínio Brandão, Rio Branco - AC, 50',
                'bairro' => 'Base',
                'cep' => '69.900-037',
                'created_at' => '2021-01-18 12:33:24',
                'updated_at' => '2021-01-18 12:33:24',
            ),
            274 => 
            array (
                'id' => 775,
                'endereco' => 'Rua 11 de Março, Rio Branco - AC, 307',
                'bairro' => 'Placas',
                'cep' => '69.902-754',
                'created_at' => '2021-01-18 12:33:31',
                'updated_at' => '2021-01-18 12:33:31',
            ),
            275 => 
            array (
                'id' => 776,
                'endereco' => 'Rua Aloízio de Azevedo, Rio Branco - AC, 186',
                'bairro' => 'Conjunto ESPERANÇa',
                'cep' => '69.915-174',
                'created_at' => '2021-01-18 12:33:50',
                'updated_at' => '2021-01-18 12:33:50',
            ),
            276 => 
            array (
                'id' => 777,
                'endereco' => 'Rua Nabuco de Araújo, Rio Branco - AC, 312',
                'bairro' => 'Conjunto Esperança 1',
                'cep' => '69.915-160',
                'created_at' => '2021-01-18 12:34:47',
                'updated_at' => '2021-01-18 12:34:47',
            ),
            277 => 
            array (
                'id' => 778,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 1259',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-232',
                'created_at' => '2021-01-18 12:34:47',
                'updated_at' => '2021-01-18 12:34:47',
            ),
            278 => 
            array (
                'id' => 779,
                'endereco' => 'Rua Thaumaturgo, Rio Branco - AC, 454',
                'bairro' => 'Vitória',
                'cep' => '69.901-701',
                'created_at' => '2021-01-18 12:36:57',
                'updated_at' => '2021-01-18 12:36:57',
            ),
            279 => 
            array (
                'id' => 780,
                'endereco' => 'Rua 13 de Maio, Rio Branco - AC, 255',
                'bairro' => 'Boa União',
                'cep' => '69.911-760',
                'created_at' => '2021-01-18 12:37:00',
                'updated_at' => '2021-01-18 12:37:00',
            ),
            280 => 
            array (
                'id' => 781,
                'endereco' => 'Rua Rio de Janeiro, Rio Branco - AC, 250',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-749',
                'created_at' => '2021-01-18 12:38:01',
                'updated_at' => '2021-01-18 12:38:01',
            ),
            281 => 
            array (
                'id' => 782,
                'endereco' => 'Rua 7 de Dezembro, Rio Branco - AC, 384',
                'bairro' => 'PLACAs',
                'cep' => '69.902-756',
                'created_at' => '2021-01-18 12:39:46',
                'updated_at' => '2021-01-18 12:39:46',
            ),
            282 => 
            array (
                'id' => 783,
                'endereco' => 'Rua Independência, Rio Branco - AC, 227',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-292',
                'created_at' => '2021-01-18 12:41:27',
                'updated_at' => '2021-01-18 12:41:27',
            ),
            283 => 
            array (
                'id' => 784,
                'endereco' => 'Rua Porto Acre, Rio Branco - AC, 003',
                'bairro' => 'LBA Vila Betel ii',
                'cep' => '69.915-290',
                'created_at' => '2021-01-18 12:41:33',
                'updated_at' => '2021-01-18 12:41:33',
            ),
            284 => 
            array (
                'id' => 785,
                'endereco' => 'Rua Thaumaturgo, Rio Branco - AC, 454',
                'bairro' => 'VITÓRIA',
                'cep' => '69.901-701',
                'created_at' => '2021-01-18 12:43:35',
                'updated_at' => '2021-01-18 12:43:35',
            ),
            285 => 
            array (
                'id' => 786,
                'endereco' => 'Rua Antônio Francisco, Rio Branco - AC, 14',
                'bairro' => 'Rosa Linda',
                'cep' => '69.909-012',
                'created_at' => '2021-01-18 12:45:22',
                'updated_at' => '2021-01-18 12:45:22',
            ),
            286 => 
            array (
                'id' => 787,
                'endereco' => 'Rua Salinas, Rio Branco - AC, 185',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-844',
                'created_at' => '2021-01-18 12:46:00',
                'updated_at' => '2021-01-18 12:46:00',
            ),
            287 => 
            array (
                'id' => 788,
                'endereco' => 'rua 12 de outubro - rio branco/ac, 279',
                'bairro' => 'placas',
                'cep' => '69.902-768',
                'created_at' => '2021-01-18 12:46:29',
                'updated_at' => '2021-01-18 12:46:29',
            ),
            288 => 
            array (
                'id' => 789,
                'endereco' => 'Rua São Lázaro, Rio Branco - AC, 321',
                'bairro' => 'Tangará',
                'cep' => '69.915-004',
                'created_at' => '2021-01-18 12:46:46',
                'updated_at' => '2021-01-18 12:46:46',
            ),
            289 => 
            array (
                'id' => 790,
                'endereco' => 'Travessa Coelho, Rio Branco - AC, 312',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-575',
                'created_at' => '2021-01-18 12:46:56',
                'updated_at' => '2021-01-18 12:46:56',
            ),
            290 => 
            array (
                'id' => 791,
                'endereco' => 'Rua Antônio Francisco, Rio Branco - AC, 14',
                'bairro' => 'Rosa Linda',
                'cep' => '69.909-012',
                'created_at' => '2021-01-18 12:47:01',
                'updated_at' => '2021-01-18 12:47:01',
            ),
            291 => 
            array (
                'id' => 792,
                'endereco' => 'Rua Alexandre, Rio Branco - AC, 41',
                'bairro' => 'Jardim Brasil',
                'cep' => '69.919-506',
                'created_at' => '2021-01-18 12:47:11',
                'updated_at' => '2021-01-18 12:47:11',
            ),
            292 => 
            array (
                'id' => 793,
                'endereco' => 'Travessa 25 de dezembro, Rio Branco - AC, 122',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-746',
                'created_at' => '2021-01-18 12:47:31',
                'updated_at' => '2021-01-18 12:47:31',
            ),
            293 => 
            array (
                'id' => 794,
                'endereco' => 'Rua Independência, Rio Branco - AC, 227',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-292',
                'created_at' => '2021-01-18 12:48:55',
                'updated_at' => '2021-01-18 12:48:55',
            ),
            294 => 
            array (
                'id' => 795,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 441',
                'bairro' => 'Dom GIOCONDO',
                'cep' => '69.900-324',
                'created_at' => '2021-01-18 12:49:48',
                'updated_at' => '2021-01-18 12:49:48',
            ),
            295 => 
            array (
                'id' => 796,
                'endereco' => 'Rua 2 de Abril, Rio Branco - AC, 242',
                'bairro' => 'Placas',
                'cep' => '69.902-762',
                'created_at' => '2021-01-18 12:51:02',
                'updated_at' => '2021-01-18 12:51:02',
            ),
            296 => 
            array (
                'id' => 797,
                'endereco' => 'Rua São Lázaro, Rio Branco - AC, 321',
                'bairro' => 'Tangará',
                'cep' => '69.915-004',
                'created_at' => '2021-01-18 12:51:38',
                'updated_at' => '2021-01-18 12:51:38',
            ),
            297 => 
            array (
                'id' => 798,
                'endereco' => 'Rua João Donato, Rio Branco - AC, 275',
                'bairro' => 'IPASEi',
                'cep' => '69.900-345',
                'created_at' => '2021-01-18 12:52:11',
                'updated_at' => '2021-01-18 12:52:11',
            ),
            298 => 
            array (
                'id' => 799,
                'endereco' => 'Beco da Cigana, Rio Branco - AC, 413',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-608',
                'created_at' => '2021-01-18 12:54:47',
                'updated_at' => '2021-01-18 12:54:47',
            ),
            299 => 
            array (
                'id' => 800,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 1259',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-232',
                'created_at' => '2021-01-18 12:57:14',
                'updated_at' => '2021-01-18 12:57:14',
            ),
            300 => 
            array (
                'id' => 801,
                'endereco' => 'Rua Joaquim Nabuco, Rio Branco - AC, 68',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-142',
                'created_at' => '2021-01-18 12:57:55',
                'updated_at' => '2021-01-18 12:57:55',
            ),
            301 => 
            array (
                'id' => 802,
                'endereco' => 'Rua Pau Brasil, Rio Branco - AC, 21',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-464',
                'created_at' => '2021-01-18 12:58:32',
                'updated_at' => '2021-01-18 12:58:32',
            ),
            302 => 
            array (
                'id' => 803,
                'endereco' => 'Rua 1º de Agosto, Rio Branco - AC, 298',
                'bairro' => 'Placas',
                'cep' => '69.902-760',
                'created_at' => '2021-01-18 12:59:01',
                'updated_at' => '2021-01-18 12:59:01',
            ),
            303 => 
            array (
                'id' => 804,
                'endereco' => 'Rua Valdomiro Lopes, Rio Branco - AC, 2054',
                'bairro' => 'Bairro da paz',
                'cep' => '69.919-256',
                'created_at' => '2021-01-18 12:59:31',
                'updated_at' => '2021-01-18 12:59:31',
            ),
            304 => 
            array (
                'id' => 805,
                'endereco' => 'Rua Maria das DORES  Rio Branco - AC, 325',
                'bairro' => 'Conjunto ESPERANÇA',
                'cep' => '69.915-126',
                'created_at' => '2021-01-18 13:00:46',
                'updated_at' => '2021-01-18 13:00:46',
            ),
            305 => 
            array (
                'id' => 806,
                'endereco' => 'Beco da Cigana, Rio Branco - AC, 413',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-608',
                'created_at' => '2021-01-18 13:01:46',
                'updated_at' => '2021-01-18 13:01:46',
            ),
            306 => 
            array (
                'id' => 807,
                'endereco' => 'Rua Maria das DORES  Rio Branco - AC, 325',
                'bairro' => 'Conjunto ESPERANÇA',
                'cep' => '69.915-126',
                'created_at' => '2021-01-18 13:03:11',
                'updated_at' => '2021-01-18 13:03:11',
            ),
            307 => 
            array (
                'id' => 808,
                'endereco' => 'Travessa Amapá, Rio Branco - AC, 75',
                'bairro' => 'Cerâmica',
                'cep' => '69.905-060',
                'created_at' => '2021-01-18 13:03:34',
                'updated_at' => '2021-01-18 13:03:34',
            ),
            308 => 
            array (
                'id' => 809,
                'endereco' => 'Rua Bananeira, Rio Branco - AC, 1847',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-196',
                'created_at' => '2021-01-18 13:04:19',
                'updated_at' => '2021-01-18 13:04:19',
            ),
            309 => 
            array (
                'id' => 810,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 225',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 13:07:05',
                'updated_at' => '2021-01-18 13:07:05',
            ),
            310 => 
            array (
                'id' => 811,
                'endereco' => 'Beco da Cigana, Rio Branco - AC, 327',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-608',
                'created_at' => '2021-01-18 13:07:10',
                'updated_at' => '2021-01-18 13:07:10',
            ),
            311 => 
            array (
                'id' => 812,
                'endereco' => 'Rua Maria das DORES  Rio Branco - AC, 325',
                'bairro' => 'Conjunto ESPERANÇA',
                'cep' => '69.915-126',
                'created_at' => '2021-01-18 13:09:56',
                'updated_at' => '2021-01-18 13:09:56',
            ),
            312 => 
            array (
                'id' => 813,
                'endereco' => 'Travessa Paulista, Rio Branco - AC, 309',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-632',
                'created_at' => '2021-01-18 13:10:51',
                'updated_at' => '2021-01-18 13:10:51',
            ),
            313 => 
            array (
                'id' => 814,
                'endereco' => 'Rua Principal 1, Rio Branco - AC, 183',
                'bairro' => 'Pedro Roseno',
                'cep' => '69.917-670',
                'created_at' => '2021-01-18 13:10:55',
                'updated_at' => '2021-01-18 13:10:55',
            ),
            314 => 
            array (
                'id' => 815,
                'endereco' => 'Travessa Guarani, Rio Branco - AC, 170',
                'bairro' => 'AVIÁRIO',
                'cep' => '69.900-845',
                'created_at' => '2021-01-18 13:11:55',
                'updated_at' => '2021-01-18 13:11:55',
            ),
            315 => 
            array (
                'id' => 816,
                'endereco' => 'Rua Porto Acre, Rio Branco - AC, 111',
                'bairro' => 'LBA Vila Betel ii',
                'cep' => '69.915-290',
                'created_at' => '2021-01-18 13:11:55',
                'updated_at' => '2021-01-18 13:11:55',
            ),
            316 => 
            array (
                'id' => 817,
                'endereco' => 'Rua Almirante Barbosa, Rio Branco - AC, 350',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-298',
                'created_at' => '2021-01-18 13:13:12',
                'updated_at' => '2021-01-18 13:13:12',
            ),
            317 => 
            array (
                'id' => 818,
                'endereco' => 'Beco da Cigana, Rio Branco - AC, 327',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-608',
                'created_at' => '2021-01-18 13:17:03',
                'updated_at' => '2021-01-18 13:17:03',
            ),
            318 => 
            array (
                'id' => 819,
                'endereco' => '...rua 15, 130',
                'bairro' => '...Glória',
                'cep' => '69.911-140',
                'created_at' => '2021-01-18 13:18:02',
                'updated_at' => '2021-01-18 13:18:02',
            ),
            319 => 
            array (
                'id' => 820,
                'endereco' => 'Rua João Donato, Rio Branco - AC, 275',
                'bairro' => 'Ipase',
                'cep' => '69.900-345',
                'created_at' => '2021-01-18 13:18:32',
                'updated_at' => '2021-01-18 13:18:32',
            ),
            320 => 
            array (
                'id' => 821,
                'endereco' => 'Estrada Juarez Távora, Rio Branco - AC, 226',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-248',
                'created_at' => '2021-01-18 13:18:39',
                'updated_at' => '2021-01-18 13:18:39',
            ),
            321 => 
            array (
                'id' => 822,
                'endereco' => 'Rua Plínio Brandão, Rio Branco - AC, 51',
                'bairro' => 'Base',
                'cep' => '69.900-037',
                'created_at' => '2021-01-18 13:21:10',
                'updated_at' => '2021-01-18 13:21:10',
            ),
            322 => 
            array (
                'id' => 823,
                'endereco' => 'Travessa Boa Fé, Rio Branco - AC, 87',
                'bairro' => 'Areal',
                'cep' => '69.905-869',
                'created_at' => '2021-01-18 13:24:02',
                'updated_at' => '2021-01-18 13:24:02',
            ),
            323 => 
            array (
                'id' => 824,
                'endereco' => 'Rua Plínio Brandão, Rio Branco - AC, 51',
                'bairro' => 'Base',
                'cep' => '69.900-037',
                'created_at' => '2021-01-18 13:24:12',
                'updated_at' => '2021-01-18 13:24:12',
            ),
            324 => 
            array (
                'id' => 825,
                'endereco' => 'Travessa Martiniano Prado, Rio Branco - AC, 93',
                'bairro' => 'Capoeira',
                'cep' => '69.905-040',
                'created_at' => '2021-01-18 13:24:34',
                'updated_at' => '2021-01-18 13:24:34',
            ),
            325 => 
            array (
                'id' => 826,
                'endereco' => 'Travessa São Jorge, Rio Branco - AC, 205',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-852',
                'created_at' => '2021-01-18 13:27:18',
                'updated_at' => '2021-01-18 13:27:18',
            ),
            326 => 
            array (
                'id' => 827,
                'endereco' => 'Travessa Amapá, Rio Branco - AC, 172',
                'bairro' => 'Cerâmica',
                'cep' => '69.905-060',
                'created_at' => '2021-01-18 13:27:28',
                'updated_at' => '2021-01-18 13:27:28',
            ),
            327 => 
            array (
                'id' => 828,
                'endereco' => 'Rua da Liberdade, Rio Branco - AC, 269',
                'bairro' => 'Conjunto Mariana',
                'cep' => '69.919-200',
                'created_at' => '2021-01-18 13:28:00',
                'updated_at' => '2021-01-18 13:28:00',
            ),
            328 => 
            array (
                'id' => 829,
                'endereco' => '..., 291',
                'bairro' => 'Liberdade',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 13:28:16',
                'updated_at' => '2021-01-18 13:28:16',
            ),
            329 => 
            array (
                'id' => 830,
                'endereco' => 'Rua Francisco Xavier, Rio Branco - AC, 209',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-466',
                'created_at' => '2021-01-18 13:29:35',
                'updated_at' => '2021-01-18 13:29:35',
            ),
            330 => 
            array (
                'id' => 831,
                'endereco' => 'Rua 12, Rio Branco - AC, 178',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-18 13:32:16',
                'updated_at' => '2021-01-18 13:32:16',
            ),
            331 => 
            array (
                'id' => 832,
            'endereco' => 'Ramal da Judia, Rio Branco - RUA PEDRO VITOR (RURAL), 191',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-860',
                'created_at' => '2021-01-18 13:32:48',
                'updated_at' => '2021-01-18 13:32:48',
            ),
            332 => 
            array (
                'id' => 833,
                'endereco' => 'Rua Japurá, Rio Branco - AC, 99',
                'bairro' => 'Eldorado',
                'cep' => '69.902-301',
                'created_at' => '2021-01-18 13:33:27',
                'updated_at' => '2021-01-18 13:33:27',
            ),
            333 => 
            array (
                'id' => 834,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 196',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-18 13:34:58',
                'updated_at' => '2021-01-18 13:34:58',
            ),
            334 => 
            array (
                'id' => 835,
                'endereco' => 'Avenida Eugênio Beco Bezerra, Rio Branco - AC, 600',
                'bairro' => 'São FRANCISCO',
                'cep' => '69.901-519',
                'created_at' => '2021-01-18 13:35:41',
                'updated_at' => '2021-01-18 13:35:41',
            ),
            335 => 
            array (
                'id' => 836,
                'endereco' => 'Travessa São Jorge, Rio Branco - AC, 205',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-852',
                'created_at' => '2021-01-18 13:36:13',
                'updated_at' => '2021-01-18 13:36:13',
            ),
            336 => 
            array (
                'id' => 837,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 811',
                'bairro' => 'Conquista',
                'cep' => '69.918-780',
                'created_at' => '2021-01-18 13:36:21',
                'updated_at' => '2021-01-18 13:36:21',
            ),
            337 => 
            array (
                'id' => 838,
                'endereco' => 'Rua Vital Brasil, Rio Branco - AC, 169',
                'bairro' => 'Estação ExperimentalEstacao',
                'cep' => '69.918-178',
                'created_at' => '2021-01-18 13:37:17',
                'updated_at' => '2021-01-18 13:37:17',
            ),
            338 => 
            array (
                'id' => 839,
                'endereco' => '...conjunto oscar passos 2 rua professor luis pereira, 130',
                'bairro' => 'sao francisco',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 13:37:36',
                'updated_at' => '2021-01-18 13:37:36',
            ),
            339 => 
            array (
                'id' => 840,
                'endereco' => 'Rua 11 de Março, Rio Branco - AC, 627',
                'bairro' => 'PlacaS',
                'cep' => '69.902-754',
                'created_at' => '2021-01-18 13:37:55',
                'updated_at' => '2021-01-18 13:37:55',
            ),
            340 => 
            array (
                'id' => 841,
                'endereco' => 'Rua 20, Rio Branco - AC, 50',
                'bairro' => 'Conjunto Mascarenhas de Moraes',
                'cep' => '69.918-016',
                'created_at' => '2021-01-18 13:39:32',
                'updated_at' => '2021-01-18 13:39:32',
            ),
            341 => 
            array (
                'id' => 842,
                'endereco' => 'Rua Nonato Correia Lima, Rio Branco - AC, 213',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-852',
                'created_at' => '2021-01-18 13:40:05',
                'updated_at' => '2021-01-18 13:40:05',
            ),
            342 => 
            array (
                'id' => 843,
                'endereco' => 'Travessa Xapuri, Rio Branco - AC, 45',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-666',
                'created_at' => '2021-01-18 13:41:00',
                'updated_at' => '2021-01-18 13:41:00',
            ),
            343 => 
            array (
                'id' => 844,
                'endereco' => 'Rua Sucupira, Rio Branco - AC, 135',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-485',
                'created_at' => '2021-01-18 13:43:46',
                'updated_at' => '2021-01-18 13:43:46',
            ),
            344 => 
            array (
                'id' => 845,
                'endereco' => 'Travessa Osasco, Rio Branco - AC, 29',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-428',
                'created_at' => '2021-01-18 13:44:44',
                'updated_at' => '2021-01-18 13:44:44',
            ),
            345 => 
            array (
                'id' => 846,
                'endereco' => 'Rua Projetada 991, Rio Branco - AC, 40',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-086',
                'created_at' => '2021-01-18 13:45:21',
                'updated_at' => '2021-01-18 13:45:21',
            ),
            346 => 
            array (
                'id' => 847,
                'endereco' => 'Travessa Cruzeiro do Sul, Rio Branco - AC, 259',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-009',
                'created_at' => '2021-01-18 13:46:20',
                'updated_at' => '2021-01-18 13:46:20',
            ),
            347 => 
            array (
                'id' => 848,
                'endereco' => 'Rua Abiu, Rio Branco - AC, 84',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-367',
                'created_at' => '2021-01-18 13:48:35',
                'updated_at' => '2021-01-18 13:48:35',
            ),
            348 => 
            array (
                'id' => 849,
                'endereco' => 'Rua Buriti, Rio Branco - AC, 429',
                'bairro' => 'Conquista',
                'cep' => '69.918-758',
                'created_at' => '2021-01-18 13:50:29',
                'updated_at' => '2021-01-18 13:50:29',
            ),
            349 => 
            array (
                'id' => 850,
                'endereco' => 'Rua Abacate, Rio Branco - AC, 106',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-085',
                'created_at' => '2021-01-18 13:52:33',
                'updated_at' => '2021-01-18 13:52:33',
            ),
            350 => 
            array (
                'id' => 851,
                'endereco' => 'Travessa Feijó, Rio Branco - AC, 78',
                'bairro' => 'Eldorado',
                'cep' => '69.902-311',
                'created_at' => '2021-01-18 13:53:44',
                'updated_at' => '2021-01-18 13:53:44',
            ),
            351 => 
            array (
                'id' => 852,
                'endereco' => 'Rua Abacate, Rio Branco - AC, 106',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-085',
                'created_at' => '2021-01-18 13:56:38',
                'updated_at' => '2021-01-18 13:56:38',
            ),
            352 => 
            array (
                'id' => 853,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 77',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-18 13:57:33',
                'updated_at' => '2021-01-18 13:57:33',
            ),
            353 => 
            array (
                'id' => 854,
                'endereco' => 'Rua Mendes Sá, Rio Branco - AC, 478',
                'bairro' => 'Bahia VELHA',
                'cep' => '69.911-564',
                'created_at' => '2021-01-18 13:58:04',
                'updated_at' => '2021-01-18 13:58:04',
            ),
            354 => 
            array (
                'id' => 855,
                'endereco' => 'Rua Barbosa Lima, Rio Branco - AC, 478',
                'bairro' => 'Base',
                'cep' => '69.900-004',
                'created_at' => '2021-01-18 13:58:35',
                'updated_at' => '2021-01-18 13:58:35',
            ),
            355 => 
            array (
                'id' => 856,
                'endereco' => 'Rua Abunã, Rio Branco - AC, 364',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-840',
                'created_at' => '2021-01-18 14:00:08',
                'updated_at' => '2021-01-18 14:00:08',
            ),
            356 => 
            array (
                'id' => 857,
                'endereco' => 'Rua Flamengo, Rio Branco - AC, 461',
                'bairro' => 'Conjunto Laélia Alcântara',
                'cep' => '69.914-486',
                'created_at' => '2021-01-18 14:00:14',
                'updated_at' => '2021-01-18 14:00:14',
            ),
            357 => 
            array (
                'id' => 858,
                'endereco' => 'Rua Marechal Deodoro, Rio Branco - AC, 158',
                'bairro' => 'Centro',
                'cep' => '69.900-068',
                'created_at' => '2021-01-18 14:00:39',
                'updated_at' => '2021-01-18 14:00:39',
            ),
            358 => 
            array (
                'id' => 859,
                'endereco' => 'Avenida Doutor Pereira Passos, Rio Branco - AC, 193',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-611',
                'created_at' => '2021-01-18 14:01:43',
                'updated_at' => '2021-01-18 14:01:43',
            ),
            359 => 
            array (
                'id' => 860,
                'endereco' => 'Rua Eldorado, Rio Branco - AC, 256',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-014',
                'created_at' => '2021-01-18 14:01:44',
                'updated_at' => '2021-01-18 14:01:44',
            ),
            360 => 
            array (
                'id' => 861,
                'endereco' => 'floresta, 151',
                'bairro' => 'bela vista',
                'cep' => '69.960-328',
                'created_at' => '2021-01-18 14:01:54',
                'updated_at' => '2021-01-18 14:01:54',
            ),
            361 => 
            array (
                'id' => 862,
                'endereco' => 'Rodovia BR 364, Rio Branco - AC, 151',
                'bairro' => 'Vila LIBERDADE',
                'cep' => '69.908-370',
                'created_at' => '2021-01-18 14:03:59',
                'updated_at' => '2021-01-18 14:03:59',
            ),
            362 => 
            array (
                'id' => 863,
                'endereco' => 'Rua Minas Gerais, Rio Branco - AC, 82',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-315',
                'created_at' => '2021-01-18 14:04:35',
                'updated_at' => '2021-01-18 14:04:35',
            ),
            363 => 
            array (
                'id' => 864,
                'endereco' => 'Rua Saldanha, Rio Branco - AC, 65',
                'bairro' => 'Conjunto UNIVERSITÁRIo',
                'cep' => '69.917-684',
                'created_at' => '2021-01-18 14:05:28',
                'updated_at' => '2021-01-18 14:05:28',
            ),
            364 => 
            array (
                'id' => 865,
                'endereco' => 'Rua Dona Ideuzuite Alves, Rio Branco - AC, 285',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-782',
                'created_at' => '2021-01-18 14:05:53',
                'updated_at' => '2021-01-18 14:05:53',
            ),
            365 => 
            array (
                'id' => 866,
                'endereco' => 'Travessa Castanheira, Rio Branco - AC, 85',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-179',
                'created_at' => '2021-01-18 14:06:51',
                'updated_at' => '2021-01-18 14:06:51',
            ),
            366 => 
            array (
                'id' => 867,
                'endereco' => 'Rua Madeireira, Rio Branco - AC, 258',
                'bairro' => 'Calafate',
                'cep' => '69.914-362',
                'created_at' => '2021-01-18 14:07:00',
                'updated_at' => '2021-01-18 14:07:00',
            ),
            367 => 
            array (
                'id' => 868,
                'endereco' => 'Rodovia BR 364, Rio Branco - AC, 151',
                'bairro' => 'Vila Liberdade',
                'cep' => '69.908-370',
                'created_at' => '2021-01-18 14:08:04',
                'updated_at' => '2021-01-18 14:08:04',
            ),
            368 => 
            array (
                'id' => 869,
                'endereco' => 'Avenida Beija-flor, Rio Branco - AC, 550',
                'bairro' => 'Conjunto Jardim Universitário',
                'cep' => '69.917-500',
                'created_at' => '2021-01-18 14:09:02',
                'updated_at' => '2021-01-18 14:09:02',
            ),
            369 => 
            array (
                'id' => 870,
                'endereco' => 'Rua Floresta, Rio Branco - AC, 715',
                'bairro' => 'Conquista',
                'cep' => '69.918-766',
                'created_at' => '2021-01-18 14:10:03',
                'updated_at' => '2021-01-18 14:10:03',
            ),
            370 => 
            array (
                'id' => 871,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 368',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-18 14:10:22',
                'updated_at' => '2021-01-18 14:10:22',
            ),
            371 => 
            array (
                'id' => 872,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 3181',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-036',
                'created_at' => '2021-01-18 14:10:45',
                'updated_at' => '2021-01-18 14:10:45',
            ),
            372 => 
            array (
                'id' => 873,
                'endereco' => 'Travessa Cearense, Rio Branco - AC, 6330',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-617',
                'created_at' => '2021-01-18 14:11:38',
                'updated_at' => '2021-01-18 14:11:38',
            ),
            373 => 
            array (
                'id' => 874,
                'endereco' => 'Rua Padre José, Rio Branco - AC, 620',
                'bairro' => 'Triângulo  novo',
                'cep' => '69.906-262',
                'created_at' => '2021-01-18 14:11:38',
                'updated_at' => '2021-01-18 14:11:38',
            ),
            374 => 
            array (
                'id' => 875,
                'endereco' => 'Rua Dona Ideuzuite Alves, Rio Branco - AC, 285',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-782',
                'created_at' => '2021-01-18 14:12:03',
                'updated_at' => '2021-01-18 14:12:03',
            ),
            375 => 
            array (
                'id' => 876,
                'endereco' => 'Rua Pau Brasil, Rio Branco - AC, 05',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-464',
                'created_at' => '2021-01-18 14:13:29',
                'updated_at' => '2021-01-18 14:13:29',
            ),
            376 => 
            array (
                'id' => 877,
                'endereco' => 'Rua Edson Lima, Rio Branco - AC, 224',
                'bairro' => 'São FRANCISCO',
                'cep' => '69.901-597',
                'created_at' => '2021-01-18 14:14:14',
                'updated_at' => '2021-01-18 14:14:14',
            ),
            377 => 
            array (
                'id' => 878,
                'endereco' => 'Rua Madeireira, Rio Branco - AC, 258',
                'bairro' => 'Calafate',
                'cep' => '69.914-362',
                'created_at' => '2021-01-18 14:14:15',
                'updated_at' => '2021-01-18 14:14:15',
            ),
            378 => 
            array (
                'id' => 879,
                'endereco' => 'Rua Eldorado, Rio Branco - AC, 256',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-014',
                'created_at' => '2021-01-18 14:16:05',
                'updated_at' => '2021-01-18 14:16:05',
            ),
            379 => 
            array (
                'id' => 880,
                'endereco' => 'Travessa Beija-flor, Rio Branco - AC, 225',
                'bairro' => 'AREAL',
                'cep' => '69.906-104',
                'created_at' => '2021-01-18 14:16:19',
                'updated_at' => '2021-01-18 14:16:19',
            ),
            380 => 
            array (
                'id' => 881,
                'endereco' => 'Rua Venezuela, Rio Branco - AC, 498',
                'bairro' => 'Habitasa',
                'cep' => '69.905-112',
                'created_at' => '2021-01-18 14:17:13',
                'updated_at' => '2021-01-18 14:17:13',
            ),
            381 => 
            array (
                'id' => 882,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 434',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-324',
                'created_at' => '2021-01-18 14:19:22',
                'updated_at' => '2021-01-18 14:19:22',
            ),
            382 => 
            array (
                'id' => 883,
                'endereco' => 'Rua Jacarei, Rio Branco - AC, 15',
                'bairro' => 'Eldorado',
                'cep' => '69.902-375',
                'created_at' => '2021-01-18 14:21:19',
                'updated_at' => '2021-01-18 14:21:19',
            ),
            383 => 
            array (
                'id' => 884,
                'endereco' => 'Rua Madeireira, Rio Branco - AC, 258',
                'bairro' => 'Calafate',
                'cep' => '69.914-362',
                'created_at' => '2021-01-18 14:21:53',
                'updated_at' => '2021-01-18 14:21:53',
            ),
            384 => 
            array (
                'id' => 885,
                'endereco' => 'Travessa Cícero Guedes, Rio Branco - AC, 169',
                'bairro' => 'Quinze',
                'cep' => '69.905-528',
                'created_at' => '2021-01-18 14:22:21',
                'updated_at' => '2021-01-18 14:22:21',
            ),
            385 => 
            array (
                'id' => 886,
                'endereco' => 'Rua Olavo Bilac, Rio Branco - AC, 78',
                'bairro' => 'Vila ACRE',
                'cep' => '69.909-748',
                'created_at' => '2021-01-18 14:23:39',
                'updated_at' => '2021-01-18 14:23:39',
            ),
            386 => 
            array (
                'id' => 887,
                'endereco' => 'ramal santa helena, tv. santa helena - Área Rural, Rio Branco - AC, 207',
                'bairro' => 'estrada do amapá, km 6',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 14:23:54',
                'updated_at' => '2021-01-18 14:23:54',
            ),
            387 => 
            array (
                'id' => 888,
                'endereco' => 'Área Rural, Rio Branco - AC, 1344',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 14:29:35',
                'updated_at' => '2021-01-18 14:29:35',
            ),
            388 => 
            array (
                'id' => 889,
                'endereco' => 'Rua Boulevard Augusto Monteiro, Rio Branco - AC, 170',
                'bairro' => 'Quinze',
                'cep' => '69.905-518',
                'created_at' => '2021-01-18 14:29:43',
                'updated_at' => '2021-01-18 14:29:43',
            ),
            389 => 
            array (
                'id' => 890,
                'endereco' => 'estrada da sobral, 0',
                'bairro' => 'rua ary rodrigues',
                'cep' => '69.903-560',
                'created_at' => '2021-01-18 14:31:00',
                'updated_at' => '2021-01-18 14:31:00',
            ),
            390 => 
            array (
                'id' => 891,
                'endereco' => 'Travessa Capixaba, Rio Branco - AC, 63',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-462',
                'created_at' => '2021-01-18 14:31:16',
                'updated_at' => '2021-01-18 14:31:16',
            ),
            391 => 
            array (
                'id' => 892,
                'endereco' => 'Rua Floriano Peixoto, Rio Branco - AC, 798',
                'bairro' => 'Centro',
                'cep' => '69.900-090',
                'created_at' => '2021-01-18 14:35:51',
                'updated_at' => '2021-01-18 14:35:51',
            ),
            392 => 
            array (
                'id' => 893,
                'endereco' => 'Travessa Capixaba, Rio Branco - AC, 65',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-462',
                'created_at' => '2021-01-18 14:36:11',
                'updated_at' => '2021-01-18 14:36:11',
            ),
            393 => 
            array (
                'id' => 894,
                'endereco' => 'Rua Nossa Senhora da Conceição, Rio Branco - AC, 670',
                'bairro' => 'Quinze',
                'cep' => '69.905-490',
                'created_at' => '2021-01-18 14:36:37',
                'updated_at' => '2021-01-18 14:36:37',
            ),
            394 => 
            array (
                'id' => 895,
                'endereco' => 'Rua Boulevard Augusto Monteiro, Rio Branco - AC, 170',
                'bairro' => 'Quinze',
                'cep' => '69.905-518',
                'created_at' => '2021-01-18 14:37:33',
                'updated_at' => '2021-01-18 14:37:33',
            ),
            395 => 
            array (
                'id' => 896,
                'endereco' => 'Rua 11, Rio Branco - AC, 370',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-001',
                'created_at' => '2021-01-18 14:40:31',
                'updated_at' => '2021-01-18 14:40:31',
            ),
            396 => 
            array (
                'id' => 897,
                'endereco' => 'Beco do Brejão, Rio Branco - AC, 103',
                'bairro' => 'Bosque',
                'cep' => '69.900-382',
                'created_at' => '2021-01-18 14:41:01',
                'updated_at' => '2021-01-18 14:41:01',
            ),
            397 => 
            array (
                'id' => 898,
                'endereco' => 'Rua 11, Rio Branco - AC, 370',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-001',
                'created_at' => '2021-01-18 14:47:27',
                'updated_at' => '2021-01-18 14:47:27',
            ),
            398 => 
            array (
                'id' => 899,
                'endereco' => 'Rua Nossa Senhora de Fátima, Rio Branco - AC, 438',
                'bairro' => 'TaquarI',
                'cep' => '69.906-402',
                'created_at' => '2021-01-18 14:47:53',
                'updated_at' => '2021-01-18 14:47:53',
            ),
            399 => 
            array (
                'id' => 900,
                'endereco' => 'Rua Allan Victor, Rio Branco - AC, 266',
                'bairro' => 'Sobral',
                'cep' => '69.912-014',
                'created_at' => '2021-01-18 14:50:14',
                'updated_at' => '2021-01-18 14:50:14',
            ),
            400 => 
            array (
                'id' => 901,
                'endereco' => 'Rio BRANCO Acre, 96',
                'bairro' => '...Rua S4',
                'cep' => '69.919-691',
                'created_at' => '2021-01-18 14:52:49',
                'updated_at' => '2021-01-18 14:52:49',
            ),
            401 => 
            array (
                'id' => 902,
                'endereco' => 'Estrada Juarez Távora, Rio Branco - AC, 1048',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-270',
                'created_at' => '2021-01-18 14:53:41',
                'updated_at' => '2021-01-18 14:53:41',
            ),
            402 => 
            array (
                'id' => 903,
                'endereco' => ', Porto Acre - AC, 53',
                'bairro' => 'Vila do Incra',
                'cep' => '69.927-000',
                'created_at' => '2021-01-18 14:53:56',
                'updated_at' => '2021-01-18 14:53:56',
            ),
            403 => 
            array (
                'id' => 904,
                'endereco' => 'Rua Maria Atenas, Rio Branco - AC, 503',
                'bairro' => 'Vitória',
                'cep' => '69.901-782',
                'created_at' => '2021-01-18 14:54:03',
                'updated_at' => '2021-01-18 14:54:03',
            ),
            404 => 
            array (
                'id' => 905,
                'endereco' => 'Rua Pedro Álvares Cabral, Rio Branco - AC, 68',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-174',
                'created_at' => '2021-01-18 14:57:48',
                'updated_at' => '2021-01-18 14:57:48',
            ),
            405 => 
            array (
                'id' => 906,
                'endereco' => 'Travessa da Otilia, Rio Branco - AC, 34',
                'bairro' => 'Areal',
                'cep' => '69.906-113',
                'created_at' => '2021-01-18 14:58:01',
                'updated_at' => '2021-01-18 14:58:01',
            ),
            406 => 
            array (
                'id' => 907,
                'endereco' => 'Rua 7 de Setembro, Rio Branco - AC, 23',
                'bairro' => 'TANGARÁ',
                'cep' => '69.915-022',
                'created_at' => '2021-01-18 14:58:20',
                'updated_at' => '2021-01-18 14:58:20',
            ),
            407 => 
            array (
                'id' => 908,
                'endereco' => 'Rua João Xavier, Rio Branco - AC, 113',
                'bairro' => 'Vitória',
                'cep' => '69.901-692',
                'created_at' => '2021-01-18 14:59:37',
                'updated_at' => '2021-01-18 14:59:37',
            ),
            408 => 
            array (
                'id' => 909,
                'endereco' => 'Rua Durval Nunes, Rio Branco - AC, 359',
                'bairro' => 'Vila Santa Cecília',
                'cep' => '69.908-108',
                'created_at' => '2021-01-18 15:00:13',
                'updated_at' => '2021-01-18 15:00:13',
            ),
            409 => 
            array (
                'id' => 910,
                'endereco' => 'Rua Santos Dumont, Rio Branco - AC, 185',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-069',
                'created_at' => '2021-01-18 15:01:26',
                'updated_at' => '2021-01-18 15:01:26',
            ),
            410 => 
            array (
                'id' => 911,
                'endereco' => 'RUA ADONIRAN BARBOSA, Bujari - AC, 58',
                'bairro' => 'CENTRO',
                'cep' => '69.926-000',
                'created_at' => '2021-01-18 15:01:47',
                'updated_at' => '2021-01-18 15:01:47',
            ),
            411 => 
            array (
                'id' => 912,
                'endereco' => 'Rua João Xavier, Rio Branco - AC, 113',
                'bairro' => 'Vitória',
                'cep' => '69.901-692',
                'created_at' => '2021-01-18 15:02:41',
                'updated_at' => '2021-01-18 15:02:41',
            ),
            412 => 
            array (
                'id' => 913,
                'endereco' => 'Rua Maria Atenas, Rio Branco - AC, 503',
                'bairro' => 'Vitória',
                'cep' => '69.901-782',
                'created_at' => '2021-01-18 15:04:05',
                'updated_at' => '2021-01-18 15:04:05',
            ),
            413 => 
            array (
                'id' => 914,
                'endereco' => 'Rua Nelson Mesquita, Rio Branco - AC, 175',
                'bairro' => 'Santa Quitéria',
                'cep' => '69.918-703',
                'created_at' => '2021-01-18 15:04:29',
                'updated_at' => '2021-01-18 15:04:29',
            ),
            414 => 
            array (
                'id' => 915,
                'endereco' => 'Travessa Maria Verônica, Rio Branco - AC, 17',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-542',
                'created_at' => '2021-01-18 15:04:54',
                'updated_at' => '2021-01-18 15:04:54',
            ),
            415 => 
            array (
                'id' => 916,
                'endereco' => 'Rua 7 de Setembro, Rio Branco - AC, 23',
                'bairro' => 'TANGARÁ',
                'cep' => '69.915-022',
                'created_at' => '2021-01-18 15:05:21',
                'updated_at' => '2021-01-18 15:05:21',
            ),
            416 => 
            array (
                'id' => 917,
                'endereco' => ', Porto Acre - AC, 53',
                'bairro' => 'VILA DO INCRA',
                'cep' => '69.927-000',
                'created_at' => '2021-01-18 15:06:06',
                'updated_at' => '2021-01-18 15:06:06',
            ),
            417 => 
            array (
                'id' => 918,
                'endereco' => 'Rua João Xavier, Rio Branco - AC, 113',
                'bairro' => 'Vitória',
                'cep' => '69.901-692',
                'created_at' => '2021-01-18 15:06:32',
                'updated_at' => '2021-01-18 15:06:32',
            ),
            418 => 
            array (
                'id' => 919,
                'endereco' => 'Rua Caxias, Rio Branco - AC, 28',
                'bairro' => 'Quinze',
                'cep' => '69.905-502',
                'created_at' => '2021-01-18 15:08:04',
                'updated_at' => '2021-01-18 15:08:04',
            ),
            419 => 
            array (
                'id' => 920,
                'endereco' => 'Rua Alércio Dias, Rio Branco - AC, 29',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-244',
                'created_at' => '2021-01-18 15:08:40',
                'updated_at' => '2021-01-18 15:08:40',
            ),
            420 => 
            array (
                'id' => 921,
                'endereco' => 'Rua do Passeio, Rio Branco - AC, 388',
                'bairro' => 'Taquarí',
                'cep' => '69.906-410',
                'created_at' => '2021-01-18 15:09:04',
                'updated_at' => '2021-01-18 15:09:04',
            ),
            421 => 
            array (
                'id' => 922,
                'endereco' => 'Rua André Ficarelli, Rio Branco - AC, 07',
                'bairro' => 'Cidade do POVO',
                'cep' => '69.909-252',
                'created_at' => '2021-01-18 15:09:41',
                'updated_at' => '2021-01-18 15:09:41',
            ),
            422 => 
            array (
                'id' => 923,
                'endereco' => 'Rua José Luis, Rio Branco - AC, 664',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-677',
                'created_at' => '2021-01-18 15:12:13',
                'updated_at' => '2021-01-18 15:12:13',
            ),
            423 => 
            array (
                'id' => 924,
                'endereco' => 'Rua João Florencio, Rio Branco - AC, 440',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-861',
                'created_at' => '2021-01-18 15:12:52',
                'updated_at' => '2021-01-18 15:12:52',
            ),
            424 => 
            array (
                'id' => 925,
                'endereco' => 'Rua 1º de Maio, Rio Branco - AC, 223',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-626',
                'created_at' => '2021-01-18 15:13:10',
                'updated_at' => '2021-01-18 15:13:10',
            ),
            425 => 
            array (
                'id' => 926,
                'endereco' => 'Rua da Liberdade, Rio Branco - AC, 119',
                'bairro' => 'Conjunto MARIANA',
                'cep' => '69.919-200',
                'created_at' => '2021-01-18 15:13:33',
                'updated_at' => '2021-01-18 15:13:33',
            ),
            426 => 
            array (
                'id' => 927,
                'endereco' => 'Rua Castanheira, Rio Branco - AC, 34',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-174',
                'created_at' => '2021-01-18 15:17:24',
                'updated_at' => '2021-01-18 15:17:24',
            ),
            427 => 
            array (
                'id' => 928,
                'endereco' => 'Rua Nelson Piquet, Rio Branco - AC, 112',
                'bairro' => 'VITÓRIA',
                'cep' => '69.901-809',
                'created_at' => '2021-01-18 15:17:48',
                'updated_at' => '2021-01-18 15:17:48',
            ),
            428 => 
            array (
                'id' => 929,
                'endereco' => 'Travessa Jorge Ramos, Rio Branco - AC, 160',
                'bairro' => 'Glória',
                'cep' => '69.911-130',
                'created_at' => '2021-01-18 15:17:51',
                'updated_at' => '2021-01-18 15:17:51',
            ),
            429 => 
            array (
                'id' => 930,
                'endereco' => 'Rua Primavera, Rio Branco - AC, 140',
                'bairro' => 'Conjunto UNIVERSITÁRIo 2',
                'cep' => '69.917-722',
                'created_at' => '2021-01-18 15:18:25',
                'updated_at' => '2021-01-18 15:18:25',
            ),
            430 => 
            array (
                'id' => 931,
                'endereco' => 'Travessa São José, Rio Branco - AC, 236',
                'bairro' => 'Chico MENDES',
                'cep' => '69.902-741',
                'created_at' => '2021-01-18 15:26:19',
                'updated_at' => '2021-01-18 15:26:19',
            ),
            431 => 
            array (
                'id' => 932,
                'endereco' => 'Travessa Jorge Ramos, Rio Branco - AC, 160',
                'bairro' => 'Glória',
                'cep' => '69.911-130',
                'created_at' => '2021-01-18 15:26:24',
                'updated_at' => '2021-01-18 15:26:24',
            ),
            432 => 
            array (
                'id' => 933,
                'endereco' => 'Rua Girassol, Rio Branco - AC, 275',
                'bairro' => 'Loteamento JOAFRA',
                'cep' => '69.919-406',
                'created_at' => '2021-01-18 15:28:23',
                'updated_at' => '2021-01-18 15:28:23',
            ),
            433 => 
            array (
                'id' => 934,
                'endereco' => 'Rodovia BR-364, Rio Branco - AC, 2462',
                'bairro' => 'Pedro Roseno',
                'cep' => '69.917-672',
                'created_at' => '2021-01-18 15:30:21',
                'updated_at' => '2021-01-18 15:30:21',
            ),
            434 => 
            array (
                'id' => 935,
                'endereco' => 'Rua Chico Mendes, Rio Branco - AC, 279',
                'bairro' => 'Calafate',
                'cep' => '69.914-360',
                'created_at' => '2021-01-18 15:31:37',
                'updated_at' => '2021-01-18 15:31:37',
            ),
            435 => 
            array (
                'id' => 936,
                'endereco' => 'Avenida São Pedro, Rio Branco - AC, 153',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-036',
                'created_at' => '2021-01-18 15:33:33',
                'updated_at' => '2021-01-18 15:33:33',
            ),
            436 => 
            array (
                'id' => 937,
                'endereco' => 'Rodovia BR-364, Rio Branco - AC, 2462',
                'bairro' => 'Pedro Roseno',
                'cep' => '69.917-672',
                'created_at' => '2021-01-18 15:34:36',
                'updated_at' => '2021-01-18 15:34:36',
            ),
            437 => 
            array (
                'id' => 938,
                'endereco' => 'Rua Santa Rosa, Rio Branco - AC, 91',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-302',
                'created_at' => '2021-01-18 15:37:05',
                'updated_at' => '2021-01-18 15:37:05',
            ),
            438 => 
            array (
                'id' => 939,
                'endereco' => 'Rua Gilson Nogueira Barros, Rio Branco - AC, 468',
                'bairro' => 'Calafate',
                'cep' => '69.914-370',
                'created_at' => '2021-01-18 15:39:27',
                'updated_at' => '2021-01-18 15:39:27',
            ),
            439 => 
            array (
                'id' => 940,
                'endereco' => 'Rua Tijuca, Rio Branco - AC, 140',
                'bairro' => 'Conjunto Mascarenhas de Moraes q:05, c:06',
                'cep' => '69.918-026',
                'created_at' => '2021-01-18 15:40:36',
                'updated_at' => '2021-01-18 15:40:36',
            ),
            440 => 
            array (
                'id' => 941,
                'endereco' => 'Rua Pio Nazário, Rio Branco - AC, 111',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-623',
                'created_at' => '2021-01-18 15:43:41',
                'updated_at' => '2021-01-18 15:43:41',
            ),
            441 => 
            array (
                'id' => 942,
                'endereco' => 'Rua Maranhão, Rio Branco - AC, 40',
                'bairro' => 'Bosque',
                'cep' => '69.900-484',
                'created_at' => '2021-01-18 15:45:50',
                'updated_at' => '2021-01-18 15:45:50',
            ),
            442 => 
            array (
                'id' => 943,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 696',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-274',
                'created_at' => '2021-01-18 15:47:09',
                'updated_at' => '2021-01-18 15:47:09',
            ),
            443 => 
            array (
                'id' => 944,
                'endereco' => 'Avenida Beira Rio, Rio Branco - AC, 511',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-406',
                'created_at' => '2021-01-18 15:47:49',
                'updated_at' => '2021-01-18 15:47:49',
            ),
            444 => 
            array (
                'id' => 945,
                'endereco' => 'Avenida Beira Rio, Rio Branco - AC, 511',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-406',
                'created_at' => '2021-01-18 15:51:03',
                'updated_at' => '2021-01-18 15:51:03',
            ),
            445 => 
            array (
                'id' => 946,
                'endereco' => 'Rua Pio Nazário, Rio Branco - AC, 111',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-623',
                'created_at' => '2021-01-18 15:51:42',
                'updated_at' => '2021-01-18 15:51:42',
            ),
            446 => 
            array (
                'id' => 947,
                'endereco' => 'Ramal da Judia, Rio Branco - AC, 1473',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-860',
                'created_at' => '2021-01-18 15:54:44',
                'updated_at' => '2021-01-18 15:54:44',
            ),
            447 => 
            array (
                'id' => 948,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 696',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-274',
                'created_at' => '2021-01-18 15:56:56',
                'updated_at' => '2021-01-18 15:56:56',
            ),
            448 => 
            array (
                'id' => 949,
                'endereco' => 'Travessa Monte Sinai, Rio Branco - AC, 552',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-662',
                'created_at' => '2021-01-18 15:58:51',
                'updated_at' => '2021-01-18 15:58:51',
            ),
            449 => 
            array (
                'id' => 950,
                'endereco' => 'Rua São Sebastião, Rio Branco - AC, 164',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-502',
                'created_at' => '2021-01-18 15:59:02',
                'updated_at' => '2021-01-18 15:59:02',
            ),
            450 => 
            array (
                'id' => 951,
                'endereco' => ', Acrelândia - AC, 3515',
                'bairro' => 'Centro',
                'cep' => '69.945-000',
                'created_at' => '2021-01-18 15:59:51',
                'updated_at' => '2021-01-18 15:59:51',
            ),
            451 => 
            array (
                'id' => 952,
                'endereco' => 'Travessa Marte, Rio Branco - AC, 71',
                'bairro' => 'Montanhês',
                'cep' => '69.921-509',
                'created_at' => '2021-01-18 16:01:33',
                'updated_at' => '2021-01-18 16:01:33',
            ),
            452 => 
            array (
                'id' => 953,
                'endereco' => 'Rua Santa Luzia, 134  Rio Branco - AC, 134',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-444',
                'created_at' => '2021-01-18 16:02:42',
                'updated_at' => '2021-01-18 16:02:42',
            ),
            453 => 
            array (
                'id' => 954,
                'endereco' => 'Travessa Lourival Castanha, Rio Branco - AC, 99',
                'bairro' => 'Santa INÊS',
                'cep' => '69.907-707',
                'created_at' => '2021-01-18 16:06:33',
                'updated_at' => '2021-01-18 16:06:33',
            ),
            454 => 
            array (
                'id' => 955,
                'endereco' => 'Rua Poços de Caldas, Rio Branco - AC, 801',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-440',
                'created_at' => '2021-01-18 16:07:50',
                'updated_at' => '2021-01-18 16:07:50',
            ),
            455 => 
            array (
                'id' => 956,
                'endereco' => 'Rua 5, Rio Branco - AC, 59',
                'bairro' => 'Mascarenhas de Morais',
                'cep' => '69.918-022',
                'created_at' => '2021-01-18 16:10:39',
                'updated_at' => '2021-01-18 16:10:39',
            ),
            456 => 
            array (
                'id' => 957,
                'endereco' => 'Rua Veterano Henrique Julião, Rio Branco - AC, 113',
                'bairro' => 'Jardim Nazle',
                'cep' => '69.918-078',
                'created_at' => '2021-01-18 16:10:48',
                'updated_at' => '2021-01-18 16:10:48',
            ),
            457 => 
            array (
                'id' => 958,
                'endereco' => 'Rua Nelson Brungroty, Rio Branco - AC, 20',
                'bairro' => 'Loteamento Santo AFONSO',
                'cep' => '69.908-848',
                'created_at' => '2021-01-18 16:13:24',
                'updated_at' => '2021-01-18 16:13:24',
            ),
            458 => 
            array (
                'id' => 959,
                'endereco' => 'Ramal da Zezé, Rio Branco - AC, 1811',
                'bairro' => 'Belo JARDIM2',
                'cep' => '69.908-022',
                'created_at' => '2021-01-18 16:14:05',
                'updated_at' => '2021-01-18 16:14:05',
            ),
            459 => 
            array (
                'id' => 960,
                'endereco' => 'Rua praia grande, CONJUNTO itatiaia, 230',
                'bairro' => 'Bairro calafate',
                'cep' => '69.900-000',
                'created_at' => '2021-01-18 16:14:26',
                'updated_at' => '2021-01-18 16:14:26',
            ),
            460 => 
            array (
                'id' => 961,
                'endereco' => 'Rua W11, Rio Branco - AC, 203',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-742',
                'created_at' => '2021-01-18 16:15:02',
                'updated_at' => '2021-01-18 16:15:02',
            ),
            461 => 
            array (
                'id' => 962,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 2095',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 16:15:02',
                'updated_at' => '2021-01-18 16:15:02',
            ),
            462 => 
            array (
                'id' => 963,
                'endereco' => ', Bujari - AC, 170',
                'bairro' => 'Centro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-18 16:17:44',
                'updated_at' => '2021-01-18 16:17:44',
            ),
            463 => 
            array (
                'id' => 964,
                'endereco' => 'Rua Angico, Rio Branco - AC, 105',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-687',
                'created_at' => '2021-01-18 16:19:14',
                'updated_at' => '2021-01-18 16:19:14',
            ),
            464 => 
            array (
                'id' => 965,
                'endereco' => 'Rua praia grande, conjunto itatiaia, 230',
                'bairro' => 'Bairro calafate',
                'cep' => '69.900-000',
                'created_at' => '2021-01-18 16:19:41',
                'updated_at' => '2021-01-18 16:19:41',
            ),
            465 => 
            array (
                'id' => 966,
                'endereco' => 'Rua das Oliveiras, Rio Branco - AC, 763',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-224',
                'created_at' => '2021-01-18 16:20:17',
                'updated_at' => '2021-01-18 16:20:17',
            ),
            466 => 
            array (
                'id' => 967,
                'endereco' => 'Rua Madeireira, Rio Branco - AC, 258',
                'bairro' => 'Calafate',
                'cep' => '69.914-362',
                'created_at' => '2021-01-18 16:22:15',
                'updated_at' => '2021-01-18 16:22:15',
            ),
            467 => 
            array (
                'id' => 968,
                'endereco' => 'Rua Guanabara, Rio Branco - AC, 250',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-852',
                'created_at' => '2021-01-18 16:24:43',
                'updated_at' => '2021-01-18 16:24:43',
            ),
            468 => 
            array (
                'id' => 969,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 2191',
                'bairro' => 'Ayrton Senas',
                'cep' => '69.911-802',
                'created_at' => '2021-01-18 16:25:30',
                'updated_at' => '2021-01-18 16:25:30',
            ),
            469 => 
            array (
                'id' => 970,
                'endereco' => 'Rua Rouxinol, Rio Branco - AC, 5',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-445',
                'created_at' => '2021-01-18 16:26:19',
                'updated_at' => '2021-01-18 16:26:19',
            ),
            470 => 
            array (
                'id' => 971,
                'endereco' => 'Rua Antônio Júlio, Rio Branco - AC, 43',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-778',
                'created_at' => '2021-01-18 16:26:59',
                'updated_at' => '2021-01-18 16:26:59',
            ),
            471 => 
            array (
                'id' => 972,
                'endereco' => 'Rua Joaquim Nabuco, Rio Branco - AC, 224',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-142',
                'created_at' => '2021-01-18 16:28:04',
                'updated_at' => '2021-01-18 16:28:04',
            ),
            472 => 
            array (
                'id' => 973,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1893',
                'bairro' => 'Floresta SUL',
                'cep' => '69.912-452',
                'created_at' => '2021-01-18 16:28:42',
                'updated_at' => '2021-01-18 16:28:42',
            ),
            473 => 
            array (
                'id' => 974,
                'endereco' => 'Rua Antônio Júlio, Rio Branco - AC, 43',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-778',
                'created_at' => '2021-01-18 16:31:32',
                'updated_at' => '2021-01-18 16:31:32',
            ),
            474 => 
            array (
                'id' => 975,
                'endereco' => 'Rua Marcelino Machado, Rio Branco - AC, 130',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-442',
                'created_at' => '2021-01-18 16:31:34',
                'updated_at' => '2021-01-18 16:31:34',
            ),
            475 => 
            array (
                'id' => 976,
                'endereco' => 'Rua Santa Luzia, Rio Branco - AC, 134',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-444',
                'created_at' => '2021-01-18 16:32:43',
                'updated_at' => '2021-01-18 16:32:43',
            ),
            476 => 
            array (
                'id' => 977,
                'endereco' => 'Rua Foca, Rio Branco - AC, 222',
                'bairro' => 'Ilson Ribeiro',
                'cep' => '69.914-520',
                'created_at' => '2021-01-18 16:34:52',
                'updated_at' => '2021-01-18 16:34:52',
            ),
            477 => 
            array (
                'id' => 978,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1893',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-18 16:35:45',
                'updated_at' => '2021-01-18 16:35:45',
            ),
            478 => 
            array (
                'id' => 979,
                'endereco' => 'Rua Serra do Moa, Rio Branco - AC, 1044',
                'bairro' => 'Rosa Linda',
                'cep' => '69.909-065',
                'created_at' => '2021-01-18 16:39:06',
                'updated_at' => '2021-01-18 16:39:06',
            ),
            479 => 
            array (
                'id' => 980,
                'endereco' => 'Rua cafezal quadra 2, 64',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-416',
                'created_at' => '2021-01-18 16:41:56',
                'updated_at' => '2021-01-18 16:41:56',
            ),
            480 => 
            array (
                'id' => 981,
                'endereco' => 'Rua Alvoredo, Rio Branco - AC, 53',
                'bairro' => 'Pista',
                'cep' => '69.911-172',
                'created_at' => '2021-01-18 16:43:01',
                'updated_at' => '2021-01-18 16:43:01',
            ),
            481 => 
            array (
                'id' => 982,
                'endereco' => 'Rua Álvaro Alves, Rio Branco - AC, 47',
                'bairro' => 'Conjunto Castelo Branco',
                'cep' => '69.911-241',
                'created_at' => '2021-01-18 16:44:04',
                'updated_at' => '2021-01-18 16:44:04',
            ),
            482 => 
            array (
                'id' => 983,
                'endereco' => 'Rua Mizael Martins, Rio Branco - AC, 139',
                'bairro' => 'Calafate',
                'cep' => '69.914-358',
                'created_at' => '2021-01-18 16:52:21',
                'updated_at' => '2021-01-18 16:52:21',
            ),
            483 => 
            array (
                'id' => 984,
                'endereco' => 'Rua 8 de Maio, Rio Branco - AC, 60',
                'bairro' => 'PLACAS',
                'cep' => '69.902-766',
                'created_at' => '2021-01-18 16:52:48',
                'updated_at' => '2021-01-18 16:52:48',
            ),
            484 => 
            array (
                'id' => 985,
                'endereco' => 'Estrada do São Francisco, Rio Branco - AC, 2279',
                'bairro' => 'Vitória',
                'cep' => '69.901-815',
                'created_at' => '2021-01-18 16:52:57',
                'updated_at' => '2021-01-18 16:52:57',
            ),
            485 => 
            array (
                'id' => 986,
                'endereco' => 'Rua Geraldo Leite, Rio Branco - AC, 2753',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-192',
                'created_at' => '2021-01-18 16:56:35',
                'updated_at' => '2021-01-18 16:56:35',
            ),
            486 => 
            array (
                'id' => 987,
                'endereco' => 'Rua das Flores, Rio Branco - AC, 353',
                'bairro' => 'Boa Vista',
                'cep' => '69.912-122',
                'created_at' => '2021-01-18 16:56:49',
                'updated_at' => '2021-01-18 16:56:49',
            ),
            487 => 
            array (
                'id' => 988,
                'endereco' => 'Rua Sebastião Amâncio, Rio Branco - AC, 254',
                'bairro' => 'João Paulo',
                'cep' => '69.912-054',
                'created_at' => '2021-01-18 16:57:27',
                'updated_at' => '2021-01-18 16:57:27',
            ),
            488 => 
            array (
                'id' => 989,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 462',
                'bairro' => 'PLACAS',
                'cep' => '69.902-768',
                'created_at' => '2021-01-18 16:59:30',
                'updated_at' => '2021-01-18 16:59:30',
            ),
            489 => 
            array (
                'id' => 990,
                'endereco' => 'Rua Guiomard Santos, Rio Branco - AC, 285',
                'bairro' => 'BOSque',
                'cep' => '69.900-724',
                'created_at' => '2021-01-18 17:00:34',
                'updated_at' => '2021-01-18 17:00:34',
            ),
            490 => 
            array (
                'id' => 991,
                'endereco' => 'Rua Coronel Alexandrino, Rio Branco - AC, 241',
                'bairro' => 'Bosque',
                'cep' => '69.900-697',
                'created_at' => '2021-01-18 17:01:21',
                'updated_at' => '2021-01-18 17:01:21',
            ),
            491 => 
            array (
                'id' => 992,
                'endereco' => 'Rua João Francisco da Cunha, Rio Branco - AC, 209',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-632',
                'created_at' => '2021-01-18 17:01:48',
                'updated_at' => '2021-01-18 17:01:48',
            ),
            492 => 
            array (
                'id' => 993,
                'endereco' => 'Rua Evaldo Abreu Curity, Rio Branco - AC, 412',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-846',
                'created_at' => '2021-01-18 17:05:03',
                'updated_at' => '2021-01-18 17:05:03',
            ),
            493 => 
            array (
                'id' => 994,
                'endereco' => 'Rua João Francisco da Cunha, Rio Branco - AC, 209',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-632',
                'created_at' => '2021-01-18 17:06:29',
                'updated_at' => '2021-01-18 17:06:29',
            ),
            494 => 
            array (
                'id' => 995,
                'endereco' => 'Rua Mizael Martins, Rio Branco - AC, 139',
                'bairro' => 'Calafate',
                'cep' => '69.914-358',
                'created_at' => '2021-01-18 17:07:42',
                'updated_at' => '2021-01-18 17:07:42',
            ),
            495 => 
            array (
                'id' => 996,
                'endereco' => 'Rua quinze-bairro glória -265, 992350144',
                'bairro' => 'Bairro glória',
                'cep' => '69.900-004',
                'created_at' => '2021-01-18 17:08:24',
                'updated_at' => '2021-01-18 17:08:24',
            ),
            496 => 
            array (
                'id' => 997,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 462',
                'bairro' => 'PLACAS',
                'cep' => '69.902-768',
                'created_at' => '2021-01-18 17:09:20',
                'updated_at' => '2021-01-18 17:09:20',
            ),
            497 => 
            array (
                'id' => 998,
                'endereco' => 'Rua Santo Afonso, Rio Branco - AC, 17',
                'bairro' => 'José Augusto',
                'cep' => '69.900-803',
                'created_at' => '2021-01-18 17:10:40',
                'updated_at' => '2021-01-18 17:10:40',
            ),
            498 => 
            array (
                'id' => 999,
                'endereco' => 'Travessa Santa Helena, Rio Branco - AC, 63',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-674',
                'created_at' => '2021-01-18 17:11:47',
                'updated_at' => '2021-01-18 17:11:47',
            ),
            499 => 
            array (
                'id' => 1000,
                'endereco' => 'Rua Águia, Rio Branco - AC, 119',
                'bairro' => 'Loteamento Jaguar',
                'cep' => '69.903-288',
                'created_at' => '2021-01-18 17:16:39',
                'updated_at' => '2021-01-18 17:16:39',
            ),
        ));
        \DB::table('endereco')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'endereco' => 'Rua Aracuã, Rio Branco - AC, 74',
                'bairro' => 'Eldorado',
                'cep' => '69.902-540',
                'created_at' => '2021-01-18 17:17:26',
                'updated_at' => '2021-01-18 17:17:26',
            ),
            1 => 
            array (
                'id' => 1002,
                'endereco' => '...lima verde, 23',
                'bairro' => 'Areal',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 17:18:26',
                'updated_at' => '2021-01-18 17:18:26',
            ),
            2 => 
            array (
                'id' => 1003,
                'endereco' => 'Rua 15 de Dezembro, Rio Branco - AC, 589',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-226',
                'created_at' => '2021-01-18 17:20:26',
                'updated_at' => '2021-01-18 17:20:26',
            ),
            3 => 
            array (
                'id' => 1004,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 462',
                'bairro' => 'Placas',
                'cep' => '69.902-768',
                'created_at' => '2021-01-18 17:22:51',
                'updated_at' => '2021-01-18 17:22:51',
            ),
            4 => 
            array (
                'id' => 1005,
                'endereco' => 'Rua Mohamed, Rio Branco - AC, 37',
                'bairro' => 'Jardim de Alah',
                'cep' => '69.915-500',
                'created_at' => '2021-01-18 17:23:28',
                'updated_at' => '2021-01-18 17:23:28',
            ),
            5 => 
            array (
                'id' => 1006,
                'endereco' => 'Rua Marte, Rio Branco - AC, 556',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-154',
                'created_at' => '2021-01-18 17:24:14',
                'updated_at' => '2021-01-18 17:24:14',
            ),
            6 => 
            array (
                'id' => 1007,
                'endereco' => 'Rua América Mateus, Rio Branco - AC, 242',
                'bairro' => 'Vila Albert Sampaio',
                'cep' => '69.908-232',
                'created_at' => '2021-01-18 17:24:50',
                'updated_at' => '2021-01-18 17:24:50',
            ),
            7 => 
            array (
                'id' => 1008,
                'endereco' => 'Rua Raimundo Melo, Rio Branco - AC, 120',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-130',
                'created_at' => '2021-01-18 17:27:00',
                'updated_at' => '2021-01-18 17:27:00',
            ),
            8 => 
            array (
                'id' => 1009,
                'endereco' => 'Rua Santo Afonso, Rio Branco - AC, 17',
                'bairro' => 'José Augusto',
                'cep' => '69.900-803',
                'created_at' => '2021-01-18 17:31:29',
                'updated_at' => '2021-01-18 17:31:29',
            ),
            9 => 
            array (
                'id' => 1010,
                'endereco' => 'Rua das flores, 88',
                'bairro' => 'Bairro Amapa',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 17:31:40',
                'updated_at' => '2021-01-18 17:31:40',
            ),
            10 => 
            array (
                'id' => 1011,
                'endereco' => 'Rua Marte, Rio Branco - AC, 556',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-154',
                'created_at' => '2021-01-18 17:32:43',
                'updated_at' => '2021-01-18 17:32:43',
            ),
            11 => 
            array (
                'id' => 1012,
                'endereco' => 'Rua Santos Dumont, Rio Branco - AC, 258',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-069',
                'created_at' => '2021-01-18 17:35:01',
                'updated_at' => '2021-01-18 17:35:01',
            ),
            12 => 
            array (
                'id' => 1013,
                'endereco' => '...rua das flores, 88',
                'bairro' => 'Bairro Amapá',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 17:36:13',
                'updated_at' => '2021-01-18 17:36:13',
            ),
            13 => 
            array (
                'id' => 1014,
                'endereco' => 'Rua Pau Brasil, Rio Branco - AC, 18',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-464',
                'created_at' => '2021-01-18 17:38:17',
                'updated_at' => '2021-01-18 17:38:17',
            ),
            14 => 
            array (
                'id' => 1015,
                'endereco' => 'TV são Daniel, 224',
                'bairro' => 'Benfica',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 17:40:14',
                'updated_at' => '2021-01-18 17:40:14',
            ),
            15 => 
            array (
                'id' => 1016,
                'endereco' => 'Rua 7 de Dezembro, Rio Branco - AC, 573',
                'bairro' => 'Placas',
                'cep' => '69.902-756',
                'created_at' => '2021-01-18 17:41:30',
                'updated_at' => '2021-01-18 17:41:30',
            ),
            16 => 
            array (
                'id' => 1017,
                'endereco' => 'Travessa Pôr do Sol, Rio Branco - AC, 48',
                'bairro' => 'Areal',
                'cep' => '69.905-899',
                'created_at' => '2021-01-18 17:43:40',
                'updated_at' => '2021-01-18 17:43:40',
            ),
            17 => 
            array (
                'id' => 1018,
                'endereco' => 'Rua 7 de Dezembro, Rio Branco - AC, 573',
                'bairro' => 'Placas',
                'cep' => '69.902-756',
                'created_at' => '2021-01-18 17:45:32',
                'updated_at' => '2021-01-18 17:45:32',
            ),
            18 => 
            array (
                'id' => 1019,
                'endereco' => 'Rua Padre José, Rio Branco - AC, 529',
                'bairro' => 'Triângulo Novo',
                'cep' => '69.906-262',
                'created_at' => '2021-01-18 17:46:46',
                'updated_at' => '2021-01-18 17:46:46',
            ),
            19 => 
            array (
                'id' => 1020,
                'endereco' => 'Rua Primavera, Rio Branco - AC, 140',
                'bairro' => 'Conjunto UNIVERSITÁRIO 2',
                'cep' => '69.917-722',
                'created_at' => '2021-01-18 17:49:40',
                'updated_at' => '2021-01-18 17:49:40',
            ),
            20 => 
            array (
                'id' => 1021,
                'endereco' => 'Rua São Damião, Rio Branco - AC, 111',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-856',
                'created_at' => '2021-01-18 17:50:07',
                'updated_at' => '2021-01-18 17:50:07',
            ),
            21 => 
            array (
                'id' => 1022,
                'endereco' => 'Rua Tijuca, Rio Branco - AC, 60',
                'bairro' => 'Conjunto Mascarenhas de Moraes',
                'cep' => '69.918-026',
                'created_at' => '2021-01-18 17:51:07',
                'updated_at' => '2021-01-18 17:51:07',
            ),
            22 => 
            array (
                'id' => 1023,
                'endereco' => 'Rua Francisco Gomes, Rio Branco - AC, 358',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-234',
                'created_at' => '2021-01-18 17:52:28',
                'updated_at' => '2021-01-18 17:52:28',
            ),
            23 => 
            array (
                'id' => 1024,
                'endereco' => 'Rua Coronel Alexandrino, Rio Branco - AC, 222',
                'bairro' => 'Bosque',
                'cep' => '69.900-658',
                'created_at' => '2021-01-18 17:54:21',
                'updated_at' => '2021-01-18 17:54:21',
            ),
            24 => 
            array (
                'id' => 1025,
                'endereco' => 'Rua Severiano, Rio Branco - AC, 301',
                'bairro' => 'Bosque',
                'cep' => '69.900-511',
                'created_at' => '2021-01-18 17:56:12',
                'updated_at' => '2021-01-18 17:56:12',
            ),
            25 => 
            array (
                'id' => 1026,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 582',
                'bairro' => 'Cidade NOVAidade nova',
                'cep' => '69.905-438',
                'created_at' => '2021-01-18 17:57:07',
                'updated_at' => '2021-01-18 17:57:07',
            ),
            26 => 
            array (
                'id' => 1027,
                'endereco' => 'Rua Antônio Souza de Araújo, Rio Branco - AC, 248',
                'bairro' => 'Plácido de Castro',
                'cep' => '69.912-180',
                'created_at' => '2021-01-18 17:57:08',
                'updated_at' => '2021-01-18 17:57:08',
            ),
            27 => 
            array (
                'id' => 1028,
                'endereco' => 'Rua Euclides da Cunha, Rio Branco - AC, 277',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-168',
                'created_at' => '2021-01-18 17:59:50',
                'updated_at' => '2021-01-18 17:59:50',
            ),
            28 => 
            array (
                'id' => 1029,
                'endereco' => 'Rua Valdomiro Lopes, Rio Branco - AC, 2502',
                'bairro' => 'Paz',
                'cep' => '69.919-256',
                'created_at' => '2021-01-18 18:02:49',
                'updated_at' => '2021-01-18 18:02:49',
            ),
            29 => 
            array (
                'id' => 1030,
                'endereco' => 'Rua da Pitanga, Rio Branco - AC, 308',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-036',
                'created_at' => '2021-01-18 18:03:56',
                'updated_at' => '2021-01-18 18:03:56',
            ),
            30 => 
            array (
                'id' => 1031,
                'endereco' => 'Rua 19 de Outubro, Rio Branco - AC, 286',
                'bairro' => 'Boa União',
                'cep' => '69.911-778',
                'created_at' => '2021-01-18 18:04:17',
                'updated_at' => '2021-01-18 18:04:17',
            ),
            31 => 
            array (
                'id' => 1032,
                'endereco' => 'Rua Graúna, Rio Branco - AC, 48',
                'bairro' => 'Conjunto Ouricurí',
                'cep' => '69.903-230',
                'created_at' => '2021-01-18 18:04:33',
                'updated_at' => '2021-01-18 18:04:33',
            ),
            32 => 
            array (
                'id' => 1033,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 582',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-438',
                'created_at' => '2021-01-18 18:08:22',
                'updated_at' => '2021-01-18 18:08:22',
            ),
            33 => 
            array (
                'id' => 1034,
                'endereco' => 'Rua Adam Smith, Rio Branco - AC, ',
                'bairro' => 'Vila Nova',
                'cep' => '69.921-074',
                'created_at' => '2021-01-18 18:08:47',
                'updated_at' => '2021-01-18 18:08:47',
            ),
            34 => 
            array (
                'id' => 1035,
                'endereco' => 'Rua Graúna, Rio Branco - AC, 48',
                'bairro' => 'Conjunto Ouricurí',
                'cep' => '69.903-230',
                'created_at' => '2021-01-18 18:10:50',
                'updated_at' => '2021-01-18 18:10:50',
            ),
            35 => 
            array (
                'id' => 1036,
                'endereco' => 'Rua 19 de Outubro, Rio Branco - AC, 287',
                'bairro' => 'Boa União',
                'cep' => '69.911-778',
                'created_at' => '2021-01-18 18:12:37',
                'updated_at' => '2021-01-18 18:12:37',
            ),
            36 => 
            array (
                'id' => 1037,
                'endereco' => 'Rua Fé de Deus, Rio Branco - AC, 13',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-223',
                'created_at' => '2021-01-18 18:13:54',
                'updated_at' => '2021-01-18 18:13:54',
            ),
            37 => 
            array (
                'id' => 1038,
                'endereco' => 'Rua 2 de Maio, Rio Branco - AC, 90',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-716',
                'created_at' => '2021-01-18 18:13:55',
                'updated_at' => '2021-01-18 18:13:55',
            ),
            38 => 
            array (
                'id' => 1039,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 1024',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-114',
                'created_at' => '2021-01-18 18:15:31',
                'updated_at' => '2021-01-18 18:15:31',
            ),
            39 => 
            array (
                'id' => 1040,
                'endereco' => 'Rua Dona Ideuzuite Alves, Rio Branco - AC, 131',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-782',
                'created_at' => '2021-01-18 18:16:42',
                'updated_at' => '2021-01-18 18:16:42',
            ),
            40 => 
            array (
                'id' => 1041,
                'endereco' => 'Rua Pará, Rio Branco - AC, 93',
                'bairro' => 'Habitasa',
                'cep' => '69.905-082',
                'created_at' => '2021-01-18 18:17:10',
                'updated_at' => '2021-01-18 18:17:10',
            ),
            41 => 
            array (
                'id' => 1042,
                'endereco' => 'TV 21 DE ABRIL, Rio Branco - AC, 55',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-270',
                'created_at' => '2021-01-18 18:17:17',
                'updated_at' => '2021-01-18 18:17:17',
            ),
            42 => 
            array (
                'id' => 1043,
                'endereco' => 'Rua Antônio Pinheiro de Morais, Rio Branco - AC, 215',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-858',
                'created_at' => '2021-01-18 18:17:28',
                'updated_at' => '2021-01-18 18:17:28',
            ),
            43 => 
            array (
                'id' => 1044,
                'endereco' => 'Rua Marfim, Rio Branco - AC, 538',
                'bairro' => 'Xavier Maia',
                'cep' => '69.903-038',
                'created_at' => '2021-01-18 18:23:05',
                'updated_at' => '2021-01-18 18:23:05',
            ),
            44 => 
            array (
                'id' => 1045,
                'endereco' => 'Rua José Eusébio, Rio Branco - AC, 415',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-362',
                'created_at' => '2021-01-18 18:24:27',
                'updated_at' => '2021-01-18 18:24:27',
            ),
            45 => 
            array (
                'id' => 1046,
                'endereco' => 'Rua Ruanda, Rio Branco - AC, 84',
                'bairro' => 'João Paulo',
                'cep' => '69.912-064',
                'created_at' => '2021-01-18 18:26:07',
                'updated_at' => '2021-01-18 18:26:07',
            ),
            46 => 
            array (
                'id' => 1047,
                'endereco' => 'Travessa do Cajueiro, Rio Branco - AC, 98',
                'bairro' => 'Conquista',
                'cep' => '69.918-784',
                'created_at' => '2021-01-18 18:26:16',
                'updated_at' => '2021-01-18 18:26:16',
            ),
            47 => 
            array (
                'id' => 1048,
                'endereco' => 'Rua Ruanda, Rio Branco - AC, 84',
                'bairro' => 'João Paulo',
                'cep' => '69.912-064',
                'created_at' => '2021-01-18 18:29:31',
                'updated_at' => '2021-01-18 18:29:31',
            ),
            48 => 
            array (
                'id' => 1049,
                'endereco' => 'Rua pintassilgo, Rio Branco - AC, 358',
                'bairro' => 'Loteamento Jaguar',
                'cep' => '69.903-270',
                'created_at' => '2021-01-18 18:30:35',
                'updated_at' => '2021-01-18 18:30:35',
            ),
            49 => 
            array (
                'id' => 1050,
                'endereco' => 'Rua Coronel Domingos de Andrade, Manaus - AM, 26',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.094-370',
                'created_at' => '2021-01-18 18:31:43',
                'updated_at' => '2021-01-18 18:31:43',
            ),
            50 => 
            array (
                'id' => 1051,
                'endereco' => 'Travessa do Cajueiro, Rio Branco - AC, 98',
                'bairro' => 'Conquista',
                'cep' => '69.918-784',
                'created_at' => '2021-01-18 18:32:51',
                'updated_at' => '2021-01-18 18:32:51',
            ),
            51 => 
            array (
                'id' => 1052,
                'endereco' => 'Rua Arara, Rio Branco - AC, 105',
                'bairro' => 'Ilson Ribeiro',
                'cep' => '69.914-568',
                'created_at' => '2021-01-18 18:33:15',
                'updated_at' => '2021-01-18 18:33:15',
            ),
            52 => 
            array (
                'id' => 1053,
                'endereco' => 'Rua Sanhaçu, Rio Branco - AC, 81',
                'bairro' => 'Conjunto Ouricuri - placas',
                'cep' => '69.903-227',
                'created_at' => '2021-01-18 18:34:01',
                'updated_at' => '2021-01-18 18:34:01',
            ),
            53 => 
            array (
                'id' => 1054,
                'endereco' => 'Rua 1º de Abril, Rio Branco - AC, 291',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-242',
                'created_at' => '2021-01-18 18:37:56',
                'updated_at' => '2021-01-18 18:37:56',
            ),
            54 => 
            array (
                'id' => 1055,
                'endereco' => 'Avenida Dorval Camilo, Rio Branco - AC, 229',
                'bairro' => 'Areal',
                'cep' => '69.905-859',
                'created_at' => '2021-01-18 18:38:32',
                'updated_at' => '2021-01-18 18:38:32',
            ),
            55 => 
            array (
                'id' => 1056,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 263',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-422',
                'created_at' => '2021-01-18 18:40:05',
                'updated_at' => '2021-01-18 18:40:05',
            ),
            56 => 
            array (
                'id' => 1057,
                'endereco' => 'Rua Jerusalém, Rio Branco - AC, 399',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-682',
                'created_at' => '2021-01-18 18:42:31',
                'updated_at' => '2021-01-18 18:42:31',
            ),
            57 => 
            array (
                'id' => 1058,
                'endereco' => 'Rua Adalcides Galo, Rio Branco - AC, 535',
                'bairro' => 'Plácido de Castro',
                'cep' => '69.912-200',
                'created_at' => '2021-01-18 18:44:19',
                'updated_at' => '2021-01-18 18:44:19',
            ),
            58 => 
            array (
                'id' => 1059,
                'endereco' => 'Rua Flor de Maio, Rio Branco - AC, 71',
                'bairro' => 'Eldorado',
                'cep' => '69.902-479',
                'created_at' => '2021-01-18 18:44:23',
                'updated_at' => '2021-01-18 18:44:23',
            ),
            59 => 
            array (
                'id' => 1060,
                'endereco' => 'Rua 15 de Dezembro, Rio Branco - AC, 588',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-226',
                'created_at' => '2021-01-18 18:47:52',
                'updated_at' => '2021-01-18 18:47:52',
            ),
            60 => 
            array (
                'id' => 1061,
                'endereco' => 'Rua Boa União, Rio Branco - AC, 655',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-716',
                'created_at' => '2021-01-18 18:48:01',
                'updated_at' => '2021-01-18 18:48:01',
            ),
            61 => 
            array (
                'id' => 1062,
                'endereco' => 'Travessa Benjamim Constant, Rio Branco - AC, 186',
                'bairro' => 'CERÂMICA centro',
                'cep' => '69.905-064',
                'created_at' => '2021-01-18 18:48:02',
                'updated_at' => '2021-01-18 18:48:02',
            ),
            62 => 
            array (
                'id' => 1063,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 263',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-422',
                'created_at' => '2021-01-18 18:49:42',
                'updated_at' => '2021-01-18 18:49:42',
            ),
            63 => 
            array (
                'id' => 1064,
                'endereco' => 'Rua Veterano R. Pinto, Rio Branco - AC, 169',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-412',
                'created_at' => '2021-01-18 18:50:26',
                'updated_at' => '2021-01-18 18:50:26',
            ),
            64 => 
            array (
                'id' => 1065,
                'endereco' => 'Rua Saldanha, Rio Branco - AC, 136',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-684',
                'created_at' => '2021-01-18 18:52:54',
                'updated_at' => '2021-01-18 18:52:54',
            ),
            65 => 
            array (
                'id' => 1066,
                'endereco' => 'Rua Joaquim Macêdo, Rio Branco - AC, 721',
                'bairro' => 'São Francisco',
                'cep' => '69.901-585',
                'created_at' => '2021-01-18 18:54:07',
                'updated_at' => '2021-01-18 18:54:07',
            ),
            66 => 
            array (
                'id' => 1067,
                'endereco' => 'Travessa Jorge Cunha, Rio Branco - AC, 27',
                'bairro' => 'Triângulo Novo',
                'cep' => '69.906-288',
                'created_at' => '2021-01-18 18:57:22',
                'updated_at' => '2021-01-18 18:57:22',
            ),
            67 => 
            array (
                'id' => 1068,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 2095',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 18:57:29',
                'updated_at' => '2021-01-18 18:57:29',
            ),
            68 => 
            array (
                'id' => 1069,
                'endereco' => 'Travessa General, Rio Branco - AC, 44',
                'bairro' => 'Taquarí',
                'cep' => '69.906-504',
                'created_at' => '2021-01-18 19:01:55',
                'updated_at' => '2021-01-18 19:01:55',
            ),
            69 => 
            array (
                'id' => 1070,
                'endereco' => 'Rua Quinarí, Rio Branco - AC, 650',
                'bairro' => 'Triângulo Velho',
                'cep' => '69.906-212',
                'created_at' => '2021-01-18 19:03:31',
                'updated_at' => '2021-01-18 19:03:31',
            ),
            70 => 
            array (
                'id' => 1071,
                'endereco' => 'Rua 1º de Janeiro, Rio Branco - AC, 263',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-622',
                'created_at' => '2021-01-18 19:03:47',
                'updated_at' => '2021-01-18 19:03:47',
            ),
            71 => 
            array (
                'id' => 1072,
                'endereco' => 'Rua Uirapuru, Rio Branco - AC, 504',
                'bairro' => 'Ilson Ribeiro',
                'cep' => '69.914-556',
                'created_at' => '2021-01-18 19:03:59',
                'updated_at' => '2021-01-18 19:03:59',
            ),
            72 => 
            array (
                'id' => 1073,
                'endereco' => 'Rua Tambaú, Rio Branco - AC, 385',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-838',
                'created_at' => '2021-01-18 19:04:10',
                'updated_at' => '2021-01-18 19:04:10',
            ),
            73 => 
            array (
                'id' => 1074,
                'endereco' => 'Rua Cearense, Rio Branco - AC, 44',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-670',
                'created_at' => '2021-01-18 19:04:15',
                'updated_at' => '2021-01-18 19:04:15',
            ),
            74 => 
            array (
                'id' => 1075,
                'endereco' => 'Travessa do Jucá, Rio Branco - AC, 42',
                'bairro' => 'Conquista',
                'cep' => '69.918-756',
                'created_at' => '2021-01-18 19:06:21',
                'updated_at' => '2021-01-18 19:06:21',
            ),
            75 => 
            array (
                'id' => 1076,
                'endereco' => 'Rua Bebeto Alves, Rio Branco - AC, 201',
                'bairro' => 'São Francisco',
                'cep' => '69.901-558',
                'created_at' => '2021-01-18 19:07:18',
                'updated_at' => '2021-01-18 19:07:18',
            ),
            76 => 
            array (
                'id' => 1077,
                'endereco' => 'Travessa General, Rio Branco - AC, 44',
                'bairro' => 'Taquarí',
                'cep' => '69.906-504',
                'created_at' => '2021-01-18 19:13:56',
                'updated_at' => '2021-01-18 19:13:56',
            ),
            77 => 
            array (
                'id' => 1078,
                'endereco' => 'estrada da floresta via parque bloco vp4 apto t01, 1893',
                'bairro' => 'floresta sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-18 19:14:21',
                'updated_at' => '2021-01-18 19:14:21',
            ),
            78 => 
            array (
                'id' => 1079,
                'endereco' => 'Rua francisco Ferreira da Silva,Rio Branco - AC, 242',
                'bairro' => 'Baixa da colina',
                'cep' => '69.909-328',
                'created_at' => '2021-01-18 19:23:55',
                'updated_at' => '2021-01-18 19:23:55',
            ),
            79 => 
            array (
                'id' => 1080,
                'endereco' => 'Rua Sebastião Amâncio, Rio Branco - AC, 158',
                'bairro' => 'João PAULO',
                'cep' => '69.912-054',
                'created_at' => '2021-01-18 19:24:26',
                'updated_at' => '2021-01-18 19:24:26',
            ),
            80 => 
            array (
                'id' => 1081,
                'endereco' => 'Rua da Amizade, Rio Branco - AC, 55',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-392',
                'created_at' => '2021-01-18 19:25:03',
                'updated_at' => '2021-01-18 19:25:03',
            ),
            81 => 
            array (
                'id' => 1082,
                'endereco' => 'Rua da Amizade, Rio Branco - AC, 244',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-656',
                'created_at' => '2021-01-18 19:26:37',
                'updated_at' => '2021-01-18 19:26:37',
            ),
            82 => 
            array (
                'id' => 1083,
                'endereco' => 'Travessa Primavera, Rio Branco - AC, 188',
                'bairro' => 'Areal',
                'cep' => '69.906-049',
                'created_at' => '2021-01-18 19:27:36',
                'updated_at' => '2021-01-18 19:27:36',
            ),
            83 => 
            array (
                'id' => 1084,
                'endereco' => 'Rua Mico Leão, Rio Branco - AC, 55',
                'bairro' => 'Ilson Ribeiro',
                'cep' => '69.914-562',
                'created_at' => '2021-01-18 19:32:22',
                'updated_at' => '2021-01-18 19:32:22',
            ),
            84 => 
            array (
                'id' => 1085,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 242',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-18 19:33:43',
                'updated_at' => '2021-01-18 19:33:43',
            ),
            85 => 
            array (
                'id' => 1086,
                'endereco' => 'Estrada do Amapá Ramal do Rodo, KM 3,5, 2831',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 19:38:41',
                'updated_at' => '2021-01-18 19:38:41',
            ),
            86 => 
            array (
                'id' => 1087,
                'endereco' => 'Rua São Sebastião, Rio Branco - AC, 703',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-340',
                'created_at' => '2021-01-18 19:39:21',
                'updated_at' => '2021-01-18 19:39:21',
            ),
            87 => 
            array (
                'id' => 1088,
                'endereco' => '..., 9',
                'bairro' => 'morada do sol',
                'cep' => '69.991-106',
                'created_at' => '2021-01-18 19:43:57',
                'updated_at' => '2021-01-18 19:43:57',
            ),
            88 => 
            array (
                'id' => 1089,
                'endereco' => 'estrada do Amapá ramal do rodo, KM 3,5, 2831',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-18 19:45:16',
                'updated_at' => '2021-01-18 19:45:16',
            ),
            89 => 
            array (
                'id' => 1090,
                'endereco' => 'Rua Cumarú, Rio Branco - AC, 111',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-876',
                'created_at' => '2021-01-18 19:46:33',
                'updated_at' => '2021-01-18 19:46:33',
            ),
            90 => 
            array (
                'id' => 1091,
                'endereco' => 'Avenida Juscelino Kubitschek, Rio Branco - AC, 158',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-030',
                'created_at' => '2021-01-18 19:47:17',
                'updated_at' => '2021-01-18 19:47:17',
            ),
            91 => 
            array (
                'id' => 1092,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 2095',
                'bairro' => 'Alto ALEGRE',
                'cep' => '69.921-282',
                'created_at' => '2021-01-18 19:49:46',
                'updated_at' => '2021-01-18 19:49:46',
            ),
            92 => 
            array (
                'id' => 1093,
                'endereco' => 'Rua Shalon, Rio Branco - AC, 191',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-665',
                'created_at' => '2021-01-18 19:50:53',
                'updated_at' => '2021-01-18 19:50:53',
            ),
            93 => 
            array (
                'id' => 1094,
                'endereco' => 'Rua Família, Rio Branco - AC, 65',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-695',
                'created_at' => '2021-01-18 19:52:08',
                'updated_at' => '2021-01-18 19:52:08',
            ),
            94 => 
            array (
                'id' => 1095,
                'endereco' => 'Rua Geraldo Leite, Rio Branco - AC, 21',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-192',
                'created_at' => '2021-01-18 19:52:12',
                'updated_at' => '2021-01-18 19:52:12',
            ),
            95 => 
            array (
                'id' => 1096,
                'endereco' => 'Travessa Monte das Oliveiras, Rio Branco - AC, 23',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-688',
                'created_at' => '2021-01-18 19:55:52',
                'updated_at' => '2021-01-18 19:55:52',
            ),
            96 => 
            array (
                'id' => 1097,
                'endereco' => ', Xapuri - AC, 41',
                'bairro' => 'Centro',
                'cep' => '69.930-000',
                'created_at' => '2021-01-18 20:08:38',
                'updated_at' => '2021-01-18 20:08:38',
            ),
            97 => 
            array (
                'id' => 1098,
                'endereco' => 'Travessa Municipalidade, Rio Branco - AC, 460',
                'bairro' => 'Boa Esperança',
                'cep' => '69.918-520',
                'created_at' => '2021-01-18 20:10:31',
                'updated_at' => '2021-01-18 20:10:31',
            ),
            98 => 
            array (
                'id' => 1099,
                'endereco' => 'Rua Palmares, Rio Branco - AC, 169',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-396',
                'created_at' => '2021-01-18 20:15:53',
                'updated_at' => '2021-01-18 20:15:53',
            ),
            99 => 
            array (
                'id' => 1100,
                'endereco' => ', Brasiléia - AC, 211',
                'bairro' => 'Rua Domingos Lopes',
                'cep' => '69.932-000',
                'created_at' => '2021-01-18 20:21:28',
                'updated_at' => '2021-01-18 20:21:28',
            ),
            100 => 
            array (
                'id' => 1101,
                'endereco' => 'Travessa Juricaba, Rio Branco - AC, 25',
                'bairro' => 'Capoeira',
                'cep' => '69.905-020',
                'created_at' => '2021-01-18 20:30:02',
                'updated_at' => '2021-01-18 20:30:02',
            ),
            101 => 
            array (
                'id' => 1102,
                'endereco' => 'Rua Floresta, Rio Branco - AC, 115',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-378',
                'created_at' => '2021-01-18 20:31:41',
                'updated_at' => '2021-01-18 20:31:41',
            ),
            102 => 
            array (
                'id' => 1103,
                'endereco' => 'Rua Cruzeiro do Sul, Rio Branco - AC, 897',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-156',
                'created_at' => '2021-01-18 20:32:16',
                'updated_at' => '2021-01-18 20:32:16',
            ),
            103 => 
            array (
                'id' => 1104,
                'endereco' => 'Estrada do Calafate, Rio Branco - AC, ',
                'bairro' => 'Conjunto Habitar Brasil',
                'cep' => '69.915-370',
                'created_at' => '2021-01-18 20:34:13',
                'updated_at' => '2021-01-18 20:34:13',
            ),
            104 => 
            array (
                'id' => 1105,
                'endereco' => 'Rua Santa Rita, Rio Branco - AC, 486',
                'bairro' => 'Bahia NOVA',
                'cep' => '69.911-650',
                'created_at' => '2021-01-18 20:35:50',
                'updated_at' => '2021-01-18 20:35:50',
            ),
            105 => 
            array (
                'id' => 1106,
                'endereco' => 'Rua:TARUMÃ;Residencial Macauã;Quadra E, 126',
                'bairro' => 'Placas',
                'cep' => '69.909-710',
                'created_at' => '2021-01-18 20:37:09',
                'updated_at' => '2021-01-18 20:37:09',
            ),
            106 => 
            array (
                'id' => 1107,
                'endereco' => '..., 41',
                'bairro' => '...',
                'cep' => '69.914-340',
                'created_at' => '2021-01-18 20:38:06',
                'updated_at' => '2021-01-18 20:38:06',
            ),
            107 => 
            array (
                'id' => 1108,
                'endereco' => 'Travessa Juricaba, Rio Branco - AC, 25',
                'bairro' => 'Capoeira',
                'cep' => '69.905-020',
                'created_at' => '2021-01-18 20:40:07',
                'updated_at' => '2021-01-18 20:40:07',
            ),
            108 => 
            array (
                'id' => 1109,
                'endereco' => 'Rua Edmundo Pinto, Rio Branco - AC, 515',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-725',
                'created_at' => '2021-01-18 20:47:16',
                'updated_at' => '2021-01-18 20:47:16',
            ),
            109 => 
            array (
                'id' => 1110,
                'endereco' => 'Beco Colombo, Rio Branco - AC, 33',
                'bairro' => 'Capoeira',
                'cep' => '69.905-027',
                'created_at' => '2021-01-18 20:54:00',
                'updated_at' => '2021-01-18 20:54:00',
            ),
            110 => 
            array (
                'id' => 1111,
                'endereco' => 'Rua Plínio Brandão, Rio Branco - AC, 16',
                'bairro' => 'Base',
                'cep' => '69.900-037',
                'created_at' => '2021-01-18 20:55:39',
                'updated_at' => '2021-01-18 20:55:39',
            ),
            111 => 
            array (
                'id' => 1112,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 139',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-444',
                'created_at' => '2021-01-18 21:22:17',
                'updated_at' => '2021-01-18 21:22:17',
            ),
            112 => 
            array (
                'id' => 1113,
                'endereco' => 'Rua Benzinho, Rio Branco - AC, 561',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-228',
                'created_at' => '2021-01-18 21:40:09',
                'updated_at' => '2021-01-18 21:40:09',
            ),
            113 => 
            array (
                'id' => 1114,
                'endereco' => 'Rua Tijuca, Rio Branco - AC, 39',
                'bairro' => 'Conjunto  Mascarenhas de moraes',
                'cep' => '69.918-026',
                'created_at' => '2021-01-18 21:43:23',
                'updated_at' => '2021-01-18 21:43:23',
            ),
            114 => 
            array (
                'id' => 1115,
                'endereco' => 'Travessa Ipê, Rio Branco - AC, 114',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-560',
                'created_at' => '2021-01-18 21:44:54',
                'updated_at' => '2021-01-18 21:44:54',
            ),
            115 => 
            array (
                'id' => 1116,
                'endereco' => 'Rua Benzinho, Rio Branco - AC, 561',
                'bairro' => 'Nova Esperança',
                'cep' => '69.911-418',
                'created_at' => '2021-01-18 21:50:58',
                'updated_at' => '2021-01-18 21:50:58',
            ),
            116 => 
            array (
                'id' => 1117,
                'endereco' => 'Rua Boulevard Augusto Monteiro, Rio Branco - AC, 132',
                'bairro' => 'Quinze',
                'cep' => '69.905-518',
                'created_at' => '2021-01-18 21:56:01',
                'updated_at' => '2021-01-18 21:56:01',
            ),
            117 => 
            array (
                'id' => 1118,
            'endereco' => 'Rua quatro de outubro (rua do correio), 126',
                'bairro' => 'Sobral psita',
                'cep' => '69.911-178',
                'created_at' => '2021-01-18 22:22:51',
                'updated_at' => '2021-01-18 22:22:51',
            ),
            118 => 
            array (
                'id' => 1119,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC APTO 09, 953',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-230',
                'created_at' => '2021-01-18 23:26:51',
                'updated_at' => '2021-01-18 23:26:51',
            ),
            119 => 
            array (
                'id' => 1120,
                'endereco' => 'Rua Giocondo, Rio Branco - AC, 71',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-858',
                'created_at' => '2021-01-18 23:46:19',
                'updated_at' => '2021-01-18 23:46:19',
            ),
            120 => 
            array (
                'id' => 1121,
                'endereco' => '..., 300',
                'bairro' => '...Adalberto Aragão',
                'cep' => '69.901-166',
                'created_at' => '2021-01-19 02:30:26',
                'updated_at' => '2021-01-19 02:30:26',
            ),
            121 => 
            array (
                'id' => 1122,
                'endereco' => 'Rua do Levitas, Rio Branco - AC, 384',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-648',
                'created_at' => '2021-01-19 04:18:22',
                'updated_at' => '2021-01-19 04:18:22',
            ),
            122 => 
            array (
                'id' => 1123,
                'endereco' => 'Rua 10 de Junho, Rio Branco - AC, 441',
                'bairro' => 'Casa Nova',
                'cep' => '69.901-270',
                'created_at' => '2021-01-19 04:34:13',
                'updated_at' => '2021-01-19 04:34:13',
            ),
            123 => 
            array (
                'id' => 1124,
                'endereco' => 'Área Rural, Rio Branco - AC, 2880',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-19 04:51:30',
                'updated_at' => '2021-01-19 04:51:30',
            ),
            124 => 
            array (
                'id' => 1125,
                'endereco' => 'Rua Santa Terezinha, Rio Branco - AC, 19',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-666',
                'created_at' => '2021-01-19 05:16:31',
                'updated_at' => '2021-01-19 05:16:31',
            ),
            125 => 
            array (
                'id' => 1126,
                'endereco' => 'Avenida Trípole, Rio Branco - AC, 105',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-050',
                'created_at' => '2021-01-19 05:17:20',
                'updated_at' => '2021-01-19 05:17:20',
            ),
            126 => 
            array (
                'id' => 1127,
                'endereco' => 'Rua Santa Terezinha, Rio Branco - AC, 207',
                'bairro' => 'Conquista',
                'cep' => '69.918-814',
                'created_at' => '2021-01-19 05:18:33',
                'updated_at' => '2021-01-19 05:18:33',
            ),
            127 => 
            array (
                'id' => 1128,
                'endereco' => 'Rua Maria Ribeiro, Rio Branco - AC, 27',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-226',
                'created_at' => '2021-01-19 05:28:36',
                'updated_at' => '2021-01-19 05:28:36',
            ),
            128 => 
            array (
                'id' => 1129,
                'endereco' => 'Rua Aliança com Cristo, Rio Branco - AC, 52',
                'bairro' => 'Loteamento JOAFRA 1',
                'cep' => '69.919-340',
                'created_at' => '2021-01-19 05:32:38',
                'updated_at' => '2021-01-19 05:32:38',
            ),
            129 => 
            array (
                'id' => 1130,
                'endereco' => 'Travessa Coelho, Rio Branco - AC, 639',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-527',
                'created_at' => '2021-01-19 05:42:31',
                'updated_at' => '2021-01-19 05:42:31',
            ),
            130 => 
            array (
                'id' => 1131,
                'endereco' => 'Rua Aliança com Cristo, Rio Branco - AC, 52',
                'bairro' => 'Loteamento Joafra1',
                'cep' => '69.919-340',
                'created_at' => '2021-01-19 05:43:19',
                'updated_at' => '2021-01-19 05:43:19',
            ),
            131 => 
            array (
                'id' => 1132,
                'endereco' => 'Área Rural, Rio Branco - AC, 468',
                'bairro' => 'Área Rural de Rio Branco/ amapá',
                'cep' => '69.923-899',
                'created_at' => '2021-01-19 05:45:33',
                'updated_at' => '2021-01-19 05:45:33',
            ),
            132 => 
            array (
                'id' => 1133,
                'endereco' => 'Rua Salim Farhat, Rio Branco - AC, 318',
                'bairro' => 'Quinze',
                'cep' => '69.905-532',
                'created_at' => '2021-01-19 05:45:54',
                'updated_at' => '2021-01-19 05:45:54',
            ),
            133 => 
            array (
                'id' => 1134,
                'endereco' => 'Rua Pequena Jéssca, Rio Branco - AC, 338',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-873',
                'created_at' => '2021-01-19 05:47:57',
                'updated_at' => '2021-01-19 05:47:57',
            ),
            134 => 
            array (
                'id' => 1135,
                'endereco' => 'Rua Santa Terezinha, Rio Branco - AC, 537',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-666',
                'created_at' => '2021-01-19 05:48:42',
                'updated_at' => '2021-01-19 05:48:42',
            ),
            135 => 
            array (
                'id' => 1136,
                'endereco' => 'Travessa Vera Cruz, Rio Branco - AC, 197',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-040',
                'created_at' => '2021-01-19 05:49:08',
                'updated_at' => '2021-01-19 05:49:08',
            ),
            136 => 
            array (
                'id' => 1137,
                'endereco' => 'Travessa Boa Esperança, Rio Branco - AC, 136',
                'bairro' => 'Vila ACRE',
                'cep' => '69.909-798',
                'created_at' => '2021-01-19 05:52:46',
                'updated_at' => '2021-01-19 05:52:46',
            ),
            137 => 
            array (
                'id' => 1138,
                'endereco' => 'Rua Altamira 1, Rio Branco - AC, 53',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-370',
                'created_at' => '2021-01-19 05:53:12',
                'updated_at' => '2021-01-19 05:53:12',
            ),
            138 => 
            array (
                'id' => 1139,
                'endereco' => 'Avenida Presidente Médice, Rio Branco - AC, 1454',
                'bairro' => 'AREAL',
                'cep' => '69.906-037',
                'created_at' => '2021-01-19 05:55:02',
                'updated_at' => '2021-01-19 05:55:02',
            ),
            139 => 
            array (
                'id' => 1140,
                'endereco' => 'Rua S6, Rio Branco - AC, 19',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-682',
                'created_at' => '2021-01-19 05:58:08',
                'updated_at' => '2021-01-19 05:58:08',
            ),
            140 => 
            array (
                'id' => 1141,
                'endereco' => 'Rua Xapuri, Rio Branco - AC, 80',
                'bairro' => 'Comara',
                'cep' => '69.906-342',
                'created_at' => '2021-01-19 05:58:54',
                'updated_at' => '2021-01-19 05:58:54',
            ),
            141 => 
            array (
                'id' => 1142,
                'endereco' => 'Travessa Osvaldo, Rio Branco - AC, 119',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-666',
                'created_at' => '2021-01-19 06:00:34',
                'updated_at' => '2021-01-19 06:00:34',
            ),
            142 => 
            array (
                'id' => 1143,
                'endereco' => 'Travessa Vera Cruz, Rio Branco - AC, 197',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-040',
                'created_at' => '2021-01-19 06:01:38',
                'updated_at' => '2021-01-19 06:01:38',
            ),
            143 => 
            array (
                'id' => 1144,
                'endereco' => 'Travessa João da Mata, Rio Branco - AC, 200',
                'bairro' => 'Eldorado',
                'cep' => '69.902-461',
                'created_at' => '2021-01-19 06:01:48',
                'updated_at' => '2021-01-19 06:01:48',
            ),
            144 => 
            array (
                'id' => 1145,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 877',
                'bairro' => 'Baixada da Cadeia VelHA',
                'cep' => '69.905-274',
                'created_at' => '2021-01-19 06:01:53',
                'updated_at' => '2021-01-19 06:01:53',
            ),
            145 => 
            array (
                'id' => 1146,
                'endereco' => 'Rua Raimundo de Souza Barros, Rio Branco - AC, 451',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-308',
                'created_at' => '2021-01-19 06:04:12',
                'updated_at' => '2021-01-19 06:04:12',
            ),
            146 => 
            array (
                'id' => 1147,
                'endereco' => 'Travessa Osvaldo, Rio Branco - AC, 119',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-666',
                'created_at' => '2021-01-19 06:04:31',
                'updated_at' => '2021-01-19 06:04:31',
            ),
            147 => 
            array (
                'id' => 1148,
                'endereco' => 'Rua Mendes Sá, Rio Branco - AC, 965',
                'bairro' => 'Bahia Velha',
                'cep' => '69.911-564',
                'created_at' => '2021-01-19 06:04:44',
                'updated_at' => '2021-01-19 06:04:44',
            ),
            148 => 
            array (
                'id' => 1149,
                'endereco' => 'Área Rural, Rio Branco - AC, 1455',
                'bairro' => 'Área Rural de Rio BRANCo-ac',
                'cep' => '69.923-899',
                'created_at' => '2021-01-19 06:08:10',
                'updated_at' => '2021-01-19 06:08:10',
            ),
            149 => 
            array (
                'id' => 1150,
                'endereco' => 'Rua Raimundo de Souza Barros, Rio Branco - AC, 451',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-308',
                'created_at' => '2021-01-19 06:09:32',
                'updated_at' => '2021-01-19 06:09:32',
            ),
            150 => 
            array (
                'id' => 1151,
                'endereco' => 'Rua Francisco Neri, Rio Branco - AC, 344',
                'bairro' => 'Vila Ivonete',
                'cep' => '69.918-602',
                'created_at' => '2021-01-19 06:10:53',
                'updated_at' => '2021-01-19 06:10:53',
            ),
            151 => 
            array (
                'id' => 1152,
                'endereco' => 'Rua Princesa Isabel, Rio Branco - AC, 331',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-176',
                'created_at' => '2021-01-19 06:12:50',
                'updated_at' => '2021-01-19 06:12:50',
            ),
            152 => 
            array (
                'id' => 1153,
                'endereco' => 'Rua S2, Rio Branco - AC, 210',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-703',
                'created_at' => '2021-01-19 06:16:32',
                'updated_at' => '2021-01-19 06:16:32',
            ),
            153 => 
            array (
                'id' => 1154,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 254',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-19 06:25:07',
                'updated_at' => '2021-01-19 06:25:07',
            ),
            154 => 
            array (
                'id' => 1155,
                'endereco' => 'Rua Benjamin Constant, Rio Branco - AC, 600',
                'bairro' => 'Centro',
                'cep' => '69.900-064',
                'created_at' => '2021-01-19 06:29:42',
                'updated_at' => '2021-01-19 06:29:42',
            ),
            155 => 
            array (
                'id' => 1156,
                'endereco' => 'Rua Marte, Rio Branco - AC, 49',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-234',
                'created_at' => '2021-01-19 06:31:10',
                'updated_at' => '2021-01-19 06:31:10',
            ),
            156 => 
            array (
                'id' => 1157,
                'endereco' => 'Rua Santa Rosa, Rio Branco - AC, 33',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-302',
                'created_at' => '2021-01-19 06:31:12',
                'updated_at' => '2021-01-19 06:31:12',
            ),
            157 => 
            array (
                'id' => 1158,
                'endereco' => 'Rua Francisco Mangabeira, Rio Branco - AC, 265',
                'bairro' => 'Bosque',
                'cep' => '69.900-688',
                'created_at' => '2021-01-19 06:32:24',
                'updated_at' => '2021-01-19 06:32:24',
            ),
            158 => 
            array (
                'id' => 1159,
                'endereco' => 'Rua Benjamin Constant, Rio Branco - AC, 600',
                'bairro' => 'Centro',
                'cep' => '69.900-064',
                'created_at' => '2021-01-19 06:33:14',
                'updated_at' => '2021-01-19 06:33:14',
            ),
            159 => 
            array (
                'id' => 1160,
                'endereco' => 'Rua Fernando Sabino, Rio Branco - AC, 98',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-760',
                'created_at' => '2021-01-19 06:33:18',
                'updated_at' => '2021-01-19 06:33:18',
            ),
            160 => 
            array (
                'id' => 1161,
                'endereco' => 'Travessa Campos, Rio Branco - AC, 57',
                'bairro' => 'Areal',
                'cep' => '69.906-001',
                'created_at' => '2021-01-19 06:37:02',
                'updated_at' => '2021-01-19 06:37:02',
            ),
            161 => 
            array (
                'id' => 1162,
                'endereco' => 'Rua Coronel Alexandrino, Rio Branco - AC, 376',
                'bairro' => 'Bosque',
                'cep' => '69.900-658',
                'created_at' => '2021-01-19 06:38:03',
                'updated_at' => '2021-01-19 06:38:03',
            ),
            162 => 
            array (
                'id' => 1163,
                'endereco' => 'Rua Acre, Rio Branco - AC, 82',
                'bairro' => 'Vila da Amizade',
                'cep' => '69.909-669',
                'created_at' => '2021-01-19 06:38:25',
                'updated_at' => '2021-01-19 06:38:25',
            ),
            163 => 
            array (
                'id' => 1164,
                'endereco' => 'Rua Profeta, Rio Branco - AC, 89',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-662',
                'created_at' => '2021-01-19 06:38:29',
                'updated_at' => '2021-01-19 06:38:29',
            ),
            164 => 
            array (
                'id' => 1165,
                'endereco' => 'Travessa Campos, Rio Branco - AC, 57',
                'bairro' => 'Areal',
                'cep' => '69.906-001',
                'created_at' => '2021-01-19 06:42:09',
                'updated_at' => '2021-01-19 06:42:09',
            ),
            165 => 
            array (
                'id' => 1166,
                'endereco' => 'Travessa São Sebastião, Rio Branco - AC, 38',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-370',
                'created_at' => '2021-01-19 06:43:06',
                'updated_at' => '2021-01-19 06:43:06',
            ),
            166 => 
            array (
                'id' => 1167,
                'endereco' => 'Estrada da Invernada, Rio Branco - AC, 851',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-097',
                'created_at' => '2021-01-19 06:44:24',
                'updated_at' => '2021-01-19 06:44:24',
            ),
            167 => 
            array (
                'id' => 1168,
                'endereco' => 'Rua Profeta, Rio Branco - AC, 89',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-662',
                'created_at' => '2021-01-19 06:46:21',
                'updated_at' => '2021-01-19 06:46:21',
            ),
            168 => 
            array (
                'id' => 1169,
                'endereco' => 'Rua Paraná, Rio Branco - AC, 141',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-794',
                'created_at' => '2021-01-19 06:48:15',
                'updated_at' => '2021-01-19 06:48:15',
            ),
            169 => 
            array (
                'id' => 1170,
                'endereco' => 'Alameda Lisboa, Rio Branco - AC, 51',
                'bairro' => 'Jardim Europa',
                'cep' => '69.915-440',
                'created_at' => '2021-01-19 06:56:26',
                'updated_at' => '2021-01-19 06:56:26',
            ),
            170 => 
            array (
                'id' => 1171,
                'endereco' => 'Rua 26 de Junho, Rio Branco - AC, 594',
                'bairro' => 'SOBRAL',
                'cep' => '69.912-002',
                'created_at' => '2021-01-19 06:59:09',
                'updated_at' => '2021-01-19 06:59:09',
            ),
            171 => 
            array (
                'id' => 1172,
                'endereco' => 'Rua Fé de Deus, Rio Branco - AC, 49',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-223',
                'created_at' => '2021-01-19 07:01:27',
                'updated_at' => '2021-01-19 07:01:27',
            ),
            172 => 
            array (
                'id' => 1173,
                'endereco' => 'Rua 16 de Julho, Rio Branco - AC, 105',
                'bairro' => 'Boa União',
                'cep' => '69.911-780',
                'created_at' => '2021-01-19 07:10:54',
                'updated_at' => '2021-01-19 07:10:54',
            ),
            173 => 
            array (
                'id' => 1174,
                'endereco' => 'Rua Lúcio Batista, Rio Branco - AC, 53',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-042',
                'created_at' => '2021-01-19 07:11:34',
                'updated_at' => '2021-01-19 07:11:34',
            ),
            174 => 
            array (
                'id' => 1175,
                'endereco' => 'Rua da Paz, Rio Branco - AC, 199',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-704',
                'created_at' => '2021-01-19 07:14:01',
                'updated_at' => '2021-01-19 07:14:01',
            ),
            175 => 
            array (
                'id' => 1176,
                'endereco' => 'Rua da Paz, Rio Branco - AC, 199',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-704',
                'created_at' => '2021-01-19 07:20:06',
                'updated_at' => '2021-01-19 07:20:06',
            ),
            176 => 
            array (
                'id' => 1177,
                'endereco' => 'Rua Lourenço Lopes, Rio Branco - AC, 135',
                'bairro' => 'Eldorado',
                'cep' => '69.902-530',
                'created_at' => '2021-01-19 07:20:35',
                'updated_at' => '2021-01-19 07:20:35',
            ),
            177 => 
            array (
                'id' => 1178,
                'endereco' => 'Rua Paralela 2, Rio Branco - AC, 236',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-738',
                'created_at' => '2021-01-19 07:26:10',
                'updated_at' => '2021-01-19 07:26:10',
            ),
            178 => 
            array (
                'id' => 1179,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 1012',
                'bairro' => 'Aeroporto VELHO',
                'cep' => '69.911-114',
                'created_at' => '2021-01-19 07:28:01',
                'updated_at' => '2021-01-19 07:28:01',
            ),
            179 => 
            array (
                'id' => 1180,
                'endereco' => 'Rua Capitão Cirilo, Rio Branco - AC, 155',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-049',
                'created_at' => '2021-01-19 07:31:55',
                'updated_at' => '2021-01-19 07:31:55',
            ),
            180 => 
            array (
                'id' => 1181,
                'endereco' => 'Rua Elzo Rodrigues, Rio Branco - AC, 201',
                'bairro' => 'Eldorado',
                'cep' => '69.902-440',
                'created_at' => '2021-01-19 07:32:03',
                'updated_at' => '2021-01-19 07:32:03',
            ),
            181 => 
            array (
                'id' => 1182,
                'endereco' => 'Beco do Açaí, Rio Branco - AC, 76',
                'bairro' => 'Mocinha MAGALHÃESo',
                'cep' => '69.920-040',
                'created_at' => '2021-01-19 07:32:28',
                'updated_at' => '2021-01-19 07:32:28',
            ),
            182 => 
            array (
                'id' => 1183,
                'endereco' => 'Rua Elzo Rodrigues, Rio Branco - AC, 201',
                'bairro' => 'Eldorado',
                'cep' => '69.902-440',
                'created_at' => '2021-01-19 07:36:38',
                'updated_at' => '2021-01-19 07:36:38',
            ),
            183 => 
            array (
                'id' => 1184,
                'endereco' => 'Rua do Bola Preta, Rio Branco - AC, 222',
                'bairro' => 'Conjunto Castelo Branco',
                'cep' => '69.911-223',
                'created_at' => '2021-01-19 07:37:02',
                'updated_at' => '2021-01-19 07:37:02',
            ),
            184 => 
            array (
                'id' => 1185,
                'endereco' => 'Rua Álvaro Inácio, Rio Branco - AC, 515',
                'bairro' => 'Conjunto ESPERANÇA',
                'cep' => '69.915-118',
                'created_at' => '2021-01-19 07:37:47',
                'updated_at' => '2021-01-19 07:37:47',
            ),
            185 => 
            array (
                'id' => 1186,
                'endereco' => 'Rua Marechal Rondon, Rio Branco - AC, 75',
                'bairro' => 'Papouco',
                'cep' => '69.900-104',
                'created_at' => '2021-01-19 07:38:27',
                'updated_at' => '2021-01-19 07:38:27',
            ),
            186 => 
            array (
                'id' => 1187,
                'endereco' => 'Travessa Santa Madalena, Rio Branco - AC, 204',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-512',
                'created_at' => '2021-01-19 07:38:29',
                'updated_at' => '2021-01-19 07:38:29',
            ),
            187 => 
            array (
                'id' => 1188,
                'endereco' => 'Avenida Tucunaré, Rio Branco - AC, 411',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-676',
                'created_at' => '2021-01-19 07:46:42',
                'updated_at' => '2021-01-19 07:46:42',
            ),
            188 => 
            array (
                'id' => 1189,
                'endereco' => 'Rua Maceió, Rio Branco - AC, 66',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-288',
                'created_at' => '2021-01-19 07:46:50',
                'updated_at' => '2021-01-19 07:46:50',
            ),
            189 => 
            array (
                'id' => 1190,
                'endereco' => 'Travessa Recreio, Rio Branco - AC, 66',
                'bairro' => 'Santa Inêss',
                'cep' => '69.907-722',
                'created_at' => '2021-01-19 07:48:11',
                'updated_at' => '2021-01-19 07:48:11',
            ),
            190 => 
            array (
                'id' => 1191,
                'endereco' => 'Rua Santa Rosa, Rio Branco - AC, 40',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-302',
                'created_at' => '2021-01-19 07:48:59',
                'updated_at' => '2021-01-19 07:48:59',
            ),
            191 => 
            array (
                'id' => 1192,
                'endereco' => 'Rua Marechal Rondon, Rio Branco - AC, 76',
                'bairro' => 'Papouco',
                'cep' => '69.900-104',
                'created_at' => '2021-01-19 07:50:21',
                'updated_at' => '2021-01-19 07:50:21',
            ),
            192 => 
            array (
                'id' => 1193,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 1528',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-19 07:53:51',
                'updated_at' => '2021-01-19 07:53:51',
            ),
            193 => 
            array (
                'id' => 1194,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 594',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-274',
                'created_at' => '2021-01-19 07:58:52',
                'updated_at' => '2021-01-19 07:58:52',
            ),
            194 => 
            array (
                'id' => 1195,
                'endereco' => 'Rua Marechal Rondon, Rio Branco - AC, 76',
                'bairro' => 'Papouco',
                'cep' => '69.900-104',
                'created_at' => '2021-01-19 08:00:16',
                'updated_at' => '2021-01-19 08:00:16',
            ),
            195 => 
            array (
                'id' => 1196,
                'endereco' => 'Rua Diamantina, Rio Branco - AC, 236',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-424',
                'created_at' => '2021-01-19 08:03:43',
                'updated_at' => '2021-01-19 08:03:43',
            ),
            196 => 
            array (
                'id' => 1197,
                'endereco' => 'Avenida Eugênio Beco Bezerra, Rio Branco - AC, 219',
                'bairro' => 'São Francisco',
                'cep' => '69.901-519',
                'created_at' => '2021-01-19 08:03:58',
                'updated_at' => '2021-01-19 08:03:58',
            ),
            197 => 
            array (
                'id' => 1198,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 242',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-19 08:05:20',
                'updated_at' => '2021-01-19 08:05:20',
            ),
            198 => 
            array (
                'id' => 1199,
                'endereco' => 'Rua Marechal Rondon, Rio Branco - AC, ',
                'bairro' => 'Papouco',
                'cep' => '69.900-104',
                'created_at' => '2021-01-19 08:07:09',
                'updated_at' => '2021-01-19 08:07:09',
            ),
            199 => 
            array (
                'id' => 1200,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 84',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-422',
                'created_at' => '2021-01-19 08:08:42',
                'updated_at' => '2021-01-19 08:08:42',
            ),
            200 => 
            array (
                'id' => 1201,
                'endereco' => 'Rua Pau-d\'arco, Rio Branco - AC, 81',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-856',
                'created_at' => '2021-01-19 08:08:51',
                'updated_at' => '2021-01-19 08:08:51',
            ),
            201 => 
            array (
                'id' => 1202,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:09:46',
                'updated_at' => '2021-01-19 08:09:46',
            ),
            202 => 
            array (
                'id' => 1203,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:10:46',
                'updated_at' => '2021-01-19 08:10:46',
            ),
            203 => 
            array (
                'id' => 1204,
                'endereco' => 'Estrada das Placas, Rio Branco - AC, 1107',
                'bairro' => 'Placas',
                'cep' => '69.902-770',
                'created_at' => '2021-01-19 08:11:35',
                'updated_at' => '2021-01-19 08:11:35',
            ),
            204 => 
            array (
                'id' => 1205,
                'endereco' => 'Avenida Uirapuru, Rio Branco - AC, 256',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-462',
                'created_at' => '2021-01-19 08:11:43',
                'updated_at' => '2021-01-19 08:11:43',
            ),
            205 => 
            array (
                'id' => 1206,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:11:44',
                'updated_at' => '2021-01-19 08:11:44',
            ),
            206 => 
            array (
                'id' => 1207,
                'endereco' => 'Avenida Nações Unidas, Rio Branco - AC, 520',
                'bairro' => 'Bosque',
                'cep' => '69.900-715',
                'created_at' => '2021-01-19 08:12:05',
                'updated_at' => '2021-01-19 08:12:05',
            ),
            207 => 
            array (
                'id' => 1208,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:12:37',
                'updated_at' => '2021-01-19 08:12:37',
            ),
            208 => 
            array (
                'id' => 1209,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:12:52',
                'updated_at' => '2021-01-19 08:12:52',
            ),
            209 => 
            array (
                'id' => 1210,
                'endereco' => 'Ramal da Zezé, Rio Branco - AC, 92',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-022',
                'created_at' => '2021-01-19 08:14:34',
                'updated_at' => '2021-01-19 08:14:34',
            ),
            210 => 
            array (
                'id' => 1211,
                'endereco' => 'Rua Latorre, Rio Branco - AC, 342',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-212',
                'created_at' => '2021-01-19 08:14:56',
                'updated_at' => '2021-01-19 08:14:56',
            ),
            211 => 
            array (
                'id' => 1212,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 513',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-19 08:15:10',
                'updated_at' => '2021-01-19 08:15:10',
            ),
            212 => 
            array (
                'id' => 1213,
                'endereco' => 'Rua Santa Rosa, Rio Branco - AC, 40',
                'bairro' => 'Vila Betel 1',
                'cep' => '69.915-302',
                'created_at' => '2021-01-19 08:15:20',
                'updated_at' => '2021-01-19 08:15:20',
            ),
            213 => 
            array (
                'id' => 1214,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:16:56',
                'updated_at' => '2021-01-19 08:16:56',
            ),
            214 => 
            array (
                'id' => 1215,
                'endereco' => 'Ramal Menino Jesus, Rio Branco - AC, 948',
                'bairro' => 'Taquarí',
                'cep' => '69.906-472',
                'created_at' => '2021-01-19 08:17:06',
                'updated_at' => '2021-01-19 08:17:06',
            ),
            215 => 
            array (
                'id' => 1216,
                'endereco' => 'Rua Sapolandia, 36',
                'bairro' => 'Conquista',
                'cep' => '69.918-836',
                'created_at' => '2021-01-19 08:17:27',
                'updated_at' => '2021-01-19 08:17:27',
            ),
            216 => 
            array (
                'id' => 1217,
                'endereco' => 'Rua Doutor Sérgio Bruno, Rio Branco - AC, 407',
                'bairro' => 'Portal da Amazônia - Jequitibá',
                'cep' => '69.915-781',
                'created_at' => '2021-01-19 08:17:52',
                'updated_at' => '2021-01-19 08:17:52',
            ),
            217 => 
            array (
                'id' => 1218,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:18:09',
                'updated_at' => '2021-01-19 08:18:09',
            ),
            218 => 
            array (
                'id' => 1219,
                'endereco' => 'Ramal da Zezé, Rio Branco - AC, 92',
                'bairro' => 'Belo Jardim II',
                'cep' => '69.908-022',
                'created_at' => '2021-01-19 08:18:58',
                'updated_at' => '2021-01-19 08:18:58',
            ),
            219 => 
            array (
                'id' => 1220,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 513',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-19 08:19:21',
                'updated_at' => '2021-01-19 08:19:21',
            ),
            220 => 
            array (
                'id' => 1221,
                'endereco' => 'Ramal da Judia, Rio Branco - AC, 1280',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-860',
                'created_at' => '2021-01-19 08:22:07',
                'updated_at' => '2021-01-19 08:22:07',
            ),
            221 => 
            array (
                'id' => 1222,
                'endereco' => 'Rua Copacabana, Rio Branco - AC, 354',
                'bairro' => 'Vila Acre',
                'cep' => '69909-844',
                'created_at' => '2021-01-19 08:22:45',
                'updated_at' => '2021-01-19 08:22:45',
            ),
            222 => 
            array (
                'id' => 1223,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 513',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-19 08:22:56',
                'updated_at' => '2021-01-19 08:22:56',
            ),
            223 => 
            array (
                'id' => 1224,
                'endereco' => 'Rua Coronel Leão, Rio Branco - AC, 21',
                'bairro' => 'Cidade do POVo',
                'cep' => '69.909-218',
                'created_at' => '2021-01-19 08:23:38',
                'updated_at' => '2021-01-19 08:23:38',
            ),
            224 => 
            array (
                'id' => 1225,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 513',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-19 08:26:17',
                'updated_at' => '2021-01-19 08:26:17',
            ),
            225 => 
            array (
                'id' => 1226,
                'endereco' => 'Rua Ciro Facundo de Almeida, Rio Branco - AC, 135',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-838',
                'created_at' => '2021-01-19 08:28:31',
                'updated_at' => '2021-01-19 08:28:31',
            ),
            226 => 
            array (
                'id' => 1227,
                'endereco' => 'Rua Marechal Rondon, Rio Branco - AC, 36',
                'bairro' => 'Papouco',
                'cep' => '69.900-104',
                'created_at' => '2021-01-19 08:28:40',
                'updated_at' => '2021-01-19 08:28:40',
            ),
            227 => 
            array (
                'id' => 1228,
                'endereco' => 'Rua Roque Garcia, Rio Branco - AC, 218',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-836',
                'created_at' => '2021-01-19 08:29:41',
                'updated_at' => '2021-01-19 08:29:41',
            ),
            228 => 
            array (
                'id' => 1229,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 155',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-19 08:30:36',
                'updated_at' => '2021-01-19 08:30:36',
            ),
            229 => 
            array (
                'id' => 1230,
                'endereco' => 'Rua Avelã, Rio Branco - AC, 120',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-730',
                'created_at' => '2021-01-19 08:32:28',
                'updated_at' => '2021-01-19 08:32:28',
            ),
            230 => 
            array (
                'id' => 1231,
                'endereco' => 'Rua Ciro Facundo de Almeida, Rio Branco - AC, 135',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-838',
                'created_at' => '2021-01-19 08:32:31',
                'updated_at' => '2021-01-19 08:32:31',
            ),
            231 => 
            array (
                'id' => 1232,
                'endereco' => 'Avenida Juscelino Kubitschek, Rio Branco - AC, 549',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-030',
                'created_at' => '2021-01-19 08:34:48',
                'updated_at' => '2021-01-19 08:34:48',
            ),
            232 => 
            array (
                'id' => 1233,
                'endereco' => 'Rua Sonho Meu, Rio Branco - AC, 32',
                'bairro' => 'Alto ALEGRE',
                'cep' => '69.921-307',
                'created_at' => '2021-01-19 08:35:07',
                'updated_at' => '2021-01-19 08:35:07',
            ),
            233 => 
            array (
                'id' => 1234,
                'endereco' => 'Rua da caida dagua, 209',
                'bairro' => 'João eduardo 1',
                'cep' => '69.911-420',
                'created_at' => '2021-01-19 08:35:39',
                'updated_at' => '2021-01-19 08:35:39',
            ),
            234 => 
            array (
                'id' => 1235,
                'endereco' => 'Travessa São José, Rio Branco - AC, 234',
                'bairro' => 'Pista',
                'cep' => '69.911-188',
                'created_at' => '2021-01-19 08:37:58',
                'updated_at' => '2021-01-19 08:37:58',
            ),
            235 => 
            array (
                'id' => 1236,
                'endereco' => '..., 152',
                'bairro' => 'Rui lino 2',
                'cep' => '69.917-405',
                'created_at' => '2021-01-19 08:38:29',
                'updated_at' => '2021-01-19 08:38:29',
            ),
            236 => 
            array (
                'id' => 1237,
                'endereco' => 'Rua Independência, Rio Branco - AC, 119',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-355',
                'created_at' => '2021-01-19 08:40:50',
                'updated_at' => '2021-01-19 08:40:50',
            ),
            237 => 
            array (
                'id' => 1238,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 432',
                'bairro' => 'Seis de AGOSTOseus de agosto',
                'cep' => '69.905-632',
                'created_at' => '2021-01-19 08:44:07',
                'updated_at' => '2021-01-19 08:44:07',
            ),
            238 => 
            array (
                'id' => 1239,
                'endereco' => 'Rua Estado do Acre, Rio Branco - AC, 293',
                'bairro' => 'Base',
                'cep' => '69.900-010',
                'created_at' => '2021-01-19 08:44:44',
                'updated_at' => '2021-01-19 08:44:44',
            ),
            239 => 
            array (
                'id' => 1240,
                'endereco' => 'Rua Benzinho, Rio Branco - AC, 131',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-228',
                'created_at' => '2021-01-19 08:49:54',
                'updated_at' => '2021-01-19 08:49:54',
            ),
            240 => 
            array (
                'id' => 1241,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 320',
                'bairro' => 'Placas',
                'cep' => '69.902-768',
                'created_at' => '2021-01-19 08:51:14',
                'updated_at' => '2021-01-19 08:51:14',
            ),
            241 => 
            array (
                'id' => 1242,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 2530',
                'bairro' => 'Ayrton Senna',
                'cep' => '69.911-800',
                'created_at' => '2021-01-19 08:52:58',
                'updated_at' => '2021-01-19 08:52:58',
            ),
            242 => 
            array (
                'id' => 1243,
                'endereco' => 'Rua Tatu, Rio Branco - AC, 296',
                'bairro' => 'Ilson Ribeiro',
                'cep' => '69.914-571',
                'created_at' => '2021-01-19 08:53:03',
                'updated_at' => '2021-01-19 08:53:03',
            ),
            243 => 
            array (
                'id' => 1244,
                'endereco' => 'Rua Virola, Rio Branco - AC, 280',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-872',
                'created_at' => '2021-01-19 08:54:31',
                'updated_at' => '2021-01-19 08:54:31',
            ),
            244 => 
            array (
                'id' => 1245,
                'endereco' => 'Rua Palmeiral, Rio Branco - AC, 286',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-408',
                'created_at' => '2021-01-19 09:01:41',
                'updated_at' => '2021-01-19 09:01:41',
            ),
            245 => 
            array (
                'id' => 1246,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 2530',
                'bairro' => 'Ayrton Senna',
                'cep' => '69.911-800',
                'created_at' => '2021-01-19 09:02:17',
                'updated_at' => '2021-01-19 09:02:17',
            ),
            246 => 
            array (
                'id' => 1247,
                'endereco' => ', Senador Guiomard - AC, 1105',
                'bairro' => 'Naire leite',
                'cep' => '69.925-000',
                'created_at' => '2021-01-19 09:04:36',
                'updated_at' => '2021-01-19 09:04:36',
            ),
            247 => 
            array (
                'id' => 1248,
                'endereco' => 'Travessa Manoel Batista, Rio Branco - AC, 13',
                'bairro' => 'Areal',
                'cep' => '69.906-057',
                'created_at' => '2021-01-19 09:06:22',
                'updated_at' => '2021-01-19 09:06:22',
            ),
            248 => 
            array (
                'id' => 1249,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1663',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-443',
                'created_at' => '2021-01-19 09:09:31',
                'updated_at' => '2021-01-19 09:09:31',
            ),
            249 => 
            array (
                'id' => 1250,
                'endereco' => 'Rua Boa Vista, Rio Branco - AC, 803',
                'bairro' => 'Vitória',
                'cep' => '69.901-773',
                'created_at' => '2021-01-19 09:09:48',
                'updated_at' => '2021-01-19 09:09:48',
            ),
            250 => 
            array (
                'id' => 1251,
                'endereco' => 'Rua Belém, Rio Branco - AC, 1048',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-402',
                'created_at' => '2021-01-19 09:10:54',
                'updated_at' => '2021-01-19 09:10:54',
            ),
            251 => 
            array (
                'id' => 1252,
                'endereco' => '..., 159',
                'bairro' => '...',
                'cep' => '69.907-713',
                'created_at' => '2021-01-19 09:12:32',
                'updated_at' => '2021-01-19 09:12:32',
            ),
            252 => 
            array (
                'id' => 1253,
                'endereco' => 'Rua mastafa ezaco. Rio Branco, acre., 492',
                'bairro' => 'Canaaa',
                'cep' => '69.909-710',
                'created_at' => '2021-01-19 09:13:34',
                'updated_at' => '2021-01-19 09:13:34',
            ),
            253 => 
            array (
                'id' => 1254,
                'endereco' => 'Rua do Eucalipto, Rio Branco - AC, 271',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-283',
                'created_at' => '2021-01-19 09:14:18',
                'updated_at' => '2021-01-19 09:14:18',
            ),
            254 => 
            array (
                'id' => 1255,
                'endereco' => 'Rua Primavera, Rio Branco - AC, 35',
                'bairro' => 'Aviário',
                'cep' => '69.900-875',
                'created_at' => '2021-01-19 09:16:38',
                'updated_at' => '2021-01-19 09:16:38',
            ),
            255 => 
            array (
                'id' => 1256,
                'endereco' => '..., 30',
                'bairro' => '...',
                'cep' => '69.908-742',
                'created_at' => '2021-01-19 09:17:24',
                'updated_at' => '2021-01-19 09:17:24',
            ),
            256 => 
            array (
                'id' => 1257,
                'endereco' => 'Rua Zélia Gattai, Rio Branco - AC, 110',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-752',
                'created_at' => '2021-01-19 09:17:53',
                'updated_at' => '2021-01-19 09:17:53',
            ),
            257 => 
            array (
                'id' => 1258,
                'endereco' => 'Rua Itaipú, Rio Branco - AC, 187',
                'bairro' => 'Palheiral',
                'cep' => '69.911-206',
                'created_at' => '2021-01-19 09:19:03',
                'updated_at' => '2021-01-19 09:19:03',
            ),
            258 => 
            array (
                'id' => 1259,
                'endereco' => 'Rua 15 de Dezembro, Rio Branco - AC, 571',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-226',
                'created_at' => '2021-01-19 09:19:08',
                'updated_at' => '2021-01-19 09:19:08',
            ),
            259 => 
            array (
                'id' => 1260,
                'endereco' => 'Rua Raquel de Queiroz, Rio Branco - AC, 10',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-170',
                'created_at' => '2021-01-19 09:19:34',
                'updated_at' => '2021-01-19 09:19:34',
            ),
            260 => 
            array (
                'id' => 1261,
                'endereco' => 'Rua Mauri Sérgio, Rio Branco - AC, 08',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-162',
                'created_at' => '2021-01-19 09:21:32',
                'updated_at' => '2021-01-19 09:21:32',
            ),
            261 => 
            array (
                'id' => 1262,
                'endereco' => 'Travessa Zona Ampliada, Rio Branco - AC, 49',
                'bairro' => 'Capoeira',
                'cep' => '69.905-002',
                'created_at' => '2021-01-19 09:25:24',
                'updated_at' => '2021-01-19 09:25:24',
            ),
            262 => 
            array (
                'id' => 1263,
                'endereco' => 'Rua Hugo Carneiro, Rio Branco - AC, 590',
                'bairro' => 'BOSQUe',
                'cep' => '69.900-550',
                'created_at' => '2021-01-19 09:26:38',
                'updated_at' => '2021-01-19 09:26:38',
            ),
            263 => 
            array (
                'id' => 1264,
                'endereco' => 'Rua Benzinho, Rio Branco - AC, 91',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-228',
                'created_at' => '2021-01-19 09:26:47',
                'updated_at' => '2021-01-19 09:26:47',
            ),
            264 => 
            array (
                'id' => 1265,
                'endereco' => 'Rua Manoel Cesário, Rio Branco - AC, 31',
                'bairro' => 'Capoeira',
                'cep' => '69.905-006',
                'created_at' => '2021-01-19 09:29:08',
                'updated_at' => '2021-01-19 09:29:08',
            ),
            265 => 
            array (
                'id' => 1266,
                'endereco' => 'Rua da Abelha, Rio Branco - AC, 704',
                'bairro' => 'Conquista',
                'cep' => '69.918-754',
                'created_at' => '2021-01-19 09:31:04',
                'updated_at' => '2021-01-19 09:31:04',
            ),
            266 => 
            array (
                'id' => 1267,
                'endereco' => 'Rua Santa Luzia, Rio Branco - AC, 450',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-498',
                'created_at' => '2021-01-19 09:31:51',
                'updated_at' => '2021-01-19 09:31:51',
            ),
            267 => 
            array (
                'id' => 1268,
                'endereco' => '... travessa da amizade, 19',
                'bairro' => 'Canaã',
                'cep' => '69.900-000',
                'created_at' => '2021-01-19 09:33:10',
                'updated_at' => '2021-01-19 09:33:10',
            ),
            268 => 
            array (
                'id' => 1269,
                'endereco' => 'Travessa Internacional, Rio Branco - AC, 137',
                'bairro' => 'Comara',
                'cep' => '69.906-328',
                'created_at' => '2021-01-19 09:33:34',
                'updated_at' => '2021-01-19 09:33:34',
            ),
            269 => 
            array (
                'id' => 1270,
                'endereco' => 'Rua José Machado, Rio Branco - AC, 102',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-332',
                'created_at' => '2021-01-19 09:34:39',
                'updated_at' => '2021-01-19 09:34:39',
            ),
            270 => 
            array (
                'id' => 1271,
                'endereco' => 'Rua José Machado, Rio Branco - AC, 102',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-332',
                'created_at' => '2021-01-19 09:38:34',
                'updated_at' => '2021-01-19 09:38:34',
            ),
            271 => 
            array (
                'id' => 1272,
                'endereco' => 'Rua República, Rio Branco - AC, 18',
                'bairro' => 'Estação EXPERIMENTALe',
                'cep' => '69.918-208',
                'created_at' => '2021-01-19 09:39:06',
                'updated_at' => '2021-01-19 09:39:06',
            ),
            272 => 
            array (
                'id' => 1273,
                'endereco' => 'apolônio sales, 39',
                'bairro' => 'travessa galego',
                'cep' => '69.900-000',
                'created_at' => '2021-01-19 09:39:15',
                'updated_at' => '2021-01-19 09:39:15',
            ),
            273 => 
            array (
                'id' => 1274,
                'endereco' => 'Rua 15 de Julho, Rio Branco - AC, 956',
                'bairro' => 'Sobral',
                'cep' => '69.912-020',
                'created_at' => '2021-01-19 09:39:40',
                'updated_at' => '2021-01-19 09:39:40',
            ),
            274 => 
            array (
                'id' => 1275,
                'endereco' => 'Travessa Fernando Sabino, Rio Branco - AC, 126',
                'bairro' => 'Vila ACRE ramal bom Jesus',
                'cep' => '69.909-760',
                'created_at' => '2021-01-19 09:40:01',
                'updated_at' => '2021-01-19 09:40:01',
            ),
            275 => 
            array (
                'id' => 1276,
                'endereco' => 'Rua América, Rio Branco - AC, 32',
                'bairro' => 'Jardim América',
                'cep' => '69.918-552',
                'created_at' => '2021-01-19 09:41:30',
                'updated_at' => '2021-01-19 09:41:30',
            ),
            276 => 
            array (
                'id' => 1277,
                'endereco' => 'Rua Padre Cícero, Rio Branco - AC, 366',
                'bairro' => 'Conquista',
                'cep' => '69.919-260',
                'created_at' => '2021-01-19 09:45:25',
                'updated_at' => '2021-01-19 09:45:25',
            ),
            277 => 
            array (
                'id' => 1278,
                'endereco' => 'Travessa 7 de Setembro, Rio Branco - AC, 177',
                'bairro' => 'Areal',
                'cep' => '69.906-033',
                'created_at' => '2021-01-19 09:49:22',
                'updated_at' => '2021-01-19 09:49:22',
            ),
            278 => 
            array (
                'id' => 1279,
                'endereco' => 'Rua 5 de Junho, Rio Branco - AC, 255',
                'bairro' => 'SOBRAL',
                'cep' => '69.912-010',
                'created_at' => '2021-01-19 09:54:05',
                'updated_at' => '2021-01-19 09:54:05',
            ),
            279 => 
            array (
                'id' => 1280,
                'endereco' => 'Rua Fonte Nova, Rio Branco - AC, 392',
                'bairro' => 'Conquista',
                'cep' => '69.918-822',
                'created_at' => '2021-01-19 09:54:05',
                'updated_at' => '2021-01-19 09:54:05',
            ),
            280 => 
            array (
                'id' => 1281,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 710',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-684',
                'created_at' => '2021-01-19 09:56:05',
                'updated_at' => '2021-01-19 09:56:05',
            ),
            281 => 
            array (
                'id' => 1282,
                'endereco' => 'Rua Cumarú, Rio Branco - AC, ',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-876',
                'created_at' => '2021-01-19 09:56:56',
                'updated_at' => '2021-01-19 09:56:56',
            ),
            282 => 
            array (
                'id' => 1283,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 28',
                'bairro' => 'Alto ALEGRE',
                'cep' => '69.921-230',
                'created_at' => '2021-01-19 10:00:46',
                'updated_at' => '2021-01-19 10:00:46',
            ),
            283 => 
            array (
                'id' => 1284,
                'endereco' => 'Travessa buriti, 201',
                'bairro' => 'Belo Jardim 1',
                'cep' => '69.909-710',
                'created_at' => '2021-01-19 10:14:22',
                'updated_at' => '2021-01-19 10:14:22',
            ),
            284 => 
            array (
                'id' => 1285,
                'endereco' => 'Rua Adalberto Sena, Rio Branco - AC, 124',
                'bairro' => 'Sobral',
                'cep' => '69.912-028',
                'created_at' => '2021-01-19 10:26:37',
                'updated_at' => '2021-01-19 10:26:37',
            ),
            285 => 
            array (
                'id' => 1286,
                'endereco' => 'Travessa Fialho, Rio Branco - AC, 244',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-512',
                'created_at' => '2021-01-19 10:34:04',
                'updated_at' => '2021-01-19 10:34:04',
            ),
            286 => 
            array (
                'id' => 1287,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 113',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-422',
                'created_at' => '2021-01-19 10:39:52',
                'updated_at' => '2021-01-19 10:39:52',
            ),
            287 => 
            array (
                'id' => 1288,
                'endereco' => 'Rua Isaura Parente, Rio Branco - AC, 157',
                'bairro' => 'Bosque',
                'cep' => '69.900-490',
                'created_at' => '2021-01-19 10:44:15',
                'updated_at' => '2021-01-19 10:44:15',
            ),
            288 => 
            array (
                'id' => 1289,
                'endereco' => 'Travessa da Banana, Rio Branco - AC, 31',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-052',
                'created_at' => '2021-01-19 10:46:23',
                'updated_at' => '2021-01-19 10:46:23',
            ),
            289 => 
            array (
                'id' => 1290,
                'endereco' => 'Rua Independência, Rio Branco - AC, 584',
                'bairro' => 'Eldorado',
                'cep' => '69.902-494',
                'created_at' => '2021-01-19 10:48:04',
                'updated_at' => '2021-01-19 10:48:04',
            ),
            290 => 
            array (
                'id' => 1291,
                'endereco' => 'Travessa São Cristóvão, Rio Branco - AC, 5',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-021',
                'created_at' => '2021-01-19 10:49:20',
                'updated_at' => '2021-01-19 10:49:20',
            ),
            291 => 
            array (
                'id' => 1292,
                'endereco' => 'Travessa Fialho, Rio Branco - AC, 244',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-512',
                'created_at' => '2021-01-19 10:53:13',
                'updated_at' => '2021-01-19 10:53:13',
            ),
            292 => 
            array (
                'id' => 1293,
                'endereco' => 'Rua 1º de Agosto, Rio Branco - AC, 319',
                'bairro' => 'Placas',
                'cep' => '69.902-760',
                'created_at' => '2021-01-19 10:57:55',
                'updated_at' => '2021-01-19 10:57:55',
            ),
            293 => 
            array (
                'id' => 1294,
                'endereco' => 'Rua 1º de Agosto, Rio Branco - AC, 319',
                'bairro' => 'Placas',
                'cep' => '69.902-760',
                'created_at' => '2021-01-19 10:59:50',
                'updated_at' => '2021-01-19 10:59:50',
            ),
            294 => 
            array (
                'id' => 1295,
                'endereco' => 'Rua Poços de Caldas, Rio Branco - AC, 1016',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-440',
                'created_at' => '2021-01-19 11:02:47',
                'updated_at' => '2021-01-19 11:02:47',
            ),
            295 => 
            array (
                'id' => 1296,
                'endereco' => 'Rua 1º de Agosto, Rio Branco - AC, 203',
                'bairro' => 'Placas',
                'cep' => '69.902-760',
                'created_at' => '2021-01-19 11:07:39',
                'updated_at' => '2021-01-19 11:07:39',
            ),
            296 => 
            array (
                'id' => 1297,
                'endereco' => 'Travessa Fialho, Rio Branco - AC, 244',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-512',
                'created_at' => '2021-01-19 11:09:53',
                'updated_at' => '2021-01-19 11:09:53',
            ),
            297 => 
            array (
                'id' => 1298,
                'endereco' => 'Rua Uirapuru, Rio Branco - AC, 504',
                'bairro' => 'Ilson Ribeiro',
                'cep' => '69.914-556',
                'created_at' => '2021-01-19 11:12:55',
                'updated_at' => '2021-01-19 11:12:55',
            ),
            298 => 
            array (
                'id' => 1299,
                'endereco' => 'Rua Barbosa Lima, Rio Branco - AC, 500',
                'bairro' => 'Base',
                'cep' => '69.900-004',
                'created_at' => '2021-01-19 11:21:45',
                'updated_at' => '2021-01-19 11:21:45',
            ),
            299 => 
            array (
                'id' => 1300,
                'endereco' => 'Rua Maria José Domingos, Rio Branco - AC, 74',
                'bairro' => 'CALAFATE...',
                'cep' => '69.914-314',
                'created_at' => '2021-01-19 11:22:30',
                'updated_at' => '2021-01-19 11:22:30',
            ),
            300 => 
            array (
                'id' => 1301,
                'endereco' => 'Rua obcides Nunes RIO Branco - AC, 45',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-662',
                'created_at' => '2021-01-19 11:22:46',
                'updated_at' => '2021-01-19 11:22:46',
            ),
            301 => 
            array (
                'id' => 1302,
                'endereco' => 'Rua do Bola Preta, Rio Branco - AC, 222',
                'bairro' => 'Conjunto Castelo Branco',
                'cep' => '69.911-223',
                'created_at' => '2021-01-19 11:24:33',
                'updated_at' => '2021-01-19 11:24:33',
            ),
            302 => 
            array (
                'id' => 1303,
                'endereco' => 'Rua Tamarindo, Rio Branco - AC, 9',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-361',
                'created_at' => '2021-01-19 11:25:28',
                'updated_at' => '2021-01-19 11:25:28',
            ),
            303 => 
            array (
                'id' => 1304,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 55',
                'bairro' => 'Xavier Maia',
                'cep' => '69.903-030',
                'created_at' => '2021-01-19 11:26:16',
                'updated_at' => '2021-01-19 11:26:16',
            ),
            304 => 
            array (
                'id' => 1305,
                'endereco' => 'Rua Padre Cícero, Rio Branco - AC, 250',
                'bairro' => 'Conquista',
                'cep' => '69.918-760',
                'created_at' => '2021-01-19 11:26:24',
                'updated_at' => '2021-01-19 11:26:24',
            ),
            305 => 
            array (
                'id' => 1306,
                'endereco' => 'Rua Maria José Domingos, Rio Branco - AC, 74',
                'bairro' => 'CALAFATE',
                'cep' => '69.914-314',
                'created_at' => '2021-01-19 11:27:34',
                'updated_at' => '2021-01-19 11:27:34',
            ),
            306 => 
            array (
                'id' => 1307,
                'endereco' => 'Rua Pau Brasil, Rio Branco - AC, 10',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-464',
                'created_at' => '2021-01-19 11:29:55',
                'updated_at' => '2021-01-19 11:29:55',
            ),
            307 => 
            array (
                'id' => 1308,
                'endereco' => 'Rua Paulistana, Rio Branco - AC, 73',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-292',
                'created_at' => '2021-01-19 11:30:39',
                'updated_at' => '2021-01-19 11:30:39',
            ),
            308 => 
            array (
                'id' => 1309,
                'endereco' => 'Rua Bom Jesus, Rio Branco - AC, 169',
                'bairro' => 'Montanhês',
                'cep' => '69.921-452',
                'created_at' => '2021-01-19 11:30:48',
                'updated_at' => '2021-01-19 11:30:48',
            ),
            309 => 
            array (
                'id' => 1310,
                'endereco' => 'Rua H, Rio Branco - AC, 125',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-756',
                'created_at' => '2021-01-19 11:31:02',
                'updated_at' => '2021-01-19 11:31:02',
            ),
            310 => 
            array (
                'id' => 1311,
                'endereco' => 'Rua veterano Telmo pinto apto 302 bloco n1, 140',
                'bairro' => 'Estação experimental',
                'cep' => '69.918-412',
                'created_at' => '2021-01-19 11:33:01',
                'updated_at' => '2021-01-19 11:33:01',
            ),
            311 => 
            array (
                'id' => 1312,
                'endereco' => 'Rua Domingos Olímpio, Rio Branco - AC, 165',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-146',
                'created_at' => '2021-01-19 11:33:24',
                'updated_at' => '2021-01-19 11:33:24',
            ),
            312 => 
            array (
                'id' => 1313,
                'endereco' => 'Rua Jutaí, Rio Branco - AC, 103',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-488',
                'created_at' => '2021-01-19 11:34:59',
                'updated_at' => '2021-01-19 11:34:59',
            ),
            313 => 
            array (
                'id' => 1314,
                'endereco' => 'Rua Floresta, Rio Branco - AC, 570',
                'bairro' => 'Conquista',
                'cep' => '69.918-766',
                'created_at' => '2021-01-19 11:35:05',
                'updated_at' => '2021-01-19 11:35:05',
            ),
            314 => 
            array (
                'id' => 1315,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 922',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-274',
                'created_at' => '2021-01-19 11:35:10',
                'updated_at' => '2021-01-19 11:35:10',
            ),
            315 => 
            array (
                'id' => 1316,
                'endereco' => 'Rua Fonte Nova, Rio Branco - AC, 644',
                'bairro' => 'Conquista',
                'cep' => '69.918-818',
                'created_at' => '2021-01-19 11:37:53',
                'updated_at' => '2021-01-19 11:37:53',
            ),
            316 => 
            array (
                'id' => 1317,
                'endereco' => 'Rua Guajará, Rio Branco - AC, 121',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-426',
                'created_at' => '2021-01-19 11:39:50',
                'updated_at' => '2021-01-19 11:39:50',
            ),
            317 => 
            array (
                'id' => 1318,
                'endereco' => 'Rua Jutaí, Rio Branco - AC, 103',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-488',
                'created_at' => '2021-01-19 11:40:41',
                'updated_at' => '2021-01-19 11:40:41',
            ),
            318 => 
            array (
                'id' => 1319,
                'endereco' => 'Rua 1º de Agosto, Rio Branco - AC, 411',
                'bairro' => 'Placas',
                'cep' => '69.902-760',
                'created_at' => '2021-01-19 11:40:53',
                'updated_at' => '2021-01-19 11:40:53',
            ),
            319 => 
            array (
                'id' => 1320,
                'endereco' => 'Rua Independência, Rio Branco - AC, 20',
                'bairro' => 'Defesa Civil',
                'cep' => '69.921-851',
                'created_at' => '2021-01-19 11:42:53',
                'updated_at' => '2021-01-19 11:42:53',
            ),
            320 => 
            array (
                'id' => 1321,
                'endereco' => 'Rua Aderbal Brasil, Rio Branco - AC, 446',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-430',
                'created_at' => '2021-01-19 11:44:07',
                'updated_at' => '2021-01-19 11:44:07',
            ),
            321 => 
            array (
                'id' => 1322,
                'endereco' => 'Rua Glória, Rio Branco - AC, 77',
                'bairro' => 'Glória',
                'cep' => '69.911-138',
                'created_at' => '2021-01-19 11:44:21',
                'updated_at' => '2021-01-19 11:44:21',
            ),
            322 => 
            array (
                'id' => 1323,
                'endereco' => 'Rua Bom Jesus, Rio Branco - AC, 169',
                'bairro' => 'Montanhês',
                'cep' => '69.921-452',
                'created_at' => '2021-01-19 11:46:19',
                'updated_at' => '2021-01-19 11:46:19',
            ),
            323 => 
            array (
                'id' => 1324,
                'endereco' => 'Rua Independência, Rio Branco - AC, 20',
                'bairro' => 'Defesa civil',
                'cep' => '69.921-851',
                'created_at' => '2021-01-19 11:48:40',
                'updated_at' => '2021-01-19 11:48:40',
            ),
            324 => 
            array (
                'id' => 1325,
                'endereco' => 'Travessa Paulista, Rio Branco - AC, 37',
                'bairro' => 'Eldorado',
                'cep' => '69.902-512',
                'created_at' => '2021-01-19 11:50:06',
                'updated_at' => '2021-01-19 11:50:06',
            ),
            325 => 
            array (
                'id' => 1326,
                'endereco' => 'Travessa Vera Cruz, Rio Branco - AC, 152',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-040',
                'created_at' => '2021-01-19 11:51:53',
                'updated_at' => '2021-01-19 11:51:53',
            ),
            326 => 
            array (
                'id' => 1327,
                'endereco' => 'Rua Luiz Pereira, Rio Branco - AC, 123',
                'bairro' => 'São Francisco',
                'cep' => '69.901-573',
                'created_at' => '2021-01-19 11:54:16',
                'updated_at' => '2021-01-19 11:54:16',
            ),
            327 => 
            array (
                'id' => 1328,
                'endereco' => 'Travessa União, Rio Branco - AC, 16',
                'bairro' => 'Montanhês',
                'cep' => '69.921-503',
                'created_at' => '2021-01-19 11:59:19',
                'updated_at' => '2021-01-19 11:59:19',
            ),
            328 => 
            array (
                'id' => 1329,
                'endereco' => 'Rua Luiz Pereira, Rio Branco - AC, 123',
                'bairro' => 'São Francisco',
                'cep' => '69.901-573',
                'created_at' => '2021-01-19 12:01:00',
                'updated_at' => '2021-01-19 12:01:00',
            ),
            329 => 
            array (
                'id' => 1330,
                'endereco' => 'Rua Xapuri, Rio Branco - AC, 15',
                'bairro' => 'Base',
                'cep' => '69.900-019',
                'created_at' => '2021-01-19 12:02:34',
                'updated_at' => '2021-01-19 12:02:34',
            ),
            330 => 
            array (
                'id' => 1331,
                'endereco' => 'Rua Esmeralda, Rio Branco - AC, 323',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-834',
                'created_at' => '2021-01-19 12:08:05',
                'updated_at' => '2021-01-19 12:08:05',
            ),
            331 => 
            array (
                'id' => 1332,
                'endereco' => 'Travessa Campo do Rio Branco, Rio Branco - AC, 595',
                'bairro' => 'Capoeira',
                'cep' => '69.905-012',
                'created_at' => '2021-01-19 12:08:06',
                'updated_at' => '2021-01-19 12:08:06',
            ),
            332 => 
            array (
                'id' => 1333,
                'endereco' => 'Rua Raul Barcelar, Rio Branco - AC, 18',
                'bairro' => 'Aviário',
                'cep' => '69.900-842',
                'created_at' => '2021-01-19 12:09:32',
                'updated_at' => '2021-01-19 12:09:32',
            ),
            333 => 
            array (
                'id' => 1334,
                'endereco' => 'Rua Santos Dumont, Rio Branco - AC, 98',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-069',
                'created_at' => '2021-01-19 12:12:05',
                'updated_at' => '2021-01-19 12:12:05',
            ),
            334 => 
            array (
                'id' => 1335,
                'endereco' => 'Travessa Felisbela do Nascimento, Rio Branco - AC, 126',
                'bairro' => 'Capoeira',
                'cep' => '69.905-008',
                'created_at' => '2021-01-19 12:13:17',
                'updated_at' => '2021-01-19 12:13:17',
            ),
            335 => 
            array (
                'id' => 1336,
                'endereco' => 'Rua Raul Barcelar, Rio Branco - AC, 18',
                'bairro' => 'Aviário',
                'cep' => '69.900-842',
                'created_at' => '2021-01-19 12:13:33',
                'updated_at' => '2021-01-19 12:13:33',
            ),
            336 => 
            array (
                'id' => 1337,
                'endereco' => 'Rua Equador, Rio Branco - AC, 217',
                'bairro' => 'Habitasa',
                'cep' => '69.905-102',
                'created_at' => '2021-01-19 12:18:00',
                'updated_at' => '2021-01-19 12:18:00',
            ),
            337 => 
            array (
                'id' => 1338,
                'endereco' => 'Rua Esmeralda, Rio Branco - AC, 296',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-834',
                'created_at' => '2021-01-19 12:24:07',
                'updated_at' => '2021-01-19 12:24:07',
            ),
            338 => 
            array (
                'id' => 1339,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 2448',
                'bairro' => 'Ayrton SEna',
                'cep' => '69.911-800',
                'created_at' => '2021-01-19 12:24:07',
                'updated_at' => '2021-01-19 12:24:07',
            ),
            339 => 
            array (
                'id' => 1340,
                'endereco' => 'Rua Adolfo Barbosa Leite, Rio Branco - AC, 43',
                'bairro' => 'Triângulo Velho',
                'cep' => '69.906-228',
                'created_at' => '2021-01-19 12:30:58',
                'updated_at' => '2021-01-19 12:30:58',
            ),
            340 => 
            array (
                'id' => 1341,
                'endereco' => 'Travessa Flamengo, Rio Branco - AC, 207',
                'bairro' => 'Aviário',
                'cep' => '69.900-851',
                'created_at' => '2021-01-19 12:33:48',
                'updated_at' => '2021-01-19 12:33:48',
            ),
            341 => 
            array (
                'id' => 1342,
                'endereco' => 'Travessa Flamengo, Rio Branco - AC, 207',
                'bairro' => 'Aviário',
                'cep' => '69.900-851',
                'created_at' => '2021-01-19 12:37:42',
                'updated_at' => '2021-01-19 12:37:42',
            ),
            342 => 
            array (
                'id' => 1343,
                'endereco' => 'Travessa Serrana, Rio Branco - AC, 85',
                'bairro' => 'AREAL',
                'cep' => '69.906-095',
                'created_at' => '2021-01-19 12:38:13',
                'updated_at' => '2021-01-19 12:38:13',
            ),
            343 => 
            array (
                'id' => 1344,
                'endereco' => 'Travessa Monte Sinai, Rio Branco - AC, 118',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-662',
                'created_at' => '2021-01-19 12:42:00',
                'updated_at' => '2021-01-19 12:42:00',
            ),
            344 => 
            array (
                'id' => 1345,
                'endereco' => 'Rua 15, Rio Branco - AC, 335',
                'bairro' => 'Glória',
                'cep' => '69.911-140',
                'created_at' => '2021-01-19 12:53:21',
                'updated_at' => '2021-01-19 12:53:21',
            ),
            345 => 
            array (
                'id' => 1346,
                'endereco' => 'Rua Trajano, Rio Branco - AC, 174',
                'bairro' => 'Vila Santa Cecília',
                'cep' => '69.908-106',
                'created_at' => '2021-01-19 12:53:37',
                'updated_at' => '2021-01-19 12:53:37',
            ),
            346 => 
            array (
                'id' => 1347,
                'endereco' => 'Rua Empresa, Rio Branco - AC, 47',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-320',
                'created_at' => '2021-01-19 12:56:49',
                'updated_at' => '2021-01-19 12:56:49',
            ),
            347 => 
            array (
                'id' => 1348,
                'endereco' => 'Rua Empresa, Rio Branco - AC, 47',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-320',
                'created_at' => '2021-01-19 13:01:48',
                'updated_at' => '2021-01-19 13:01:48',
            ),
            348 => 
            array (
                'id' => 1349,
                'endereco' => 'Rua Barro, Rio Branco - AC, 362',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-816',
                'created_at' => '2021-01-19 13:02:03',
                'updated_at' => '2021-01-19 13:02:03',
            ),
            349 => 
            array (
                'id' => 1350,
                'endereco' => 'Travessa Jaguari, Rio Branco - AC, 150',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-248',
                'created_at' => '2021-01-19 13:06:35',
                'updated_at' => '2021-01-19 13:06:35',
            ),
            350 => 
            array (
                'id' => 1351,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 682',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-232',
                'created_at' => '2021-01-19 13:08:53',
                'updated_at' => '2021-01-19 13:08:53',
            ),
            351 => 
            array (
                'id' => 1352,
                'endereco' => 'Rua Ayrton Senna, Rio Branco - AC, 154',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-761',
                'created_at' => '2021-01-19 13:15:08',
                'updated_at' => '2021-01-19 13:15:08',
            ),
            352 => 
            array (
                'id' => 1353,
                'endereco' => 'Rua Ayrton Senna, Rio Branco - AC, 154',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-761',
                'created_at' => '2021-01-19 13:17:25',
                'updated_at' => '2021-01-19 13:17:25',
            ),
            353 => 
            array (
                'id' => 1354,
                'endereco' => 'Rua Raimundo Melo, Rio Branco - AC, 405',
                'bairro' => 'Montanhês',
                'cep' => '69.921-464',
                'created_at' => '2021-01-19 13:22:07',
                'updated_at' => '2021-01-19 13:22:07',
            ),
            354 => 
            array (
                'id' => 1355,
                'endereco' => 'Rua Nossa Senhora da Conceição, Rio Branco - AC, 382',
                'bairro' => 'Quinze',
                'cep' => '69.905-496',
                'created_at' => '2021-01-19 13:27:41',
                'updated_at' => '2021-01-19 13:27:41',
            ),
            355 => 
            array (
                'id' => 1356,
                'endereco' => 'Travessa Marte, Rio Branco - AC, 161',
                'bairro' => 'Montanhês',
                'cep' => '69.921-509',
                'created_at' => '2021-01-19 13:29:34',
                'updated_at' => '2021-01-19 13:29:34',
            ),
            356 => 
            array (
                'id' => 1357,
                'endereco' => 'Rua Raimundo Melo, Rio Branco - AC, 541',
                'bairro' => 'Montanhês',
                'cep' => '69.921-464',
                'created_at' => '2021-01-19 13:30:29',
                'updated_at' => '2021-01-19 13:30:29',
            ),
            357 => 
            array (
                'id' => 1358,
                'endereco' => 'Rua Projetada 1057, Rio Branco - AC, 188',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-082',
                'created_at' => '2021-01-19 13:32:32',
                'updated_at' => '2021-01-19 13:32:32',
            ),
            358 => 
            array (
                'id' => 1359,
                'endereco' => 'Rua Saldanha Marinho, Rio Branco - AC, 230',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-200',
                'created_at' => '2021-01-19 13:35:13',
                'updated_at' => '2021-01-19 13:35:13',
            ),
            359 => 
            array (
                'id' => 1360,
                'endereco' => 'Rua 1º de Janeiro, Rio Branco - AC, 60',
                'bairro' => 'Vila IVONETE',
                'cep' => '69.918-622',
                'created_at' => '2021-01-19 13:37:20',
                'updated_at' => '2021-01-19 13:37:20',
            ),
            360 => 
            array (
                'id' => 1361,
                'endereco' => 'Rua José Luis, Rio Branco - AC, 310',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-677',
                'created_at' => '2021-01-19 13:37:32',
                'updated_at' => '2021-01-19 13:37:32',
            ),
            361 => 
            array (
                'id' => 1362,
                'endereco' => 'Rua Venezuela, Rio Branco - AC, 235',
                'bairro' => 'Habitasa',
                'cep' => '69.905-112',
                'created_at' => '2021-01-19 13:39:04',
                'updated_at' => '2021-01-19 13:39:04',
            ),
            362 => 
            array (
                'id' => 1363,
                'endereco' => 'Rua Francisco Santiago, Rio Branco - AC, 74',
                'bairro' => 'Eldorado',
                'cep' => '69.902-497',
                'created_at' => '2021-01-19 13:41:55',
                'updated_at' => '2021-01-19 13:41:55',
            ),
            363 => 
            array (
                'id' => 1364,
                'endereco' => 'Beco Judia, Rio Branco - AC, 10',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-761',
                'created_at' => '2021-01-19 13:46:29',
                'updated_at' => '2021-01-19 13:46:29',
            ),
            364 => 
            array (
                'id' => 1365,
                'endereco' => 'Rua Ouro Preto, Rio Branco - AC, 405',
                'bairro' => 'Vilage Tiradentes',
                'cep' => '69.914-096',
                'created_at' => '2021-01-19 13:50:40',
                'updated_at' => '2021-01-19 13:50:40',
            ),
            365 => 
            array (
                'id' => 1366,
                'endereco' => 'Rua 15 de Dezembro, Rio Branco - AC, 599',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-226',
                'created_at' => '2021-01-19 14:05:39',
                'updated_at' => '2021-01-19 14:05:39',
            ),
            366 => 
            array (
                'id' => 1367,
                'endereco' => 'Rua Serra do Moa, Rio Branco - AC, 1414',
                'bairro' => 'Rosa LINDArosa',
                'cep' => '69.909-065',
                'created_at' => '2021-01-19 14:09:47',
                'updated_at' => '2021-01-19 14:09:47',
            ),
            367 => 
            array (
                'id' => 1368,
                'endereco' => 'Travessa Beija-flor, Rio Branco - AC, 308',
                'bairro' => 'Areal',
                'cep' => '69.906-104',
                'created_at' => '2021-01-19 14:23:28',
                'updated_at' => '2021-01-19 14:23:28',
            ),
            368 => 
            array (
                'id' => 1369,
                'endereco' => 'Cruzeiro do Sul - AC, 891',
                'bairro' => 'Rua sergipe',
                'cep' => '69.980-000',
                'created_at' => '2021-01-19 14:28:52',
                'updated_at' => '2021-01-19 14:28:52',
            ),
            369 => 
            array (
                'id' => 1370,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1893',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-19 14:39:03',
                'updated_at' => '2021-01-19 14:39:03',
            ),
            370 => 
            array (
                'id' => 1371,
                'endereco' => 'Rua Madeireira, Rio Branco - AC, 280',
                'bairro' => 'Calafate',
                'cep' => '69.914-362',
                'created_at' => '2021-01-19 14:41:13',
                'updated_at' => '2021-01-19 14:41:13',
            ),
            371 => 
            array (
                'id' => 1372,
                'endereco' => 'Rua Mendes Sá, Rio Branco - AC, 822',
                'bairro' => 'Bahia Velha',
                'cep' => '69.911-564',
                'created_at' => '2021-01-19 14:42:41',
                'updated_at' => '2021-01-19 14:42:41',
            ),
            372 => 
            array (
                'id' => 1373,
                'endereco' => 'Rua 1º de Janeiro, Rio Branco - AC, 60',
                'bairro' => 'Vila IVONETE',
                'cep' => '69.918-622',
                'created_at' => '2021-01-19 14:50:38',
                'updated_at' => '2021-01-19 14:50:38',
            ),
            373 => 
            array (
                'id' => 1374,
                'endereco' => 'Rua Indonésia, Rio Branco - AC, 193',
                'bairro' => 'João Paulo',
                'cep' => '69.912-080',
                'created_at' => '2021-01-19 14:52:15',
                'updated_at' => '2021-01-19 14:52:15',
            ),
            374 => 
            array (
                'id' => 1375,
                'endereco' => 'Rua José Augusto, 25',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-834',
                'created_at' => '2021-01-19 14:53:37',
                'updated_at' => '2021-01-19 14:53:37',
            ),
            375 => 
            array (
                'id' => 1376,
                'endereco' => 'Rua Jânio Quadro, Rio Branco - AC, 22',
                'bairro' => 'São FRANCISCO',
                'cep' => '69.901-552',
                'created_at' => '2021-01-19 14:55:10',
                'updated_at' => '2021-01-19 14:55:10',
            ),
            376 => 
            array (
                'id' => 1377,
                'endereco' => 'Travessa Azeitona, Rio Branco - AC, 56',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-746',
                'created_at' => '2021-01-19 14:55:32',
                'updated_at' => '2021-01-19 14:55:32',
            ),
            377 => 
            array (
                'id' => 1378,
                'endereco' => 'Rua do Futuro, Rio Branco - AC, 103',
                'bairro' => 'Boa Vista',
                'cep' => '69.912-136',
                'created_at' => '2021-01-19 14:55:51',
                'updated_at' => '2021-01-19 14:55:51',
            ),
            378 => 
            array (
                'id' => 1379,
                'endereco' => 'Rua América Mateus, Rio Branco - AC, 719',
                'bairro' => 'Vila Albert Sampaio',
                'cep' => '69.908-232',
                'created_at' => '2021-01-19 14:57:06',
                'updated_at' => '2021-01-19 14:57:06',
            ),
            379 => 
            array (
                'id' => 1380,
                'endereco' => 'Rua Boa União, Rio Branco - AC, 853',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-716',
                'created_at' => '2021-01-19 15:00:19',
                'updated_at' => '2021-01-19 15:00:19',
            ),
            380 => 
            array (
                'id' => 1381,
                'endereco' => 'Rua do Futuro, Rio Branco - AC, 103',
                'bairro' => 'Boa Vista',
                'cep' => '69.912-136',
                'created_at' => '2021-01-19 15:01:50',
                'updated_at' => '2021-01-19 15:01:50',
            ),
            381 => 
            array (
                'id' => 1382,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 185',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-19 15:04:08',
                'updated_at' => '2021-01-19 15:04:08',
            ),
            382 => 
            array (
                'id' => 1383,
                'endereco' => 'Rua Boa União, Rio Branco - AC, 853',
                'bairro' => 'Bahia Nova',
                'cep' => '69.911-716',
                'created_at' => '2021-01-19 15:05:35',
                'updated_at' => '2021-01-19 15:05:35',
            ),
            383 => 
            array (
                'id' => 1384,
                'endereco' => 'Rua José Augusto, 25',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-834',
                'created_at' => '2021-01-19 15:10:14',
                'updated_at' => '2021-01-19 15:10:14',
            ),
            384 => 
            array (
                'id' => 1385,
                'endereco' => 'Rua Nauas, Rio Branco - AC, 37',
                'bairro' => 'Novo Horizonte',
                'cep' => '69.911-404',
                'created_at' => '2021-01-19 15:17:05',
                'updated_at' => '2021-01-19 15:17:05',
            ),
            385 => 
            array (
                'id' => 1386,
                'endereco' => 'Rua São Caetano, Rio Branco - AC, 79',
                'bairro' => 'São Francisco',
                'cep' => '69.901-513',
                'created_at' => '2021-01-19 15:17:31',
                'updated_at' => '2021-01-19 15:17:31',
            ),
            386 => 
            array (
                'id' => 1387,
                'endereco' => 'Rua Maria Atenas, Rio Branco - AC, 506',
                'bairro' => 'VITÓRIA',
                'cep' => '69.901-782',
                'created_at' => '2021-01-19 15:19:24',
                'updated_at' => '2021-01-19 15:19:24',
            ),
            387 => 
            array (
                'id' => 1388,
                'endereco' => 'Rua Maria Atenas, Rio Branco - AC, ',
                'bairro' => 'Vitória',
                'cep' => '69.901-782',
                'created_at' => '2021-01-19 15:23:45',
                'updated_at' => '2021-01-19 15:23:45',
            ),
            388 => 
            array (
                'id' => 1389,
                'endereco' => 'Avenida Juscelino Kubitschek, Rio Branco - AC, 421',
                'bairro' => 'Raimundo MeloRaimundo  Melo',
                'cep' => '69.921-030',
                'created_at' => '2021-01-19 15:28:52',
                'updated_at' => '2021-01-19 15:28:52',
            ),
            389 => 
            array (
                'id' => 1390,
                'endereco' => 'Avenida Recanto Verde, Rio Branco - AC, 550',
                'bairro' => 'Conjunto mariana',
                'cep' => '69.919-182',
                'created_at' => '2021-01-19 15:38:05',
                'updated_at' => '2021-01-19 15:38:05',
            ),
            390 => 
            array (
                'id' => 1391,
                'endereco' => 'Travessa Eden, Rio Branco - AC, 169',
                'bairro' => 'Invasão da Seis de Agosto',
                'cep' => '69.905-715',
                'created_at' => '2021-01-19 15:38:52',
                'updated_at' => '2021-01-19 15:38:52',
            ),
            391 => 
            array (
                'id' => 1392,
                'endereco' => 'Rua 10 de Julho, Rio Branco - AC, 361',
                'bairro' => 'Placas',
                'cep' => '69.902-758',
                'created_at' => '2021-01-19 15:38:55',
                'updated_at' => '2021-01-19 15:38:55',
            ),
            392 => 
            array (
                'id' => 1393,
                'endereco' => 'Avenida Recanto Verde, Rio Branco - AC, 550',
                'bairro' => 'Conjunto mariana',
                'cep' => '69.919-182',
                'created_at' => '2021-01-19 15:41:19',
                'updated_at' => '2021-01-19 15:41:19',
            ),
            393 => 
            array (
                'id' => 1394,
                'endereco' => 'Estrada de Porto Acre, Rio Branco - AC, 2095',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-282',
                'created_at' => '2021-01-19 15:42:28',
                'updated_at' => '2021-01-19 15:42:28',
            ),
            394 => 
            array (
                'id' => 1395,
                'endereco' => 'Travessa São Cristóvão, Rio Branco - AC, 05',
                'bairro' => 'VoltaSECA',
                'cep' => '69.911-021',
                'created_at' => '2021-01-19 15:45:44',
                'updated_at' => '2021-01-19 15:45:44',
            ),
            395 => 
            array (
                'id' => 1396,
                'endereco' => '..., 260',
                'bairro' => '...',
                'cep' => '69.907-677',
                'created_at' => '2021-01-19 15:48:06',
                'updated_at' => '2021-01-19 15:48:06',
            ),
            396 => 
            array (
                'id' => 1397,
                'endereco' => 'Rua W7, Rio Branco - AC, 101',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-760',
                'created_at' => '2021-01-19 15:49:18',
                'updated_at' => '2021-01-19 15:49:18',
            ),
            397 => 
            array (
                'id' => 1398,
                'endereco' => 'Rua W7, Rio Branco - AC, 101',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-760',
                'created_at' => '2021-01-19 15:52:52',
                'updated_at' => '2021-01-19 15:52:52',
            ),
            398 => 
            array (
                'id' => 1399,
                'endereco' => 'Rua São Francisco, Rio Branco - AC, 159',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-446',
                'created_at' => '2021-01-19 15:53:34',
                'updated_at' => '2021-01-19 15:53:34',
            ),
            399 => 
            array (
                'id' => 1400,
                'endereco' => 'Rua Jorge Amado,  Rio Branco - AC, 23',
                'bairro' => 'Conjunto Bela VistaCONJUNTO BELA VISTA -FLORESTA',
                'cep' => '69.911-355',
                'created_at' => '2021-01-19 15:53:36',
                'updated_at' => '2021-01-19 15:53:36',
            ),
            400 => 
            array (
                'id' => 1401,
                'endereco' => 'Rua Raimundo Guerra, Rio Branco - AC, 73',
                'bairro' => 'Comara',
                'cep' => '69.906-348',
                'created_at' => '2021-01-19 15:56:09',
                'updated_at' => '2021-01-19 15:56:09',
            ),
            401 => 
            array (
                'id' => 1402,
                'endereco' => 'Rua Minas Gerais, Rio Branco - AC, 192',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-315',
                'created_at' => '2021-01-19 15:57:23',
                'updated_at' => '2021-01-19 15:57:23',
            ),
            402 => 
            array (
                'id' => 1403,
                'endereco' => 'Rua Padre Eustáquio, Rio Branco - AC, 267',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-232',
                'created_at' => '2021-01-19 15:58:40',
                'updated_at' => '2021-01-19 15:58:40',
            ),
            403 => 
            array (
                'id' => 1404,
                'endereco' => 'Rua Eufrates, Rio Branco - AC, 52',
                'bairro' => 'Residencial Iolanda',
                'cep' => '69.918-890',
                'created_at' => '2021-01-19 15:58:44',
                'updated_at' => '2021-01-19 15:58:44',
            ),
            404 => 
            array (
                'id' => 1405,
                'endereco' => 'Rua Acre, Rio Branco - AC, 358',
                'bairro' => 'Vila da Amizade',
                'cep' => '69.909-669',
                'created_at' => '2021-01-19 16:02:30',
                'updated_at' => '2021-01-19 16:02:30',
            ),
            405 => 
            array (
                'id' => 1406,
                'endereco' => 'Rua Eufrates, Rio Branco - AC, 52',
                'bairro' => 'Residencial IOLANda',
                'cep' => '69.918-890',
                'created_at' => '2021-01-19 16:02:46',
                'updated_at' => '2021-01-19 16:02:46',
            ),
            406 => 
            array (
                'id' => 1407,
                'endereco' => 'Área Rural, Rio Branco - AC, ',
                'bairro' => 'Área Rural de Rio Branco',
                'cep' => '69.923-899',
                'created_at' => '2021-01-19 16:03:44',
                'updated_at' => '2021-01-19 16:03:44',
            ),
            407 => 
            array (
                'id' => 1408,
                'endereco' => 'Rua Triunfo, Rio Branco - AC, 610',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-438',
                'created_at' => '2021-01-19 16:09:31',
                'updated_at' => '2021-01-19 16:09:31',
            ),
            408 => 
            array (
                'id' => 1409,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 416',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-324',
                'created_at' => '2021-01-19 16:17:35',
                'updated_at' => '2021-01-19 16:17:35',
            ),
            409 => 
            array (
                'id' => 1410,
                'endereco' => 'Avenida Epaminondas Jácome, Rio Branco - AC, 686',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-274',
                'created_at' => '2021-01-19 16:19:11',
                'updated_at' => '2021-01-19 16:19:11',
            ),
            410 => 
            array (
                'id' => 1411,
                'endereco' => 'Rua N6, Rio Branco - AC, 229',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-793',
                'created_at' => '2021-01-19 16:21:10',
                'updated_at' => '2021-01-19 16:21:10',
            ),
            411 => 
            array (
                'id' => 1412,
                'endereco' => 'Travessa da Melancia, Rio Branco - AC, 223',
                'bairro' => 'Mocinha MAGALHÃESm',
                'cep' => '69.920-084',
                'created_at' => '2021-01-19 16:21:40',
                'updated_at' => '2021-01-19 16:21:40',
            ),
            412 => 
            array (
                'id' => 1413,
                'endereco' => 'Trav Francisco furtado, 49',
                'bairro' => 'Bosque',
                'cep' => '69.900-414',
                'created_at' => '2021-01-19 16:27:36',
                'updated_at' => '2021-01-19 16:27:36',
            ),
            413 => 
            array (
                'id' => 1414,
                'endereco' => 'Rua Marte, Rio Branco - AC, 49',
                'bairro' => 'Conjunto Manoel JULIao',
                'cep' => '69.918-428',
                'created_at' => '2021-01-19 16:31:42',
                'updated_at' => '2021-01-19 16:31:42',
            ),
            414 => 
            array (
                'id' => 1415,
                'endereco' => 'Rua Ouro Verde, Rio Branco - AC, 180',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-364',
                'created_at' => '2021-01-19 16:40:20',
                'updated_at' => '2021-01-19 16:40:20',
            ),
            415 => 
            array (
                'id' => 1416,
                'endereco' => 'Rua do Cajú, Rio Branco - AC, 372',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-082',
                'created_at' => '2021-01-19 16:50:50',
                'updated_at' => '2021-01-19 16:50:50',
            ),
            416 => 
            array (
                'id' => 1417,
                'endereco' => 'Rua Santa Maria, Rio Branco - AC, 515',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-438',
                'created_at' => '2021-01-19 16:51:00',
                'updated_at' => '2021-01-19 16:51:00',
            ),
            417 => 
            array (
                'id' => 1418,
                'endereco' => 'Rua Guanabara, Rio Branco - AC, 80',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-852',
                'created_at' => '2021-01-19 16:53:42',
                'updated_at' => '2021-01-19 16:53:42',
            ),
            418 => 
            array (
                'id' => 1419,
                'endereco' => 'Rua do Cajú, Rio Branco - AC, 372',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-082',
                'created_at' => '2021-01-19 16:57:18',
                'updated_at' => '2021-01-19 16:57:18',
            ),
            419 => 
            array (
                'id' => 1420,
                'endereco' => 'Rua Abacaxi, Rio Branco - AC, 288',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-876',
                'created_at' => '2021-01-19 17:01:10',
                'updated_at' => '2021-01-19 17:01:10',
            ),
            420 => 
            array (
                'id' => 1421,
                'endereco' => 'Rua Bandeirantes, Rio Branco - AC, 117',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-683',
                'created_at' => '2021-01-19 17:07:11',
                'updated_at' => '2021-01-19 17:07:11',
            ),
            421 => 
            array (
                'id' => 1422,
                'endereco' => 'Rua Fernando Sabino, Rio Branco - AC, 326',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-760',
                'created_at' => '2021-01-19 17:11:44',
                'updated_at' => '2021-01-19 17:11:44',
            ),
            422 => 
            array (
                'id' => 1423,
                'endereco' => 'Rua Maria das Dores, Rio Branco - AC, 06',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-126',
                'created_at' => '2021-01-19 17:15:22',
                'updated_at' => '2021-01-19 17:15:22',
            ),
            423 => 
            array (
                'id' => 1424,
                'endereco' => 'Travessa Mirim, Rio Branco - AC, 93',
                'bairro' => 'Aviário',
                'cep' => '69.900-848',
                'created_at' => '2021-01-19 17:17:50',
                'updated_at' => '2021-01-19 17:17:50',
            ),
            424 => 
            array (
                'id' => 1425,
                'endereco' => 'Rua São José, Rio Branco - AC, 115',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-202',
                'created_at' => '2021-01-19 17:23:48',
                'updated_at' => '2021-01-19 17:23:48',
            ),
            425 => 
            array (
                'id' => 1426,
                'endereco' => 'Rua Mizael Martins, Rio Branco - AC, 214',
                'bairro' => 'Calafate',
                'cep' => '69.914-358',
                'created_at' => '2021-01-19 17:25:16',
                'updated_at' => '2021-01-19 17:25:16',
            ),
            426 => 
            array (
                'id' => 1427,
                'endereco' => 'Rua Mato Grosso do Sul, Rio Branco - AC, 117',
                'bairro' => 'Conjunto Universitário',
                'cep' => '69.917-702',
                'created_at' => '2021-01-19 17:25:25',
                'updated_at' => '2021-01-19 17:25:25',
            ),
            427 => 
            array (
                'id' => 1428,
                'endereco' => 'Rua São José, Rio Branco - AC, 115',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-202',
                'created_at' => '2021-01-19 17:29:08',
                'updated_at' => '2021-01-19 17:29:08',
            ),
            428 => 
            array (
                'id' => 1429,
                'endereco' => 'Rua Botafogo, Rio Branco - AC, 1400',
                'bairro' => 'Paz',
                'cep' => '69.919-264',
                'created_at' => '2021-01-19 17:40:54',
                'updated_at' => '2021-01-19 17:40:54',
            ),
            429 => 
            array (
                'id' => 1430,
                'endereco' => 'Rua Saturno, Rio Branco - AC, 476',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-148',
                'created_at' => '2021-01-19 17:41:36',
                'updated_at' => '2021-01-19 17:41:36',
            ),
            430 => 
            array (
                'id' => 1431,
                'endereco' => 'Rua 16 de Outubro, Rio Branco - AC, 500',
                'bairro' => 'Quinze',
                'cep' => '69.905-524',
                'created_at' => '2021-01-19 17:48:29',
                'updated_at' => '2021-01-19 17:48:29',
            ),
            431 => 
            array (
                'id' => 1432,
                'endereco' => 'Rua Manaus, Rio Branco - AC, 54',
                'bairro' => 'Loteamento Joafra',
                'cep' => '69.919-408',
                'created_at' => '2021-01-19 18:03:39',
                'updated_at' => '2021-01-19 18:03:39',
            ),
            432 => 
            array (
                'id' => 1433,
                'endereco' => 'Rua Maria das Dores, Rio Branco - AC, 647',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-154',
                'created_at' => '2021-01-19 18:14:53',
                'updated_at' => '2021-01-19 18:14:53',
            ),
            433 => 
            array (
                'id' => 1434,
                'endereco' => 'Rua Manaus, Rio Branco - AC, 54',
                'bairro' => 'Loteamento Joafra',
                'cep' => '69.919-408',
                'created_at' => '2021-01-19 18:15:00',
                'updated_at' => '2021-01-19 18:15:00',
            ),
            434 => 
            array (
                'id' => 1435,
                'endereco' => 'Rua Cearense, Rio Branco - AC, 216',
                'bairro' => 'Invasão da Seis de Agosto',
                'cep' => '69.905-703',
                'created_at' => '2021-01-19 18:19:50',
                'updated_at' => '2021-01-19 18:19:50',
            ),
            435 => 
            array (
                'id' => 1436,
                'endereco' => 'Rua Girassol, Rio Branco - AC, 188',
                'bairro' => 'Loteamento Joafra',
                'cep' => '69.919-406',
                'created_at' => '2021-01-19 18:24:26',
                'updated_at' => '2021-01-19 18:24:26',
            ),
            436 => 
            array (
                'id' => 1437,
                'endereco' => 'Rua Rádio Farol, Rio Branco - AC, 757',
                'bairro' => 'Boa União',
                'cep' => '69.911-786',
                'created_at' => '2021-01-19 18:33:20',
                'updated_at' => '2021-01-19 18:33:20',
            ),
            437 => 
            array (
                'id' => 1438,
                'endereco' => 'Travessa Coronel Honório Alves, Rio Branco - AC, 200',
                'bairro' => 'Quinze',
                'cep' => '69.905-498',
                'created_at' => '2021-01-19 18:34:14',
                'updated_at' => '2021-01-19 18:34:14',
            ),
            438 => 
            array (
                'id' => 1439,
                'endereco' => 'Rua São José, Rio Branco - AC, 187',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-448',
                'created_at' => '2021-01-19 18:37:13',
                'updated_at' => '2021-01-19 18:37:13',
            ),
            439 => 
            array (
                'id' => 1440,
                'endereco' => 'Rua Walter Rodrigues, 409',
                'bairro' => 'Vila Acre Rural',
                'cep' => '69.909-710',
                'created_at' => '2021-01-19 18:44:11',
                'updated_at' => '2021-01-19 18:44:11',
            ),
            440 => 
            array (
                'id' => 1441,
                'endereco' => 'Rua Samaúma, Rio Branco - AC, 28',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-138',
                'created_at' => '2021-01-19 18:44:52',
                'updated_at' => '2021-01-19 18:44:52',
            ),
            441 => 
            array (
                'id' => 1442,
                'endereco' => 'Rua da Sanacre, Rio Branco - AC, 1319',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-731',
                'created_at' => '2021-01-19 18:49:21',
                'updated_at' => '2021-01-19 18:49:21',
            ),
            442 => 
            array (
                'id' => 1443,
                'endereco' => 'Rua José Eusébio, Rio Branco - AC, 403',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-362',
                'created_at' => '2021-01-19 19:02:01',
                'updated_at' => '2021-01-19 19:02:01',
            ),
            443 => 
            array (
                'id' => 1444,
                'endereco' => 'Travessa Coronel Honório Alves, Rio Branco - AC, 212',
                'bairro' => 'Quinze',
                'cep' => '69.905-498',
                'created_at' => '2021-01-19 19:04:40',
                'updated_at' => '2021-01-19 19:04:40',
            ),
            444 => 
            array (
                'id' => 1445,
                'endereco' => 'Rua Barra do Sol, Rio Branco - AC, 325',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-428',
                'created_at' => '2021-01-19 19:06:54',
                'updated_at' => '2021-01-19 19:06:54',
            ),
            445 => 
            array (
                'id' => 1446,
                'endereco' => ', Bujari - AC, 2794',
                'bairro' => 'Raimundo Leão',
                'cep' => '69.926-000',
                'created_at' => '2021-01-19 19:19:37',
                'updated_at' => '2021-01-19 19:19:37',
            ),
            446 => 
            array (
                'id' => 1447,
                'endereco' => 'Travessa da Hosana, Rio Branco - AC, 262',
                'bairro' => 'Loteamento Santa HELENA',
                'cep' => '69.908-676',
                'created_at' => '2021-01-19 19:32:46',
                'updated_at' => '2021-01-19 19:32:46',
            ),
            447 => 
            array (
                'id' => 1448,
                'endereco' => 'Rua Zaire, Rio Branco - AC, 560',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-004',
                'created_at' => '2021-01-19 19:42:27',
                'updated_at' => '2021-01-19 19:42:27',
            ),
            448 => 
            array (
                'id' => 1449,
                'endereco' => 'Beco Beira Rio, Rio Branco - AC, 204',
                'bairro' => 'Cidade NOVa',
                'cep' => '69.905-430',
                'created_at' => '2021-01-19 19:46:19',
                'updated_at' => '2021-01-19 19:46:19',
            ),
            449 => 
            array (
                'id' => 1450,
                'endereco' => 'Rua Itapuã, Rio Branco - AC, 220',
                'bairro' => 'Conquista',
                'cep' => '69.918-846',
                'created_at' => '2021-01-19 19:51:58',
                'updated_at' => '2021-01-19 19:51:58',
            ),
            450 => 
            array (
                'id' => 1451,
                'endereco' => 'Rua Raimundo Melo, Rio Branco - AC, 240',
                'bairro' => 'MONTANHÊS',
                'cep' => '69.921-464',
                'created_at' => '2021-01-19 19:59:22',
                'updated_at' => '2021-01-19 19:59:22',
            ),
            451 => 
            array (
                'id' => 1452,
                'endereco' => 'Rua Raimundo Melo, Rio Branco - AC, 240',
                'bairro' => 'Montanhês',
                'cep' => '69.921-464',
                'created_at' => '2021-01-19 20:04:20',
                'updated_at' => '2021-01-19 20:04:20',
            ),
            452 => 
            array (
                'id' => 1453,
                'endereco' => 'Rua Ari Rodrigues, Rio Branco - AC, 228',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-096',
                'created_at' => '2021-01-19 20:29:35',
                'updated_at' => '2021-01-19 20:29:35',
            ),
            453 => 
            array (
                'id' => 1454,
                'endereco' => 'Travessa Manoel Urbano, Rio Branco - AC, 43',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-178',
                'created_at' => '2021-01-19 20:58:57',
                'updated_at' => '2021-01-19 20:58:57',
            ),
            454 => 
            array (
                'id' => 1455,
                'endereco' => 'Rua Álvaro Inácio, Rio Branco - AC, 178',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-118',
                'created_at' => '2021-01-19 21:10:13',
                'updated_at' => '2021-01-19 21:10:13',
            ),
            455 => 
            array (
                'id' => 1456,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 1071',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-114',
                'created_at' => '2021-01-19 21:13:06',
                'updated_at' => '2021-01-19 21:13:06',
            ),
            456 => 
            array (
                'id' => 1457,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 139',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-444',
                'created_at' => '2021-01-19 21:29:32',
                'updated_at' => '2021-01-19 21:29:32',
            ),
            457 => 
            array (
                'id' => 1458,
                'endereco' => 'Rua Andrade Silva, Rio Branco - AC, 117',
                'bairro' => 'São FRANCISCO',
                'cep' => '69.901-549',
                'created_at' => '2021-01-19 22:37:43',
                'updated_at' => '2021-01-19 22:37:43',
            ),
            458 => 
            array (
                'id' => 1459,
                'endereco' => 'Travessa Gonçalves Dias, Rio Branco - AC, 75',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-180',
                'created_at' => '2021-01-19 22:58:43',
                'updated_at' => '2021-01-19 22:58:43',
            ),
            459 => 
            array (
                'id' => 1460,
                'endereco' => 'Rua dos Engenheiros, Rio Branco - AC, 490',
                'bairro' => 'Loteamento dos Engenheirose',
                'cep' => '69.919-053',
                'created_at' => '2021-01-20 05:01:18',
                'updated_at' => '2021-01-20 05:01:18',
            ),
            460 => 
            array (
                'id' => 1461,
                'endereco' => 'Rua Iça, Rio Branco - AC, 83',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-890',
                'created_at' => '2021-01-20 05:18:55',
                'updated_at' => '2021-01-20 05:18:55',
            ),
            461 => 
            array (
                'id' => 1462,
                'endereco' => 'Rua Geraldo Pinheiro, Rio Branco - AC, 171',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-862',
                'created_at' => '2021-01-20 05:41:43',
                'updated_at' => '2021-01-20 05:41:43',
            ),
            462 => 
            array (
                'id' => 1463,
                'endereco' => 'Rua dos Morenos, Rio Branco - AC, 71',
                'bairro' => 'Conjunto Paulo César de Oliveira',
                'cep' => '69.919-126',
                'created_at' => '2021-01-20 05:48:56',
                'updated_at' => '2021-01-20 05:48:56',
            ),
            463 => 
            array (
                'id' => 1464,
                'endereco' => 'Rua Canindé, Rio Branco - AC, 428',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-294',
                'created_at' => '2021-01-20 05:51:45',
                'updated_at' => '2021-01-20 05:51:45',
            ),
            464 => 
            array (
                'id' => 1465,
                'endereco' => 'Rua Fluminense, Rio Branco - AC, 169',
                'bairro' => 'CONQUISTA',
                'cep' => '69.918-848',
                'created_at' => '2021-01-20 05:54:56',
                'updated_at' => '2021-01-20 05:54:56',
            ),
            465 => 
            array (
                'id' => 1466,
                'endereco' => 'Rua Mutum, Rio Branco - AC, 12',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-471',
                'created_at' => '2021-01-20 05:55:42',
                'updated_at' => '2021-01-20 05:55:42',
            ),
            466 => 
            array (
                'id' => 1467,
                'endereco' => 'Rua Fluminense, Rio Branco - AC, 169',
                'bairro' => 'Conquista',
                'cep' => '69.918-848',
                'created_at' => '2021-01-20 06:02:31',
                'updated_at' => '2021-01-20 06:02:31',
            ),
            467 => 
            array (
                'id' => 1468,
                'endereco' => 'Travessa Tiradentes, Rio Branco - AC, 200',
                'bairro' => 'Quinze',
                'cep' => '69.905-494',
                'created_at' => '2021-01-20 06:03:09',
                'updated_at' => '2021-01-20 06:03:09',
            ),
            468 => 
            array (
                'id' => 1469,
                'endereco' => 'Rua Jerusalém II, Rio Branco - AC, 172',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-018',
                'created_at' => '2021-01-20 06:05:23',
                'updated_at' => '2021-01-20 06:05:23',
            ),
            469 => 
            array (
                'id' => 1470,
                'endereco' => 'Rua 3 de Setembro, Rio Branco - AC, 154',
                'bairro' => 'Placas',
                'cep' => '69.902-764',
                'created_at' => '2021-01-20 06:13:51',
                'updated_at' => '2021-01-20 06:13:51',
            ),
            470 => 
            array (
                'id' => 1471,
                'endereco' => 'Rua 3 de Setembro, Rio Branco - AC, 154',
                'bairro' => 'Placas',
                'cep' => '69.902-764',
                'created_at' => '2021-01-20 06:20:38',
                'updated_at' => '2021-01-20 06:20:38',
            ),
            471 => 
            array (
                'id' => 1472,
                'endereco' => 'Rua Iça, Rio Branco - AC, 83',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-890',
                'created_at' => '2021-01-20 06:24:55',
                'updated_at' => '2021-01-20 06:24:55',
            ),
            472 => 
            array (
                'id' => 1473,
                'endereco' => 'Rua Palmeiral, Rio Branco - AC, 138',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-408',
                'created_at' => '2021-01-20 06:25:06',
                'updated_at' => '2021-01-20 06:25:06',
            ),
            473 => 
            array (
                'id' => 1474,
                'endereco' => ', Bujari - AC, 1080',
                'bairro' => 'Centro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-20 06:25:10',
                'updated_at' => '2021-01-20 06:25:10',
            ),
            474 => 
            array (
                'id' => 1475,
                'endereco' => 'Rua Salgueiro, Rio Branco - AC, 281',
                'bairro' => '...cidade NOVA',
                'cep' => '69.905-416',
                'created_at' => '2021-01-20 06:28:08',
                'updated_at' => '2021-01-20 06:28:08',
            ),
            475 => 
            array (
                'id' => 1476,
                'endereco' => 'Rua N4, Rio Branco - AC, 424',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-805',
                'created_at' => '2021-01-20 06:28:15',
                'updated_at' => '2021-01-20 06:28:15',
            ),
            476 => 
            array (
                'id' => 1477,
                'endereco' => 'Rua N4, Rio Branco - AC, 424',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-805',
                'created_at' => '2021-01-20 06:28:21',
                'updated_at' => '2021-01-20 06:28:21',
            ),
            477 => 
            array (
                'id' => 1478,
                'endereco' => 'Rua Padre Antônio, Rio Branco - AC, 363',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-376',
                'created_at' => '2021-01-20 06:32:52',
                'updated_at' => '2021-01-20 06:32:52',
            ),
            478 => 
            array (
                'id' => 1479,
                'endereco' => 'Rua Marte, Rio Branco - AC, 564',
                'bairro' => 'Adalberto Aragão',
                'cep' => '69.901-160',
                'created_at' => '2021-01-20 06:36:15',
                'updated_at' => '2021-01-20 06:36:15',
            ),
            479 => 
            array (
                'id' => 1480,
                'endereco' => 'Rua Bom Destino, Rio Branco - AC, 222',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-306',
                'created_at' => '2021-01-20 06:40:39',
                'updated_at' => '2021-01-20 06:40:39',
            ),
            480 => 
            array (
                'id' => 1481,
                'endereco' => ', Senador Guiomard - AC, 0',
                'bairro' => 'zona rural',
                'cep' => '69.925-000',
                'created_at' => '2021-01-20 06:42:42',
                'updated_at' => '2021-01-20 06:42:42',
            ),
            481 => 
            array (
                'id' => 1482,
                'endereco' => 'Travessa Feijó, Rio Branco - AC, 19',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-620',
                'created_at' => '2021-01-20 06:44:23',
                'updated_at' => '2021-01-20 06:44:23',
            ),
            482 => 
            array (
                'id' => 1483,
                'endereco' => 'Rua Jerusalém II, Rio Branco - AC, 172',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-018',
                'created_at' => '2021-01-20 06:52:06',
                'updated_at' => '2021-01-20 06:52:06',
            ),
            483 => 
            array (
                'id' => 1484,
                'endereco' => 'Avenida Dorval Camilo, Rio Branco - AC, 913',
                'bairro' => 'Canaã',
                'cep' => '69.905-859',
                'created_at' => '2021-01-20 06:55:31',
                'updated_at' => '2021-01-20 06:55:31',
            ),
            484 => 
            array (
                'id' => 1485,
                'endereco' => 'Rua André Ficarelli, Rio Branco - AC, 201',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-252',
                'created_at' => '2021-01-20 06:58:16',
                'updated_at' => '2021-01-20 06:58:16',
            ),
            485 => 
            array (
                'id' => 1486,
                'endereco' => 'Rua Jerusalém II, Rio Branco - AC, 172',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-018',
                'created_at' => '2021-01-20 07:07:14',
                'updated_at' => '2021-01-20 07:07:14',
            ),
            486 => 
            array (
                'id' => 1487,
                'endereco' => '...bairro da paz, 718',
                'bairro' => 'rua bota fogo 718',
                'cep' => '69.900-264',
                'created_at' => '2021-01-20 07:08:58',
                'updated_at' => '2021-01-20 07:08:58',
            ),
            487 => 
            array (
                'id' => 1488,
                'endereco' => 'Rua Manaus, Rio Branco - AC, 892',
                'bairro' => 'bairro geraldo fleming',
                'cep' => '69.918-862',
                'created_at' => '2021-01-20 07:16:30',
                'updated_at' => '2021-01-20 07:16:30',
            ),
            488 => 
            array (
                'id' => 1489,
                'endereco' => 'Rua Manaus, Rio Branco - AC, 892',
                'bairro' => 'bairro geraldo fleming',
                'cep' => '69.918-862',
                'created_at' => '2021-01-20 07:18:24',
                'updated_at' => '2021-01-20 07:18:24',
            ),
            489 => 
            array (
                'id' => 1490,
                'endereco' => '..., 365',
                'bairro' => '...',
                'cep' => '69.905-496',
                'created_at' => '2021-01-20 07:18:34',
                'updated_at' => '2021-01-20 07:18:34',
            ),
            490 => 
            array (
                'id' => 1491,
                'endereco' => 'Rua Aquarela, Rio Branco - AC bairro conquista, 892',
                'bairro' => 'Conquistarua aquarela 282',
                'cep' => '69.918-834',
                'created_at' => '2021-01-20 07:24:43',
                'updated_at' => '2021-01-20 07:24:43',
            ),
            491 => 
            array (
                'id' => 1492,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 134',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-232',
                'created_at' => '2021-01-20 07:26:35',
                'updated_at' => '2021-01-20 07:26:35',
            ),
            492 => 
            array (
                'id' => 1493,
                'endereco' => 'Rua Pernambuco, Rio Branco - AC, 233',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-306',
                'created_at' => '2021-01-20 07:27:45',
                'updated_at' => '2021-01-20 07:27:45',
            ),
            493 => 
            array (
                'id' => 1494,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 136',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-232',
                'created_at' => '2021-01-20 07:40:13',
                'updated_at' => '2021-01-20 07:40:13',
            ),
            494 => 
            array (
                'id' => 1495,
                'endereco' => '..., 15',
                'bairro' => 'Zona rural',
                'cep' => '69.909-710',
                'created_at' => '2021-01-20 07:40:41',
                'updated_at' => '2021-01-20 07:40:41',
            ),
            495 => 
            array (
                'id' => 1496,
                'endereco' => 'Rua dos Operários, Rio Branco - AC, 208',
                'bairro' => 'Boa Vista',
                'cep' => '69.912-126',
                'created_at' => '2021-01-20 07:41:50',
                'updated_at' => '2021-01-20 07:41:50',
            ),
            496 => 
            array (
                'id' => 1497,
                'endereco' => 'Avenida Francisco Ribeiro, Rio Branco - AC, 1064',
                'bairro' => 'Loteamento Santo Afonso',
                'cep' => '69.908-892',
                'created_at' => '2021-01-20 07:42:21',
                'updated_at' => '2021-01-20 07:42:21',
            ),
            497 => 
            array (
                'id' => 1498,
                'endereco' => 'doca furtado, 2044',
                'bairro' => 'Doca Furtado rua belo horizonte 2044',
                'cep' => '69.918-120',
                'created_at' => '2021-01-20 07:45:24',
                'updated_at' => '2021-01-20 07:45:24',
            ),
            498 => 
            array (
                'id' => 1499,
                'endereco' => 'Rua S2, Rio Branco - AC, 50',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-703',
                'created_at' => '2021-01-20 07:49:06',
                'updated_at' => '2021-01-20 07:49:06',
            ),
            499 => 
            array (
                'id' => 1500,
                'endereco' => 'Rua Raimundo Escócio de Farias, Rio Branco - AC, 36',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-416',
                'created_at' => '2021-01-20 07:49:55',
                'updated_at' => '2021-01-20 07:49:55',
            ),
        ));
        \DB::table('endereco')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'endereco' => 'Rua Raimundo Escócio de Farias, Rio Branco - AC, 36',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-416',
                'created_at' => '2021-01-20 07:54:20',
                'updated_at' => '2021-01-20 07:54:20',
            ),
            1 => 
            array (
                'id' => 1502,
                'endereco' => 'Rua Mauá, Rio Branco - AC, 429',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-516',
                'created_at' => '2021-01-20 07:59:11',
                'updated_at' => '2021-01-20 07:59:11',
            ),
            2 => 
            array (
                'id' => 1503,
                'endereco' => 'Rua S2, Rio Branco - AC, 50',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-703',
                'created_at' => '2021-01-20 07:59:42',
                'updated_at' => '2021-01-20 07:59:42',
            ),
            3 => 
            array (
                'id' => 1504,
                'endereco' => '..., 275',
                'bairro' => 'ouricuri',
                'cep' => '69.903-233',
                'created_at' => '2021-01-20 07:59:54',
                'updated_at' => '2021-01-20 07:59:54',
            ),
            4 => 
            array (
                'id' => 1505,
                'endereco' => 'Rua Luiz Fernando Veríssimo, Rio Branco - AC, 28',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-758',
                'created_at' => '2021-01-20 08:00:44',
                'updated_at' => '2021-01-20 08:00:44',
            ),
            5 => 
            array (
                'id' => 1506,
                'endereco' => 'Rua Benjamin Constant, Rio Branco - AC, 424',
                'bairro' => 'Cerâmica',
                'cep' => '69.905-072',
                'created_at' => '2021-01-20 08:04:46',
                'updated_at' => '2021-01-20 08:04:46',
            ),
            6 => 
            array (
                'id' => 1507,
                'endereco' => 'Travessa Benjamim Constant, Rio Branco - AC, 186',
                'bairro' => 'CERÂMICA',
                'cep' => '69.905-064',
                'created_at' => '2021-01-20 08:06:43',
                'updated_at' => '2021-01-20 08:06:43',
            ),
            7 => 
            array (
                'id' => 1508,
                'endereco' => 'Rua Luiz Fernando Veríssimo, Rio Branco - AC, 28',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-758',
                'created_at' => '2021-01-20 08:07:54',
                'updated_at' => '2021-01-20 08:07:54',
            ),
            8 => 
            array (
                'id' => 1509,
                'endereco' => 'Rua Bodocó, Rio Branco - AC, 20',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-410',
                'created_at' => '2021-01-20 08:09:00',
                'updated_at' => '2021-01-20 08:09:00',
            ),
            9 => 
            array (
                'id' => 1510,
                'endereco' => 'Rua Santos Dumont, Rio Branco - AC, 154',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-069',
                'created_at' => '2021-01-20 08:09:04',
                'updated_at' => '2021-01-20 08:09:04',
            ),
            10 => 
            array (
                'id' => 1511,
                'endereco' => 'Rua João Tavares Monteiro, Rio Branco - AC, 8194',
                'bairro' => 'Praia do Amapa',
                'cep' => '69.906-682',
                'created_at' => '2021-01-20 08:12:36',
                'updated_at' => '2021-01-20 08:12:36',
            ),
            11 => 
            array (
                'id' => 1512,
                'endereco' => 'Rua Benjamin Constant, Rio Branco - AC, 424',
                'bairro' => 'Cerâmica',
                'cep' => '69.905-072',
                'created_at' => '2021-01-20 08:14:47',
                'updated_at' => '2021-01-20 08:14:47',
            ),
            12 => 
            array (
                'id' => 1513,
                'endereco' => ', Bujari - AC, 70',
                'bairro' => 'Centro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-20 08:14:48',
                'updated_at' => '2021-01-20 08:14:48',
            ),
            13 => 
            array (
                'id' => 1514,
                'endereco' => 'Travessa Paulista, Rio Branco - AC, 100',
                'bairro' => 'Eldorado',
                'cep' => '69.902-512',
                'created_at' => '2021-01-20 08:15:38',
                'updated_at' => '2021-01-20 08:15:38',
            ),
            14 => 
            array (
                'id' => 1515,
                'endereco' => 'Avenida Ceará, Rio Branco - AC, 562',
                'bairro' => 'Cerâmica562',
                'cep' => '69.905-062',
                'created_at' => '2021-01-20 08:26:20',
                'updated_at' => '2021-01-20 08:26:20',
            ),
            15 => 
            array (
                'id' => 1516,
                'endereco' => 'Ramal Raimundo Saldanha, Rio Branco - AC, 321',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-802',
                'created_at' => '2021-01-20 08:27:29',
                'updated_at' => '2021-01-20 08:27:29',
            ),
            16 => 
            array (
                'id' => 1517,
                'endereco' => 'Rua Plínio Brandão, Rio Branco - AC, 145',
                'bairro' => 'Base',
                'cep' => '69.900-037',
                'created_at' => '2021-01-20 08:28:40',
                'updated_at' => '2021-01-20 08:28:40',
            ),
            17 => 
            array (
                'id' => 1518,
                'endereco' => 'estrada da floresta - CONDOMÍNIO via parque rua bromélia bloco 07 apartamento 101, 1893',
                'bairro' => 'floresta sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-20 08:29:33',
                'updated_at' => '2021-01-20 08:29:33',
            ),
            18 => 
            array (
                'id' => 1519,
                'endereco' => ', Bujari - AC, 70',
                'bairro' => 'CENTRO',
                'cep' => '69.926-000',
                'created_at' => '2021-01-20 08:30:11',
                'updated_at' => '2021-01-20 08:30:11',
            ),
            19 => 
            array (
                'id' => 1520,
                'endereco' => 'Rua Hiena, Rio Branco - AC, 372',
                'bairro' => 'Ilson Ribeiroi',
                'cep' => '69.914-547',
                'created_at' => '2021-01-20 08:34:08',
                'updated_at' => '2021-01-20 08:34:08',
            ),
            20 => 
            array (
                'id' => 1521,
                'endereco' => 'Rua João Tavares Monteiro, Rio Branco - AC, 8194',
                'bairro' => 'Praia do Amapá',
                'cep' => '69.906-682',
                'created_at' => '2021-01-20 08:36:44',
                'updated_at' => '2021-01-20 08:36:44',
            ),
            21 => 
            array (
                'id' => 1522,
                'endereco' => 'Travessa Flamengo, Rio Branco - AC, 403',
                'bairro' => 'Aviário',
                'cep' => '69.900-851',
                'created_at' => '2021-01-20 08:38:49',
                'updated_at' => '2021-01-20 08:38:49',
            ),
            22 => 
            array (
                'id' => 1523,
                'endereco' => 'Rua Vicente Lopes de Oliveira, Rio Branco - AC, 65',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-780',
                'created_at' => '2021-01-20 08:41:08',
                'updated_at' => '2021-01-20 08:41:08',
            ),
            23 => 
            array (
                'id' => 1524,
                'endereco' => 'Rua Francisco Ferreira, Rio Branco - AC, 121',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-328',
                'created_at' => '2021-01-20 08:43:17',
                'updated_at' => '2021-01-20 08:43:17',
            ),
            24 => 
            array (
                'id' => 1525,
                'endereco' => 'Rua Pêra, Rio Branco - AC, 124',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-236',
                'created_at' => '2021-01-20 08:43:18',
                'updated_at' => '2021-01-20 08:43:18',
            ),
            25 => 
            array (
                'id' => 1526,
                'endereco' => 'Rua W9, Rio Branco - AC, 93',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-754',
                'created_at' => '2021-01-20 08:44:23',
                'updated_at' => '2021-01-20 08:44:23',
            ),
            26 => 
            array (
                'id' => 1527,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1893',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-20 08:48:34',
                'updated_at' => '2021-01-20 08:48:34',
            ),
            27 => 
            array (
                'id' => 1528,
                'endereco' => 'Rua Antonio Pereira da Silva, Rio Branco - AC, 151',
                'bairro' => 'Montanhês',
                'cep' => '69.921-551',
                'created_at' => '2021-01-20 08:49:33',
                'updated_at' => '2021-01-20 08:49:33',
            ),
            28 => 
            array (
                'id' => 1529,
                'endereco' => 'Rua Castanheira, Rio Branco - AC, 380',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-174',
                'created_at' => '2021-01-20 08:50:55',
                'updated_at' => '2021-01-20 08:50:55',
            ),
            29 => 
            array (
                'id' => 1530,
                'endereco' => 'Rua Castanheira, Rio Branco - AC, 380',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-174',
                'created_at' => '2021-01-20 08:54:28',
                'updated_at' => '2021-01-20 08:54:28',
            ),
            30 => 
            array (
                'id' => 1531,
                'endereco' => 'Rua 11 de Março, Rio Branco - AC, 136',
                'bairro' => 'Placas',
                'cep' => '69.902-754',
                'created_at' => '2021-01-20 08:55:47',
                'updated_at' => '2021-01-20 08:55:47',
            ),
            31 => 
            array (
                'id' => 1532,
                'endereco' => 'Rua Chico Mendes, Rio Branco - AC, 124',
                'bairro' => 'Novo calafate',
                'cep' => '69.914-360',
                'created_at' => '2021-01-20 08:58:31',
                'updated_at' => '2021-01-20 08:58:31',
            ),
            32 => 
            array (
                'id' => 1533,
                'endereco' => 'Rua Dinamarca, Rio Branco - AC, 294',
                'bairro' => 'Jardim Europa',
                'cep' => '69.915-413',
                'created_at' => '2021-01-20 09:08:28',
                'updated_at' => '2021-01-20 09:08:28',
            ),
            33 => 
            array (
                'id' => 1534,
                'endereco' => 'Rua Nelson Mesquita, Rio Branco - AC, 175',
                'bairro' => 'Santa Quitéria / VILA IVONETE',
                'cep' => '69.918-703',
                'created_at' => '2021-01-20 09:17:06',
                'updated_at' => '2021-01-20 09:17:06',
            ),
            34 => 
            array (
                'id' => 1535,
                'endereco' => 'Rua Terra Adorada, Rio Branco - AC, 1301',
                'bairro' => 'Rosa LINDA',
                'cep' => '69.909-064',
                'created_at' => '2021-01-20 09:20:20',
                'updated_at' => '2021-01-20 09:20:20',
            ),
            35 => 
            array (
                'id' => 1536,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 495',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-684',
                'created_at' => '2021-01-20 09:37:49',
                'updated_at' => '2021-01-20 09:37:49',
            ),
            36 => 
            array (
                'id' => 1537,
                'endereco' => 'Rua Juricaba, Rio Branco - AC, 355',
                'bairro' => 'João Paulo',
                'cep' => '69.912-060',
                'created_at' => '2021-01-20 09:43:03',
                'updated_at' => '2021-01-20 09:43:03',
            ),
            37 => 
            array (
                'id' => 1538,
                'endereco' => 'Rua E, Rio Branco - AC, 120',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-750',
                'created_at' => '2021-01-20 09:50:05',
                'updated_at' => '2021-01-20 09:50:05',
            ),
            38 => 
            array (
                'id' => 1539,
                'endereco' => 'Rua São Francisco, Rio Branco - AC, 101',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-028',
                'created_at' => '2021-01-20 09:54:05',
                'updated_at' => '2021-01-20 09:54:05',
            ),
            39 => 
            array (
                'id' => 1540,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 54',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-20 09:57:38',
                'updated_at' => '2021-01-20 09:57:38',
            ),
            40 => 
            array (
                'id' => 1541,
                'endereco' => 'Rua José Luis, Rio Branco - AC, 11',
                'bairro' => 'Santa INÊS',
                'cep' => '69.907-677',
                'created_at' => '2021-01-20 10:04:12',
                'updated_at' => '2021-01-20 10:04:12',
            ),
            41 => 
            array (
                'id' => 1542,
                'endereco' => 'Rua Lua Azul, Rio Branco - AC, 21',
                'bairro' => 'Rosa Linda',
                'cep' => '69.909-052',
                'created_at' => '2021-01-20 10:04:50',
                'updated_at' => '2021-01-20 10:04:50',
            ),
            42 => 
            array (
                'id' => 1543,
                'endereco' => 'Rua Acre 2, Rio Branco - AC, 75',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-087',
                'created_at' => '2021-01-20 10:06:11',
                'updated_at' => '2021-01-20 10:06:11',
            ),
            43 => 
            array (
                'id' => 1544,
                'endereco' => 'Rua José Luis, Rio Branco - AC, 11',
                'bairro' => 'Santa INÊS',
                'cep' => '69.907-677',
                'created_at' => '2021-01-20 10:08:01',
                'updated_at' => '2021-01-20 10:08:01',
            ),
            44 => 
            array (
                'id' => 1545,
                'endereco' => 'Rua José Luis, Rio Branco - AC, 11',
                'bairro' => 'Santa INÊS',
                'cep' => '69.907-677',
                'created_at' => '2021-01-20 10:11:24',
                'updated_at' => '2021-01-20 10:11:24',
            ),
            45 => 
            array (
                'id' => 1546,
                'endereco' => 'Beco 8 de Maio, Rio Branco - AC, 60',
                'bairro' => 'Palheiral',
                'cep' => '69.911-214',
                'created_at' => '2021-01-20 10:15:06',
                'updated_at' => '2021-01-20 10:15:06',
            ),
            46 => 
            array (
                'id' => 1547,
                'endereco' => 'Rua Antônio Pinheiro Sobrinho, Rio Branco - AC, 102',
                'bairro' => 'Jardim América',
                'cep' => '69.918-562',
                'created_at' => '2021-01-20 10:23:31',
                'updated_at' => '2021-01-20 10:23:31',
            ),
            47 => 
            array (
                'id' => 1548,
                'endereco' => 'Rua Ana Nery, Rio Branco - AC, 155',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-458',
                'created_at' => '2021-01-20 10:29:21',
                'updated_at' => '2021-01-20 10:29:21',
            ),
            48 => 
            array (
                'id' => 1549,
                'endereco' => 'Rua Major Ladislau Ferreira, Rio Branco - ACr, 1185',
                'bairro' => '7º BEC',
                'cep' => '69.918-117',
                'created_at' => '2021-01-20 10:36:58',
                'updated_at' => '2021-01-20 10:36:58',
            ),
            49 => 
            array (
                'id' => 1550,
                'endereco' => 'Área Rural, Rio Branco - AC, 468',
                'bairro' => 'Área Rural de Rio BRANCo',
                'cep' => '69.923-899',
                'created_at' => '2021-01-20 10:38:59',
                'updated_at' => '2021-01-20 10:38:59',
            ),
            50 => 
            array (
                'id' => 1551,
                'endereco' => 'Rua Major Ladislau Ferreira, Rio Branco - AC, 1185',
                'bairro' => '7º BEC',
                'cep' => '69.918-117',
                'created_at' => '2021-01-20 10:47:34',
                'updated_at' => '2021-01-20 10:47:34',
            ),
            51 => 
            array (
                'id' => 1552,
                'endereco' => 'Rua Rio Branco, Rio Branco - AC, ',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-048',
                'created_at' => '2021-01-20 10:48:07',
                'updated_at' => '2021-01-20 10:48:07',
            ),
            52 => 
            array (
                'id' => 1553,
                'endereco' => 'Rua Bodocó, Rio Branco - AC, 113',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-410',
                'created_at' => '2021-01-20 10:49:35',
                'updated_at' => '2021-01-20 10:49:35',
            ),
            53 => 
            array (
                'id' => 1554,
                'endereco' => 'Rua Abacaxi, Rio Branco - AC, ',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-876',
                'created_at' => '2021-01-20 10:50:42',
                'updated_at' => '2021-01-20 10:50:42',
            ),
            54 => 
            array (
                'id' => 1555,
                'endereco' => 'Rua Major Ladislau Ferreira, Rio Branco - AC, ',
                'bairro' => '7º BEC',
                'cep' => '69.918-117',
                'created_at' => '2021-01-20 10:52:07',
                'updated_at' => '2021-01-20 10:52:07',
            ),
            55 => 
            array (
                'id' => 1556,
                'endereco' => 'Rua São Sebastião, Rio Branco - AC, 600',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-340',
                'created_at' => '2021-01-20 10:52:20',
                'updated_at' => '2021-01-20 10:52:20',
            ),
            56 => 
            array (
                'id' => 1557,
                'endereco' => 'Avenida Ceará, Rio Branco - AC, 2669',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-300',
                'created_at' => '2021-01-20 10:53:50',
                'updated_at' => '2021-01-20 10:53:50',
            ),
            57 => 
            array (
                'id' => 1558,
                'endereco' => 'Avenida Ceará, Rio Branco - AC, 2669',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-300',
                'created_at' => '2021-01-20 10:58:03',
                'updated_at' => '2021-01-20 10:58:03',
            ),
            58 => 
            array (
                'id' => 1559,
                'endereco' => 'Rua Margarida, Rio Branco - AC, 231',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-218',
                'created_at' => '2021-01-20 11:01:06',
                'updated_at' => '2021-01-20 11:01:06',
            ),
            59 => 
            array (
                'id' => 1560,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1893',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-20 11:09:40',
                'updated_at' => '2021-01-20 11:09:40',
            ),
            60 => 
            array (
                'id' => 1561,
                'endereco' => 'Rua Cisne, Rio Branco - AC, 39',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-699',
                'created_at' => '2021-01-20 11:13:10',
                'updated_at' => '2021-01-20 11:13:10',
            ),
            61 => 
            array (
                'id' => 1562,
                'endereco' => 'Rua Alagoas, Rio Branco - AC, 121',
                'bairro' => 'Bosque',
                'cep' => '69.900-400',
                'created_at' => '2021-01-20 11:30:56',
                'updated_at' => '2021-01-20 11:30:56',
            ),
            62 => 
            array (
                'id' => 1563,
                'endereco' => 'Travessa Liberdade, Rio Branco - AC, 30',
                'bairro' => 'SOBRAL',
                'cep' => '69.912-032',
                'created_at' => '2021-01-20 11:32:15',
                'updated_at' => '2021-01-20 11:32:15',
            ),
            63 => 
            array (
                'id' => 1564,
                'endereco' => 'Rua Preciosa, Rio Branco - AC, 395',
                'bairro' => 'Vitória',
                'cep' => '69.901-788',
                'created_at' => '2021-01-20 11:33:02',
                'updated_at' => '2021-01-20 11:33:02',
            ),
            64 => 
            array (
                'id' => 1565,
                'endereco' => 'Rua Antônio Souza de Araújo, Rio Branco - AC, 258',
                'bairro' => 'Plácido de Castro',
                'cep' => '69.912-180',
                'created_at' => '2021-01-20 11:38:24',
                'updated_at' => '2021-01-20 11:38:24',
            ),
            65 => 
            array (
                'id' => 1566,
                'endereco' => 'Rua Pernambuco, Rio Branco - AC, 330',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-306',
                'created_at' => '2021-01-20 11:46:20',
                'updated_at' => '2021-01-20 11:46:20',
            ),
            66 => 
            array (
                'id' => 1567,
                'endereco' => 'Rua Antônio José Nogueira, Rio Branco - AC, ',
                'bairro' => 'João Eduardo I',
                'cep' => '69.911-434',
                'created_at' => '2021-01-20 11:52:28',
                'updated_at' => '2021-01-20 11:52:28',
            ),
            67 => 
            array (
                'id' => 1568,
                'endereco' => 'Travessa Vera Cruz, Rio Branco - AC, 152',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-040',
                'created_at' => '2021-01-20 11:56:45',
                'updated_at' => '2021-01-20 11:56:45',
            ),
            68 => 
            array (
                'id' => 1569,
                'endereco' => 'Estrada da Sobral, Rio Branco - AC, 1177',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-114',
                'created_at' => '2021-01-20 12:01:32',
                'updated_at' => '2021-01-20 12:01:32',
            ),
            69 => 
            array (
                'id' => 1570,
                'endereco' => 'Rua 10 de Junho, Rio Branco - AC, 717',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-254',
                'created_at' => '2021-01-20 12:04:51',
                'updated_at' => '2021-01-20 12:04:51',
            ),
            70 => 
            array (
                'id' => 1571,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 1594',
                'bairro' => 'Preventório',
                'cep' => '69.900-150',
                'created_at' => '2021-01-20 12:11:28',
                'updated_at' => '2021-01-20 12:11:28',
            ),
            71 => 
            array (
                'id' => 1572,
                'endereco' => 'Rua 10 de Junho, Rio Branco - AC, 717',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-254',
                'created_at' => '2021-01-20 12:17:43',
                'updated_at' => '2021-01-20 12:17:43',
            ),
            72 => 
            array (
                'id' => 1573,
                'endereco' => 'Rua Manoel Rodrigues de Souza, Rio Branco - AC, 183',
                'bairro' => 'BOSQUE',
                'cep' => '69.900-451',
                'created_at' => '2021-01-20 12:21:03',
                'updated_at' => '2021-01-20 12:21:03',
            ),
            73 => 
            array (
                'id' => 1574,
                'endereco' => 'Rua Rui Barbosa, Rio Branco - AC, 507',
                'bairro' => 'Centro',
                'cep' => '69.900-084',
                'created_at' => '2021-01-20 12:22:14',
                'updated_at' => '2021-01-20 12:22:14',
            ),
            74 => 
            array (
                'id' => 1575,
                'endereco' => 'Rua 11, Rio Branco - AC, 348',
                'bairro' => 'Raimundo MELO',
                'cep' => '69.921-001',
                'created_at' => '2021-01-20 12:22:42',
                'updated_at' => '2021-01-20 12:22:42',
            ),
            75 => 
            array (
                'id' => 1576,
                'endereco' => 'Rua Vereadora Maria Antonia, Rio Branco - AC, 2858',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-148',
                'created_at' => '2021-01-20 12:23:51',
                'updated_at' => '2021-01-20 12:23:51',
            ),
            76 => 
            array (
                'id' => 1577,
                'endereco' => 'Rua 6 de Agosto, Rio Branco - AC, 739',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-684',
                'created_at' => '2021-01-20 12:28:13',
                'updated_at' => '2021-01-20 12:28:13',
            ),
            77 => 
            array (
                'id' => 1578,
                'endereco' => 'Rua Tarumã, Rio Branco - AC, 138',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-103',
                'created_at' => '2021-01-20 12:36:45',
                'updated_at' => '2021-01-20 12:36:45',
            ),
            78 => 
            array (
                'id' => 1579,
                'endereco' => 'Rua Limoeiro, Rio Branco - AC, 176',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-168',
                'created_at' => '2021-01-20 12:37:33',
                'updated_at' => '2021-01-20 12:37:33',
            ),
            79 => 
            array (
                'id' => 1580,
                'endereco' => 'Rodovia AC-40, Rio Branco - AC, 206',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-788',
                'created_at' => '2021-01-20 12:54:24',
                'updated_at' => '2021-01-20 12:54:24',
            ),
            80 => 
            array (
                'id' => 1581,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 203',
                'bairro' => 'conj habitacional  Vila Betel ii',
                'cep' => '69.915-306',
                'created_at' => '2021-01-20 12:58:44',
                'updated_at' => '2021-01-20 12:58:44',
            ),
            81 => 
            array (
                'id' => 1582,
                'endereco' => 'Rua tapajós, 264',
                'bairro' => 'Isaura parentes',
                'cep' => '69.907-510',
                'created_at' => '2021-01-20 13:00:51',
                'updated_at' => '2021-01-20 13:00:51',
            ),
            82 => 
            array (
                'id' => 1583,
                'endereco' => 'Rua 12, Rio Branco - AC, 127',
                'bairro' => 'Parque dos Sabiás',
                'cep' => '69.903-130',
                'created_at' => '2021-01-20 13:02:26',
                'updated_at' => '2021-01-20 13:02:26',
            ),
            83 => 
            array (
                'id' => 1584,
                'endereco' => 'Rua Pantanal, Rio Branco - AC, 80',
                'bairro' => 'Pista',
                'cep' => '69.911-154',
                'created_at' => '2021-01-20 13:07:56',
                'updated_at' => '2021-01-20 13:07:56',
            ),
            84 => 
            array (
                'id' => 1585,
                'endereco' => 'travessa canoa, 121',
                'bairro' => 'santa maria',
                'cep' => '69.923-899',
                'created_at' => '2021-01-20 13:08:20',
                'updated_at' => '2021-01-20 13:08:20',
            ),
            85 => 
            array (
                'id' => 1586,
                'endereco' => 'Travessa Maria Amélia, Rio Branco - AC, 148',
                'bairro' => 'Capoeira',
                'cep' => '69.905-004',
                'created_at' => '2021-01-20 13:12:26',
                'updated_at' => '2021-01-20 13:12:26',
            ),
            86 => 
            array (
                'id' => 1587,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 268',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-20 13:14:22',
                'updated_at' => '2021-01-20 13:14:22',
            ),
            87 => 
            array (
                'id' => 1588,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 268',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-20 13:16:29',
                'updated_at' => '2021-01-20 13:16:29',
            ),
            88 => 
            array (
                'id' => 1589,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 268',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-20 13:18:09',
                'updated_at' => '2021-01-20 13:18:09',
            ),
            89 => 
            array (
                'id' => 1590,
                'endereco' => 'Rua Mizael Martins, Rio Branco - AC, 620',
                'bairro' => 'Calafate',
                'cep' => '69.914-358',
                'created_at' => '2021-01-20 13:21:05',
                'updated_at' => '2021-01-20 13:21:05',
            ),
            90 => 
            array (
                'id' => 1591,
                'endereco' => 'Rua Tabosa, Rio Branco - AC, 251',
                'bairro' => 'João Pauloo',
                'cep' => '69.912-062',
                'created_at' => '2021-01-20 13:29:33',
                'updated_at' => '2021-01-20 13:29:33',
            ),
            91 => 
            array (
                'id' => 1592,
                'endereco' => 'Rua jacamim, 170',
                'bairro' => 'Jardim universitário',
                'cep' => '69.917-512',
                'created_at' => '2021-01-20 13:30:27',
                'updated_at' => '2021-01-20 13:30:27',
            ),
            92 => 
            array (
                'id' => 1593,
                'endereco' => 'Travessa da Pista, Rio Branco - AC, 43',
                'bairro' => 'AREAl',
                'cep' => '69.905-867',
                'created_at' => '2021-01-20 13:33:45',
                'updated_at' => '2021-01-20 13:33:45',
            ),
            93 => 
            array (
                'id' => 1594,
                'endereco' => 'Rua Coronel João de Oliveira Rolla, Rio Branco - AC, 167',
                'bairro' => 'Triângulo Velho',
                'cep' => '69.906-216',
                'created_at' => '2021-01-20 13:39:34',
                'updated_at' => '2021-01-20 13:39:34',
            ),
            94 => 
            array (
                'id' => 1595,
                'endereco' => 'Rua Santa Lúcia, Rio Branco - AC, 208',
                'bairro' => 'Jardim de Alah',
                'cep' => '69.915-512',
                'created_at' => '2021-01-20 13:45:33',
                'updated_at' => '2021-01-20 13:45:33',
            ),
            95 => 
            array (
                'id' => 1596,
                'endereco' => 'Rua Eufrates, Rio Branco - AC, 52',
                'bairro' => 'Residencial Iolanda',
                'cep' => '69.918-890',
                'created_at' => '2021-01-20 13:54:03',
                'updated_at' => '2021-01-20 13:54:03',
            ),
            96 => 
            array (
                'id' => 1597,
                'endereco' => 'Rua Flor de Maio, Rio Branco - AC, 224',
                'bairro' => 'Eldorado',
                'cep' => '69.902-467',
                'created_at' => '2021-01-20 13:55:20',
                'updated_at' => '2021-01-20 13:55:20',
            ),
            97 => 
            array (
                'id' => 1598,
                'endereco' => 'Travessa Tarauacá, Rio Branco - AC, 98',
                'bairro' => 'Base',
                'cep' => '69.900-040',
                'created_at' => '2021-01-20 14:06:11',
                'updated_at' => '2021-01-20 14:06:11',
            ),
            98 => 
            array (
                'id' => 1599,
                'endereco' => 'Rua Ouro Verde, Rio Branco - AC, 35',
                'bairro' => 'Nova Estação',
                'cep' => '69.918-364',
                'created_at' => '2021-01-20 14:08:08',
                'updated_at' => '2021-01-20 14:08:08',
            ),
            99 => 
            array (
                'id' => 1600,
                'endereco' => 'Travessa Castelão, Rio Branco - AC, 73',
                'bairro' => 'ELDORADo',
                'cep' => '69.902-500',
                'created_at' => '2021-01-20 14:11:54',
                'updated_at' => '2021-01-20 14:11:54',
            ),
            100 => 
            array (
                'id' => 1601,
                'endereco' => 'Avenida Beija-flor, Rio Branco - AC, 1225',
                'bairro' => 'Conjunto Jardim Universitário',
                'cep' => '69.917-500',
                'created_at' => '2021-01-20 14:11:58',
                'updated_at' => '2021-01-20 14:11:58',
            ),
            101 => 
            array (
                'id' => 1602,
                'endereco' => 'rua jarina, 156',
                'bairro' => 'placas',
                'cep' => '69.909-710',
                'created_at' => '2021-01-20 14:14:18',
                'updated_at' => '2021-01-20 14:14:18',
            ),
            102 => 
            array (
                'id' => 1603,
                'endereco' => 'Rua Delmar Pismel, Rio Branco - AC, 96',
                'bairro' => 'Conjunto Guiomard Santos',
                'cep' => '69.901-411',
                'created_at' => '2021-01-20 14:16:37',
                'updated_at' => '2021-01-20 14:16:37',
            ),
            103 => 
            array (
                'id' => 1604,
                'endereco' => 'Rua Pantanal, 84',
                'bairro' => 'Canaa',
                'cep' => '69.909-710',
                'created_at' => '2021-01-20 14:16:43',
                'updated_at' => '2021-01-20 14:16:43',
            ),
            104 => 
            array (
                'id' => 1605,
                'endereco' => 'Rua Domingos Olímpio, Rio Branco - AC, 164',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-146',
                'created_at' => '2021-01-20 14:38:53',
                'updated_at' => '2021-01-20 14:38:53',
            ),
            105 => 
            array (
                'id' => 1606,
                'endereco' => 'Rua do Côco, Rio Branco - AC, 58',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-030',
                'created_at' => '2021-01-20 14:40:13',
                'updated_at' => '2021-01-20 14:40:13',
            ),
            106 => 
            array (
                'id' => 1607,
                'endereco' => 'Rua do Côco, Rio Branco - AC, 58',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-030',
                'created_at' => '2021-01-20 14:42:38',
                'updated_at' => '2021-01-20 14:42:38',
            ),
            107 => 
            array (
                'id' => 1608,
                'endereco' => 'Rua Domingos Olímpio, Rio Branco - AC, 164',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-146',
                'created_at' => '2021-01-20 14:43:43',
                'updated_at' => '2021-01-20 14:43:43',
            ),
            108 => 
            array (
                'id' => 1609,
                'endereco' => 'Avenida Eugênio Beco Bezerra, Rio Branco - AC, 600',
                'bairro' => 'São Francisco',
                'cep' => '69.901-519',
                'created_at' => '2021-01-20 14:47:41',
                'updated_at' => '2021-01-20 14:47:41',
            ),
            109 => 
            array (
                'id' => 1610,
                'endereco' => 'Rua Domingos Olímpio, Rio Branco - AC, 165',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-146',
                'created_at' => '2021-01-20 14:47:51',
                'updated_at' => '2021-01-20 14:47:51',
            ),
            110 => 
            array (
                'id' => 1611,
                'endereco' => 'Travessa Paulista, Rio Branco - AC, 226',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-632',
                'created_at' => '2021-01-20 14:50:28',
                'updated_at' => '2021-01-20 14:50:28',
            ),
            111 => 
            array (
                'id' => 1612,
                'endereco' => 'Avenida Eugênio Beco Bezerra, Rio Branco - AC, 600',
                'bairro' => 'São Francisco',
                'cep' => '69.901-519',
                'created_at' => '2021-01-20 14:53:01',
                'updated_at' => '2021-01-20 14:53:01',
            ),
            112 => 
            array (
                'id' => 1613,
                'endereco' => 'Rua Rui Barbosa, Rio Branco - AC, 344',
                'bairro' => 'Centro',
                'cep' => '69.900-084',
                'created_at' => '2021-01-20 14:58:13',
                'updated_at' => '2021-01-20 14:58:13',
            ),
            113 => 
            array (
                'id' => 1614,
                'endereco' => '...Rua independente, 120',
                'bairro' => 'Eldorado',
                'cep' => '69.901-494',
                'created_at' => '2021-01-20 14:58:45',
                'updated_at' => '2021-01-20 14:58:45',
            ),
            114 => 
            array (
                'id' => 1615,
                'endereco' => 'Travessa Cruzeiro do Sul, Rio Branco - AC, 259',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-009',
                'created_at' => '2021-01-20 15:36:33',
                'updated_at' => '2021-01-20 15:36:33',
            ),
            115 => 
            array (
                'id' => 1616,
                'endereco' => 'Rua Marte, Rio Branco - AC, 095',
                'bairro' => 'Alto ALEGRE',
                'cep' => '69.921-234',
                'created_at' => '2021-01-20 15:38:15',
                'updated_at' => '2021-01-20 15:38:15',
            ),
            116 => 
            array (
                'id' => 1617,
                'endereco' => 'Travessa Cruzeiro do Sul, Rio Branco - AC, 259',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-009',
                'created_at' => '2021-01-20 15:40:29',
                'updated_at' => '2021-01-20 15:40:29',
            ),
            117 => 
            array (
                'id' => 1618,
                'endereco' => 'Rua Epitaciolândia, Rio Branco - AC, 59',
                'bairro' => 'Eldorado',
                'cep' => '69.902-307',
                'created_at' => '2021-01-20 15:45:12',
                'updated_at' => '2021-01-20 15:45:12',
            ),
            118 => 
            array (
                'id' => 1619,
                'endereco' => 'Travessa Cruzeiro do Sul, Rio Branco - AC, 259',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-009',
                'created_at' => '2021-01-20 15:45:41',
                'updated_at' => '2021-01-20 15:45:41',
            ),
            119 => 
            array (
                'id' => 1620,
                'endereco' => 'Rua do Buriti, Rio Branco - AC, 141',
                'bairro' => 'Rosa LINDa',
                'cep' => '69.909-078',
                'created_at' => '2021-01-20 15:56:32',
                'updated_at' => '2021-01-20 15:56:32',
            ),
            120 => 
            array (
                'id' => 1621,
                'endereco' => 'Rua Maracajá, Rio Branco - AC, 08',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-036',
                'created_at' => '2021-01-20 16:11:11',
                'updated_at' => '2021-01-20 16:11:11',
            ),
            121 => 
            array (
                'id' => 1622,
                'endereco' => 'Rua Progresso, Rio Branco - AC, 397',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-202',
                'created_at' => '2021-01-20 16:31:18',
                'updated_at' => '2021-01-20 16:31:18',
            ),
            122 => 
            array (
                'id' => 1623,
                'endereco' => 'Travessa Alencar, Rio Branco - AC, 42',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-530',
                'created_at' => '2021-01-20 16:33:39',
                'updated_at' => '2021-01-20 16:33:39',
            ),
            123 => 
            array (
                'id' => 1624,
                'endereco' => 'Rua 25 de Dezembro, Rio Branco - AC, 81',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-002',
                'created_at' => '2021-01-20 16:33:55',
                'updated_at' => '2021-01-20 16:33:55',
            ),
            124 => 
            array (
                'id' => 1625,
                'endereco' => 'Rua Progresso, Rio Branco - AC, 397',
                'bairro' => 'Cadeia Velha',
                'cep' => '69.905-202',
                'created_at' => '2021-01-20 16:35:55',
                'updated_at' => '2021-01-20 16:35:55',
            ),
            125 => 
            array (
                'id' => 1626,
                'endereco' => 'Rua 25 de Dezembro, Rio Branco - AC, 81',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-002',
                'created_at' => '2021-01-20 16:38:00',
                'updated_at' => '2021-01-20 16:38:00',
            ),
            126 => 
            array (
                'id' => 1627,
                'endereco' => 'Rua Leblon, Rio Branco - AC, 769',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-190',
                'created_at' => '2021-01-20 16:40:34',
                'updated_at' => '2021-01-20 16:40:34',
            ),
            127 => 
            array (
                'id' => 1628,
                'endereco' => 'Rua 12 de Outubro, Rio Branco - AC, 209',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-208',
                'created_at' => '2021-01-20 16:45:43',
                'updated_at' => '2021-01-20 16:45:43',
            ),
            128 => 
            array (
                'id' => 1629,
                'endereco' => 'Avenida Eugênio Beco Bezerra, Rio Branco - AC, 100',
                'bairro' => 'São FRANCISCO',
                'cep' => '69.901-519',
                'created_at' => '2021-01-20 16:46:08',
                'updated_at' => '2021-01-20 16:46:08',
            ),
            129 => 
            array (
                'id' => 1630,
                'endereco' => 'Travessa Marreco, Rio Branco - AC, 176',
                'bairro' => 'Baixada da Habitasa',
                'cep' => '69.905-160',
                'created_at' => '2021-01-20 16:53:19',
                'updated_at' => '2021-01-20 16:53:19',
            ),
            130 => 
            array (
                'id' => 1631,
                'endereco' => 'Avenida Eugênio Beco Bezerra, Rio Branco - AC, 100',
                'bairro' => 'São FRANCISCO',
                'cep' => '69.901-519',
                'created_at' => '2021-01-20 16:57:15',
                'updated_at' => '2021-01-20 16:57:15',
            ),
            131 => 
            array (
                'id' => 1632,
                'endereco' => 'Rua 1º de Maio, Rio Branco - AC, 438',
                'bairro' => 'Seis de AGOSTO',
                'cep' => '69.905-626',
                'created_at' => '2021-01-20 16:58:14',
                'updated_at' => '2021-01-20 16:58:14',
            ),
            132 => 
            array (
                'id' => 1633,
                'endereco' => 'Rua 1º de Maio, Rio Branco - AC, 438',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-626',
                'created_at' => '2021-01-20 17:01:58',
                'updated_at' => '2021-01-20 17:01:58',
            ),
            133 => 
            array (
                'id' => 1634,
                'endereco' => 'Avenida Juscelino Kubitschek, Rio Branco - AC, 282',
                'bairro' => 'Raimundo Melo',
                'cep' => '69.921-030',
                'created_at' => '2021-01-20 17:10:59',
                'updated_at' => '2021-01-20 17:10:59',
            ),
            134 => 
            array (
                'id' => 1635,
                'endereco' => 'Rua Francisca Luzia, Rio Branco - AC, 105',
                'bairro' => 'Vila Albert Sampaio',
                'cep' => '69.908-256',
                'created_at' => '2021-01-20 17:11:42',
                'updated_at' => '2021-01-20 17:11:42',
            ),
            135 => 
            array (
                'id' => 1636,
                'endereco' => 'Rua Alexandre Farhat, Rio Branco - AC, 64',
                'bairro' => 'Ipase',
                'cep' => '69.900-360',
                'created_at' => '2021-01-20 17:14:40',
                'updated_at' => '2021-01-20 17:14:40',
            ),
            136 => 
            array (
                'id' => 1637,
                'endereco' => 'Rua Céu Azul, Rio Branco - AC, 03',
                'bairro' => 'Rosa Linda 2',
                'cep' => '69.909-061',
                'created_at' => '2021-01-20 17:26:45',
                'updated_at' => '2021-01-20 17:26:45',
            ),
            137 => 
            array (
                'id' => 1638,
                'endereco' => 'Rua 25 de Dezembro, Rio Branco - AC, 1688',
                'bairro' => 'Montanhês',
                'cep' => '69.921-533',
                'created_at' => '2021-01-20 17:35:28',
                'updated_at' => '2021-01-20 17:35:28',
            ),
            138 => 
            array (
                'id' => 1639,
                'endereco' => ', Senador Guiomard - AC, 2425',
                'bairro' => 'Cohab',
                'cep' => '69.925-000',
                'created_at' => '2021-01-20 17:47:45',
                'updated_at' => '2021-01-20 17:47:45',
            ),
            139 => 
            array (
                'id' => 1640,
                'endereco' => 'Rua Bom Destino, Rio Branco - AC, 273',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-306',
                'created_at' => '2021-01-20 17:50:29',
                'updated_at' => '2021-01-20 17:50:29',
            ),
            140 => 
            array (
                'id' => 1641,
                'endereco' => 'Rua Bom Destino, Rio Branco - AC, 273',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-306',
                'created_at' => '2021-01-20 17:54:34',
                'updated_at' => '2021-01-20 17:54:34',
            ),
            141 => 
            array (
                'id' => 1642,
                'endereco' => 'Rua Progresso, Rio Branco - AC, 195',
                'bairro' => 'Cadeia VELHA',
                'cep' => '69.905-202',
                'created_at' => '2021-01-20 17:54:54',
                'updated_at' => '2021-01-20 17:54:54',
            ),
            142 => 
            array (
                'id' => 1643,
                'endereco' => 'Rua Major Mendonça Lima, Rio Branco - AC, 279',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-816',
                'created_at' => '2021-01-20 17:58:20',
                'updated_at' => '2021-01-20 17:58:20',
            ),
            143 => 
            array (
                'id' => 1644,
                'endereco' => 'Área Rural, Rio Branco - AC, 277',
                'bairro' => 'Área Rural de Rio Branco belo jardim',
                'cep' => '69.923-899',
                'created_at' => '2021-01-20 18:00:37',
                'updated_at' => '2021-01-20 18:00:37',
            ),
            144 => 
            array (
                'id' => 1645,
                'endereco' => 'Rua Envira, Rio Branco - AC, 680',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-735',
                'created_at' => '2021-01-20 18:05:52',
                'updated_at' => '2021-01-20 18:05:52',
            ),
            145 => 
            array (
                'id' => 1646,
                'endereco' => 'Travessa 7 de Setembro, Rio Branco - AC, 35',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-747',
                'created_at' => '2021-01-20 18:25:26',
                'updated_at' => '2021-01-20 18:25:26',
            ),
            146 => 
            array (
                'id' => 1647,
                'endereco' => '...Trv família, 499',
                'bairro' => 'Belo Jardim 1',
                'cep' => '69.909-710',
                'created_at' => '2021-01-20 18:29:16',
                'updated_at' => '2021-01-20 18:29:16',
            ),
            147 => 
            array (
                'id' => 1648,
                'endereco' => 'Travessa 7 de Setembro, Rio Branco - AC, 35',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-747',
                'created_at' => '2021-01-20 18:31:23',
                'updated_at' => '2021-01-20 18:31:23',
            ),
            148 => 
            array (
                'id' => 1649,
                'endereco' => 'Rua da Sanacre, Rio Branco - AC, 391',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-731',
                'created_at' => '2021-01-20 18:32:10',
                'updated_at' => '2021-01-20 18:32:10',
            ),
            149 => 
            array (
                'id' => 1650,
                'endereco' => 'Rua Padre Cícero, Rio Branco - AC, 250',
                'bairro' => 'Conquista',
                'cep' => '69.918-760',
                'created_at' => '2021-01-20 18:35:35',
                'updated_at' => '2021-01-20 18:35:35',
            ),
            150 => 
            array (
                'id' => 1651,
                'endereco' => 'Rua Sorocaba, Rio Branco - AC, 62',
                'bairro' => 'Doca Furtado',
                'cep' => '69.918-130',
                'created_at' => '2021-01-20 18:40:30',
                'updated_at' => '2021-01-20 18:40:30',
            ),
            151 => 
            array (
                'id' => 1652,
                'endereco' => 'Rua 1, Rio Branco - AC, 61',
                'bairro' => 'Loteamento Jardim São FRANCISCO',
                'cep' => '69.902-103',
                'created_at' => '2021-01-20 18:42:23',
                'updated_at' => '2021-01-20 18:42:23',
            ),
            152 => 
            array (
                'id' => 1653,
                'endereco' => 'Rua Mâncio Lima, Rio Branco - AC, 67',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-280',
                'created_at' => '2021-01-20 18:46:37',
                'updated_at' => '2021-01-20 18:46:37',
            ),
            153 => 
            array (
                'id' => 1654,
                'endereco' => 'Rua Goiás, Rio Branco - AC, 348',
                'bairro' => 'Preventório',
                'cep' => '69.900-126',
                'created_at' => '2021-01-20 18:47:53',
                'updated_at' => '2021-01-20 18:47:53',
            ),
            154 => 
            array (
                'id' => 1655,
                'endereco' => 'Travessa Eden, Rio Branco - AC, 40',
                'bairro' => 'Invasão da Seis de Agosto',
                'cep' => '69.905-715',
                'created_at' => '2021-01-20 18:51:49',
                'updated_at' => '2021-01-20 18:51:49',
            ),
            155 => 
            array (
                'id' => 1656,
                'endereco' => 'Rua Andrade Silva, Rio Branco - AC, 109',
                'bairro' => 'São Francisco',
                'cep' => '69.901-549',
                'created_at' => '2021-01-20 18:55:28',
                'updated_at' => '2021-01-20 18:55:28',
            ),
            156 => 
            array (
                'id' => 1657,
                'endereco' => 'Rua Osvaldo Cruz, Rio Branco - AC, 50',
                'bairro' => 'Ivete VARGAS',
                'cep' => '69.900-250',
                'created_at' => '2021-01-20 18:59:30',
                'updated_at' => '2021-01-20 18:59:30',
            ),
            157 => 
            array (
                'id' => 1658,
                'endereco' => 'Rua Madeireira, Rio Branco - AC, 190',
                'bairro' => 'Calafate',
                'cep' => '69.914-362',
                'created_at' => '2021-01-20 19:01:27',
                'updated_at' => '2021-01-20 19:01:27',
            ),
            158 => 
            array (
                'id' => 1659,
                'endereco' => 'Rua Padre José, Rio Branco - AC, 592',
                'bairro' => 'Triângulo Novo',
                'cep' => '69.906-262',
                'created_at' => '2021-01-20 19:14:31',
                'updated_at' => '2021-01-20 19:14:31',
            ),
            159 => 
            array (
                'id' => 1660,
                'endereco' => 'Rua Minas Gerais, Rio Branco - AC, 202',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-315',
                'created_at' => '2021-01-20 19:16:05',
                'updated_at' => '2021-01-20 19:16:05',
            ),
            160 => 
            array (
                'id' => 1661,
                'endereco' => 'Rua Santa Rita, Rio Branco - AC, 81',
                'bairro' => 'Bahia Velha',
                'cep' => '69.911-582',
                'created_at' => '2021-01-20 19:24:36',
                'updated_at' => '2021-01-20 19:24:36',
            ),
            161 => 
            array (
                'id' => 1662,
                'endereco' => 'Rua Cruzeiro do Sul, Rio Branco - AC, 453',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-122',
                'created_at' => '2021-01-20 19:28:11',
                'updated_at' => '2021-01-20 19:28:11',
            ),
            162 => 
            array (
                'id' => 1663,
                'endereco' => 'Rua Romaria, Rio Branco - AC, 191',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-325',
                'created_at' => '2021-01-20 19:41:20',
                'updated_at' => '2021-01-20 19:41:20',
            ),
            163 => 
            array (
                'id' => 1664,
                'endereco' => 'Rua Romaria, Rio Branco - AC, 191',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-325',
                'created_at' => '2021-01-20 19:46:14',
                'updated_at' => '2021-01-20 19:46:14',
            ),
            164 => 
            array (
                'id' => 1665,
                'endereco' => 'Rua Flamengo, Rio Branco - AC, 433',
                'bairro' => 'Conjunto Laélia Alcântara',
                'cep' => '69.914-486',
                'created_at' => '2021-01-20 19:47:10',
                'updated_at' => '2021-01-20 19:47:10',
            ),
            165 => 
            array (
                'id' => 1666,
                'endereco' => 'Rua dos Engenheiros, Rio Branco - AC, 459',
                'bairro' => 'Loteamento dos Engenheiros',
                'cep' => '69.919-053',
                'created_at' => '2021-01-20 19:49:49',
                'updated_at' => '2021-01-20 19:49:49',
            ),
            166 => 
            array (
                'id' => 1667,
                'endereco' => 'Rua dos Engenheiros, Rio Branco - AC, 459',
                'bairro' => 'Loteamento dos Engenheiros',
                'cep' => '69.919-053',
                'created_at' => '2021-01-20 19:53:40',
                'updated_at' => '2021-01-20 19:53:40',
            ),
            167 => 
            array (
                'id' => 1668,
            'endereco' => 'Transacreana (rural), rio BRANCO-Ac, 77',
            'bairro' => 'Rm da curica (rural) rml frent a madereira',
                'cep' => '69.909-710',
                'created_at' => '2021-01-20 19:55:29',
                'updated_at' => '2021-01-20 19:55:29',
            ),
            168 => 
            array (
                'id' => 1669,
                'endereco' => 'Rua Pernambuco, Rio Branco - AC, 233',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-306',
                'created_at' => '2021-01-20 20:07:58',
                'updated_at' => '2021-01-20 20:07:58',
            ),
            169 => 
            array (
                'id' => 1670,
                'endereco' => 'Rua Wilson Ribeiro, Rio Branco - AC, 119',
                'bairro' => 'Cidade NovA',
                'cep' => '69.905-402',
                'created_at' => '2021-01-20 20:25:42',
                'updated_at' => '2021-01-20 20:25:42',
            ),
            170 => 
            array (
                'id' => 1671,
                'endereco' => 'Rua Manaquiri, Rio Branco - AC, 74',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-878',
                'created_at' => '2021-01-20 20:29:26',
                'updated_at' => '2021-01-20 20:29:26',
            ),
            171 => 
            array (
                'id' => 1672,
                'endereco' => 'Travessa Santo Antônio, Rio Branco - AC, 22',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-828',
                'created_at' => '2021-01-20 20:49:34',
                'updated_at' => '2021-01-20 20:49:34',
            ),
            172 => 
            array (
                'id' => 1673,
                'endereco' => 'Rua Tianguá, Rio Branco - AC, 382',
                'bairro' => 'Vila Custódio FREire',
                'cep' => '69.922-435',
                'created_at' => '2021-01-20 21:10:31',
                'updated_at' => '2021-01-20 21:10:31',
            ),
            173 => 
            array (
                'id' => 1674,
                'endereco' => 'Avenida Iáco, Rio Branco - AC, 455',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-878',
                'created_at' => '2021-01-20 21:20:46',
                'updated_at' => '2021-01-20 21:20:46',
            ),
            174 => 
            array (
                'id' => 1675,
                'endereco' => 'Rua Manoel Castor de Araújo, Rio Branco - AC, 300',
                'bairro' => 'BOSQUE bosque',
                'cep' => '69.900-517',
                'created_at' => '2021-01-20 21:24:52',
                'updated_at' => '2021-01-20 21:24:52',
            ),
            175 => 
            array (
                'id' => 1676,
                'endereco' => 'Rua 6 de Maio, Rio Branco - AC, 82',
                'bairro' => 'Boa UNIÃO',
                'cep' => '69.911-772',
                'created_at' => '2021-01-20 22:33:16',
                'updated_at' => '2021-01-20 22:33:16',
            ),
            176 => 
            array (
                'id' => 1677,
                'endereco' => 'Travessa Jaguari, Rio Branco - AC, 70',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-248',
                'created_at' => '2021-01-20 22:39:33',
                'updated_at' => '2021-01-20 22:39:33',
            ),
            177 => 
            array (
                'id' => 1678,
                'endereco' => 'Rua Cearense, Rio Branco - AC, 798',
                'bairro' => 'Seis de Agosto0',
                'cep' => '69.905-670',
                'created_at' => '2021-01-21 03:15:40',
                'updated_at' => '2021-01-21 03:15:40',
            ),
            178 => 
            array (
                'id' => 1679,
                'endereco' => 'rua adoniran barbosa, Bujari - AC, 158',
                'bairro' => 'centro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-21 04:30:57',
                'updated_at' => '2021-01-21 04:30:57',
            ),
            179 => 
            array (
                'id' => 1680,
                'endereco' => 'RUA ADONIRAN BARBOSA, Bujari - AC,, 158',
                'bairro' => 'centro',
                'cep' => '69.926-000',
                'created_at' => '2021-01-21 04:36:20',
                'updated_at' => '2021-01-21 04:36:20',
            ),
            180 => 
            array (
                'id' => 1681,
                'endereco' => 'Rua Cajui, Rio Branco - AC, 272',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-346',
                'created_at' => '2021-01-21 05:22:03',
                'updated_at' => '2021-01-21 05:22:03',
            ),
            181 => 
            array (
                'id' => 1682,
                'endereco' => 'Travessa Fernando Lira, Rio Branco - AC, 23',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-286',
                'created_at' => '2021-01-21 05:49:22',
                'updated_at' => '2021-01-21 05:49:22',
            ),
            182 => 
            array (
                'id' => 1683,
                'endereco' => 'Rua Joaquim Macêdo, Rio Branco - AC, 571',
                'bairro' => 'Conjunto Oscar Passos',
                'cep' => '69.901-670',
                'created_at' => '2021-01-21 05:51:10',
                'updated_at' => '2021-01-21 05:51:10',
            ),
            183 => 
            array (
                'id' => 1684,
                'endereco' => 'Travessa Fernando Lira, Rio Branco - AC, 23',
                'bairro' => 'Isaura PARENTE',
                'cep' => '69.918-286',
                'created_at' => '2021-01-21 06:00:51',
                'updated_at' => '2021-01-21 06:00:51',
            ),
            184 => 
            array (
                'id' => 1685,
                'endereco' => 'Rua Padre Thiago, Rio Branco - AC, 100',
                'bairro' => '7º BEc',
                'cep' => '69.918-099',
                'created_at' => '2021-01-21 06:01:06',
                'updated_at' => '2021-01-21 06:01:06',
            ),
            185 => 
            array (
                'id' => 1686,
                'endereco' => 'Rua Padre Thiago, Rio Branco - AC, ',
                'bairro' => '7º BEc',
                'cep' => '69.918-099',
                'created_at' => '2021-01-21 06:04:26',
                'updated_at' => '2021-01-21 06:04:26',
            ),
            186 => 
            array (
                'id' => 1687,
                'endereco' => 'Rua Padre Thiago, Rio Branco - AC, 100',
                'bairro' => '7º BEC',
                'cep' => '69.918-099',
                'created_at' => '2021-01-21 06:10:24',
                'updated_at' => '2021-01-21 06:10:24',
            ),
            187 => 
            array (
                'id' => 1688,
                'endereco' => 'Rua Órion, Rio Branco - AC, 519',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-103',
                'created_at' => '2021-01-21 06:10:52',
                'updated_at' => '2021-01-21 06:10:52',
            ),
            188 => 
            array (
                'id' => 1689,
                'endereco' => 'Rua Castanheira, Rio Branco - AC, 34',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-174',
                'created_at' => '2021-01-21 06:26:56',
                'updated_at' => '2021-01-21 06:26:56',
            ),
            189 => 
            array (
                'id' => 1690,
                'endereco' => 'Rua S6, Rio Branco - AC, 151',
                'bairro' => 'Conjunto Tucumã',
                'cep' => '69.919-682',
                'created_at' => '2021-01-21 06:38:28',
                'updated_at' => '2021-01-21 06:38:28',
            ),
            190 => 
            array (
                'id' => 1691,
                'endereco' => 'Rua Tarauacá, Rio Branco - AC, 126',
                'bairro' => 'Belo Jardim I',
                'cep' => '69.907-786',
                'created_at' => '2021-01-21 06:46:19',
                'updated_at' => '2021-01-21 06:46:19',
            ),
            191 => 
            array (
                'id' => 1692,
                'endereco' => 'Rua Railson Nascimento, Rio Branco - AC, 27',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-356',
                'created_at' => '2021-01-21 06:51:04',
                'updated_at' => '2021-01-21 06:51:04',
            ),
            192 => 
            array (
                'id' => 1693,
                'endereco' => 'Rua Independência, Rio Branco - AC, 19',
                'bairro' => 'Floresta Sul',
                'cep' => '69.912-302',
                'created_at' => '2021-01-21 06:54:39',
                'updated_at' => '2021-01-21 06:54:39',
            ),
            193 => 
            array (
                'id' => 1694,
                'endereco' => 'Rua Railson Nascimento, Rio Branco - AC, 27',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-356',
                'created_at' => '2021-01-21 06:56:56',
                'updated_at' => '2021-01-21 06:56:56',
            ),
            194 => 
            array (
                'id' => 1695,
                'endereco' => 'Rua Assis Brasil, Rio Branco - AC, 83',
                'bairro' => 'COMARa',
                'cep' => '69.906-338',
                'created_at' => '2021-01-21 07:20:43',
                'updated_at' => '2021-01-21 07:20:43',
            ),
            195 => 
            array (
                'id' => 1696,
                'endereco' => '..., 48',
                'bairro' => '...',
                'cep' => '69.921-248',
                'created_at' => '2021-01-21 07:22:49',
                'updated_at' => '2021-01-21 07:22:49',
            ),
            196 => 
            array (
                'id' => 1697,
                'endereco' => 'Rua Guariuba, Rio Branco - AC, 57',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-364',
                'created_at' => '2021-01-21 07:28:00',
                'updated_at' => '2021-01-21 07:28:00',
            ),
            197 => 
            array (
                'id' => 1698,
                'endereco' => 'Rua Joaquim Macêdo, Rio Branco - AC, 1046',
                'bairro' => 'São Francisco',
                'cep' => '69.901-585',
                'created_at' => '2021-01-21 07:28:05',
                'updated_at' => '2021-01-21 07:28:05',
            ),
            198 => 
            array (
                'id' => 1699,
                'endereco' => 'Rua Joaquim Macêdo, Rio Branco - AC, 1046',
                'bairro' => 'São Francisco',
                'cep' => '69.901-585',
                'created_at' => '2021-01-21 07:31:45',
                'updated_at' => '2021-01-21 07:31:45',
            ),
            199 => 
            array (
                'id' => 1700,
                'endereco' => 'Rua Bodocó, Rio Branco - AC, 50',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-410',
                'created_at' => '2021-01-21 07:43:20',
                'updated_at' => '2021-01-21 07:43:20',
            ),
            200 => 
            array (
                'id' => 1701,
                'endereco' => 'Travessa Pinho, Rio Branco - AC, 84',
                'bairro' => 'Santa INÊS',
                'cep' => '69.907-683',
                'created_at' => '2021-01-21 07:47:43',
                'updated_at' => '2021-01-21 07:47:43',
            ),
            201 => 
            array (
                'id' => 1702,
                'endereco' => 'Rua Bodocó, Rio Branco - AC, 50',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-410',
                'created_at' => '2021-01-21 07:49:28',
                'updated_at' => '2021-01-21 07:49:28',
            ),
            202 => 
            array (
                'id' => 1703,
                'endereco' => 'Travessa Pinho, Rio Branco - AC, 84',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-683',
                'created_at' => '2021-01-21 07:51:30',
                'updated_at' => '2021-01-21 07:51:30',
            ),
            203 => 
            array (
                'id' => 1704,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 3753',
                'bairro' => 'Aeroporto VELHO',
                'cep' => '69.911-036',
                'created_at' => '2021-01-21 07:59:02',
                'updated_at' => '2021-01-21 07:59:02',
            ),
            204 => 
            array (
                'id' => 1705,
                'endereco' => 'Travessa Pinho, Rio Branco - AC, 94',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-683',
                'created_at' => '2021-01-21 08:02:27',
                'updated_at' => '2021-01-21 08:02:27',
            ),
            205 => 
            array (
                'id' => 1706,
                'endereco' => 'Travessa Boa Sorte, Rio Branco - AC, 37',
                'bairro' => 'VITÓRIA',
                'cep' => '69.901-716',
                'created_at' => '2021-01-21 08:17:16',
                'updated_at' => '2021-01-21 08:17:16',
            ),
            206 => 
            array (
                'id' => 1707,
                'endereco' => 'Rua do Sol, Rio Branco - AC, 390',
                'bairro' => 'Sobral',
                'cep' => '69.912-022',
                'created_at' => '2021-01-21 08:18:27',
                'updated_at' => '2021-01-21 08:18:27',
            ),
            207 => 
            array (
                'id' => 1708,
                'endereco' => 'Travessa Nascente, Rio Branco - AC, 267',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-563',
                'created_at' => '2021-01-21 08:18:46',
                'updated_at' => '2021-01-21 08:18:46',
            ),
            208 => 
            array (
                'id' => 1709,
                'endereco' => 'Rua Mangueira, Rio Branco - AC, 173',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-444',
                'created_at' => '2021-01-21 08:31:58',
                'updated_at' => '2021-01-21 08:31:58',
            ),
            209 => 
            array (
                'id' => 1710,
                'endereco' => 'Rua Alvorada, Rio Branco - AC, 342',
                'bairro' => 'Vitória',
                'cep' => '69.901-770',
                'created_at' => '2021-01-21 08:35:41',
                'updated_at' => '2021-01-21 08:35:41',
            ),
            210 => 
            array (
                'id' => 1711,
                'endereco' => 'Rua Júpiter, Rio Branco - AC, 31',
                'bairro' => 'morada do sol',
                'cep' => '69.901-121',
                'created_at' => '2021-01-21 08:47:21',
                'updated_at' => '2021-01-21 08:47:21',
            ),
            211 => 
            array (
                'id' => 1712,
                'endereco' => 'Travessa Araras, Rio Branco - AC, 110',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-290',
                'created_at' => '2021-01-21 08:51:26',
                'updated_at' => '2021-01-21 08:51:26',
            ),
            212 => 
            array (
                'id' => 1713,
                'endereco' => 'Rua Quintino Bocaiuva, Rio Branco - AC, 1575',
                'bairro' => 'Bosque',
                'cep' => '69.900-718',
                'created_at' => '2021-01-21 09:06:36',
                'updated_at' => '2021-01-21 09:06:36',
            ),
            213 => 
            array (
                'id' => 1714,
                'endereco' => 'Rua São Pedro, Rio Branco - AC, 142',
                'bairro' => 'PISTA',
                'cep' => '69.911-180',
                'created_at' => '2021-01-21 09:06:38',
                'updated_at' => '2021-01-21 09:06:38',
            ),
            214 => 
            array (
                'id' => 1715,
                'endereco' => 'Travessa do Galo, Rio Branco - AC, 28',
                'bairro' => 'São Francisco',
                'cep' => '69.901-546',
                'created_at' => '2021-01-21 09:07:10',
                'updated_at' => '2021-01-21 09:07:10',
            ),
            215 => 
            array (
                'id' => 1716,
                'endereco' => 'Rua do Jasmim, Rio Branco - AC, 547',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-239',
                'created_at' => '2021-01-21 09:09:27',
                'updated_at' => '2021-01-21 09:09:27',
            ),
            216 => 
            array (
                'id' => 1717,
                'endereco' => 'Rua do Jasmim, Rio Branco - AC, 547',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-239',
                'created_at' => '2021-01-21 09:11:41',
                'updated_at' => '2021-01-21 09:11:41',
            ),
            217 => 
            array (
                'id' => 1718,
                'endereco' => 'Rua José de Araújo, Rio Branco - AC, 641',
                'bairro' => 'Chico Mendes',
                'cep' => '69.902-696',
                'created_at' => '2021-01-21 09:14:55',
                'updated_at' => '2021-01-21 09:14:55',
            ),
            218 => 
            array (
                'id' => 1719,
                'endereco' => 'Rua São Pedro, Rio Branco - AC, 142',
                'bairro' => 'Pista',
                'cep' => '69.911-180',
                'created_at' => '2021-01-21 09:16:36',
                'updated_at' => '2021-01-21 09:16:36',
            ),
            219 => 
            array (
                'id' => 1720,
                'endereco' => 'Travessa Mateus, Rio Branco - AC, 95',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-734',
                'created_at' => '2021-01-21 09:18:54',
                'updated_at' => '2021-01-21 09:18:54',
            ),
            220 => 
            array (
                'id' => 1721,
                'endereco' => 'Travessa Felicidade, Rio Branco - AC, 212',
                'bairro' => 'Taquarí',
                'cep' => '69.906-486',
                'created_at' => '2021-01-21 09:22:27',
                'updated_at' => '2021-01-21 09:22:27',
            ),
            221 => 
            array (
                'id' => 1722,
                'endereco' => 'Travessa José Rodrigues, Rio Branco, 215',
                'bairro' => 'Tangará',
                'cep' => '69.915-018',
                'created_at' => '2021-01-21 09:23:49',
                'updated_at' => '2021-01-21 09:23:49',
            ),
            222 => 
            array (
                'id' => 1723,
                'endereco' => 'Rua Quintino Bocaiuva, Rio Branco - AC, 1575',
                'bairro' => 'Bosque',
                'cep' => '69.900-718',
                'created_at' => '2021-01-21 09:28:26',
                'updated_at' => '2021-01-21 09:28:26',
            ),
            223 => 
            array (
                'id' => 1724,
                'endereco' => 'Avenida Presidente Médice, Rio Branco - AC, 1057',
                'bairro' => 'Areal',
                'cep' => '69.906-037',
                'created_at' => '2021-01-21 09:34:09',
                'updated_at' => '2021-01-21 09:34:09',
            ),
            224 => 
            array (
                'id' => 1725,
                'endereco' => 'Avenida Presidente Médice, Rio Branco - AC, 1057',
                'bairro' => 'AREAL',
                'cep' => '69.906-037',
                'created_at' => '2021-01-21 09:42:15',
                'updated_at' => '2021-01-21 09:42:15',
            ),
            225 => 
            array (
                'id' => 1726,
                'endereco' => 'Rua Cedro, Rio Branco - AC, 107',
                'bairro' => 'Loteamento Joafra',
                'cep' => '69.919-400',
                'created_at' => '2021-01-21 09:44:54',
                'updated_at' => '2021-01-21 09:44:54',
            ),
            226 => 
            array (
                'id' => 1727,
                'endereco' => 'Rua Vicente Lopes de Oliveira, Rio Branco - AC, 65',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-780',
                'created_at' => '2021-01-21 09:57:18',
                'updated_at' => '2021-01-21 09:57:18',
            ),
            227 => 
            array (
                'id' => 1728,
                'endereco' => 'Avenida Dorval Camilo, Travessa Maria Elizete, Rio Branco - AC, 99',
                'bairro' => 'Canaã',
                'cep' => '69.905-885',
                'created_at' => '2021-01-21 10:03:36',
                'updated_at' => '2021-01-21 10:03:36',
            ),
            228 => 
            array (
                'id' => 1729,
                'endereco' => 'Rua Coronel José Galdino, Rio Branco - AC, 650',
                'bairro' => 'Bosque',
                'cep' => '69.900-640',
                'created_at' => '2021-01-21 10:09:28',
                'updated_at' => '2021-01-21 10:09:28',
            ),
            229 => 
            array (
                'id' => 1730,
                'endereco' => 'Rua Venezuela, Rio Branco - AC, 281',
                'bairro' => 'Habitasa',
                'cep' => '69.905-112',
                'created_at' => '2021-01-21 10:10:31',
                'updated_at' => '2021-01-21 10:10:31',
            ),
            230 => 
            array (
                'id' => 1731,
                'endereco' => 'Travessa Vasco da Gama, Rio Branco - AC, 31',
                'bairro' => 'Capoeira',
                'cep' => '69.905-028',
                'created_at' => '2021-01-21 10:18:29',
                'updated_at' => '2021-01-21 10:18:29',
            ),
            231 => 
            array (
                'id' => 1732,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 1381',
                'bairro' => 'Preventório',
                'cep' => '69.900-150',
                'created_at' => '2021-01-21 10:22:20',
                'updated_at' => '2021-01-21 10:22:20',
            ),
            232 => 
            array (
                'id' => 1733,
                'endereco' => 'Beco da Cigana, Rio Branco - AC, 20',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-608',
                'created_at' => '2021-01-21 10:23:24',
                'updated_at' => '2021-01-21 10:23:24',
            ),
            233 => 
            array (
                'id' => 1734,
                'endereco' => 'Rua Iquiri, Rio Branco - AC, 48',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-832',
                'created_at' => '2021-01-21 10:30:05',
                'updated_at' => '2021-01-21 10:30:05',
            ),
            234 => 
            array (
                'id' => 1735,
                'endereco' => 'Rua Arco-íris, Rio Branco - AC, 647',
                'bairro' => 'Vitória',
                'cep' => '69.901-722',
                'created_at' => '2021-01-21 10:37:04',
                'updated_at' => '2021-01-21 10:37:04',
            ),
            235 => 
            array (
                'id' => 1736,
                'endereco' => 'Rua Arco-íris, Rio Branco - AC, 647',
                'bairro' => 'Vitória',
                'cep' => '69.901-722',
                'created_at' => '2021-01-21 10:38:58',
                'updated_at' => '2021-01-21 10:38:58',
            ),
            236 => 
            array (
                'id' => 1737,
                'endereco' => 'Rua Adalberto Sena, Rio Branco - AC, ',
                'bairro' => 'Sobral',
                'cep' => '69.912-028',
                'created_at' => '2021-01-21 11:00:08',
                'updated_at' => '2021-01-21 11:00:08',
            ),
            237 => 
            array (
                'id' => 1738,
                'endereco' => 'Rua Empresa, Rio Branco - AC, 168',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-320',
                'created_at' => '2021-01-21 11:00:35',
                'updated_at' => '2021-01-21 11:00:35',
            ),
            238 => 
            array (
                'id' => 1739,
                'endereco' => 'Rua Osvaldo Miranda, Rio Branco - AC, 71',
                'bairro' => 'Conjunto Laélia ALCÂNTARA',
                'cep' => '69.914-484',
                'created_at' => '2021-01-21 11:07:13',
                'updated_at' => '2021-01-21 11:07:13',
            ),
            239 => 
            array (
                'id' => 1740,
                'endereco' => 'Rua Adalberto Sena, Rio Branco - AC, 594',
                'bairro' => 'Sobral',
                'cep' => '69.912-028',
                'created_at' => '2021-01-21 11:07:15',
                'updated_at' => '2021-01-21 11:07:15',
            ),
            240 => 
            array (
                'id' => 1741,
                'endereco' => 'Rua das Rosas, Rio Branco - AC, 68984079277',
                'bairro' => 'Recanto dos Buritis',
                'cep' => '69.907-505',
                'created_at' => '2021-01-21 11:07:44',
                'updated_at' => '2021-01-21 11:07:44',
            ),
            241 => 
            array (
                'id' => 1742,
                'endereco' => 'Rua Gaivota, Rio Branco - AC, 57',
                'bairro' => 'Conjunto Ouricurí',
                'cep' => '69.903-236',
                'created_at' => '2021-01-21 11:13:29',
                'updated_at' => '2021-01-21 11:13:29',
            ),
            242 => 
            array (
                'id' => 1743,
                'endereco' => '...centro, 415',
                'bairro' => 'avenida brasil',
                'cep' => '69.900-558',
                'created_at' => '2021-01-21 11:14:54',
                'updated_at' => '2021-01-21 11:14:54',
            ),
            243 => 
            array (
                'id' => 1744,
                'endereco' => 'Beco do Brejão, Rio Branco - AC, 88',
                'bairro' => 'Bosque',
                'cep' => '69.900-382',
                'created_at' => '2021-01-21 11:23:42',
                'updated_at' => '2021-01-21 11:23:42',
            ),
            244 => 
            array (
                'id' => 1745,
                'endereco' => 'Rua Delmar Pismel, Rio Branco - AC, 85',
                'bairro' => 'Conjunto Guiomard Santos',
                'cep' => '69.901-411',
                'created_at' => '2021-01-21 11:29:57',
                'updated_at' => '2021-01-21 11:29:57',
            ),
            245 => 
            array (
                'id' => 1746,
                'endereco' => 'Rua Bodocó, Rio Branco - AC, 50',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-410',
                'created_at' => '2021-01-21 11:32:16',
                'updated_at' => '2021-01-21 11:32:16',
            ),
            246 => 
            array (
                'id' => 1747,
                'endereco' => 'Rua Maria das Dores, Rio Branco - AC, 1042',
                'bairro' => 'Conjunto Esperança',
                'cep' => '69.915-154',
                'created_at' => '2021-01-21 11:37:55',
                'updated_at' => '2021-01-21 11:37:55',
            ),
            247 => 
            array (
                'id' => 1748,
                'endereco' => 'Ramal Benfica, Rio Branco - AC, 3470',
                'bairro' => 'Benfica',
                'cep' => '69.902-992',
                'created_at' => '2021-01-21 11:51:48',
                'updated_at' => '2021-01-21 11:51:48',
            ),
            248 => 
            array (
                'id' => 1749,
                'endereco' => 'Rua Fragoso Monteiro, Rio Branco - AC, 114',
                'bairro' => 'Santa Quitéria',
                'cep' => '69.918-715',
                'created_at' => '2021-01-21 11:59:56',
                'updated_at' => '2021-01-21 11:59:56',
            ),
            249 => 
            array (
                'id' => 1750,
                'endereco' => 'Rua São Salvador, Rio Branco - AC, 398',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-542',
                'created_at' => '2021-01-21 12:05:17',
                'updated_at' => '2021-01-21 12:05:17',
            ),
            250 => 
            array (
                'id' => 1751,
                'endereco' => 'Estrada Raimundo Irineu Serra, Rio Branco - AC, 920',
                'bairro' => 'Irineu Serra',
                'cep' => '69.922-200',
                'created_at' => '2021-01-21 12:12:06',
                'updated_at' => '2021-01-21 12:12:06',
            ),
            251 => 
            array (
                'id' => 1752,
                'endereco' => 'Avenida Edmundo Pinto, Rio Branco - AC, 87',
                'bairro' => 'Conjunto Oscar Passos',
                'cep' => '69.901-640',
                'created_at' => '2021-01-21 12:13:50',
                'updated_at' => '2021-01-21 12:13:50',
            ),
            252 => 
            array (
                'id' => 1753,
                'endereco' => 'Rua São José, Rio Branco - AC, 227',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-054',
                'created_at' => '2021-01-21 12:16:47',
                'updated_at' => '2021-01-21 12:16:47',
            ),
            253 => 
            array (
                'id' => 1754,
                'endereco' => 'Rua Avestruz, Rio Branco - AC, 308',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-248',
                'created_at' => '2021-01-21 12:32:40',
                'updated_at' => '2021-01-21 12:32:40',
            ),
            254 => 
            array (
                'id' => 1755,
                'endereco' => 'Rua Cabo Euriberto, Rio Branco - AC, 11',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-260',
                'created_at' => '2021-01-21 12:35:16',
                'updated_at' => '2021-01-21 12:35:16',
            ),
            255 => 
            array (
                'id' => 1756,
                'endereco' => 'Rua 15, Rio Branco - AC, 212',
                'bairro' => 'Glória',
                'cep' => '69.911-140',
                'created_at' => '2021-01-21 12:39:27',
                'updated_at' => '2021-01-21 12:39:27',
            ),
            256 => 
            array (
                'id' => 1757,
                'endereco' => 'Travessa Codajás, Rio Branco - AC, 63',
                'bairro' => 'Pista',
                'cep' => '69.911-184',
                'created_at' => '2021-01-21 12:39:35',
                'updated_at' => '2021-01-21 12:39:35',
            ),
            257 => 
            array (
                'id' => 1758,
                'endereco' => 'Rua Avestruz, Rio Branco - AC, 299',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-248',
                'created_at' => '2021-01-21 12:43:50',
                'updated_at' => '2021-01-21 12:43:50',
            ),
            258 => 
            array (
                'id' => 1759,
                'endereco' => 'Rua Dom Bosco 1, Rio Branco - AC, 76',
                'bairro' => 'Bosque',
                'cep' => '69.900-643',
                'created_at' => '2021-01-21 13:01:11',
                'updated_at' => '2021-01-21 13:01:11',
            ),
            259 => 
            array (
                'id' => 1760,
                'endereco' => 'Ramal Bom Jesus, Rio Branco - AC, 575',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-744',
                'created_at' => '2021-01-21 13:01:22',
                'updated_at' => '2021-01-21 13:01:22',
            ),
            260 => 
            array (
                'id' => 1761,
                'endereco' => 'Rua Senador Guiomard Santos, Rio Branco - AC, 190',
                'bairro' => 'Bairro  Vila Betel',
                'cep' => '69.915-278',
                'created_at' => '2021-01-21 13:07:52',
                'updated_at' => '2021-01-21 13:07:52',
            ),
            261 => 
            array (
                'id' => 1762,
                'endereco' => 'Travessa Azis, Rio Branco - AC, 16',
                'bairro' => 'Quinze',
                'cep' => '69.905-506',
                'created_at' => '2021-01-21 13:16:33',
                'updated_at' => '2021-01-21 13:16:33',
            ),
            262 => 
            array (
                'id' => 1763,
                'endereco' => 'Rua Afonso Pena, Rio Branco - AC, 234',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-740',
                'created_at' => '2021-01-21 13:31:31',
                'updated_at' => '2021-01-21 13:31:31',
            ),
            263 => 
            array (
                'id' => 1764,
                'endereco' => '...RODOVIA AC 40 KM 08, RUA DA AMIZADE, VILA BENFICA, 230',
                'bairro' => 'VILA ACRE',
                'cep' => '69.900-000',
                'created_at' => '2021-01-21 13:32:13',
                'updated_at' => '2021-01-21 13:32:13',
            ),
            264 => 
            array (
                'id' => 1765,
                'endereco' => '...rua tucunaré, 477',
                'bairro' => 'Panorama',
                'cep' => '69.909-970',
                'created_at' => '2021-01-21 13:37:19',
                'updated_at' => '2021-01-21 13:37:19',
            ),
            265 => 
            array (
                'id' => 1766,
                'endereco' => 'Avenida Ponta Negra, Rio Branco - AC, 398',
                'bairro' => 'Praia do Amapá',
                'cep' => '69.906-626',
                'created_at' => '2021-01-21 13:42:58',
                'updated_at' => '2021-01-21 13:42:58',
            ),
            266 => 
            array (
                'id' => 1767,
                'endereco' => 'Rua Jerusalém, Rio Branco - AC, 225',
                'bairro' => 'Loteamento Santa Helena',
                'cep' => '69.908-682',
                'created_at' => '2021-01-21 13:53:25',
                'updated_at' => '2021-01-21 13:53:25',
            ),
            267 => 
            array (
                'id' => 1768,
                'endereco' => 'Avenida Doutor Mário Maia, Rio Branco - AC, 756',
                'bairro' => 'Conjunto Oscar PASSOS/ São Francisco',
                'cep' => '69.901-664',
                'created_at' => '2021-01-21 13:54:39',
                'updated_at' => '2021-01-21 13:54:39',
            ),
            268 => 
            array (
                'id' => 1769,
                'endereco' => 'Rua Vilhena, Rio Branco - AC, 124',
                'bairro' => 'sobral',
                'cep' => '69.911-174',
                'created_at' => '2021-01-21 13:57:37',
                'updated_at' => '2021-01-21 13:57:37',
            ),
            269 => 
            array (
                'id' => 1770,
                'endereco' => 'Rua 24 de Janeiro, Rio Branco - AC, 231',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-596',
                'created_at' => '2021-01-21 14:14:52',
                'updated_at' => '2021-01-21 14:14:52',
            ),
            270 => 
            array (
                'id' => 1771,
                'endereco' => 'Rua Poços de Caldas, Rio Branco - AC, 436',
                'bairro' => 'Cidade Nova',
                'cep' => '69.905-440',
                'created_at' => '2021-01-21 14:25:43',
                'updated_at' => '2021-01-21 14:25:43',
            ),
            271 => 
            array (
                'id' => 1772,
                'endereco' => 'Rua Piauí, Rio Branco - AC, 218',
                'bairro' => 'Dom Giocondo',
                'cep' => '69.900-321',
                'created_at' => '2021-01-21 14:43:37',
                'updated_at' => '2021-01-21 14:43:37',
            ),
            272 => 
            array (
                'id' => 1773,
                'endereco' => 'Rua Maria Elza Castelo, Rio Branco - AC quadra 14A, 16',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-294',
                'created_at' => '2021-01-21 14:43:58',
                'updated_at' => '2021-01-21 14:43:58',
            ),
            273 => 
            array (
                'id' => 1774,
                'endereco' => 'Rodovia AC-40, Rio Branco - AC, 78',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-788',
                'created_at' => '2021-01-21 14:46:14',
                'updated_at' => '2021-01-21 14:46:14',
            ),
            274 => 
            array (
                'id' => 1775,
                'endereco' => 'Rua das Samambaias, Rio Branco - AC, 163',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-218',
                'created_at' => '2021-01-21 14:47:29',
                'updated_at' => '2021-01-21 14:47:29',
            ),
            275 => 
            array (
                'id' => 1776,
                'endereco' => 'Rua das Samambaias, Rio Branco - AC, 163',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-218',
                'created_at' => '2021-01-21 14:50:34',
                'updated_at' => '2021-01-21 14:50:34',
            ),
            276 => 
            array (
                'id' => 1777,
                'endereco' => 'Travessa São José, Rio Branco - AC, 88',
                'bairro' => 'Pista',
                'cep' => '69.911-188',
                'created_at' => '2021-01-21 14:51:08',
                'updated_at' => '2021-01-21 14:51:08',
            ),
            277 => 
            array (
                'id' => 1778,
                'endereco' => 'Rua das Samambaias, Rio Branco - AC, 163',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-218',
                'created_at' => '2021-01-21 14:53:10',
                'updated_at' => '2021-01-21 14:53:10',
            ),
            278 => 
            array (
                'id' => 1779,
                'endereco' => 'Rua 15, Rio Branco - AC, 265',
                'bairro' => 'Glória',
                'cep' => '69.911-140',
                'created_at' => '2021-01-21 14:55:55',
                'updated_at' => '2021-01-21 14:55:55',
            ),
            279 => 
            array (
                'id' => 1780,
                'endereco' => 'Rua Peru, Rio Branco - AC, 323',
                'bairro' => 'Habitasa',
                'cep' => '69.905-106',
                'created_at' => '2021-01-21 14:59:57',
                'updated_at' => '2021-01-21 14:59:57',
            ),
            280 => 
            array (
                'id' => 1781,
                'endereco' => 'Rodovia AC-40, Rio Branco - AC, 78',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-788',
                'created_at' => '2021-01-21 15:05:26',
                'updated_at' => '2021-01-21 15:05:26',
            ),
            281 => 
            array (
                'id' => 1782,
                'endereco' => 'Rua Sena Madureira, Rio Branco - AC, 125',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-272',
                'created_at' => '2021-01-21 15:18:06',
                'updated_at' => '2021-01-21 15:18:06',
            ),
            282 => 
            array (
                'id' => 1783,
                'endereco' => 'Rodovia AC-40, Rio Branco - AC, 88',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-788',
                'created_at' => '2021-01-21 15:20:49',
                'updated_at' => '2021-01-21 15:20:49',
            ),
            283 => 
            array (
                'id' => 1784,
                'endereco' => 'Rua Sena Madureira, Rio Branco - AC, 125',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-272',
                'created_at' => '2021-01-21 15:31:07',
                'updated_at' => '2021-01-21 15:31:07',
            ),
            284 => 
            array (
                'id' => 1785,
                'endereco' => 'Rua São Carlos, Rio Branco - AC, 34',
                'bairro' => 'ELDORADO',
                'cep' => '69.902-377',
                'created_at' => '2021-01-21 15:46:08',
                'updated_at' => '2021-01-21 15:46:08',
            ),
            285 => 
            array (
                'id' => 1786,
                'endereco' => 'Área Rural, Rio Branco - AC, 588',
                'bairro' => 'rodovia ac 40, km 08, travessa otavio',
                'cep' => '69.923-899',
                'created_at' => '2021-01-21 15:57:33',
                'updated_at' => '2021-01-21 15:57:33',
            ),
            286 => 
            array (
                'id' => 1787,
                'endereco' => 'Rua Almirante Jaceguais, Rio Branco - AC, 118',
                'bairro' => 'Isaura PARENTE',
                'cep' => '69.918-305',
                'created_at' => '2021-01-21 16:09:28',
                'updated_at' => '2021-01-21 16:09:28',
            ),
            287 => 
            array (
                'id' => 1788,
                'endereco' => 'Travessa Santa Inês, Rio Branco - AC, 128',
                'bairro' => 'Baixa da COLIna',
                'cep' => '69.901-310',
                'created_at' => '2021-01-21 16:15:24',
                'updated_at' => '2021-01-21 16:15:24',
            ),
            288 => 
            array (
                'id' => 1789,
                'endereco' => 'Travessa Santa Inês, Rio Branco - AC, 128',
                'bairro' => 'Baixa da Colina',
                'cep' => '69.901-310',
                'created_at' => '2021-01-21 16:22:15',
                'updated_at' => '2021-01-21 16:22:15',
            ),
            289 => 
            array (
                'id' => 1790,
                'endereco' => 'Rua 4 de Outubro, Rio Branco - AC, 111',
                'bairro' => 'Pista',
                'cep' => '69.911-178',
                'created_at' => '2021-01-21 16:35:19',
                'updated_at' => '2021-01-21 16:35:19',
            ),
            290 => 
            array (
                'id' => 1791,
                'endereco' => 'Rua Bela Flor, Rio Branco - AC, 234',
                'bairro' => 'Alto Alegre',
                'cep' => '69.921-327',
                'created_at' => '2021-01-21 16:36:01',
                'updated_at' => '2021-01-21 16:36:01',
            ),
            291 => 
            array (
                'id' => 1792,
                'endereco' => 'Rua 4 de Outubro, Rio Branco - AC, 111',
                'bairro' => 'Pista',
                'cep' => '69.911-178',
                'created_at' => '2021-01-21 16:39:54',
                'updated_at' => '2021-01-21 16:39:54',
            ),
            292 => 
            array (
                'id' => 1793,
                'endereco' => 'Rua Avestruz, Rio Branco - AC, 328',
                'bairro' => 'Nova Esperança',
                'cep' => '69.915-248',
                'created_at' => '2021-01-21 16:40:17',
                'updated_at' => '2021-01-21 16:40:17',
            ),
            293 => 
            array (
                'id' => 1794,
                'endereco' => 'Rua Jericó, Rio Branco - AC, 89',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-241',
                'created_at' => '2021-01-21 16:55:29',
                'updated_at' => '2021-01-21 16:55:29',
            ),
            294 => 
            array (
                'id' => 1795,
                'endereco' => 'Rua Dourado, Rio Branco - AC, 66',
                'bairro' => 'Tangará',
                'cep' => '69.915-002',
                'created_at' => '2021-01-21 16:56:03',
                'updated_at' => '2021-01-21 16:56:03',
            ),
            295 => 
            array (
                'id' => 1796,
                'endereco' => 'Rua Jericó, Rio Branco - AC, 89',
                'bairro' => 'Ivete Vargas',
                'cep' => '69.900-241',
                'created_at' => '2021-01-21 16:58:44',
                'updated_at' => '2021-01-21 16:58:44',
            ),
            296 => 
            array (
                'id' => 1797,
                'endereco' => 'Rua Nossa Senhora da Conceição, Rio Branco - AC, 431',
                'bairro' => 'Quinze',
                'cep' => '69.905-496',
                'created_at' => '2021-01-21 17:05:00',
                'updated_at' => '2021-01-21 17:05:00',
            ),
            297 => 
            array (
                'id' => 1798,
                'endereco' => 'Rua Colômbia, Rio Branco - AC, 279',
                'bairro' => 'Bosque',
                'cep' => '69.900-679',
                'created_at' => '2021-01-21 17:18:03',
                'updated_at' => '2021-01-21 17:18:03',
            ),
            298 => 
            array (
                'id' => 1799,
                'endereco' => 'Rua Luiz Moraes, Rio Branco - AC, 298',
                'bairro' => 'Tancredo Neves',
                'cep' => '69.921-752',
                'created_at' => '2021-01-21 17:19:08',
                'updated_at' => '2021-01-21 17:19:08',
            ),
            299 => 
            array (
                'id' => 1800,
                'endereco' => 'Travessa Internacional, Rio Branco - AC, 01',
                'bairro' => 'COMARA',
                'cep' => '69.906-328',
                'created_at' => '2021-01-21 17:23:24',
                'updated_at' => '2021-01-21 17:23:24',
            ),
            300 => 
            array (
                'id' => 1801,
                'endereco' => 'Travessa Internacional, Rio Branco - AC, 01',
                'bairro' => 'COMARA',
                'cep' => '69.906-328',
                'created_at' => '2021-01-21 17:27:48',
                'updated_at' => '2021-01-21 17:27:48',
            ),
            301 => 
            array (
                'id' => 1802,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 54',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-21 17:32:32',
                'updated_at' => '2021-01-21 17:32:32',
            ),
            302 => 
            array (
                'id' => 1803,
                'endereco' => 'Rua Maria José Domingos, Rio Branco - AC, 74',
                'bairro' => 'Calafate',
                'cep' => '69.914-314',
                'created_at' => '2021-01-21 17:32:33',
                'updated_at' => '2021-01-21 17:32:33',
            ),
            303 => 
            array (
                'id' => 1804,
                'endereco' => 'Rua 13 de Maio, Rio Branco - AC, 117',
                'bairro' => 'Ivete VARGAS',
                'cep' => '69.900-205',
                'created_at' => '2021-01-21 17:36:35',
                'updated_at' => '2021-01-21 17:36:35',
            ),
            304 => 
            array (
                'id' => 1805,
                'endereco' => 'Rua Luiz Z da Silva, Rio Branco - AC, 54',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-452',
                'created_at' => '2021-01-21 17:38:13',
                'updated_at' => '2021-01-21 17:38:13',
            ),
            305 => 
            array (
                'id' => 1806,
                'endereco' => 'Rua Campinas, Rio Branco - AC, 60',
                'bairro' => 'Paz',
                'cep' => '69.919-242',
                'created_at' => '2021-01-21 17:43:25',
                'updated_at' => '2021-01-21 17:43:25',
            ),
            306 => 
            array (
                'id' => 1807,
                'endereco' => 'Travessa Internacional, Rio Branco - AC, 01',
                'bairro' => 'Comara',
                'cep' => '69.906-328',
                'created_at' => '2021-01-21 17:47:38',
                'updated_at' => '2021-01-21 17:47:38',
            ),
            307 => 
            array (
                'id' => 1808,
                'endereco' => 'Rua Ruy Bastos, Rio Branco - AC, 33',
                'bairro' => 'Cidade do Povo',
                'cep' => '69.909-290',
                'created_at' => '2021-01-21 18:05:40',
                'updated_at' => '2021-01-21 18:05:40',
            ),
            308 => 
            array (
                'id' => 1809,
                'endereco' => 'Travessa Jaime de Lima, Rio Branco - AC, 31',
                'bairro' => 'Jorge Lavocat',
                'cep' => '69.922-058',
                'created_at' => '2021-01-21 18:11:08',
                'updated_at' => '2021-01-21 18:11:08',
            ),
            309 => 
            array (
                'id' => 1810,
                'endereco' => 'Estrada das Placas, Rio Branco - AC, 776',
                'bairro' => 'PLACAS',
                'cep' => '69.902-770',
                'created_at' => '2021-01-21 18:16:40',
                'updated_at' => '2021-01-21 18:16:40',
            ),
            310 => 
            array (
                'id' => 1811,
                'endereco' => 'Travessa do Açaí, Rio Branco - AC, 99',
                'bairro' => 'Eldorado',
                'cep' => '69.902-524',
                'created_at' => '2021-01-21 18:48:59',
                'updated_at' => '2021-01-21 18:48:59',
            ),
            311 => 
            array (
                'id' => 1812,
                'endereco' => 'Estrada do São Francisco, Rio Branco - AC, 2991',
                'bairro' => 'Eldorado',
                'cep' => '69.902-410',
                'created_at' => '2021-01-21 19:00:45',
                'updated_at' => '2021-01-21 19:00:45',
            ),
            312 => 
            array (
                'id' => 1813,
                'endereco' => 'Rua Pedro Álvares Cabral, Rio Branco - AC, 391',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-174',
                'created_at' => '2021-01-21 19:16:47',
                'updated_at' => '2021-01-21 19:16:47',
            ),
            313 => 
            array (
                'id' => 1814,
                'endereco' => 'Rua da Alegria, Rio Branco - AC, 258',
                'bairro' => 'Bosque',
                'cep' => '69.900-556',
                'created_at' => '2021-01-21 19:22:28',
                'updated_at' => '2021-01-21 19:22:28',
            ),
            314 => 
            array (
                'id' => 1815,
                'endereco' => 'Rua Elias, Rio Branco - AC, 261',
                'bairro' => 'Baixada da Cadeia Velha',
                'cep' => '69.905-278',
                'created_at' => '2021-01-21 19:44:21',
                'updated_at' => '2021-01-21 19:44:21',
            ),
            315 => 
            array (
                'id' => 1816,
                'endereco' => 'Travessa Apucarana, Rio Branco - AC, 210',
                'bairro' => 'João Eduardo II',
                'cep' => '69.911-506',
                'created_at' => '2021-01-21 20:06:14',
                'updated_at' => '2021-01-21 20:06:14',
            ),
            316 => 
            array (
                'id' => 1817,
                'endereco' => 'Avenida Iáco, Rio Branco - AC, 465',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-878',
                'created_at' => '2021-01-21 20:13:24',
                'updated_at' => '2021-01-21 20:13:24',
            ),
            317 => 
            array (
                'id' => 1818,
                'endereco' => 'Rua São João, Rio Branco - AC, 1146',
                'bairro' => 'Loteamento Santa LUZIA',
                'cep' => '69.903-412',
                'created_at' => '2021-01-21 20:25:08',
                'updated_at' => '2021-01-21 20:25:08',
            ),
            318 => 
            array (
                'id' => 1819,
                'endereco' => 'Rua Mustafa Ezaco, Rio Branco - AC, 611',
                'bairro' => 'Areal',
                'cep' => '69.906-053',
                'created_at' => '2021-01-21 20:29:02',
                'updated_at' => '2021-01-21 20:29:02',
            ),
            319 => 
            array (
                'id' => 1820,
                'endereco' => 'Rua Mustafa Ezaco, Rio Branco - AC, 611',
                'bairro' => 'Areal',
                'cep' => '69.906-053',
                'created_at' => '2021-01-21 20:34:58',
                'updated_at' => '2021-01-21 20:34:58',
            ),
            320 => 
            array (
                'id' => 1821,
                'endereco' => 'Estrada da Floresta, Rio Branco - AC, 1893',
                'bairro' => 'Floresta floresta sul',
                'cep' => '69.912-452',
                'created_at' => '2021-01-21 21:06:44',
                'updated_at' => '2021-01-21 21:06:44',
            ),
            321 => 
            array (
                'id' => 1822,
                'endereco' => 'Rua do Cajú, Rio Branco - AC, 555',
                'bairro' => 'Mocinha Magalhães',
                'cep' => '69.920-062',
                'created_at' => '2021-01-21 21:51:44',
                'updated_at' => '2021-01-21 21:51:44',
            ),
            322 => 
            array (
                'id' => 1823,
                'endereco' => 'Rua dos Anturios, Rio Branco - AC, 581',
                'bairro' => 'Jardim Tropical',
                'cep' => '69.901-212',
                'created_at' => '2021-01-21 21:55:24',
                'updated_at' => '2021-01-21 21:55:24',
            ),
            323 => 
            array (
                'id' => 1824,
                'endereco' => ', Senador Guiomard - AC, 2699',
                'bairro' => 'João Rodrigues',
                'cep' => '69.925-000',
                'created_at' => '2021-01-22 02:42:05',
                'updated_at' => '2021-01-22 02:42:05',
            ),
            324 => 
            array (
                'id' => 1825,
                'endereco' => 'Rua Isaura Parente, Rio Branco - AC, 1842',
                'bairro' => 'Isaura Parente',
                'cep' => '69.918-270',
                'created_at' => '2021-01-22 03:44:23',
                'updated_at' => '2021-01-22 03:44:23',
            ),
            325 => 
            array (
                'id' => 1826,
                'endereco' => 'Travessa Beija-flor, Rio Branco - AC, 129',
                'bairro' => 'Areal',
                'cep' => '69.906-104',
                'created_at' => '2021-01-22 03:57:40',
                'updated_at' => '2021-01-22 03:57:40',
            ),
            326 => 
            array (
                'id' => 1827,
                'endereco' => 'Rua Praia do Jordão, Rio Branco - AC, 112',
                'bairro' => 'Praia do Amapá',
                'cep' => '69.906-620',
                'created_at' => '2021-01-22 04:40:36',
                'updated_at' => '2021-01-22 04:40:36',
            ),
            327 => 
            array (
                'id' => 1828,
                'endereco' => 'Rua W9, Rio Branco - AC, 115',
                'bairro' => 'Conjunto TUCUMÃ',
                'cep' => '69.919-754',
                'created_at' => '2021-01-22 06:11:42',
                'updated_at' => '2021-01-22 06:11:42',
            ),
            328 => 
            array (
                'id' => 1829,
                'endereco' => 'Rua 20 de Novembro, Rio Branco - AC, 478',
                'bairro' => 'Boa União',
                'cep' => '69.911-776',
                'created_at' => '2021-01-22 06:18:35',
                'updated_at' => '2021-01-22 06:18:35',
            ),
            329 => 
            array (
                'id' => 1830,
                'endereco' => 'Tv Azeitona, RAMAL Bom Jesus, Rio Branco - AC, 36',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-744',
                'created_at' => '2021-01-22 07:26:09',
                'updated_at' => '2021-01-22 07:26:09',
            ),
            330 => 
            array (
                'id' => 1831,
                'endereco' => 'Tv Azeitona, RAMAL Bom Jesus, Rio Branco - AC, 36',
                'bairro' => 'Vila Acre',
                'cep' => '69.909-744',
                'created_at' => '2021-01-22 07:39:16',
                'updated_at' => '2021-01-22 07:39:16',
            ),
            331 => 
            array (
                'id' => 1832,
                'endereco' => 'Rua Wilson Ribeiro, Rio Branco - AC, 226',
                'bairro' => 'Taquarí',
                'cep' => '69.906-446',
                'created_at' => '2021-01-22 08:07:00',
                'updated_at' => '2021-01-22 08:07:00',
            ),
            332 => 
            array (
                'id' => 1833,
                'endereco' => 'Rua PORTO Nacional, 601',
                'bairro' => 'Parque Bonsucesso',
                'cep' => '69.909-710',
                'created_at' => '2021-01-22 08:16:28',
                'updated_at' => '2021-01-22 08:16:28',
            ),
            333 => 
            array (
                'id' => 1834,
                'endereco' => 'Rua Palmeiral, Rio Branco - AC, 130',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-408',
                'created_at' => '2021-01-22 08:27:56',
                'updated_at' => '2021-01-22 08:27:56',
            ),
            334 => 
            array (
                'id' => 1835,
                'endereco' => 'Rua Dário de Sena, Rio Branco - AC, 584',
                'bairro' => 'Wanderley Dantas',
                'cep' => '69.902-867',
                'created_at' => '2021-01-22 08:28:14',
                'updated_at' => '2021-01-22 08:28:14',
            ),
            335 => 
            array (
                'id' => 1836,
                'endereco' => 'Rua Porto Walter, Rio Branco - AC, 365',
                'bairro' => 'LBA Vila Betel ll',
                'cep' => '69.915-316',
                'created_at' => '2021-01-22 08:29:15',
                'updated_at' => '2021-01-22 08:29:15',
            ),
            336 => 
            array (
                'id' => 1837,
                'endereco' => 'Travessa Dois de JUNHO/ac, 52',
                'bairro' => 'Vitória',
                'cep' => '69.908-970',
                'created_at' => '2021-01-22 08:36:14',
                'updated_at' => '2021-01-22 08:36:14',
            ),
            337 => 
            array (
                'id' => 1838,
                'endereco' => 'Rua Hortências, Rio Branco - AC, 351',
                'bairro' => 'Jardim Primavera',
                'cep' => '69.919-606',
                'created_at' => '2021-01-22 08:38:55',
                'updated_at' => '2021-01-22 08:38:55',
            ),
            338 => 
            array (
                'id' => 1839,
                'endereco' => 'Travessa Dois de JUNHO/ac, 52',
                'bairro' => 'Vitória',
                'cep' => '69.908-970',
                'created_at' => '2021-01-22 08:40:33',
                'updated_at' => '2021-01-22 08:40:33',
            ),
            339 => 
            array (
                'id' => 1840,
                'endereco' => 'Rua Rubens Carneiro, Apto 02, Rio Branco - AC, 625',
                'bairro' => 'Abraão Alab',
                'cep' => '69.918-044',
                'created_at' => '2021-01-22 08:40:36',
                'updated_at' => '2021-01-22 08:40:36',
            ),
            340 => 
            array (
                'id' => 1841,
                'endereco' => 'Rua Rubens Carneiro, Apto 02, Rio Branco - AC, 625',
                'bairro' => 'Abraão Alab',
                'cep' => '69.918-044',
                'created_at' => '2021-01-22 08:45:24',
                'updated_at' => '2021-01-22 08:45:24',
            ),
            341 => 
            array (
                'id' => 1842,
                'endereco' => 'Rua Manoel Castor de Araújo, Rio Branco - AC, 248',
                'bairro' => 'Bosque',
                'cep' => '69.900-517',
                'created_at' => '2021-01-22 08:55:30',
                'updated_at' => '2021-01-22 08:55:30',
            ),
            342 => 
            array (
                'id' => 1843,
                'endereco' => 'RUA DA PRAÇA, 153',
                'bairro' => 'Loteamento Novo Horizonte',
                'cep' => '69.921-134',
                'created_at' => '2021-01-22 09:09:53',
                'updated_at' => '2021-01-22 09:09:53',
            ),
            343 => 
            array (
                'id' => 1844,
                'endereco' => 'Rua Palmeiral, Rio Branco - AC, 130',
                'bairro' => 'Cidade NOVA',
                'cep' => '69.905-408',
                'created_at' => '2021-01-22 09:09:58',
                'updated_at' => '2021-01-22 09:09:58',
            ),
            344 => 
            array (
                'id' => 1845,
                'endereco' => 'Rua Veterano R. Pinto, Rio Branco - AC, 197',
                'bairro' => 'Conjunto Manoel Julião',
                'cep' => '69.918-412',
                'created_at' => '2021-01-22 09:10:37',
                'updated_at' => '2021-01-22 09:10:37',
            ),
            345 => 
            array (
                'id' => 1846,
                'endereco' => 'Rua arauna n° 127 quadra 05 casa 05, 127',
                'bairro' => 'Eldorado',
                'cep' => '68.902-538',
                'created_at' => '2021-01-22 09:34:35',
                'updated_at' => '2021-01-22 09:34:35',
            ),
            346 => 
            array (
                'id' => 1847,
                'endereco' => 'Rua Araruna, Rio Branco - AC, 127',
                'bairro' => 'Eldorado',
                'cep' => '69.902-538',
                'created_at' => '2021-01-22 09:40:03',
                'updated_at' => '2021-01-22 09:40:03',
            ),
            347 => 
            array (
                'id' => 1848,
                'endereco' => 'Loteamento Aroeira Rua Rio das flores, 229',
                'bairro' => 'Calafate',
                'cep' => '69.909-710',
                'created_at' => '2021-01-22 10:02:46',
                'updated_at' => '2021-01-22 10:02:46',
            ),
            348 => 
            array (
                'id' => 1849,
                'endereco' => 'Rua Tianguá, Rio Branco - AC, 382',
                'bairro' => 'Vila Custódio Freire',
                'cep' => '69.922-435',
                'created_at' => '2021-01-22 10:06:22',
                'updated_at' => '2021-01-22 10:06:22',
            ),
            349 => 
            array (
                'id' => 1850,
                'endereco' => 'Rua Saldanha Marinho, Rio Branco - AC, 187',
                'bairro' => 'Estação Experimental',
                'cep' => '69.918-200',
                'created_at' => '2021-01-22 10:08:35',
                'updated_at' => '2021-01-22 10:08:35',
            ),
            350 => 
            array (
                'id' => 1851,
                'endereco' => 'Rua Coronel Alexandrino, Rio Branco - AC, 376',
                'bairro' => 'Bosque',
                'cep' => '69.900-658',
                'created_at' => '2021-01-22 10:12:51',
                'updated_at' => '2021-01-22 10:12:51',
            ),
            351 => 
            array (
                'id' => 1852,
                'endereco' => 'Rua Copaiba, Rio Branco - AC, 187',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-880',
                'created_at' => '2021-01-22 10:39:00',
                'updated_at' => '2021-01-22 10:39:00',
            ),
            352 => 
            array (
                'id' => 1853,
                'endereco' => 'Travessa Cruzeiro do Sul, Rio Branco - AC, 197',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-009',
                'created_at' => '2021-01-22 10:49:40',
                'updated_at' => '2021-01-22 10:49:40',
            ),
            353 => 
            array (
                'id' => 1854,
                'endereco' => 'Rua Gilson Nogueira Barros, Rio Branco - AC, 318',
                'bairro' => 'Calafate',
                'cep' => '69.914-370',
                'created_at' => '2021-01-22 10:50:00',
                'updated_at' => '2021-01-22 10:50:00',
            ),
            354 => 
            array (
                'id' => 1855,
                'endereco' => 'Rua Andiroba, Rio Branco - AC, 187',
                'bairro' => 'Portal da Amazônia',
                'cep' => '69.915-864',
                'created_at' => '2021-01-22 10:52:09',
                'updated_at' => '2021-01-22 10:52:09',
            ),
            355 => 
            array (
                'id' => 1856,
                'endereco' => 'Travessa Zona Ampliada, Rio Branco - AC, 25',
                'bairro' => 'CAPOEIRA',
                'cep' => '69.905-002',
                'created_at' => '2021-01-22 11:02:13',
                'updated_at' => '2021-01-22 11:02:13',
            ),
            356 => 
            array (
                'id' => 1857,
                'endereco' => 'Rua Vilhena, Rio Branco - AC, 91',
                'bairro' => 'Pista',
                'cep' => '69.911-174',
                'created_at' => '2021-01-22 11:03:36',
                'updated_at' => '2021-01-22 11:03:36',
            ),
            357 => 
            array (
                'id' => 1858,
                'endereco' => 'Rua 10 de Julho, Rio Branco - AC, 698',
                'bairro' => 'Placas',
                'cep' => '69.902-758',
                'created_at' => '2021-01-22 11:05:39',
                'updated_at' => '2021-01-22 11:05:39',
            ),
            358 => 
            array (
                'id' => 1859,
                'endereco' => 'Avenida Dorval Camilo, Rio Branco - AC, 463',
                'bairro' => 'Canaã',
                'cep' => '69.905-859',
                'created_at' => '2021-01-22 11:16:31',
                'updated_at' => '2021-01-22 11:16:31',
            ),
            359 => 
            array (
                'id' => 1860,
                'endereco' => 'Rua Santa Terezinha, Rio Branco - AC, 0404',
                'bairro' => 'Seis de Agosto',
                'cep' => '69.905-666',
                'created_at' => '2021-01-22 11:18:39',
                'updated_at' => '2021-01-22 11:18:39',
            ),
            360 => 
            array (
                'id' => 1861,
                'endereco' => 'Estrada do Amapá km2, 309',
                'bairro' => 'Corrente',
                'cep' => '69.900-000',
                'created_at' => '2021-01-22 11:22:55',
                'updated_at' => '2021-01-22 11:22:55',
            ),
            361 => 
            array (
                'id' => 1862,
                'endereco' => 'Rua Rio Grande do Sul, 516, 02',
                'bairro' => 'Dom giocondo',
                'cep' => '69.903-120',
                'created_at' => '2021-01-22 12:22:57',
                'updated_at' => '2021-01-22 12:22:57',
            ),
            362 => 
            array (
                'id' => 1863,
                'endereco' => 'Rua Aldeota, Rio Branco - AC, 338',
                'bairro' => 'Praia do Amapá',
                'cep' => '69.906-624',
                'created_at' => '2021-01-22 13:04:53',
                'updated_at' => '2021-01-22 13:04:53',
            ),
            363 => 
            array (
                'id' => 1864,
                'endereco' => 'Rua Raimundo Herculano, Rio Branco - AC, 43',
                'bairro' => 'Rosa Linda',
                'cep' => '69.909-111',
                'created_at' => '2021-01-22 13:07:16',
                'updated_at' => '2021-01-22 13:07:16',
            ),
            364 => 
            array (
                'id' => 1865,
                'endereco' => 'Rua Floriano Peixoto, Rio Branco - AC, 469',
                'bairro' => 'BASEbase',
                'cep' => '69.900-046',
                'created_at' => '2021-01-22 13:08:56',
                'updated_at' => '2021-01-22 13:08:56',
            ),
            365 => 
            array (
                'id' => 1866,
                'endereco' => 'Rua Judite Góes, Rio Branco - AC, 182',
                'bairro' => 'Vila Albert Sampaio',
                'cep' => '69.908-248',
                'created_at' => '2021-01-22 13:13:45',
                'updated_at' => '2021-01-22 13:13:45',
            ),
            366 => 
            array (
                'id' => 1867,
                'endereco' => 'Rua Adão Felipe, Rio Branco - AC, 469',
                'bairro' => 'Vila Custódio Freire',
                'cep' => '69.922-423',
                'created_at' => '2021-01-22 13:15:18',
                'updated_at' => '2021-01-22 13:15:18',
            ),
            367 => 
            array (
                'id' => 1868,
                'endereco' => 'Rua Raimundo Herculano, Rio Branco - AC, 43',
                'bairro' => 'Rosa Linda',
                'cep' => '69.909-111',
                'created_at' => '2021-01-22 13:16:37',
                'updated_at' => '2021-01-22 13:16:37',
            ),
            368 => 
            array (
                'id' => 1869,
                'endereco' => 'Rua Cremilda Castor, Rio Branco - AC, 36',
                'bairro' => 'Bosque',
                'cep' => '69.900-409',
                'created_at' => '2021-01-22 13:26:00',
                'updated_at' => '2021-01-22 13:26:00',
            ),
            369 => 
            array (
                'id' => 1870,
                'endereco' => 'Rua Maracanã, 167, Rio Branco - AC, 7',
                'bairro' => 'Residencial Iolanda',
                'cep' => '69.918-886',
                'created_at' => '2021-01-22 13:37:19',
                'updated_at' => '2021-01-22 13:37:19',
            ),
            370 => 
            array (
                'id' => 1871,
                'endereco' => 'Rua João Costa, Rio Branco - AC, 303',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-158',
                'created_at' => '2021-01-22 13:48:46',
                'updated_at' => '2021-01-22 13:48:46',
            ),
            371 => 
            array (
                'id' => 1872,
                'endereco' => 'Rua da Sanacre, Rio Branco - AC, 248',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-731',
                'created_at' => '2021-01-22 13:51:53',
                'updated_at' => '2021-01-22 13:51:53',
            ),
            372 => 
            array (
                'id' => 1873,
                'endereco' => 'Rua João Costa, Rio Branco - AC, 303',
                'bairro' => 'Conjunto Adalberto Sena',
                'cep' => '69.921-158',
                'created_at' => '2021-01-22 13:54:44',
                'updated_at' => '2021-01-22 13:54:44',
            ),
            373 => 
            array (
                'id' => 1874,
                'endereco' => 'Rua Cruzeiro do Sul, Rio Branco - AC, 606',
                'bairro' => 'Vila Custódio Freire',
                'cep' => '69.922-417',
                'created_at' => '2021-01-22 14:01:17',
                'updated_at' => '2021-01-22 14:01:17',
            ),
            374 => 
            array (
                'id' => 1875,
                'endereco' => 'Rua Cruzeiro do Sul, Rio Branco - AC, 606',
                'bairro' => 'Vila Custódio Freire',
                'cep' => '69.922-417',
                'created_at' => '2021-01-22 14:05:46',
                'updated_at' => '2021-01-22 14:05:46',
            ),
            375 => 
            array (
                'id' => 1876,
                'endereco' => 'Rua Rio Grande do Sul, Rio Branco - AC, 2720',
                'bairro' => 'Aeroporto Velho',
                'cep' => '69.911-036',
                'created_at' => '2021-01-22 14:12:56',
                'updated_at' => '2021-01-22 14:12:56',
            ),
            376 => 
            array (
                'id' => 1877,
                'endereco' => 'Avenida dos Ipês, Rio Branco - AC, 664',
                'bairro' => 'Loteamento Santa Luzia',
                'cep' => '69.903-343',
                'created_at' => '2021-01-22 14:17:00',
                'updated_at' => '2021-01-22 14:17:00',
            ),
            377 => 
            array (
                'id' => 1878,
                'endereco' => 'Rua Peru, Rio Branco - AC, 602',
                'bairro' => 'Habitasa',
                'cep' => '69.905-106',
                'created_at' => '2021-01-22 14:17:52',
                'updated_at' => '2021-01-22 14:17:52',
            ),
            378 => 
            array (
                'id' => 1879,
                'endereco' => 'Rua Mercúrio, Rio Branco - AC, 22',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-115',
                'created_at' => '2021-01-22 14:31:41',
                'updated_at' => '2021-01-22 14:31:41',
            ),
            379 => 
            array (
                'id' => 1880,
                'endereco' => 'Rua Henrique Dias, Rio Branco - AC, 393',
                'bairro' => 'Bosque',
                'cep' => '69.900-625',
                'created_at' => '2021-01-22 14:35:11',
                'updated_at' => '2021-01-22 14:35:11',
            ),
            380 => 
            array (
                'id' => 1881,
                'endereco' => 'Rua São Marcos, Rio Branco - AC, 416',
                'bairro' => 'Jardim Europa',
                'cep' => '69.915-428',
                'created_at' => '2021-01-22 14:38:35',
                'updated_at' => '2021-01-22 14:38:35',
            ),
            381 => 
            array (
                'id' => 1882,
                'endereco' => 'Travessa Cruzeiro do Sul, Rio Branco - AC, 259',
                'bairro' => 'Volta Seca',
                'cep' => '69.911-009',
                'created_at' => '2021-01-22 14:46:44',
                'updated_at' => '2021-01-22 14:46:44',
            ),
            382 => 
            array (
                'id' => 1883,
                'endereco' => 'Rua Mercúrio, Rio Branco - AC, 22',
                'bairro' => 'Morada do Sol',
                'cep' => '69.901-115',
                'created_at' => '2021-01-22 14:47:32',
                'updated_at' => '2021-01-22 14:47:32',
            ),
            383 => 
            array (
                'id' => 1884,
                'endereco' => 'Rua N6, Rio Branco - AC, 137',
                'bairro' => 'Conjunto Tucumã 2',
                'cep' => '69.919-793',
                'created_at' => '2021-01-22 14:50:46',
                'updated_at' => '2021-01-22 14:50:46',
            ),
            384 => 
            array (
                'id' => 1885,
                'endereco' => 'Rua Mariana, Rio Branco - AC, 426',
                'bairro' => 'Vila da Amizade',
                'cep' => '69.909-658',
                'created_at' => '2021-01-22 14:57:37',
                'updated_at' => '2021-01-22 14:57:37',
            ),
            385 => 
            array (
                'id' => 1886,
                'endereco' => 'Travessa Praxedes, Rio Branco - AC, 432',
                'bairro' => 'Seis de AGOSTO',
                'cep' => '69.905-632',
                'created_at' => '2021-01-22 15:06:08',
                'updated_at' => '2021-01-22 15:06:08',
            ),
            386 => 
            array (
                'id' => 1887,
                'endereco' => 'Avenida dos Ipês, Rio Branco - AC, 49',
                'bairro' => 'Apolônio sales',
                'cep' => '69.903-343',
                'created_at' => '2021-01-22 15:09:18',
                'updated_at' => '2021-01-22 15:09:18',
            ),
            387 => 
            array (
                'id' => 1888,
                'endereco' => 'Avenida dos Ipês, Rio Branco - AC, 49',
                'bairro' => 'Apolônio sales',
                'cep' => '69.903-343',
                'created_at' => '2021-01-22 15:12:50',
                'updated_at' => '2021-01-22 15:12:50',
            ),
            388 => 
            array (
                'id' => 1889,
                'endereco' => 'Avenida dos Ipês, Rio Branco - AC, 49',
                'bairro' => 'Apolônio sales',
                'cep' => '69.903-343',
                'created_at' => '2021-01-22 15:17:16',
                'updated_at' => '2021-01-22 15:17:16',
            ),
            389 => 
            array (
                'id' => 1890,
                'endereco' => 'Rua Tabosa, Rio Branco - AC, 112',
                'bairro' => 'João Paulo',
                'cep' => '69.912-062',
                'created_at' => '2021-01-22 15:21:07',
                'updated_at' => '2021-01-22 15:21:07',
            ),
            390 => 
            array (
                'id' => 1891,
                'endereco' => 'Rua Vitória, Rio Branco - AC, 60',
                'bairro' => 'Conquista',
                'cep' => '69.918-780',
                'created_at' => '2021-01-22 16:10:03',
                'updated_at' => '2021-01-22 16:10:03',
            ),
            391 => 
            array (
                'id' => 1892,
                'endereco' => 'Avenida Edmundo Pinto, Rio Branco - AC, 326',
                'bairro' => 'Conjunto Oscar Passos',
                'cep' => '69.901-640',
                'created_at' => '2021-01-22 16:16:01',
                'updated_at' => '2021-01-22 16:16:01',
            ),
            392 => 
            array (
                'id' => 1893,
                'endereco' => 'Rua Salinas, Rio Branco - AC, 185',
                'bairro' => 'Ayrton Sena',
                'cep' => '69.911-844',
                'created_at' => '2021-01-22 16:26:21',
                'updated_at' => '2021-01-22 16:26:21',
            ),
            393 => 
            array (
                'id' => 1894,
                'endereco' => 'Avenida Edmundo Pinto, Rio Branco - AC, 326',
                'bairro' => 'Conjunto Oscar Passos',
                'cep' => '69.901-640',
                'created_at' => '2021-01-22 16:29:50',
                'updated_at' => '2021-01-22 16:29:50',
            ),
            394 => 
            array (
                'id' => 1895,
                'endereco' => 'rua das hortencias, Porto Acre - AC, 171',
                'bairro' => 'vila do incra',
                'cep' => '69.927-000',
                'created_at' => '2021-01-22 16:32:30',
                'updated_at' => '2021-01-22 16:32:30',
            ),
            395 => 
            array (
                'id' => 1896,
                'endereco' => 'Rua Manoel Ribeiro, Rio Branco - AC, 223',
                'bairro' => 'Bahia NOVA',
                'cep' => '69.911-680',
                'created_at' => '2021-01-22 16:48:15',
                'updated_at' => '2021-01-22 16:48:15',
            ),
            396 => 
            array (
                'id' => 1897,
                'endereco' => 'Rua Bebeto Alves, Rio Branco - AC, 150',
                'bairro' => 'São Francisco',
                'cep' => '69.901-558',
                'created_at' => '2021-01-22 16:56:29',
                'updated_at' => '2021-01-22 16:56:29',
            ),
            397 => 
            array (
                'id' => 1898,
                'endereco' => 'Rua Princesinha, Rio Branco - AC, 420',
                'bairro' => 'Belo Jardim',
                'cep' => '69.907-846',
                'created_at' => '2021-01-22 17:04:59',
                'updated_at' => '2021-01-22 17:04:59',
            ),
            398 => 
            array (
                'id' => 1899,
                'endereco' => 'Rua Ubatuba, Rio Branco - AC, 195',
                'bairro' => 'Vilage Wilde Maciel',
                'cep' => '69.918-506',
                'created_at' => '2021-01-22 17:11:49',
                'updated_at' => '2021-01-22 17:11:49',
            ),
            399 => 
            array (
                'id' => 1900,
                'endereco' => 'Rua Senador Mário Maia, Rio Branco - AC, 505',
                'bairro' => 'Montanhês',
                'cep' => '69.921-545',
                'created_at' => '2021-01-22 17:12:01',
                'updated_at' => '2021-01-22 17:12:01',
            ),
            400 => 
            array (
                'id' => 1901,
                'endereco' => 'Rua Coari, Rio Branco - AC, 08',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.920-152',
                'created_at' => '2021-01-22 17:18:44',
                'updated_at' => '2021-01-22 17:18:44',
            ),
            401 => 
            array (
                'id' => 1902,
                'endereco' => 'Rua Senador Mário Maia, Rio Branco - AC, 505',
                'bairro' => 'Montanhês',
                'cep' => '69.921-545',
                'created_at' => '2021-01-22 17:20:35',
                'updated_at' => '2021-01-22 17:20:35',
            ),
            402 => 
            array (
                'id' => 1903,
                'endereco' => 'Rua Acre, Rio Branco - AC, 76',
                'bairro' => 'Vila da Amizade',
                'cep' => '69.909-669',
                'created_at' => '2021-01-22 17:22:13',
                'updated_at' => '2021-01-22 17:22:13',
            ),
            403 => 
            array (
                'id' => 1904,
                'endereco' => 'Rua Ubatuba, Rio Branco - AC, 195',
                'bairro' => 'Vilage Wilde Maciel',
                'cep' => '69.918-506',
                'created_at' => '2021-01-22 17:22:34',
                'updated_at' => '2021-01-22 17:22:34',
            ),
            404 => 
            array (
                'id' => 1905,
                'endereco' => 'Rua Sebastião Amâncio, Rio Branco - AC, 198',
                'bairro' => 'João Paulo II',
                'cep' => '69.912-054',
                'created_at' => '2021-01-22 17:26:09',
                'updated_at' => '2021-01-22 17:26:09',
            ),
            405 => 
            array (
                'id' => 1906,
                'endereco' => 'Rua Ubatuba, Rio Branco - AC, 195',
                'bairro' => 'Vilage Wilde Maciel',
                'cep' => '69.918-506',
                'created_at' => '2021-01-22 17:26:32',
                'updated_at' => '2021-01-22 17:26:32',
            ),
            406 => 
            array (
                'id' => 1907,
                'endereco' => 'Rua Alfredo Zaire, apt04, Rio Branco - AC, 111',
                'bairro' => 'Conjunto Bela Vista',
                'cep' => '69.911-304',
                'created_at' => '2021-01-22 17:35:56',
                'updated_at' => '2021-01-22 17:35:56',
            ),
            407 => 
            array (
                'id' => 1908,
                'endereco' => 'Travessa Júlio César, Rio Branco - AC, 122',
                'bairro' => 'CERÂMICA',
                'cep' => '69.905-056',
                'created_at' => '2021-01-22 18:12:16',
                'updated_at' => '2021-01-22 18:12:16',
            ),
            408 => 
            array (
                'id' => 1909,
                'endereco' => 'Rua Cedro, Rio Branco - AC, 286',
                'bairro' => 'Loteamento JOAFRA',
                'cep' => '69.919-400',
                'created_at' => '2021-01-22 18:41:40',
                'updated_at' => '2021-01-22 18:41:40',
            ),
            409 => 
            array (
                'id' => 1910,
                'endereco' => 'Francisco Sales ac, 984190023',
                'bairro' => 'Canna',
                'cep' => '69.909-710',
                'created_at' => '2021-01-22 18:49:49',
                'updated_at' => '2021-01-22 18:49:49',
            ),
            410 => 
            array (
                'id' => 1911,
                'endereco' => 'Rua Coxim, Rio Branco - AC, 74',
                'bairro' => 'Tancredo NEVES',
                'cep' => '69.921-692',
                'created_at' => '2021-01-22 18:55:03',
                'updated_at' => '2021-01-22 18:55:03',
            ),
            411 => 
            array (
                'id' => 1912,
                'endereco' => 'Rua da Sanacre, Rio Branco - AC, 494',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-731',
                'created_at' => '2021-01-22 19:07:15',
                'updated_at' => '2021-01-22 19:07:15',
            ),
            412 => 
            array (
                'id' => 1913,
                'endereco' => 'Rua Bogotá, Rio Branco - AC, 95',
                'bairro' => 'Baixada da Habitasa',
                'cep' => '69.905-172',
                'created_at' => '2021-01-22 19:33:06',
                'updated_at' => '2021-01-22 19:33:06',
            ),
            413 => 
            array (
                'id' => 1914,
                'endereco' => 'Rua Baguari, Rio Branco - AC, 2240',
                'bairro' => 'TAQUARÍ',
                'cep' => '69.906-426',
                'created_at' => '2021-01-22 20:04:32',
                'updated_at' => '2021-01-22 20:04:32',
            ),
            414 => 
            array (
                'id' => 1915,
                'endereco' => 'Rua Adão Felipe, Rio Branco - AC, 485',
                'bairro' => 'Vila Custódio Freire',
                'cep' => '69.922-423',
                'created_at' => '2021-01-22 20:08:18',
                'updated_at' => '2021-01-22 20:08:18',
            ),
            415 => 
            array (
                'id' => 1916,
                'endereco' => 'Travessa Santo Antônio, Rio Branco - AC, 74',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-740',
                'created_at' => '2021-01-22 20:32:16',
                'updated_at' => '2021-01-22 20:32:16',
            ),
            416 => 
            array (
                'id' => 1917,
                'endereco' => 'Rua Santa Edvirges, Rio Branco - AC, 120',
                'bairro' => 'Conjunto Rui Lino',
                'cep' => '69.919-860',
                'created_at' => '2021-01-22 20:32:47',
                'updated_at' => '2021-01-22 20:32:47',
            ),
            417 => 
            array (
                'id' => 1918,
                'endereco' => 'Travessa Santo Antônio, Rio Branco - AC, 74',
                'bairro' => 'Santa Inês',
                'cep' => '69.907-740',
                'created_at' => '2021-01-22 20:38:01',
                'updated_at' => '2021-01-22 20:38:01',
            ),
            418 => 
            array (
                'id' => 1919,
                'endereco' => 'Rua Santa Edvirges, Rio Branco - AC, 120',
                'bairro' => 'Conjunto Rui Lino120',
                'cep' => '69.919-860',
                'created_at' => '2021-01-22 20:40:21',
                'updated_at' => '2021-01-22 20:40:21',
            ),
            419 => 
            array (
                'id' => 1920,
                'endereco' => 'Rua Santa Edvirges, Rio Branco - AC, 120',
                'bairro' => 'Conjunto Rui Lino120',
                'cep' => '69.919-860',
                'created_at' => '2021-01-22 20:45:51',
                'updated_at' => '2021-01-22 20:45:51',
            ),
        ));
        
        
    }
}