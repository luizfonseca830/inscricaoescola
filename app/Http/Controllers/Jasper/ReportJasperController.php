<?php

namespace App\Http\Controllers\Jasper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPJasper\PHPJasper;

class ReportJasperController extends Controller
{
    static public function index(Request $request)
    {
        $input = public_path() . '/jasper/relatorionumerico.jasper';
        $output = public_path() . '/jasper/pdf/relatorionumerico';
        if (is_null($request->Filtroescolaridade)) {
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
        } else {
            $options = [
                'format' => ['pdf'],
                'params' => [
                    'CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png',
                    'Filtroescolaridade' => $request->Filtroescolaridade,
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

      /*  $compilando = $jasper->compile($input)->output();
              dd($compilando);*/

        $x = $jasper->process(
            $input,
            $output,
            $options
        )->execute();

     /*   dd($x);*/
        return $output . '.pdf';
    }
}
