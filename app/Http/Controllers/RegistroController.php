<?php

namespace App\Http\Controllers;

use App\Http\Requests\Registro;
use App\Models\Endereco;
use App\Models\Pessoa;
use App\Models\Termos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistroController extends Controller
{
    public function store(Registro $request)
    {

        $endereco_id = Endereco::create([
            'endereco' => $request->endereco . ', ' . $request->numero,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
        ])->id;

        $pessoa_id = Pessoa::create([
            'escolaridade_id' => $request->escolaridade,
            'endereco_id' => $endereco_id,
            'nome_completo' => $request->nome_completo,
            'escola_de_origem' => $request->escola_de_origem,
            'cpf' => $request->cpf,
            'idade' => $request->idade,
            'irmaos_na_escola' => $request->irmaos_na_escola,
            'nome_irmaos_na_escola' => $request->nome_irmaos_na_escola,
            'serie_irmao_na_escola_id' => $request->serie_irmao_na_escola_id,
            'irmaos_no_sorteio' => $request->irmaos_no_sorteio,
            'nome_irmaos_no_sorteio' => $request->nome_irmaos_no_sorteio,
            'serie_irmao_no_sorteio_id' => $request->serie_irmao_no_sorteio_id,
            'responsavel' => $request->responsavel,
            'sexo' => $request->sexo,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
        ]);

        //SALVA OS TERMOS
        Termos::create([
            'pessoa_id' => $pessoa_id->id,
            'aceito_dados' => 1,
        ]);

        $pessoa = Pessoa::find($pessoa_id->id);
        $comprovante = ComprovanteController::gerarComprovante($pessoa);
        $comprovate_id = ComprovanteController::store($comprovante);
        PessoaController::updateIDs($pessoa, $comprovate_id);

        return redirect()->route('registro/comprovante', $comprovante);

    }
}
