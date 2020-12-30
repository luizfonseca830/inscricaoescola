<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jasper\ReportJasperController;
use App\Models\Escolaridade;
use Illuminate\Http\Request;

class RelatorioNumericoController extends Controller
{
    public function index()
    {
        $escolaridades = Escolaridade::all();
        return view('pages.relatorio.relatorionumerico', [
            'escolaridades'=>$escolaridades
        ]);
    }

    public function requestPDFJasper(Request $request)
    {
        $file = ReportJasperController::index($request);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'relatorioNumerico.pdf', $headers);
    }
}
