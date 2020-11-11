<?php

namespace App\Http\Controllers;

use App\Http\Requests\Registro;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class RegistroController extends Controller
{

    public function storePart1(Registro $request)
    {

        $aluno_id = Aluno::create([
            'serie_id' => $request->serie,
            'nome_aluno' => $request->nome_aluno,
            'data_nascimento_aluno' => $request->data_nascimento_aluno,
            'sexo_aluno' => $request->sexo_aluno,
            'nome_mae' => $request->nome_mae,
            'cpf_mae' => $request->cpf_mae,
            'telefone_mae' => $request->telefone_mae,
            'nome_pai' => $request->nome_pai,
            'cpf_pai' => $request->cpf_pai,
            'telefone_pai' => $request->telefone_pai,
            'nome_responsavel' => $request->nome_responsavel,
            'cpf_responsavel' => $request->cpf_responsavel,
            'telefone_reponsavel' => $request->telefone_reponsavel,
            'email_responsavel' => $request->email_responsavel,
        ]);

        //REALIZAR O UPDATE NA PESSOA ADICIONANDO O ANEXO
        $comprovante = ComprovanteController::gerarComprovante($aluno_id);
        $comprovate_id = ComprovanteController::store($comprovante);

        AlunoController::updateIDs($request->aluno_id, $comprovate_id);
        //ENVIAR O EMAIL
        Mail::send('registro.comprovante-email', ['comprovante' => $comprovante,], function ($message) {
            $message->from(getenv('MAIL_USERNAME'), 'Comprovante De Inscrição');
            $message->to(session('email_responsavel'));
            $message->subject('Concorrendo Vaga Na Escola');
        });
        session()->forget('email_responsavel');
        return redirect()->route('registro/comprovante', $comprovante);
    }
}
