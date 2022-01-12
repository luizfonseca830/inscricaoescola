<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório Inscrito</title>
</head>
<body>
<div style="text-align: center">
    <img src="{{public_path('images/logoinstituto.png')}}" width="25%">
    <h3>BILHETES DE INSCRITOS PARA O SORTEIO DE VAGAS</h3>
    <h3 style="font-weight: bold">ANO SELETIVO: {{date('Y')}}</h3>
    <p>CONGREGRAÇÃO DAS SERVAS DE MARIA REPARADORAS - ACRE</p>
    <p>INSTITUTO SÃO JOSÉ</p>
</div>
@foreach($escolaridades as $escolaridade)
    <div style="margin-left: 20%; width: 60%;">
        <b>Escolaridade: {{$escolaridade->nivel_escolaridade}}</b> <br>
        <b>Módulo: {{$escolaridade->modulo->descricao}}</b>
        @foreach($escolaridade->pessoas as $pessoa)
            @if (strtotime(date('Y-m-d', strtotime($pessoa->periodo_inicio))) >= strtotime($data_inicio) && strtotime(date('Y-m-d', strtotime($pessoa->periodo_fim))) <= strtotime($data_fim))
                <div style="border: 1px solid #000; margin-top: 20px">
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">ALUNO: <b>{{$pessoa->nome_completo}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">COMPROVANTE:
                            <b>{{$pessoa->comprovante->comprovante}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">NOME DO IRMÃO(A) NA ESCOLA:
                            <b>{{$pessoa->nome_irmaos_na_escola}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">ESCOLARIDADE DO IRMÃO(A) NA ESCOLA:
                            <b>{{$pessoa->serieIrmao->nivel_escolaridade}}</b></label><br>
                    </div>
                </div>
            @elseif(is_null($data_inicio) && is_null($data_fim))
                <div style="border: 1px solid #000; margin-top: 20px">
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">ALUNO: <b>{{$pessoa->nome_completo}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">COMPROVANTE:
                            <b>{{$pessoa->comprovante->comprovante}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">NOME DO IRMÃO(A) NA ESCOLA:
                            <b>{{is_null($pessoa->nome_irmaos_na_escola) || empty($pessoa->nome_irmaos_na_escola) ? 'NÃO INFORMADO' : $pessoa->nome_irmaos_na_escola}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">ESCOLARIDADE DO IRMÃO(A) NA ESCOLA:
                            <b>{{is_null($pessoa->serieIrmao) ? 'NÃO INFORMADO' : $pessoa->serieIrmao->nivel_escolaridade}}</b></label><br>
                    </div>
                </div>
            @endif
            <br>
        @endforeach
    </div>
@endforeach
</body>
</html>
