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
    <h3>BILHETES DE INSCRITOS PARA O SORTEIO DE VAGAS</h3>
    <h3 style="font-weight: bold">ANO SELETIVO:{{date("Y")}}</h3>
    <p>CONGREGRAÇÃO DAS SERVAS DE MARIA REPARADORAS - ACRE</p>
    <p>INSTITUTO SÃO JOSÉ</p>
</div>
@foreach($escolaridades as $escolaridade)
    <div style="margin-left: 20%; width: 60%;">
        <b>Série: {{$escolaridade->nivel_escolaridade}}</b> <br>
        <b>Escolaridade: {{$escolaridade->modulo->descricao}}</b>
        @foreach($escolaridade->pessoas as $pessoa)
            @if(mb_strtoupper($pessoa->irmaos_na_escola) == "SIM")
                    <div style="border: 1px solid #000; margin-top: 20px" class="keep-together">
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <label style="margin-left: 10px; ">ALUNO: <strong>{{mb_strtoupper($pessoa->nome_completo)}}</strong></label><br>
                        </div>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <label style="margin-left: 10px; ">COMPROVANTE:
                                <strong>{{$pessoa->comprovante->comprovante}}</strong></label><br>
                        </div>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <label style="margin-left: 10px; ">DATA DE INSCRIÇÃO:
                                <strong>{{date('d/m/Y H:i:s', strtotime( $pessoa->created_at))}}</strong></label><br>
                        </div>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <label style="margin-left: 10px; ">NOME DO IRMÃO(A) NA ESCOLA:
                                <strong>{{is_null($pessoa->nome_irmaos_na_escola) || empty($pessoa->nome_irmaos_na_escola) ? 'NÃO INFORMADO' : mb_strtoupper($pessoa->nome_irmaos_na_escola)}}</strong></label><br>
                        </div>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <label style="margin-left: 10px; ">SÉRIE DO IRMÃO(A) NA ESCOLA:
                                <strong>{{is_null($pessoa->serieIrmao) || empty($pessoa->serieIrmao) ? 'NÃO INFORMADO' : mb_strtoupper($pessoa->serieIrmao->nivel_escolaridade)}}</strong></label><br>
                        </div>
                    </div>
                <br>
            @endif
        @endforeach
    </div>
@endforeach
</body>
</html>
