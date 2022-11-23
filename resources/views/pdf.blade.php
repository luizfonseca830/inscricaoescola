@section('title')
    <title>INSTITUTO SÃO JOSÉ</title>
@endsection
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
<div style="text-align: center; margin-top: 2%;">

    <img height="150" width="200" src="{{public_path().'/images/logoinstituto.png'}}"/>
    <h1><u>Comprovante de inscrição para o sorteio de vagas</u>
        <br>Ano Letivo: {{date("Y", strtotime($comprovante->pessoa->created_at))+1}}</h1>
</div>
<div style="margin-left: 1%;">
    <h2>Nome: {{$comprovante->pessoa->nome_completo}}</h2>
    <h2>CPF: {{$comprovante->pessoa->cpf}}</h2>
    <h2>Escolaridade: {{$comprovante->pessoa->escolaridade->nivel_escolaridade}}</h2>
    <h2>Data e Hora de Inscrição: {{date('d/m/Y H:i:s', strtotime($comprovante->pessoa->created_at))}}</h2>
    <h2>Protocolo: {{$comprovante->comprovante}}</h2>
</div>
<footer style="margin-top: 30%; text-align: center">
    <strong>CONGREGAÇÃO DAS SERVAS DE MARIA REPARADORAS - ACRE</strong>
    <br>
    <strong> INSTITUTO SÃO JOSÉ – RIO BRANCO</strong>
</footer>
</body>
</html>
