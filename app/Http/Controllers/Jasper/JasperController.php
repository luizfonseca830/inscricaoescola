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
        $input = public_path() . '/jasper/INSTITUTO SÃO JOSÉ_JASPER.jasper';


        $output = public_path() . '/jasper/pdf/';

        $jasper = new PHPJasper();
        $options = [
            'format' => ['pdf'],
            'db_connection' => [
                'driver' => getenv('DB_CONNECTION'),
                'username' => getenv('DB_USERNAME'),
                'password' => getenv('DB_PASSWORD'),
                'host' => getenv('DB_HOST'),
                'database' => getenv('DB_DATABASE'),
                'port' => getenv('DB_PORT'),
            ]
        ];

        $x = $jasper->process(
            $input,
            $output,
            $options
        )->$output();
        dd($x);
        return $output . '.pdf';
    }
}
