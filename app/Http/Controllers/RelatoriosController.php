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
        if (Auth::user()->tipo != 'Admin') {
            session()->put('error', 'Você não tem permissão para acessar essa página!');
            return redirect()->route('home');
        }
        return view('pages.relatorio.relatorios', [
            'cargos' => Cargo::all(),
        ]);
    }

    public function requestPDFJasper(Request $request)
    {
        $file = JasperController::index($request->cargo, $request->deferimento);
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, $request->cargo . '.pdf', $headers);
    }
}
