<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jasper\ReportIrmaosController;
use App\Models\Escolaridade;
use App\Models\Modulo;
use Illuminate\Http\Request;

class RelatorioIrmaosController extends Controller
{
    public function index()
    {
        $escolaridades = Escolaridade::all();

        return view('pages.relatorio.relatorioirmaos', [
            'escolaridades'=>$escolaridades
        ]);
    }

    public function requestPDFJasper(Request $request)
    {
        $file = ReportIrmaosController::index($request);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'relatorioIrmaos.pdf', $headers);
    }
}
