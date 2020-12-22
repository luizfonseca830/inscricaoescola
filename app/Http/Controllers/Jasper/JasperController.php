<?php

namespace App\Http\Controllers\Jasper;

use App\Http\Controllers\Controller;
use http\Client\Response;
use Illuminate\Http\Request;
use PHPJasper\PHPJasper;

class JasperController extends Controller
{
    //
    static public function index()
    {
        $input = public_path() . '/jasper/inscritosescola.jasper';
        $output = public_path() . '/jasper/pdf/inscritosescola';
        $options = [
            'format' => ['pdf'],
            'params' => ['CAMINHO_IMAGEM' => public_path() . '/jasper/logoinstituto.png'],
            'db_connection' => [
                'driver' => getenv('DB_CONNECTION'),
                'username' => getenv('DB_USERNAME'),
                'password' => getenv('DB_PASSWORD'),
                'host' => getenv('DB_HOST'),
                'database' => getenv('DB_DATABASE'),
                'port' => getenv('DB_PORT'),
            ]
        ];
        $jasper = new PHPJasper();
    /*     $jasper->compile($input)->execute();*/
        $x = $jasper->process(
            $input,
            $output,
            $options
        )->execute();
   /*   dd($x);*/
        return $output . '.pdf';
    }
}
