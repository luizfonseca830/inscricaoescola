<?php

namespace App\Http\Controllers\Jasper;

use App\Http\Controllers\Controller;
use http\Client\Response;
use Illuminate\Http\Request;
use PHPJasper\PHPJasper;

class JasperController extends Controller
{
    //
    static public function index($escolaridade)
    {
        $input = public_path() . '/jasper/SEINFRA_JASPER.jasper';


        $output = public_path() . '/jasper/pdf/'.JasperController::tirarAcentos($escolaridade);

        $jasper = new PHPJasper();
        $options = [
            'format' => ['pdf'],
            'params' => [
                'FilterCargo' => JasperController::tirarAcentos($escolaridade),

            ],
            'db_connection' => [
                'driver' => getenv('DB_CONNECTION'), //mysql,postgres ....
                'username' => getenv('DB_USERNAME'),
                //'password' => getenv('DB_PASSWORD'),
                //CASO TENHA SENHA CRIAR PASSWORD NO VETOR E => PASSA A SENHA 'SENHA'
                'host' => getenv('DB_HOST'),
                'database' => getenv('DB_DATABASE'),
                'port' => getenv('DB_PORT'),
            ]
        ];

        $x = $jasper->process(
            $input,
            $output,
            $options
        )->execute();

        return $output . '.pdf';
    }

    static function tirarAcentos($string){
        return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }
}
