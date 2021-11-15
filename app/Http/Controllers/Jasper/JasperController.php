<?php

namespace App\Http\Controllers\Jasper;

use App\Http\Controllers\Controller;
use App\Models\Escolaridade;
use App\Models\Modulo;
use Cassandra\Timestamp;
use http\Client\Response;
use Illuminate\Http\Request;
use PHPJasper\PHPJasper;
use function GuzzleHttp\Promise\all;

class JasperController extends Controller
{
    //
    static public function index(Request $request)
    {
        $input = public_path() . '/jasper/inscritosescola.jasper';
        $output = public_path() . '/jasper/pdf/inscritosescola';
        if (is_null($request->Filtromodulo) && is_null($request->Filtroescolaridade) && is_null($request->periodo_inicio) && is_null($request->periodo_fim)) {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                ],

                'db_connection' => [
                    'driver' => getenv('DB_CONNECTION'),
                    'username' => getenv('DB_USERNAME'),
                    'password' => getenv('DB_PASSWORD'),
                    'host' => getenv('DB_HOST'),
                    'database' => getenv('DB_DATABASE'),
                    'port' => getenv('DB_PORT'),
                ]
            ];
        } elseif (!is_null($request->Filtromodulo) && is_null($request->Filtroescolaridade) && is_null($request->periodo_inicio) && is_null($request->periodo_fim)) {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtromodulo' => $request->Filtromodulo,
                ],
                'db_connection' => [
                    'driver' => getenv('DB_CONNECTION'),
                    'username' => getenv('DB_USERNAME'),
                    'password' => getenv('DB_PASSWORD'),
                    'host' => getenv('DB_HOST'),
                    'database' => getenv('DB_DATABASE'),
                    'port' => getenv('DB_PORT'),
                ]
            ];
        } elseif (!is_null($request->Filtromodulo) && !is_null($request->periodo_inicio) && !is_null($request->periodo_fim) && is_null($request->Filtroescolaridade)) {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtromodulo' => $request->Filtromodulo,
                    'Filtroperiodoinicio' => $request->periodo_inicio,
                    'Filtroperiodofim' => $request->periodo_fim
                ],
                'db_connection' => [
                    'driver' => getenv('DB_CONNECTION'),
                    'username' => getenv('DB_USERNAME'),
                    'password' => getenv('DB_PASSWORD'),
                    'host' => getenv('DB_HOST'),
                    'database' => getenv('DB_DATABASE'),
                    'port' => getenv('DB_PORT'),
                ]
            ];
        } elseif (!is_null($request->Filtroescolaridade) && !is_null($request->periodo_inicio) && !is_null($request->periodo_fim) && is_null($request->Filtromodulo)) {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtroescolaridade' => $request->Filtroescolaridade,
                    'Filtroperiodoinicio' => $request->periodo_inicio,
                    'Filtroperiodofim' => $request->periodo_fim
                ],
                'db_connection' => [
                    'driver' => getenv('DB_CONNECTION'),
                    'username' => getenv('DB_USERNAME'),
                    'password' => getenv('DB_PASSWORD'),
                    'host' => getenv('DB_HOST'),
                    'database' => getenv('DB_DATABASE'),
                    'port' => getenv('DB_PORT'),
                ]
            ];
        } elseif (!is_null($request->Filtroescolaridade) && !is_null($request->periodo_inicio) && !is_null($request->periodo_fim) && !is_null($request->Filtromodulo)) {

            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtroescolaridade' => $request->Filtroescolaridade,
                    'Filtromodulo' => $request->Filtromodulo,
                    'Filtroperiodoinicio' => date('Y-m-d H:i:s',strtotime($request->periodo_inicio)),

                    'Filtroperiodofim' => date('Y-m-d H:i:s',strtotime($request->periodo_fim))

                ],
                'db_connection' => [
                    'driver' => getenv('DB_CONNECTION'),
                    'username' => getenv('DB_USERNAME'),
                    'password' => getenv('DB_PASSWORD'),
                    'host' => getenv('DB_HOST'),
                    'database' => getenv('DB_DATABASE'),
                    'port' => getenv('DB_PORT'),
                ]
            ];

        } elseif (is_null($request->Filtroescolaridade) && !is_null($request->periodo_inicio) && !is_null($request->periodo_fim) && is_null($request->Filtromodulo)) {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtroperiodoinicio' => $request->periodo_inicio,
                    'Filtroperiodofim' => $request->periodo_fim
                ],
                'db_connection' => [
                    'driver' => getenv('DB_CONNECTION'),
                    'username' => getenv('DB_USERNAME'),
                    'password' => getenv('DB_PASSWORD'),
                    'host' => getenv('DB_HOST'),
                    'database' => getenv('DB_DATABASE'),
                    'port' => getenv('DB_PORT'),
                ]
            ];
        } else {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtromodulo' => $request->Filtromodulo,
                    'Filtroescolaridade' => $request->Filtroescolaridade,
                    'Filtroperiodoinicio' => $request->periodo_inicio,
                    'Filtroperiodofim' => $request->periodo_fim
                ],

                'db_connection' => [
                    'driver' => getenv('DB_CONNECTION'),
                    'username' => getenv('DB_USERNAME'),
                    'password' => getenv('DB_PASSWORD'),
                    'host' => getenv('DB_HOST'),
                    'database' => getenv('DB_DATABASE'),
                    'port' => getenv('DB_PORT'),
                ]
            ];
        }

        $jasper = new PHPJasper();

        $stmt = $jasper->process(
            $input,
            $output,
            $options
        )->execute();

        //verificando erro

//       $stmt = $jasper->process(
//            $input,
//            $output,
//            $options
//        )->output();
//        dd($stmt);
        return $output . '.pdf';
    }
}
