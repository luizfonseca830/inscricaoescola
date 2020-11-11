@extends('layouts.header-footer')

@section('title')
    <title>REGISTRO</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
@endsection

@section('content')
    <main class="container" id="ajuste">
        <div class="row">
            <form id="formulario_registro" method="post" action="{{route('registro/parte2')}}" enctype="multipart/form-data">
                @csrf
                <ul id="progress" class="{{$progress}}">
                    <li class="ativo">Anexos - Pessoais</li>
                    <li>Curso Técnico</li>
                    @if($pessoa->escolaridade->id == '3')
                        <li>Especialização</li>
                        <li>Mestrado</li>
                        <li>Doutarado</li>
                    @endif
                    <li>Experiência</li>
                    <input type="number" name="pessoa_id" value="{{$pessoa->id}}" hidden/>
                </ul>

                <fieldset>
                    <div class="alert alert-danger" id="erro_anex" hidden>Você precisa preencher os anexos.</div>
                    <h2>Anexos - Pessoais</h2>
                    <h3>Adicionar anexos dos documentos exigidos, para prosseguir</h3>

                    <div class="div-ajuste">
                        <label id="clickfupload1"  class="control-label label-bordered nomeArquivo">Adicione um Anexo com RG e CPF</label>
                        <input type="file" id="fupload1" name="anexosDocumentos[rgcpf]" value="{{old('anexosDocumentos.rgcpf')}}" class="@error('anexosDocumentos[rgcpf]') is-invalid @enderror" class="fupload form-control"/>
                        @error('anexosDocumentos.rgcpf')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="div-ajuste">
                        <label class="control-label label-bordered">Adicione um anexo com Comprovante de
                            Escolaridade - {{$pessoa->escolaridade->nivel_escolaridade}}</label>
                        <div class="nomeArquivo"></div>
                        <input type="file" id="fupload2" name="anexosDocumentos[escolaridade]" class="@error('anexosDocumentos[rgcpf]') is-invalid @enderror" class="fupload form-control"/>
                        @error('anexosDocumentos.escolaridade')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    @if($pessoa->portador_deficiencia == 1)
                        <div class="div-ajuste">
                            <label class="control-label label-bordered">Anexo com Compravante de
                                Deficiência</label>
                            <div class="nomeArquivo"></div>
                            <input type="file" id="fupload3" name="anexosDocumentos[defiencia]" class="fupload form-control"/>
                            @error('anexosDocumentos.defiencia')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                    <input type="button" name="next" id="verificar" class="acao" value="Verificar"/>
                    <input type="button" name="next" id="next" class="next acao" value="Proximo" style="visibility: hidden"/>
                </fieldset>

                <fieldset>
                    <h2>Concurso - Curso Técnicos</h2>
                    @for($i = 0; $i < 6; $i++)
                        <h3>Curso Técnico - {{$i+1}}</h3>
                        <input type="text" name="tecnico[descricoes][]" placeholder="Informe uma Descrição" value="{{old('tecnico.descricoes.'.$i)}}"/>
                        @error('tecnico.descricoes.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="ajuseLeft" name="tecnico[instituicao][]"
                               placeholder="Informe o nome da Instituição" value="{{old('tecnico.instituicao.'.$i)}}"/>
                        <input type="number" class="ajusteRight" name="tecnico[carga_horario][]"
                               placeholder="Informe a Carga Horária" value="{{old('tecnico.carga_horario.'.$i)}}"/>
                        @error('tecnico.instituicao.'.$i)
                        <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                        @enderror
                        @error('tecnico.carga_horario.'.$i)
                        <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                        @enderror
                        <div class="div-ajuste">
                            <p for="tecnico{{$i+1}}" class="control-label label-bordered">Anexo com Comprovante</p>
                            <div class="nomeArquivo"></div>
                            <input type="file" id="tecnico{{$i+1}}" name="tecnico[anexo_tecnico][]" class="fupload form-control"/>
                            @error('tecnico.anexo_tecnico.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr style="border-top: 2px solid;"/>
                    @endfor


                    <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                    <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                </fieldset>

                @if($pessoa->escolaridade->id == '3')

                    <fieldset>
                        <h2>Concurso - Especialização</h2>
                        @for($i = 0; $i < 3; $i++)
                            <h3>Especialização - {{$i+1}}</h3>
                            <input type="text" name="esp[descricao][]" placeholder="Informe uma Descrição" value="{{old('esp.descricao.'.$i)}}"/>
                            @error('esp.descricao.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="ajuseLeft" name="esp[instituicao][]"
                                   placeholder="Informe o nome da Instituição" value="{{old('esp.instituicao.'.$i)}}"/>
                            <input type="number" class="ajusteRight" name="esp[carga_horario][]"
                                   placeholder="Informe a Carga Horária" value="{{old('esp.carga_horario.'.$i)}}"/>
                            @error('esp.instituicao.'.$i)
                            <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                            @enderror
                            @error('esp.carga_horario.'.$i)
                            <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                            @enderror
                            <div class="div-ajuste">
                                <label for="esp{{$i+1}}" class="control-label label-bordered">Anexo com Comprovante</label>
                                <div class="nomeArquivo"></div>
                                <input type="file" id="esp{{$i+1}}" name="esp[anexo_esp][]" class="fupload form-control"/>
                                @error('esp.anexo_esp.'.$i)
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr style="border-top: 2px solid;"/>
                        @endfor

                        <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                        <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                    </fieldset>

                    <fieldset>
                        <h2>Concurso - Mestrado</h2>
                        @for($i = 0; $i < 2; $i++)
                            <h3>Mestrado - {{$i+1}}</h3>
                            <input type="text" name="mestrado[descricao][]" placeholder="Informe uma Descrição" value="{{old('mestrado.descricao.'.$i)}}"/>
                            @error('mestrado.descricao.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="ajuseLeft" name="mestrado[instituicao][]"
                                   placeholder="Informe o nome da Instituição" value="{{old('mestrado.instituicao.'.$i)}}"/>
                            <input type="number" class="ajusteRight" name="mestrado[carga_horario][]"
                                   placeholder="Informe a Carga Horária" value="{{old('mestrado.carga_horario.'.$i)}}"/>
                            @error('mestrado.instituicao.'.$i)
                            <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                            @enderror
                            @error('mestrado.carga_horario.'.$i)
                            <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                            @enderror
                            <div class="div-ajuste">
                                <label for="mest{{$i+1}}" class="control-label label-bordered">Anexo com Comprovante</label>
                                <div class="nomeArquivo"></div>
                                <input type="file" id="mest{{$i+1}}" name="mestrado[anexo_mestrado][]" class="fupload form-control"/>
                                @error('mestrado.anexo_mestrado.'.$i)
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr style="border-top: 2px solid;"/>
                        @endfor

                        <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                        <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                    </fieldset>

                    <fieldset>
                        <h2>Concurso - DOUTORADO</h2>
                        <h3>Doutorado - 1</h3>
                        <input type="text" name="doutorado[descricao][]" placeholder="Informe uma Descrição" value="{{old('doutorado.descricao.'.$i)}}"/>
                        @error('doutorado.descricao.0')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="ajuseLeft" name="doutorado[instituicao][]"
                               placeholder="Informe o nome da Instituição" value="{{old('doutorado.instituicao.'.$i)}}"/>
                        <input type="number" class="ajusteRight" name="doutorado[carga_horario][]"
                               placeholder="Informe a Carga Horária" value="{{old('doutorado.carga_horario.'.$i)}}"/>
                        @error('doutorado.instituicao.0')
                        <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                        @enderror
                        @error('doutorado.carga_horario.0')
                        <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                        @enderror

                        <div class="div-ajuste">
                            <label for="doutarado{{$i+1}}" class="control-label label-bordered">Anexo com Comprovante</label>
                            <div class="nomeArquivo"></div>
                            <input type="file" id="doutarado{{$i+1}}" name="doutorado[anexo_doutorado][]" class="fupload form-control"/>
                            @error('doutorado.anexo_doutorado.0')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                        <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                    </fieldset>
                @endif
                <fieldset>
                    @for($i = 0; $i < 5; $i++)
                        <h2>Experiência - Profissional {{$i+1}}</h2>
                        <input type="text" name="expe[cargo][]" placeholder="Informe o Cargo" value="{{old('expe.cargo.'.$i)}}"/>
                        @error('expe.cargo.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="ajuseLeft" name="expe[empregador][]"
                               placeholder="Informe o Empregador" value="{{old('expe.empregador.'.$i)}}"/>
                        <input type="text" class="ajusteRight" name="expe[nome_contato][]"
                               placeholder="Informe o Nome e contato do Sup." value="{{old('expe.nome_contato.'.$i)}}"/>
                        @error('expe.empregador.'.$i)
                        <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                        @enderror
                        @error('expe.nome_contato.'.$i)
                        <div class="alert alert-danger" style="width: 40%;display: inline-block;">{{ $message }}</div>
                        @enderror
                        <textarea type="date" name="expe[atribuicoes][]"
                                  placeholder="Informe o Atribuições e atividades desenvolvidas">{{old('expe.atribuicoes.'.$i)}}</textarea>
                        @error('expe.atribuicoes.'.$i)
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col col-12">
                            <p>Data de Entrada</p>
                            <input type="date"  name="expe[data_entrada][]"
                                   placeholder="Informe o Data de Entrada" value="{{old('expe.data_entrada.'.$i)}}" max="2020-12-31" min="1930-01-01"/>
                            @error('expe.data_entrada.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col col-12">
                            <p>Data de Saida</p>
                            <input type="date" name="expe[data_saida][]"
                                   placeholder="Informe o Data de Saída" value="{{old('expe.data_saida.'.$i)}}" max="2020-12-31" min="1930-01-01"/>
                            @error('expe.data_saida.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="div-ajuste">
                            <label for="exp{{$i+1}}" class="control-label label-bordered">Anexo com Comprovante</label>
                            <div class="nomeArquivo"></div>
                            <input type="file" id="exp{{$i+1}}" name="expe[anexo_exp][]" class="fupload form-control"/>
                            @error('expe.anexo_exp.'.$i)
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <hr style="border-top: 2px solid;"/>
                    @endfor
                        <h2>Informações Relevantes Sobre Sua Experência Profissional </h2>
                        <input type="text"  name="extra" placeholder="Informe Sobre Sua Experência Profissional ."/>
                        @error('extra')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="submit" name="next" id="next" class="acao" value="Enviar"/>
                        <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                </fieldset>
            </form>
        </div>
    </main>
@endsection

@section('script')
    <script src="{{asset('js/registro/function.js')}}"></script>
    <script src="{{asset('js/registro/anexos.js')}}"></script>
@endsection
