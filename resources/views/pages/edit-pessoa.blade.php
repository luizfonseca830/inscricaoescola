@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])
@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
@endsection
@section('content')
    <form method="POST" action="{{ route('edit-pessoa', $pessoa->id) }}">
        <div class="content">
            <div class="container-fluid">
                <main class="container" id="ajuste">
                    @csrf
                    <h4>Inscrito em:<input type="timestamp"
                                           value="{{date('d/m/Y H:i:s', strtotime( $pessoa->created_at))}}" />
                    </h4>

                    <div class="row">
                        <h2>Dados Pessoais do Aluno</h2>
                        <div class="col-sm-8">
                            <p>Nome Completo</p>
                            <input size="50" type="text" id="focosAtivo" name="nome_completo"
                                   value="{{$pessoa->nome_completo}}"
                                   />
                            <p>CPF</p>
                            <input type="text" value="{{$pessoa->cpf}}" />
                            <p>Escola de Origem</p>
                            <input type="text" value="{{$pessoa->escola_de_origem}}" />
                            <p>Nível De Escolaridade Desejada</p>
                            <input size="50" type="text" value="{{$pessoa->escolaridade->nivel_escolaridade}}"
                                   />
                            <p>Data de Nascimento</p>
                            <input type="date" name="data_nascimento" value="{{$pessoa->data_nascimento}}" />
                        </div>
                        <div class="col-sm-4">
                            <p>Sexo</p>
                            @if ($pessoa->sexo == 'H')
                                <input type="text" value="Masculino" />
                            @else
                                <input type="text" value="Femino" />
                            @endif
                            <p>Email</p>
                            <input size="40" type="email" value="{{$pessoa->email}}" />
                            <p>Idade</p>
                            <input type="text" value="{{$pessoa->idade}}" />
                            <p>Nome do Responsável</p>
                            <input size="40" type="text" value="{{$pessoa->responsavel}}" />
                            <p>Telefone</p>
                            <input type="text" value="{{$pessoa->telefone}}" />
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-sm">
                                    <h2>Dados Adicionais</h2>
                                    <p>TEM IRMÃO(A) ESTUDANDO NA ESCOLA?</p>
                                    @if ($pessoa->irmaos_na_escola == 'Sim')
                                        <input type="text" value="Sim" />
                                    @else
                                        <input type="text" value="Não" />
                                    @endif
                                    @if ($pessoa->irmaos_na_escola == 'Sim')
                                        <p>Nível De Escolaridade Do Seu Irmão Na Escola</p>
                                        <input size="50" type="text"
                                               value="{{\App\Models\Escolaridade::findOrfail($pessoa->serie_irmao_na_escola_id)->nivel_escolaridade}}"
                                               />
                                    @endif
                                    <p>TEM IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS?</p>
                                    @if ($pessoa->irmaos_no_sorteio == 'Sim')
                                        <input type="text" value="Sim" />
                                    @else
                                        <input type="text" value="Não" />
                                    @endif
                                    @if ($pessoa->irmaos_no_sorteio == 'Sim')
                                        <p>Nível De Escolaridade Do Seu Irmão No Sorteio</p>
                                        <input size="50" type="text"
                                               value="{{\App\Models\Escolaridade::findOrfail($pessoa->serie_irmao_no_sorteio_id)->nivel_escolaridade}}"
                                               />
                                    @endif


                                </div>
                                <div class="col-sm">
                                    <h2>Endereço</h2>
                                    <p>CEP</p>
                                    <input size="20" type="text" value="{{$pessoa->endereco->cep}}"
                                           />
                                    <p>Bairro</p>
                                    <input type="text" value="{{$pessoa->endereco->bairro}}"
                                           />
                                    <p>Endereço</p>
                                    <input size="70" type="text"
                                           value="{{$pessoa->endereco->endereco}}"
                                           />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-outline-danger">
                                {{ __('EDITAR') }}
                            </button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </form>
@endsection
@section('script')

    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
    <script src="{{asset('js/registro/function.js')}}"></script>
    <script src="{{asset('js/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('js/registro/mask.js')}}"></script>
    <script src="{{asset('js/registro/cep.js')}}"></script>
    <script src="{{asset('js/registro/selecionador.js')}}"></script>

@endsection
