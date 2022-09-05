<?php

namespace App\Http\Controllers;

use App\Models\Escolaridade;
use App\Models\Modulo;
use Illuminate\Http\Request;
use PDF;

class RelatoriosController extends Controller
{
    //
    public function index()
    {
        $modulos = Modulo::all();
        $escolaridades = Escolaridade::all();
        return view('pages.relatorio.relatorios', [
            'modulos' => $modulos,
            'escolaridades' => $escolaridades
        ]);
    }

    public function downloadRelatorio(Request $request)
    {
        $modulo = $request->Filtromodulo;
        if(is_null($request->Filtroescolaridade)){ $escolaridades = Escolaridade::all();}
        else {
            $escolaridades = Escolaridade::where('id', $request->Filtroescolaridade);
            if(!is_null($modulo)){ $escolaridades = $escolaridades->where('modulo_id', $modulo);}
            $escolaridades = $escolaridades->get();
        }
        $pdf = PDF::setOption('enable-local-file-access', true)->loadView('pdf.inscritoescola', compact('escolaridades', 'modulo'));
        return $pdf->download('inscritoescola_emitido_'.date('m-d-Y').'.pdf');
    }
}
