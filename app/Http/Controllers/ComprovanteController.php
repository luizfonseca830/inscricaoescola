<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComprovanteRequest;
use App\Models\Comprovante;
use App\Models\Pessoa;
use PDF;

class ComprovanteController extends Controller
{
    //
    //
    static public function store($comprovate)
    {
        return Comprovante::create([
            'comprovante' => $comprovate,
        ])->id;
    }

    static public function gerarComprovante($pessoa): string
    {
        return 'INSTITUTOSAOJOSE' . time() . $pessoa->id;
    }

    public function index($comprovante)
    {
        return view('registro.registro_comprovate')->with('comprovante', $comprovante);
    }

    public function protocolo()
    {
        $protocolo = \App\Models\TipoTela::where('nome_ou_anexo', 'Protocolo')->first();
        if ($protocolo->status_liberar == '1' && is_null($protocolo->data_final) && is_null($protocolo->data_inicial)
            || $protocolo->data_final >= now() && $protocolo->data_inicial <= now()
            || is_null($protocolo->data_final) && !is_null($protocolo->data_inicial) && $protocolo->data_inicial <= now()) {
            return view('registro.protocolo-pedir');
        }
        return redirect()->route('inicial');
    }

    public function procurar(ComprovanteRequest $request)
    {
        $pessoa = Pessoa::where('cpf', $request->cpf)->where('data_nascimento', $request->data_nascimento)->first();
        if (is_null($pessoa)) {
            session()->put('error', 'Ops parece que não possuimos esse registro');
            return redirect()->route('protocolo');
        }

        $comprovante = Comprovante::findOrFail($pessoa->comprovante_id);
        session()->put('sucess', $comprovante->comprovante);
        return redirect()->route('protocolo');
    }
}
