@extends('layouts.app', ['activePage' => 'audit', 'titlePage' => __('Typography')])
@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
    <style>
        .content {
            background-color: #fff;
        }
    </style>
@endsection
@section('content')
    {{--    @dd($audit)--}}
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                @csrf
                <div class="row">
                    <h4 class="col-4">Inscrito em:<input class="form-control" type="timestamp"
                                                         value="{{date('d/m/Y H:i:s', strtotime( $audit->created_at))}}"
                                                         disabled/></h4>
                </div>

                <div class="row">
                    <h2>Dados Pessoais do Aluno</h2>
                    <div class="col-sm-8">
                        <p>Nome Completo</p>
                        <input type="text" class="form-control" name="nome_completo"
                               value="{{$audit->nome_completo}}"
                               disabled/>
                        <p>CPF</p>
                        <input class="form-control" type="text" value="{{$audit->cpf}}" disabled/>
                        <p>Escola de Origem</p>
                        <input class="form-control" type="text" value="{{$audit->escola_de_origem}}" disabled/>
                        <p>Nível De Escolaridade Desejada</p>
                        {{--                        <input class="form-control" size="50" type="text" value="{{$audit->escolaridade->nivel_escolaridade}}" disabled/>--}}
                        <p>Data de Nascimento</p>
                        <input class="form-control" type="date" name="data_nascimento"
                               value="{{$audit->data_nascimento}}" disabled/>
                    </div>
                    <div class="col-sm-4">
                        <p>Sexo</p>
                        @if ($audit->sexo == 'H')
                            <input class="form-control" type="text" value="Masculino" disabled/>
                        @else
                            <input class="form-control" type="text" value="Feminino" disabled/>
                        @endif
                        <p>Email</p>
                        <input class="form-control" size="40" type="email" value="{{$audit->email}}" disabled/>
                        <p>Idade</p>
                        <input class="form-control" type="text" value="{{$audit->idade}}" disabled/>
                        <p>Nome do Responsável</p>
                        <input class="form-control" size="40" type="text" value="{{$audit->responsavel}}" disabled/>
                        <p>Telefone</p>
                        <input class="form-control" type="text" value="{{$audit->telefone}}" disabled/>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm">
                                <h2>Dados Adicionais</h2>
                                <p>TEM IRMÃO(A) ESTUDANDO NA ESCOLA?</p>
                                @if ($audit->irmaos_na_escola == 'Sim')
                                    <input class="form-control" type="text" value="Sim" disabled/>
                                @else
                                    <input class="form-control" type="text" value="Não" disabled/>
                                @endif
                                @if ($audit->irmaos_na_escola == 'Sim')
                                    <p>NOME DO IRMÃO(A) ESTUDANDO NA ESCOLA?</p>
                                    <input class="form-control" size="50" type="text"
                                           value="{{$audit->nome_irmaos_na_escola}}" disabled/>
                                @endif
                                @if ($audit->irmaos_na_escola == 'Sim')
                                    <p>SÉRIE DO SEU IRMÃO NA ESCOLA</p>
                                    <input class="form-control" size="50" type="text"
                                           value="{{\App\Models\Escolaridade::findOrfail($audit->serie_irmao_na_escola_id)->nivel_escolaridade}}"
                                           disabled/>
                                @endif
                                <p>TEM IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS?</p>
                                @if ($audit->irmaos_no_sorteio == 'Sim')
                                    <input class="form-control" type="text" value="Sim" disabled/>
                                @else
                                    <input class="form-control" type="text" value="Não" disabled/>
                                @endif
                                @if ($audit->irmaos_no_sorteio == 'Sim')
                                    <p>NOME DO IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS</p>
                                    <input class="form-control" size="50" type="text"
                                           value="{{$audit->nome_irmaos_no_sorteio}}" disabled/>
                                @endif
                                @if ($audit->irmaos_no_sorteio == 'Sim')
                                    <p>SÉRIE DO SEU IRMÃO NO SORTEIO</p>
                                    <input class="form-control" size="50" type="text"
                                           value="{{\App\Models\Escolaridade::findOrfail($audit->serie_irmao_no_sorteio_id)->nivel_escolaridade}}"
                                           disabled/>
                                @endif


                            </div>
                            <div class="col-sm">
                                {{--                                <h2>Endereço</h2>--}}
                                {{--                                <p>CEP</p>--}}
                                {{--                                <input class="form-control" size="20" type="text" value="{{$pessoa->endereco->cep}}"--}}
                                {{--                                       disabled/>--}}
                                {{--                                <p>Bairro</p>--}}
                                {{--                                <input class="form-control" type="text" value="{{$pessoa->endereco->bairro}}"--}}
                                {{--                                       disabled/>--}}
                                {{--                                <p>Endereço</p>--}}
                                {{--                                <input class="form-control" size="70" type="text"--}}
                                {{--                                       value="{{$pessoa->endereco->endereco}}"--}}
                                {{--                                       disabled/>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="col-md-4">
        <a href="{{route('audit')}}" class="btn btn-primary">Voltar</a>
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
