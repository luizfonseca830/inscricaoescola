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
            'sorteios' => Sorteios::all(),
        ]);
    }

    public function requestPDFJasper(Request $request)
    {
        $file = JasperController::index($request->sorteio);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, $request->sorteio . '.pdf', $headers);
    }
}
