<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jasper\JasperController;
use App\Models\Sorteios;
use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    //
    public function index(){
        return view('pages.relatorio.relatorios', [
        ]);
    }

    public function requestPDFJasper()
    {
        $file = JasperController::index();
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'relatorio.pdf', $headers);
    }
}
