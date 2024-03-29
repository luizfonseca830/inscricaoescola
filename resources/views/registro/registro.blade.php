@extends('layouts.header-footer')
@section('title')
    <title>INSTITUTO SÃO JOSÉ - REGISTRO</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/registro/modal-confirmacao.css')}}">
@endsection

@section('content')

    <main class="container" id="ajuste">
        <div class="row">
            <form id="formulario_registro" method="post" action="{{route('registros')}}">
                @csrf
                @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                    {{session()->forget('error')}}
                @endif
                <ul id="progress">
                    <li class="ativo">Dados Pessoais do Aluno</li>
                    <li>Dados Adicionais</li>
                    <li>Endereço</li>
                </ul>

                <fieldset>
                    <div class="row">
                        <h2>Dados Pessoais do Aluno</h2>
                        <input type="text" name="nome_completo" id="nome_completo" autocomplete="nome_completo"
                               value="{{old('nome_completo')}}"
                               class="@error('nome_completo') is-invalid @enderror form-control"
                               placeholder="Informe seu Nome Completo"
                               style="text-transform: uppercase"
                               autofocus/>
                        @error('nome_completo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="cpf" id="cpf" autocomplete="cpf" value="{{old('cpf')}}"
                               class="@error('cpf') is-invalid @enderror form-control" placeholder="Informe seu CPF"/>
                        @error('cpf')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="escola_de_origem" id="escola_de_origem" autocomplete="escola_de_origem"
                               value="{{old('escola_de_origem')}}"
                               class="@error('escola_de_origem') is-invalid @enderror form-control"
                               placeholder="Informe Sua Escola De Origem"
                               style="text-transform: uppercase"
                               autofocus/>
                        @error('escola_de_origem')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <select name="escolaridade" id="escolaridade" autofocus>
                            <option value="">Selecione a série desejada</option>
                            @foreach($escolaridade as $esc)
                                <option value="{{$esc->id}}" @if(old('escolaridade')==$esc->id)
                                    {{'selected'}}
                                    @endif>
                                    {{$esc->nivel_escolaridade}}
                                </option>
                            @endforeach
                        </select>
                        @error('escolaridade')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <p>Data De Nascimento</p>
                        <input type="date" name="data_nascimento" id="data_nascimento"
                               autocomplete="data_nascimento" value="{{old('data_nascimento')}}"
                               class="@error('data_nascimento') is-invalid @enderror form-control"/>

                        @error('data_nascimento')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="number" name="idade" min="5" id="idade" autocomplete="idade"
                               value="{{old('idade')}}"
                               class="@error('idade') is-invalid @enderror form-control"
                               placeholder="Informe sua idade"/>
                        @error('idade')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <select class="@error('sexo') is-invalid @enderror form-control" name="sexo" id="sexo"
                                placeholder="Sexo do aluno">
                            <option value="H">Masculino</option>
                            <option value="M">Feminino</option>
                        </select>
                        <h2>Dados do Responsavel</h2>

                        <input type="text" name="responsavel" id="responsavel" autocomplete="responsavel"
                               value="{{old('responsavel')}}"
                               class="@error('responsavel') is-invalid @enderror form-control"
                               placeholder="Nome Do Responsável"
                               style="text-transform: uppercase"/>
                        @error('responsavel')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" id="telefone" name="telefone" autocomplete="telefone"
                               value="{{old('telefone')}}"
                               class="@error('telefone') is-invalid @enderror form-control"
                               placeholder="Informe seu Telefone"/>
                        @error('telefone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="email" name="email" id="email" autocomplete="email" value="{{old('email')}}"
                               class="@error('email') is-invalid @enderror form-control"
                               placeholder="Informe seu Email"
                               style="text-transform:lowercase"/>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                </fieldset>


                <fieldset>
                    <h2>Dados Adicionais</h2>

                    <p>TEM IRMÃO(A) ESTUDANDO NA ESCOLA?</p>

                    <select name="irmaos_na_escola" id="irmaos_na_escola">
                        <option value="Nao" {{old('irmaos_na_escola') == 'Nao' ? 'selected' : ''}}>Não</option>
                        <option value="Sim" {{old('irmaos_na_escola') == 'Sim' ? 'selected' : ''}}>Sim</option>
                    </select>

                    <div class="divIrmaoEscolaSeleciona" {{old('irmaos_na_escola') == 'Sim' ? '' : 'hidden'}}>
                        <select class="@error('serie_irmao_na_escola_id') is-invalid @enderror form-control"
                                name="serie_irmao_na_escola_id" id="serie_irmao_na_escola_id">
                            <option value="">Selecione a série</option>
                            @foreach($escolaridade as $esc)
                                <option
                                    value="{{$esc->id}}" {{old('serie_irmao_na_escola_id') == $esc->id ? 'selected' : ''}}>{{$esc->nivel_escolaridade}}</option>
                            @endforeach
                        </select>
                        @error('serie_irmao_na_escola_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div
                        class="divIrmaoEscolaInput" {{ is_null(old('serie_irmao_na_escola_id')) ? 'hidden' : ''}}>
                        <input type="text" name="nome_irmaos_na_escola" id="nome_irmaos_na_escola"
                               autocomplete="nome_irmaos_na_escola"
                               value="{{old('nome_irmaos_na_escola')}}"
                               class="@error('nome_irmaos_na_escola') is-invalid @enderror form-control"
                               placeholder="Informe seu Nome Completo"
                               style="text-transform: uppercase"
                               autofocus/>
                        @error('nome_irmaos_na_escola')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <p>TEM IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS?</p>
                    <select name="irmaos_no_sorteio" id="irmaos_no_sorteio">
                        <option value="Nao" {{old('irmaos_no_sorteio') == 'Nao' ? 'selected' : ''}}>Não</option>
                        <option value="Sim" {{old('irmaos_no_sorteio') == 'Sim' ? 'selected' : ''}}>Sim</option>
                    </select>
                    <div class="divIrmaoSorteioSeleciona" {{old('irmaos_no_sorteio') == 'Sim' ? '' : 'hidden'}}>
                        <select class="@error('serie_irmao_no_sorteio_id') is-invalid @enderror form-control"
                                name="serie_irmao_no_sorteio_id" id="serie_irmao_no_sorteio_id">
                            <option value="">Selecione a série</option>
                            @foreach($escolaridade as $esc)
                                <option
                                    value="{{$esc->id}}" {{old('serie_irmao_no_sorteio_id') == $esc->id ? 'selected' : ''}}>{{$esc->nivel_escolaridade}}</option>
                            @endforeach
                        </select>
                        @error('serie_irmao_no_sorteio_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div
                        class="divIrmaoSorteioInput" {{ is_null(old('serie_irmao_no_sorteio_id')) ? 'hidden' : ''}}>
                        <input type="text" name="nome_irmaos_no_sorteio" id="nome_irmaos_no_sorteio"
                               autocomplete="nome_irmaos_no_sorteio"
                               value="{{old('nome_irmaos_no_sorteio')}}"
                               class="@error('nome_irmaos_no_sorteio') is-invalid @enderror form-control"
                               placeholder="Informe seu Nome Completo"
                               style="text-transform: uppercase"
                               class="@error('nome_irmaos_no_sorteio') is-invalid @enderror form-control"/>
                        @error('nome_irmaos_no_sorteio')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                    <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                </fieldset>


                <fieldset>
                    <div class="row">
                        <h2>Endereço</h2>
                        <input type="text" name="cep" id="cep" autocomplete="cep" value="{{old('cep')}}"
                               class="@error('cep') is-invalid @enderror form-control" placeholder="Informe seu CEP"/>
                        @error('cep')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <span class="help-block"></span>
                        <input type="text" name="bairro" id="bairro" autocomplete="bairro" value="{{old('bairro')}}"
                               class="@error('bairro') is-invalid @enderror form-control"
                               placeholder="Informe seu Bairro"/>
                        @error('bairro')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="text" name="endereco" id="endereco" autocomplete="endereco"
                               value="{{old('endereco')}}"
                               class="@error('endereco') is-invalid @enderror form-control"
                               placeholder="Informe seu Endereço/UF"/>
                        @error('endereco')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="number" name="numero" min="0" id="numero" autocomplete="numero"
                               value="{{old('numero')}}" class="@error('numero') is-invalid @enderror form-control"
                               placeholder="Informe o número"/>
                        @error('numero')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <input type="checkbox" name="termo_de_condicao" required>
                                </div>
                                <div class="col-8">
                                    <label>Usuário está ciente de que
                                        fornece informação de forma consciente e voluntária por meio do formulário.
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <input type="checkbox" name="termo_de_privacidade" required>
                                </div>
                                <div class="col-8">
                                    <label>Concordo com os Termos de <a href="/jasper/pdf/politicadeprivacidade2021.pdf"
                                                                        target="_blank">Política de
                                            Privacidade</a></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="enviar" class="acao" value="Enviar"/>
                    <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                </fieldset>
            </form>
        </div>
    </main>
@endsection


@section('script')
    <script src="{{asset('js/registro/function.js')}}"></script>
    <script src="{{asset('js/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('js/registro/mask.js')}}"></script>
    <script src="{{asset('js/registro/cep.js')}}"></script>
    <script src="{{asset('js/registro/selecionador.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#formulario_registro').submit(function () {
                $("body").find('#loading').removeAttr('hidden');
            });
        });
    </script>
@endsection
