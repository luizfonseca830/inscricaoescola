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
    //CADASTRO DA PESSOA NA 1 REQUISAO
    public function storePart1(Registro $request)
    {
        //CASO O CPF EXISTA
        $pessoa_confirma = Pessoa::where('cpf', $request->cpf)->first();
        if (!isset($request->termo_de_condicao) && !isset($request->termo_de_privacidade)) {
            session()->put('error', 'Ops, parece que você não aceito os termos e políticas de privacidade!');
            return redirect()->route('registro');
        }
        if ($pessoa_confirma) {
            $expiresAt = 1440;
            Cookie::queue('pessoa_cpf', $request->cpf, $expiresAt);
            return redirect()->route('registro/anexos');
        }


        $endereco_id = Endereco::create([
            'endereco' => $request->endereco . ', ' . $request->numero,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
        ])->id;


        $pessoa_id = Pessoa::create([
            'escolaridade_id' => $request->escolaridade,
            'endereco_id' => $endereco_id,
            'nome_completo' => $request->nome_completo,

            'cpf' => $request->cpf,
            'rg' => $request->rg,

            'telefone' => $request->telefone,

            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
        ]);

        //SALVA OS TERMOS
        Termos::create([
            'pessoa_id' => $pessoa_id->id,
            'aceito_dados' => 1,
        ]);

        //REALIZAR O UPDATE NA PESSOA ADICIONANDO O ANEXO
        $comprovante = ComprovanteController::gerarComprovante($pessoa);
        $comprovate_id = ComprovanteController::store($comprovante);

        PessoaController::updateIDs($request->pessoa_id, $comprovate_id);
        //DELETAR O COKKIE
        Cookie::queue(Cookie::forget('pessoa_cpf'));
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

    //DEVOLVER PARA O REGISTRO OS DADOS DA PESSOA + ALTERACOES NO STYLE
    public function buscaIndex()
    {
        $cpf = Cookie::get('pessoa_cpf');
        $pessoa = Pessoa::where('cpf', $cpf)->first();
        if (!is_null($pessoa->anexo_id)) {
            Cookie::queue(Cookie::forget('pessoa_cpf'));
            return redirect()->route('inical');
        }
        if ($pessoa->escolaridade->id == 3) {
            //VAI NA CLASS SERVE PARA O STYLE
            $progress = 'progress-ajuste2';
        } else $progress = 'progress-ajuste';

        return view('registro.registros_anexos')->with([
            'pessoa' => $pessoa,
            'progress' => $progress,
        ]);
    }
}
