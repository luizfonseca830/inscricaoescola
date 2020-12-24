<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jasper\JasperController;
use App\Models\Escolaridade;
use App\Models\Modulo;
use App\Models\Sorteios;
use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    //
    public function index()
    {
        $modulos = Modulo::all();
        $escolaridades = Escolaridade::all();
        return view('pages.relatorio.relatorios', [
            'modulos'=>$modulos,
            'escolaridades'=>$escolaridades
        ]);
    }

    public function requestPDFJasper(Request $request)
    {
        $file = JasperController::index($request);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'relatorio.pdf', $headers);
    }
}
