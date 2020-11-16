<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jasper\JasperController;
use App\Models\Cargo;
use App\Models\Escolaridade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RelatoriosController extends Controller
{
    //
    public function index(){
        return view('pages.relatorio.relatorios', [
            'escolaridade' => Escolaridade::all(),
        ]);
    }

    public function requestPDFJasper(Request $request)
    {
        $file = JasperController::index($request->escolaridade);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'Inscrições' . '.pdf', $headers);
    }
}
