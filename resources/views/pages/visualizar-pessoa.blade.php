@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])
@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
    <style>
        .content{
            background-color: #fff;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                @csrf
                <div class="row">
                <h4 class="col-4">Inscrito em:<input class="form-control" type="timestamp" value="{{date('d/m/Y H:i:s', strtotime( $pessoa->created_at))}}"
                                       disabled/></h4>
                </div>
                <div class="row">
                    <h2>Dados Pessoais do Aluno</h2>
                    <div class="col-sm-8">
                        <p>Nome Completo</p>
                        <input type="text" class="form-control" name="nome_completo"
                               value="{{$pessoa->nome_completo}}"
                               disabled/>
                        <p>CPF</p>
                        <input class="form-control" type="text" value="{{$pessoa->cpf}}" disabled/>
                        <p>Escola de Origem</p>
                        <input class="form-control" type="text" value="{{$pessoa->escola_de_origem}}" disabled/>
                        <p>Nível De Escolaridade Desejada</p>
                        <input class="form-control" size="50" type="text" value="{{$pessoa->escolaridade->nivel_escolaridade}}" disabled/>
                        <p>Data de Nascimento</p>
                        <input class="form-control" type="date" name="data_nascimento" value="{{$pessoa->data_nascimento}}" disabled/>
                    </div>
                    <div class="col-sm-4">
                        <p>Sexo</p>
                        @if ($pessoa->sexo == 'H')
                            <input class="form-control" type="text" value="Masculino" disabled/>
                        @else
                            <input class="form-control" type="text" value="Feminino" disabled/>
                        @endif
                        <p>Email</p>
                        <input class="form-control" size="40" type="email" value="{{$pessoa->email}}" disabled/>
                        <p>Idade</p>
                        <input class="form-control" type="text" value="{{$pessoa->idade}}" disabled/>
                        <p>Nome do Responsável</p>
                        <input class="form-control" size="40" type="text" value="{{$pessoa->responsavel}}" disabled/>
                        <p>Telefone</p>
                        <input class="form-control" type="text" value="{{$pessoa->telefone}}" disabled/>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm">
                                <h2>Dados Adicionais</h2>
                                <p>TEM IRMÃO(A) ESTUDANDO NA ESCOLA?</p>
                                @if ($pessoa->irmaos_na_escola == 'Sim')
                                    <input class="form-control" type="text" value="Sim" disabled/>
                                @else
                                    <input class="form-control" type="text" value="Não" disabled/>
                                @endif
                                @if ($pessoa->irmaos_na_escola == 'Sim')
                                    <p>NOME DO IRMÃO(A) ESTUDANDO NA ESCOLA?</p>
                                    <input class="form-control" size="50" type="text" value="{{$pessoa->nome_irmaos_na_escola}}" disabled/>
                                @endif
                                @if ($pessoa->irmaos_na_escola == 'Sim')
                                    <p>Nível De Escolaridade Do Seu Irmão Na Escola</p>
                                    <input class="form-control" size="50" type="text"
                                           value="{{\App\Models\Escolaridade::findOrfail($pessoa->serie_irmao_na_escola_id)->nivel_escolaridade}}"
                                           disabled/>
                                @endif
                                <p>TEM IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS?</p>
                                @if ($pessoa->irmaos_no_sorteio == 'Sim')
                                    <input class="form-control" type="text" value="Sim" disabled/>
                                @else
                                    <input class="form-control" type="text" value="Não" disabled/>
                                @endif
                                @if ($pessoa->irmaos_no_sorteio == 'Sim')
                                    <p>NOME DO IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS</p>
                                    <input class="form-control" size="50" type="text" value="{{$pessoa->nome_irmaos_no_sorteio}}" disabled/>
                                @endif
                                @if ($pessoa->irmaos_no_sorteio == 'Sim')
                                    <p>Nível De Escolaridade Do Seu Irmão No Sorteio</p>
                                    <input class="form-control" size="50" type="text"
                                           value="{{\App\Models\Escolaridade::findOrfail($pessoa->serie_irmao_no_sorteio_id)->nivel_escolaridade}}"
                                           disabled/>
                                @endif


                            </div>
                            <div class="col-sm">
                                <h2>Endereço</h2>
                                <p>CEP</p>
                                <input class="form-control" size="20" type="text" value="{{$pessoa->endereco->cep}}"
                                       disabled/>
                                <p>Bairro</p>
                                <input class="form-control" type="text" value="{{$pessoa->endereco->bairro}}"
                                       disabled/>
                                <p>Endereço</p>
                                <input class="form-control" size="70" type="text"
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
    <script src="{{asset('js/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('js/registro/mask.js')}}"></script>
    <script src="{{asset('js/registro/cep.js')}}"></script>
    <script src="{{asset('js/registro/selecionador.js')}}"></script>

@endsection
