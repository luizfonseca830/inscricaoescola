<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Jasper\ReportIrmaosController;
use App\Models\Escolaridade;
use App\Models\Modulo;
use Illuminate\Http\Request;
use PDF;
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

    public function downloadRelatorio(Request $request)
    {
        $modulo = $request->Filtromodulo;
        $data_inicio = $request->periodo_inicio;
        $data_fim = $request->periodo_fim;
        if (is_null($request->Filtroescolaridade)) $escolaridades = Escolaridade::all();
        else {
            $escolaridades = Escolaridade::where('id', $request->Filtroescolaridade);
            if(!is_null($modulo)) $escolaridades = $escolaridades->where('modulo_id', $modulo);
            $escolaridades = $escolaridades->get();
        }
//        return view('pdf.irmao', compact('escolaridades', 'modulo', 'data_fim', 'data_inicio'));
        $pdf = PDF::setOption('enable-local-file-access', true)->loadView('pdf.irmao', compact('escolaridades', 'modulo', 'data_fim', 'data_inicio'));
        return $pdf->download('relatorioIrmaos_emitido_'.date('m-d-Y').'.pdf');
    }
}
