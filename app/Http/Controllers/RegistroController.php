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
        if($pessoa_confirma){
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
            'nome_completo' => $request->nome_completo,
            'cargo_id' => $request->CARGO,
            'escolaridade_id' => $request->escolaridade,
            'endereco_id' => $endereco_id,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'orgao_emissor' => $request->orgao_emissor,
            'pis' => $request->pis,
            'telefone' => $request->telefone,
            'nacionalidade' => $request->nacionalidade,
            'naturalidade' => $request->naturalidade,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'portador_deficiencia' => $deficiencia,
            'sexo' => $request->sexo
        ]);

        //SALVA OS TERMOS
        Termos::create([
            'pessoa_id' => $pessoa_id->id,
            'aceito_dados' => 1,
        ]);
        //SALVA NO CACHE
        $expiresAt = 1440;
        Cookie::queue('pessoa_cpf', $request->cpf, $expiresAt);

        return redirect()->route('registro/anexos');
    }

    //SEGUNDA PARTE DO CADASTRO PARA SALVAR OS ANEXOS E ALGUMAS INFORMACOES
    public function storePart2(RegistroAnexos $request)
    {

        //CRIANDO OBJETOS PRINCIPAIS
        $anexoC = new AnexoController();
        $anexoTecnico = new AnexoCursoTecnicoController();
        $anexoExperiencia = new AnexoExperienciaController();
        //Pesquisar por Pessoa
        $pessoa = Pessoa::find($request->pessoa_id);
        if (!is_null($pessoa->anexo_id)) {
            session()->put('sucess', 'Ops, parece que você já concluiu seu cadastro!');
            return redirect()->route('inical');
        }
        session()->put('pessoa_email', $pessoa->email);
        //NOME DOS ANEXOS
        $anexoNomes = null;


        //CHAMA A FUNCAO QUE SALVA OS ANEXOS NO BANCO E DEVOLVE O NOME DOS ANEXOS EM FORMA DE ARARY
        $anexoNomes = $anexoC->anexoNome($request);
        //EXTRA STRING REFERENTE AO ANEXO DE EXPERIENCIA
        if (!empty($request->extra)) {
            $extra = $request->extra;
        } else {
            $extra = null;
        }

        //CADASTRAR O NOME DOS ANEXOS NO BANCO
        $anexo_id = $anexoC->store($anexoNomes, $extra);


        $experiencia = $anexoExperiencia->anexoNome($request);

        //CADASTRAR OS ANEXOS DE EXPERIENCIA
        $anexoExperiencia->store($experiencia, $anexo_id);

        //CADASTRAR OS ANEXOS TECNICO
        $tecnico = $anexoTecnico->anexoNome($request);
        $anexoTecnico->store($tecnico, $anexo_id);


        //VERIFICAR A ESCOLARIDADE PARA O NIVEL SUPERIOR
        if ($pessoa->escolaridade->id == 3) {
            $anexoDoutorado = new AnexoDoutoradoController();
            $anexoMestrado = new AnexoMestradoController();
            $anexoEspecializacao = new AnexoEspecializacaoController();


            //DEVOLVER UM REQUEST SOMENTE DO MODEL SELECIONA COM O CAMPO DE NOME_ANEXO APENAS EM STRING CRIPTOGRAFADO
            //OS ARQUIVOS SÃO ARMAZENADOS NO STORE
            $doutorado = $anexoDoutorado->anexoNome($request);
            $anexoDoutorado->store($doutorado, $anexo_id);

            $mestrado = $anexoMestrado->anexoNome($request);
            $anexoMestrado->store($mestrado, $anexo_id);

            $especializacao = $anexoEspecializacao->anexoNome($request);
            $anexoEspecializacao->store($especializacao, $anexo_id);
        }

        //REALIZAR O UPDATE NA PESSOA ADICIONANDO O ANEXO
        $comprovante = ComprovanteController::gerarComprovante($pessoa);
        $comprovate_id = ComprovanteController::store($comprovante);

        PessoaController::updateIDs($request->pessoa_id, $anexo_id, $comprovate_id);
        //DELETAR O COKKIE
        Cookie::queue(Cookie::forget('pessoa_cpf'));
        //ENVIAR O EMAIL
        Mail::send('registro.comprovante-email', ['comprovante' => $comprovante,], function ($message){
            $message->from(getenv('MAIL_USERNAME'), 'Processo Seletivo - SEINFRA');
            $message->to(session('pessoa_email'));
            $message->subject('Processo Seletivo - SEINFRA');
        });
        session()->forget('pessoa_email');
        return redirect()->route('registro/comprovante', $comprovante);
        //
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
