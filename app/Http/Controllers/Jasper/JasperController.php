<?php

namespace App\Http\Controllers\Jasper;

use App\Http\Controllers\Controller;
use App\Models\Escolaridade;
use App\Models\Modulo;
use http\Client\Response;
use Illuminate\Http\Request;
use PHPJasper\PHPJasper;

class JasperController extends Controller
{
    //
    static public function index(Request $request)
    {
        $input = public_path() . '/jasper/inscritosescola.jasper';
        $output = public_path() . '/jasper/pdf/inscritosescola';
        if (is_null($request->Filtromodulo) && is_null($request->Filtroescolaridade)) {
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
        } else if (!is_null($request->Filtromodulo) && is_null($request->Filtroescolaridade)) {
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
        } else {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtromodulo' => $request->Filtromodulo,
                    'Filtroescolaridade' => $request->Filtroescolaridade
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

        /* $compilando = $jasper->compile($input)->output();
               dd($compilando);*/

        $x = $jasper->process(
            $input,
            $output,
            $options
        )->execute();

     /*  dd($x);*/
        return $output . '.pdf';
    }
}
