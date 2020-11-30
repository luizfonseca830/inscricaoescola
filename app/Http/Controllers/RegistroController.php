<?php

namespace App\Http\Controllers;

use App\Http\Requests\Registro;
use App\Http\Requests\RegistroAnexos;
use App\Models\AnexoCursoTecnico;
use App\Models\AnexoDoutorado;
use App\Models\Endereco;
use App\Models\Pessoa;
use App\Models\Termos;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Promise\all;

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
            'serie_irmao_na_escola_id' => $request->serie_irmao_na_escola,
            'irmaos_no_sorteio' => $request->irmaos_no_sorteio,
            'nome_irmaos_no_sorteio' => $request->nome_irmaos_no_sorteio,
            'serie_irmao_no_sorteio_id' => $request->serie_irmao_no_sorteio,
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

        PessoaController::updateIDs($request->pessoa_id, $comprovate_id);
        $pessoa_email = Pessoa::find($request->email);
        session()->put($pessoa_email);

        //ENVIAR O EMAIL
        Mail::send('registro.comprovante-email', ['comprovante' => $comprovante,], function ($message) {
            $message->from(getenv('MAIL_USERNAME'),
                'CONGREGAÇÃO DAS SERVAS DE MARIA REPARADORAS – ACRE INSTITUTO SÃO JOSÉ');
            $message->to(session('pessoa_email'));
            $message->subject('INSCRIÇÃO PARA SORTEIO DE VAGA – ANO LETIVO 2021');
        });
        session()->forget('pessoa_email');
        return redirect()->route('registro/comprovante', $comprovante);

    }
}
