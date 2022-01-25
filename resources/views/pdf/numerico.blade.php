<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .keep-together {
            page-break-inside: avoid;
        }

        .break-before {
            page-break-before: always;
        }

        .break-after {
            page-break-after: always;
        }
    </style>
    <title>Relatório Inscrito</title>
</head>
<body>
<div style="text-align: center">
        <img src="{{public_path('images/logoinstituto.png')}}" width="25%">
    <h3>INSCRITOS PARA O SORTEIO DE VAGAS</h3>
    <h3 style="font-weight: bold">ANO SELETIVO: {{date('Y')}}</h3>
    <p>CONGREGRAÇÃO DAS SERVAS DE MARIA REPARADORAS - ACRE</p>
    <p>INSTITUTO SÃO JOSÉ</p>
</div>
@foreach($escolaridades as $escolaridade)
    <div style="margin-left: 20%; width: 60%;">
        <b>Escolaridade: {{$escolaridade->nivel_escolaridade}}</b> <br>
        <b>Módulo: {{$escolaridade->modulo->descricao}}</b>
        @foreach($escolaridade->pessoas as $key=>$pessoa)
            @if (strtotime(date('Y-m-d', strtotime($pessoa->periodo_inicio))) >= strtotime($data_inicio) && strtotime(date('Y-m-d', strtotime($pessoa->periodo_fim))) <= strtotime($data_fim))
                <div style="border: 1px solid #000; margin-top: 20px" class="keep-together">
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">ALUNO: <b>{{$pessoa->nome_completo}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">COMPROVANTE:
                            <b>{{$pessoa->comprovante->comprovante}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">NÚMERO:
                            <b>{{sprintf('"%03d', ($key+1))}}</b></label><br>
                    </div>
                </div>
            @elseif(is_null($data_inicio) && is_null($data_fim))
                <div style="border: 1px solid #000; margin-top: 20px" class="keep-together">
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">ALUNO: <b>{{$pessoa->nome_completo}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">COMPROVANTE:
                            <b>{{$pessoa->comprovante->comprovante}}</b></label><br>
                    </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                        <label style="margin-left: 10px; ">NÚMERO:
                            <b>{{sprintf('"%03d', ($key+1))}}</b></label><br>
                    </div>
                </div>
            @endif
            <br>
        @endforeach
    </div>
@endforeach
</body>
</html>
