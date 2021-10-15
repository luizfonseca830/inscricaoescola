<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\User;
use Illuminate\Http\Request;

class VisualizarPessoaController extends Controller
{
    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);

        return view('pages.visualizar-pessoa', [
            'pessoa' => $pessoa,
        ]);
    }

    public function aparece($id){
        $pessoa = Pessoa::findOrFail($id);

        return view('pages.aparece-pessoa', [
            'pessoa' => $pessoa
        ]);
    }

    public function delete($id){
        dd($id);
        $pessoa = Pessoa::find($id);
        if($pessoa->delete()){
            session()->put('sucess', 'Pessoa deletada com sucesso!');
        }
        else {
            session()->put('error', 'Essa Pessoa não poder ser deletado!');
        }

        return redirect()->route('/visualizacao');
    }

    public function update($id, Request $request){
        $pessoa = Pessoa::findOrFail($id);

        $pessoa->update([
            'escolaridade_id' => $request->escolaridade_id,
            'comprovante_id' => $request->comprovante_id,
            'endereco_id' => $request->endereco_id,
            'nome_completo' => $request->nome_completo,
            'idade' => $request->idade,
            'data_nascimento' => $request->data_nascimento,
            'escola_de_origem' => $request->escola_de_origem,
            'responsavel' => $request->responsavel,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'irmaos_na_escola' => $request->irmaos_na_escola,
            'nome_irmaos_na_escola' => $request->nome_irmaos_na_escola,
            'serie_irmao_na_escola_id' => $request->serie_irmao_na_escola_id,
            'irmaos_no_sorteio' => $request->irmaos_no_sorteio,
            'nome_irmaos_no_sorteio' => $request->nome_irmaos_no_sorteio,
            'serie_irmao_no_sorteio_id' => $request->serie_irmao_no_sorteio_id,

        ]);

        session()->put('sucess', 'A pessoa foi alterada com sucesso!');
        return redirect()->route('/visualizacao');
    }

    public function motivo($id)
    {
        return view('pages.delete-pessoa', compact('id'));
    }
}
