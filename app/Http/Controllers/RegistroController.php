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
            'nome_completo' => strtoupper($request->nome_completo),
            'escola_de_origem' => strtoupper($request->escola_de_origem),
            'cpf' => strtoupper($request->cpf),
            'idade' => $request->idade,
            'irmaos_na_escola' => $request->irmaos_na_escola,
            'nome_irmaos_na_escola' => strtoupper($request->nome_irmaos_na_escola),
            'serie_irmao_na_escola_id' => $request->serie_irmao_na_escola_id,
            'irmaos_no_sorteio' => $request->irmaos_no_sorteio,
            'nome_irmaos_no_sorteio' => strtoupper($request->nome_irmaos_no_sorteio),
            'serie_irmao_no_sorteio_id' => $request->serie_irmao_no_sorteio_id,
            'responsavel' => strtoupper($request->responsavel),
            'sexo' => $request->sexo,
            'telefone' => $request->telefone,
            'email' => strtoupper($request->email),
            'data_nascimento' => $request->data_nascimento
        ]);

        $pessoa = Pessoa::find($pessoa_id->id);
        $comprovante = ComprovanteController::gerarComprovante($pessoa);
        $comprovante_id = ComprovanteController::store($comprovante);
        PessoaController::updateIDs($pessoa, $comprovante_id);

        return redirect()->route('registro/comprovante', $comprovante);

    }

    public function registro()
    {
        $escolaridade = \App\Models\Escolaridade::all();
        $inscricao = \App\Models\TipoTela::where('nome_ou_anexo', 'Inscrição')->first();
        if ($inscricao->status_liberar == '1' && is_null($inscricao->data_final) && is_null($inscricao->data_inicial)
            || $inscricao->data_final >= now() && $inscricao->data_inicial <= now()
            || is_null($inscricao->data_final) && !is_null($inscricao->data_inicial) && $inscricao->data_inicial <= now()) {
            return view('registro.registro')->with([
                'escolaridade' => $escolaridade
            ]);
        }
            return redirect()->route('inicial');


    }
}
