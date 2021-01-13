<?php

namespace App\Http\Controllers\TelasDinamicas;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoTelaRequest;
use App\Models\TipoTela;
use Illuminate\Http\Request;

class TipoTelaController extends Controller
{
    //
    public function store(Request $request)
    {
//        dd($request->all());
        //VERIFICAR SE N FOI MARCADO OS 2
        if (!is_null($request->tela_nome) && $request->nome_pdf != '0' || ($request->status_liberar == '1' && !is_null($request->data_inicial)) ) {
            session()->put('error', 'Parece que algo de errado aconteceu!');
            return redirect()->route('tela-criar');
        }
//        dd(2);
        //SALVA PDF
        if ($request->tipo_tela == 'PDF') {
            //VERIFICAR SE O PDF VEIO
            if (!isset($request->arquivo_pdf)) {
//                dd(1);
                session()->put('error', 'Parece que você não selecionou o PDF!');
                return redirect()->route('tela-criar');
            }
            else {
                //VERIFICAR SE O NOME JA EXISTE
//                dd($request->all());
                $file = $request->file('arquivo_pdf');
                $fileName = time() . '-.' . $file->getClientOriginalName();
                $tela = TipoTela::create([
                    'tipo' => 'PDF',
                    'nome_anexo_mostrar' => $request->tela_nome_pdf,
                    'nome_ou_anexo' => $fileName,
                    'status_liberar' => $request->status_liberar,
                    'data_inicial' => $request->data_inicial,
                    'data_final' => $request->data_final,
                ]);
                $file->move(public_path('pdf'), $fileName);
                session()->put('sucess', 'Tela Criada com sucesso!');
                return redirect()->route('tela-criar');
            }
        } //SALVAR TELA
        else if ($request->tipo_tela == 'Tela') {
            //VERIFICAR SE O NOME JA EXISTE
            $tipoTela = TipoTela::where('nome_ou_anexo', $request->nome_tela)->first();
            if (!is_null($tipoTela)){
                session()->put('error', 'Parece que esse nome já está sendo utilizado!');
                return redirect()->route('tela-criar');
            }
            TipoTela::create([
                'tipo' => 'Tela',
                'nome_ou_anexo' => $request->tela_nome,
                'status_liberar' => $request->status_liberar,
                'data_inicial' => $request->data_inicial,
                'data_final' => $request->data_final,
            ]);
            session()->put('sucess', 'Tela Criada com sucesso!');
            return redirect()->route('tela-criar');
        } //ERROS FINAIS
        else {
            session()->put('error', 'Parece que algo de errado aconteceu!');
            return redirect()->route('tela-criar');
        }
        session()->put('error', 'Parece que algo de errado aconteceu!');
        return redirect()->route('tela-criar');
    }


    public function delete($id){
        $tela = TipoTela::findOrFail($id);
        $tela->delete();
        session()->put('sucess', 'Tela Apagada com Sucesso!');
        return redirect()->route('tela-liberar');
    }

    public function show($id){
        $tela = TipoTela::findOrFail($id);

        $directory = public_path() . '/jasper/pdf';
        $files = \File::allFiles($directory);

        return view('pages.telas-dinamicas.tela-mostra-unico', [
            'tela' => $tela,
            'arquivos' => $files,
        ]);
    }

    public function update(Request $request, $id){
        //VERIFICAR SE N FOI MARCADO A DATA E SELECIONADO O LIBERAR
        if ($request->status_liberar == '1' && !is_null($request->data_inicial)) {
            session()->put('error', 'Parece que algo de errado aconteceu!');
            return redirect()->route('tela-unica-mostra', $id);
        }

        //CRAIR UMA VARIVAVEL COM OS DADOS DA TELA PARA SER EDITADA
        $tela = TipoTela::findOrFail($id);
        //VERIFICA SE A TELA EXISTE
        if (is_null($tela)) {
            session()->put('error', 'Parece que algo de errado aconteceu!');
            return redirect()->route('tela-liberar');
        }
        else {
            //EDITAR A TELA
            $fileName = null;
            if (!is_null($request->arquivo_pdf)) {
                $file = $request->file('arquivo_pdf');
                $fileName = time() . '-.' . $file->getClientOriginalName();
                $file->move(public_path('pdf'), $fileName);
            }
            if (isset($request->nome_ou_anexo)) {
                $fileName = $request->nome_ou_anexo;
            }
            $tela->update([
                'nome_ou_anexo' => $fileName,
                'status_liberar' => $request->status_liberar,
                'data_inicial' => $request->data_inicial,
                'data_final' => $request->data_final,

            ]);
            session()->put('sucess', 'Tela Editada com Sucesso!');
            return redirect()->route('tela-liberar', $id);
        }
    }
}
