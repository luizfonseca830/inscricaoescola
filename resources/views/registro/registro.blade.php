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
                    <h2>Dados Pessoais do Aluno</h2>
                    <input type="text" name="nome_completo" id="nome_completo" autocomplete="nome_completo"
                           value="{{old('nome_completo')}}"
                           class="@error('nome_completo') is-invalid @enderror form-control"
                           placeholder="Informe seu Nome Completo" autofocus/>
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
                           placeholder="Informe Sua Escola De Origem" autofocus/>
                    @error('escola_de_origem')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <select name="escolaridade" id="escolaridade">
                        <option value="">Selecione a escolaridade desejada</option>
                        @foreach($escolaridade as $esc)
                            <option value="{{$esc->id}}">{{$esc->nivel_escolaridade}}</option>
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

                    <p>Sexo</p>
                    <select class="@error('sexo') is-invalid @enderror form-control" name="sexo" id="sexo">
                        <option value="H">Masculino</option>
                        <option value="M">Feminino</option>
                    </select>

                    <input type="number" name="idade" min="5" id="idade" autocomplete="idade"
                           value="{{old('idade')}}"
                           class="@error('idade') is-invalid @enderror form-control" placeholder="Informe sua idade"/>
                    @error('idade')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="responsavel" id="responsavel" autocomplete="responsavel"
                           value="{{old('responsavel')}}"
                           class="@error('responsavel') is-invalid @enderror form-control"
                           placeholder="Nome Do Responsável"/>
                    @error('responsavel')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" id="telefone" name="telefone" autocomplete="telefone" value="{{old('telefone')}}"
                           class="@error('telefone') is-invalid @enderror form-control"
                           placeholder="Informe seu Telefone"/>
                    @error('telefone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="email" name="email" id="email" autocomplete="email" value="{{old('email')}}"
                           class="@error('email') is-invalid @enderror form-control" placeholder="Informe seu Email"/>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                </fieldset>

                <fieldset>
                    <h2>Dados Adicionais</h2>

                    <p>TEM IRMÃO(A) ESTUDANDO NA ESCOLA?</p>
                    <select name="irmaos_na_escola" id="irmaos_na_escola">
                        <option value="Sim">Sim</option>
                        <option value="Nao" selected>Nao</option>
                    </select>
                    <div class="divIrmaoEscola" hidden="true">
                        <input type="text" id="nome_irmaos_na_escola" name="nome_irmaos_na_escola"
                               placeholder="Nome do Irmão(a)"/>
                        <select name="serie_irmao_na_escola_id" id="serie_irmao_na_escola_id">
                            <option value="">Selecione a série</option>
                            @foreach($escolaridade as $esc)
                                <option value="{{$esc->id}}">{{$esc->nivel_escolaridade}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p>TEM IRMÃO (A) INSCRITO (A) NO SORTEIO DE VAGAS?</p>
                    <select name="irmaos_no_sorteio" id="irmaos_no_sorteio">
                        <option value="Sim">Sim</option>
                        <option value="Nao" selected>Nao</option>
                    </select>
                    <div class="divIrmaoSorteio" hidden="true">
                        <input type="text" id="nome_irmaos_no_sorteio" name="nome_irmaos_no_sorteio"
                               placeholder="Nome do Irmão(a)"/>
                        <select name="serie_irmao_no_sorteio_id" id="serie_irmao_no_sorteio_id">
                            <option value="">Selecione a série</option>
                            @foreach($escolaridade as $esc)
                                <option value="{{$esc->id}}">{{$esc->nivel_escolaridade}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                    <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                </fieldset>

                <fieldset>

                    <h2>Endereço</h2>
                    <input type="text" name="cep" id="cep" autocomplete="cep" value="{{old('cep')}}"
                           class="@error('cep') is-invalid @enderror form-control" placeholder="Informe seu CEP"/>
                    @error('cep')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <span class="help-block"></span>
                    <input type="text" name="bairro" id="bairro" autocomplete="bairro" value="{{old('bairro')}}"
                           class="@error('bairro') is-invalid @enderror form-control" placeholder="Informe seu Bairro"/>
                    @error('bairro')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input type="text" name="endereco" id="endereco" autocomplete="endereco" value="{{old('endereco')}}"
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
                                <label>Concordo com os Termos de <a href="jasper/pdf/politicadeprivacidade2021.pdf" target="_blank">Política de Privacidade</a></label>
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
@endsection
