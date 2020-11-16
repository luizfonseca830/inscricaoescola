<?php

namespace App\Http\Controllers;

use App\Http\Requests\Recurso;
use App\Models\Pessoa;
use App\Models\Pontuacao;
use App\Models\PontuacaoDoutorado;
use App\Models\PontuacaoEspecializacao;
use App\Models\PontuacaoExperiencia;
use App\Models\PontuacaoMestrado;
use App\Models\PontuacaoTecnico;
use App\Models\RecursoModel;
use App\Models\Transparencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecursoController extends Controller
{
    //
    public function pedirRecurso(Recurso $request)
    {
        $pessoa = Pessoa::where('cpf', $request->CPF)->first();
        if (!isset($pessoa->id)) {
            session()->put('error', 'Algo de errado aconteceu, seu CPF não foi encontrado!');
            return redirect()->route('recurso');
        }


        if (isset($pessoa->recurso->id)) {
            session()->put('error', 'Algo de errado aconteceu, você já pediu um recurso, agurde ser analisado!');
            return redirect()->route('recurso');
        }

        if (is_null($pessoa->status_aprovado)) {
            session()->put('error', 'Algo de errado aconteceu, você não está apto a pedir recurso!');
            return redirect()->route('recurso');
        }

        //CADASTRA O RECURSO
        RecursoModel::create([
            'pessoa_id' => $pessoa->id,
            'recurso' => $request->comentario,
        ]);

        session()->put('sucess', 'O recurso foi enviado com sucesso!');
        return redirect()->route('recurso');

    }

    public function recusarmotivo($id)
    {
        $recurso = RecursoModel::findOrFail($id);

        if (!is_null($recurso->status)) {
            session()->put('error', 'Ops, Parece que alguém acabou de analisar esse recurso!');
            return redirect()->route('/visualizacao-recurso');
        }

        return view('pages.recurso-unico-recusar', [
           'recurso' => $recurso,
        ]);


    }
    public function recusar(Request $request){
       $recurso = RecursoModel::findOrFail($request->recurso_id);

       if (!is_null($recurso->status)) {
           session()->put('error', 'Ops, Parece que alguém acabou de analisar esse recurso!');
           return redirect()->route('/visualizacao-recurso');
       }
       $recurso->update([
           'avaliador_id' => auth()->id(),
           'data_avaliado' => date('Y-m-d'),
           'status' => 0,
           'recusar_motivo' => $request->motivo_recusar,
       ]);

        //SALVA NO LOG DE TRANSPARECIAN O QUE O AVALIADOR FEZ
        Transparencia::create([
            'instrutor_id' => auth()->id(),
            'pessoa_id' => $recurso->pessoa->id,
            'tela' => 'Recurso',
            'motivo' => $request->motivo_recusar,
        ]);

        session()->put('sucess', 'O Recurso foi verificado com sucesso!');
        return redirect()->route('/visualizacao-recurso');
    }

    public function aceitar(Request $request)
    {

        $pessoa = Pessoa::findOrFail($request->pessoa_id);
        $recurso = RecursoModel::findOrFail($pessoa->recurso->id);
        //VARIAVEL PARA PONTUACAO TOTAL
        $pontuacao_total = 0;
        if (!is_null($recurso->status)) {
            session()->put('error', 'Ops, Parece que alguém acabou de analisar esse recurso!');
            return redirect()->route('/visualizacao-recurso');
        }

        //TECNICO
        if (!is_null($request->pontuacao_tecnico)) {
            for ($i = 0; $i < count($request->pontuacao_tecnico['pontuacao']); $i++) {
                $tecnico = PontuacaoTecnico::findOrFail($request->pontuacao_tecnico['id'][$i]);
                $tecnico->update([
                    'pontuacao' => $request->pontuacao_tecnico['pontuacao'][$i],
                ]);
                $pontuacao_total += $request->pontuacao_tecnico['pontuacao'][$i];
            }
        }
        //EXPERIENCIA
        if (!is_null($request->pontuacao_experiencia)) {
            for ($i = 0; $i < count($request->pontuacao_experiencia['pontuacao']); $i++) {
                $experiencia = PontuacaoExperiencia::findOrFail($request->pontuacao_experiencia['id'][$i]);
                $experiencia->update([
                    'pontuacao' => $request->pontuacao_experiencia['pontuacao'][$i],
                ]);

                $experiencia->anexoExperiencia->update([
                    'data_entrada' => $request->pontuacao_experiencia['data_entrada'][$i],
                    'data_saida' => $request->pontuacao_experiencia['data_saida'][$i],
                ]);
                $pontuacao_total += $request->pontuacao_experiencia['pontuacao'][$i];
            }
        }
        //SUPERIOR
        if ($pessoa->escolaridade->id == 3) {
            //DOUTORADO
            if (!is_null($request->pontuacao_doutorada)) {
                for ($i = 0; $i < count($request->pontuacao_doutorada['pontuacao']); $i++) {
                    $doutorado = PontuacaoDoutorado::findOrFail($request->pontuacao_doutorada['id'][$i]);
                    $doutorado->update([
                        'pontuacao' => $request->pontuacao_doutorada['pontuacao'][$i],
                    ]);
                    $pontuacao_total += $request->pontuacao_doutorada['pontuacao'][$i];
                }
            }

            //MESTRADO
            if (!is_null($request->pontuacao_mestrado)) {
                for ($i = 0; $i < count($request->pontuacao_mestrado['pontuacao']); $i++) {
                    $mestrado = PontuacaoMestrado::findOrFail($request->pontuacao_mestrado['id'][$i]);
                    $mestrado->update([
                        'pontuacao' => $request->pontuacao_mestrado['pontuacao'][$i],
                    ]);
                    $pontuacao_total += $request->pontuacao_mestrado['pontuacao'][$i];
                }
            }
            //ESPECIALIZACAO
            if (!is_null($request->pontuacao_especializacao)) {
                for ($i = 0; $i < count($request->pontuacao_especializacao['pontuacao']); $i++) {
                    $especializacao = PontuacaoEspecializacao::findOrFail($request->pontuacao_especializacao['id'][$i]);
                    $especializacao->update([
                        'pontuacao' => $request->pontuacao_especializacao['pontuacao'][$i],
                    ]);
                    $pontuacao_total += $request->pontuacao_especializacao['pontuacao'][$i];
                }
            }
        }

        //SALVA A PONTUACAO GERAL
        if (isset($pessoa->pontuacao)) {
            $pontuacao = Pontuacao::findOrFail($pessoa->pontuacao->id);
            $pontuacao->update([
                'pontuacao_total' => $pontuacao_total,
            ]);

            //SALVA NO RECURSO OS DADOS DE QUEM REVISOU O RECURSO
            $recurso->update([
                'avaliador_id' => Auth::id(),
                'status' => 1,
                'data_avaliado' => date('Y-m-d'),
            ]);
            
            //ALTERAR OS STATUS NA PESSOA
            $recurso->pessoa->update([
                'status_aprovado' => 1,
                'status' => 1,
                'motivo_rev' => null,
            ]);

            //SALVA NO LOG DE TRANSPARECIAN O QUE O AVALIADOR FEZ
            Transparencia::create([
                'instrutor_id' => auth()->id(),
                'pessoa_id' => $recurso->pessoa->id,
                'tela' => 'Recurso',
                'pontuacao_total' => $pontuacao_total,
            ]);
        }
        else {
            //SALVA NO RECURSO OS DADOS DE QUEM REVISOU O RECURSO
            $recurso->update([
                'avaliador_id' => Auth::id(),
                'status' => 1,
                'data_avaliado' => date('Y-m-d'),
            ]);

            //SALVA NO LOG DE TRANSPARECIAN O QUE O AVALIADOR FEZ
            Transparencia::create([
                'instrutor_id' => auth()->id(),
                'pessoa_id' => $recurso->pessoa->id,
                'tela' => 'Recurso',
            ]);
        }
        session()->put('sucess', 'O Recurso foi verificado com sucesso! Pontuação Total: ' . $pontuacao_total);
        return redirect()->route('/visualizacao-recurso');

    }


}
