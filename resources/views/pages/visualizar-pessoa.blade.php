@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])
@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">

@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                <div class="row">
                    <h2>Dados Pessoais do Aluno</h2>
                    <div class="col-sm-8">
                        <p>Nome Completo</p>
                        <input size="50" type="text" id="focosAtivo" name="nome_completo"
                               value="{{$pessoa->nome_completo}}"
                               disabled/>
                        <p>CPF</p>
                        <input type="text" value="{{$pessoa->cpf}}" disabled/>
                        <p>Escola de Origem</p>
                        <input type="text" value="{{$pessoa->escola_de_origem}}" disabled/>
                        <p>Nível De Escolaridade Desejada</p>
                        <input size="50" type="text" value="{{$pessoa->escolaridade->nivel_escolaridade}}" disabled/>
                        <p>Data de Nascimento</p>
                        <input type="date" name="data_nascimento" value="{{$pessoa->data_nascimento}}" disabled/>
                    </div>
                    <div class="col-sm-4">
                        <p>Sexo</p>
                        @if ($pessoa->sexo == 'H')
                            <input type="text" value="Masculino" disabled/>
                        @else
                            <input type="text" value="Femino" disabled/>
                        @endif
                        <p>Email</p>
                        <input type="email" value="{{$pessoa->email}}" disabled/>
                        <p>Idade</p>
                        <input type="text" value="{{$pessoa->idade}}" disabled/>
                        <p>Nome do Responsável</p>
                        <input size="40" type="text" value="{{$pessoa->responsavel}}" disabled/>
                        <p>Telefone</p>
                        <input type="text" value="{{$pessoa->telefone}}" disabled/>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm">
                                <h2>Dados Adicionais</h2>
                                <p>TEM IRMÃO(A) ESTUDANDO NA ESCOLA?</p>
                                @if ($pessoa->irmaos_na_escola == 'Sim')
                                    <input type="text" value="Sim" disabled/>
                                @else
                                    <input type="text" value="Não" disabled/>
                                @endif
                                @if ($pessoa->irmaos_na_escola == 'Sim')
                                    <p>Nível De Escolaridade Do Seu Irmão Na Escola</p>
                                    <input size="50" type="text" value="{{$pessoa->escolaridade->nivel_escolaridade}}"
                                           disabled/>
                                @endif
                                <p>TEM IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS?</p>
                                @if ($pessoa->irmaos_no_sorteio == 'Sim')
                                    <input type="text" value="Sim" disabled/>
                                @else
                                    <input type="text" value="Não" disabled/>
                                @endif
                                @if ($pessoa->irmaos_no_sorteio == 'Sim')
                                    <p>Nível De Escolaridade Do Seu Irmão No Sorteio</p>
                                    <input size="50" type="text" value="{{$pessoa->escolaridade->nivel_escolaridade}}"
                                           disabled/>
                                @endif


                            </div>
                            <div class="col-sm">
                                <h2>Endereço</h2>
                                <p>CEP</p>
                                <input size="20" type="text" value="{{$pessoa->endereco->cep}}"
                                       disabled/>
                                <p>Bairro</p>
                                <input type="text" value="{{$pessoa->endereco->bairro}}"
                                       disabled/>
                                <p>Endereço</p>
                                <input size="70" type="text"
                                       value="{{$pessoa->endereco->endereco}}"
                                       disabled/>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
@section('script')

    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
    <script src="{{asset('js/registro/function.js')}}"></script>

@endsection
