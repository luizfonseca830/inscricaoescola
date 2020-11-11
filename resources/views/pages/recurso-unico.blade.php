@extends('layouts.app', ['activePage' => 'recurso', 'titlePage' => __('Recurso')])

@section('css')
    <link rel="stylesheet" href="{{asset('css/area-restrita/avaliar.css')}}">
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                <div class="row">
                    <form id="formulario_registro" method="post" action="{{route('recurso-aceitar')}}">
                        <div class="fixed-plugin">
                            <div class="dropdown show-dropdown show">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-thumbs-up fa-3x" style="color: #fff"> </i>
                                </a>
                                <ul class="dropdown-menu show">
                                    <li class="header-title"> Recurso</li>
                                    <li class="button-container">
                                        <a href="{{route('recurso-recusarmotivo', $pessoa->recurso->id)}}" class="btn btn-danger btn-block btn-round">
                                            Recusar
                                        </a>
                                        <input class="btn btn-success btn-block btn-round" style="border-radius: 30px;" type="submit" value="Aceitar" style=""/>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if(!is_null($pessoa->pontuacao_id))
                        <div class="alert alert-primary" role="alert">
                            Pontuação Total: {{$pessoa->pontuacao->pontuacao_total}}
                        </div>
                        @endif
                        @error('motivo_rep')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="number" name="pessoa_id" value="{{$pessoa->id}}" hidden/>

                        @csrf
                        @if ($pessoa->escolaridade->id == '3')
                            <ul id="progress" class="progress-ajuste2">
                                @else
                                    <ul id="progress" class="progress-ajuste">
                                        @endif
                                        <li class="ativo">Dados Pessoais</li>
                                        <li>Endereço</li>
                                        <li>Anexo Escolaridade</li>
                                        <li>Curso Técnico</li>
                                        @if ($pessoa->escolaridade->id == '3')
                                            <li>ESPECIALIZAÇÃO</li>
                                            <li>MESTRADO</li>
                                            <li>DOUTORADO</li>
                                        @endif
                                        <li>Experiência</li>
                                    </ul>

                                    <fieldset>
                                        <h2>Recurso - Descrição</h2>
                                        <textarea cols="30" rows="5" disabled>{{$pessoa->recurso->recurso}}</textarea>
                                        <h2>Dados Pessoais</h2>
                                        <h3>Lorem Up</h3>
                                        <input type="text" id="focosAtivo" name="nome_completo" placeholder="Informe seu Nome Completo"
                                               value="{{$pessoa->nome_completo}}" disabled/>
                                        <input type="text" placeholder="Informe seu CPF" value="{{$pessoa->cpf}}" disabled/>
                                        <input type="text" placeholder="Informe seu RG" value="{{$pessoa->rg}}" disabled/>
                                        <div class="anexo">
                                            <a target="_blank" href="{{asset('storage/anexos/documentos/'.$pessoa->anexos->documento_pessoas)}}">Anexo De RG
                                                e CPF</a>
                                        </div>
                                        <input type="text" placeholder="Informe seu PIS" value="{{$pessoa->pis}}" disabled/>
                                        <input type="text" placeholder="Informe seu Telefone" value="{{$pessoa->telefone}}" disabled/>
                                        <input type="text" placeholder="Informe sua Nacionalidade" value="{{$pessoa->nacionalidade}}"
                                               disabled/>
                                        <input type="text" placeholder="Informe sua Naturalidade" value="{{$pessoa->naturalidade}}"
                                               disabled/>
                                        <input type="email" placeholder="Informe seu Email" value="{{$pessoa->email}}" disabled/>
                                        <p>Data de Nascimento</p>
                                        <input type="date" name="data_nascimento" value="{{$pessoa->data_nascimento}}" disabled/>
                                        <p>Sexo</p>
                                        @if ($pessoa->sexo == 'H')
                                            <input type="text" value="Masculino" disabled/>
                                        @else
                                            <input type="text" value="Femino" disabled/>
                                        @endif

                                        <p>Deficiencia ?</p>
                                        @if($pessoa->portador_deficiencia == 1)
                                            <input type="text" value="Sim" disabled/>
                                            <div class="anexo">
                                                <a target="_blank" href="{{asset('storage/anexos/documentos/'.$pessoa->anexos->anexo_deficiencia)}}">Anexo de Deficiência</a>
                                            </div>
                                        @else
                                            <input type="text" value="Não" disabled/>
                                        @endif

                                        <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                                    </fieldset>

                                    <fieldset>
                                        <h2>Endereço</h2>
                                        <p>CEP</p>
                                        <input type="text" placeholder="Informe seu CEP" value="{{$pessoa->endereco->cep}}" disabled/>
                                        <p>Bairro</p>
                                        <input type="text" placeholder="Informe seu Bairro" value="{{$pessoa->endereco->bairro}}" disabled/>
                                        <p>Endereço</p>
                                        <input type="text" placeholder="Informe seu Endereço" value="{{$pessoa->endereco->endereco}}"
                                               disabled/>
                                        <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                                        <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                                    </fieldset>

                                    <fieldset>
                                        <h2>Escolaridade</h2>
                                        <p>Nível Escolaridade</p>
                                        <input type="text" value="{{$pessoa->escolaridade->nivel_escolaridade}}" disabled/>

                                        <p>Cargo</p>
                                        <input type="text" value="{{$pessoa->cargo->cargo}}" disabled/>

                                        <div class="anexo">
                                            <a target="_blank" href="{{asset('storage/anexos/documentos/'.$pessoa->anexos->anexo_escolaridade)}}">Anexo de Escolaridade</a>
                                        </div>

                                        <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                                        <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                                    </fieldset>

                                    <fieldset>
                                        <h2>Curso Técnico</h2>
                                        @if(count($pessoa->anexos->anexoCursoTecnico) > 0)
                                            {{!!$i=0}}
                                            @foreach($pessoa->anexos->anexoCursoTecnico as $anexoTecnico)
                                                <h3>Curso Tecnico</h3>
                                                <p>Nome da Instituição: </p>
                                                <input type="text"  value="{{$anexoTecnico->nome_instituicacao}}" disabled/>

                                                <p>Carga horária: </p>
                                                <input type="number" value="{{$anexoTecnico->carga_horaria}}" disabled/>

                                                <p>Descrição: </p>
                                                <input type="text" value="{{$anexoTecnico->descricacao}}" disabled/>

                                                <div class="anexo">
                                                    <a target="_blank" href="{{asset('storage/anexos/tecnico/' .$anexoTecnico->anexo)}}">Anexo Curso Tecnico - {{$anexoTecnico->nome_instituicacao}}</a>
                                                </div>
                                                @if (!is_null($pessoa->pontuacao_id))
                                                <strong>Pontuação: </strong>
                                                <input type="number" name="pontuacao_tecnico[id][]" value="{{$anexoTecnico->pontuacaoTecnico->id}}" hidden/>
                                                <input type="number" name="pontuacao_tecnico[pontuacao][]" id="tecnico-{{$i}}" value="{{$anexoTecnico->pontuacaoTecnico->pontuacao}}" min="0" step="0.5" max="0.5"/>
                                                @endif
                                                <?php $i++ ?>
                                                <hr style="border-top: 2px solid;"/>
                                            @endforeach
                                        @else
                                            <div class="sem-anexo">
                                                <strong>Não possui Anexos!</strong>
                                            </div>
                                        @endif
                                        <input type="button" id="next" class="next acao" value="Proximo"/>
                                        <input type="button" id="prev" class="prev acao" value="Anterior"/>
                                    </fieldset>
                                    @if($pessoa->escolaridade->id == '3')
                                        <fieldset>
                                            <h2>Especialização</h2>
                                            @if (count($pessoa->anexos->anexoEspecializacao) > 0)
                                                {{!!$i=0}}
                                                @foreach($pessoa->anexos->anexoEspecializacao as $anexoEspecializacao)
                                                    <h3>Especialização</h3>
                                                    <p>Nome da Instituição: </p>
                                                    <input type="text"  value="{{$anexoEspecializacao->nome_instituicacao}}" disabled/>

                                                    <p>Carga horária: </p>
                                                    <input type="number" value="{{$anexoEspecializacao->carga_horaria}}"    disabled/>

                                                    <p>Descrição: </p>
                                                    <input type="text" value="{{$anexoEspecializacao->descricacao}}" disabled/>

                                                    <div class="anexo">
                                                        <a target="_blank" href="{{asset('storage/anexos/especializacao/' .$anexoEspecializacao->anexo)}}">Anexo Especialização - {{$anexoEspecializacao->nome_instituicacao}}</a>
                                                    </div>
                                                    @if (!is_null($pessoa->pontuacao_id))
                                                    <strong>Pontuação: </strong>
                                                    <input type="number" name="pontuacao_especializacao[id][]" value="{{$anexoEspecializacao->pontuacaoEspecializacao->id}}" hidden/>
                                                    <input type="number" name="pontuacao_especializacao[pontuacao][]" id="especializacao-{{$i}}" value="{{$anexoEspecializacao->pontuacaoEspecializacao->pontuacao}}" min="0" step="2" max="2"/>
                                                    @endif
                                                    <?php $i++ ?>
                                                    <hr style="border-top: 2px solid;"/>
                                                @endforeach
                                            @else
                                                <div class="sem-anexo">
                                                    <strong>Não possui Anexos!</strong>
                                                </div>
                                            @endif
                                            <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                                            <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                                        </fieldset>


                                        <fieldset>
                                            <h2>Mestrado</h2>
                                            @if (count($pessoa->anexos->anexoMestrado) > 0)
                                                {{!!$i=0}}
                                                @foreach($pessoa->anexos->anexoMestrado as $anexoMestrado)
                                                    <h3>Mestrado</h3>
                                                    <p>Nome da Instituição: </p>
                                                    <input type="text"  value="{{$anexoMestrado->nome_instituicacao}}" disabled/>

                                                    <p>Carga horária: </p>
                                                    <input type="number" value="{{$anexoMestrado->carga_horaria}}" disabled/>

                                                    <p>Descrição: </p>
                                                    <input type="text" value="{{$anexoMestrado->descricacao}}" disabled/>

                                                    <div class="anexo">
                                                        <a target="_blank" href="{{asset('storage/anexos/mestrado/' .$anexoMestrado->anexo)}}">Anexo Mestrado - {{$anexoMestrado->nome_instituicacao}}</a>
                                                    </div>
                                                    @if (!is_null($pessoa->pontuacao_id))
                                                    <strong>Pontuação: </strong>
                                                    <input type="number" name="pontuacao_mestrado[id][]" value="{{$anexoMestrado->pontuacaoMestrado->id}}" hidden/>
                                                    <input type="number" name="pontuacao_mestrado[pontuacao][]" id="mestrado-{{$i}}" value="{{$anexoMestrado->pontuacaoMestrado->pontuacao}}" min="0" step="3" max="3"/>
                                                    @endif
                                                    <?php $i++ ?>
                                                    <hr style="border-top: 2px solid;"/>
                                                @endforeach
                                            @else
                                                <div class="sem-anexo">
                                                    <strong>Não possui Anexos!</strong>
                                                </div>
                                            @endif
                                            <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                                            <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                                        </fieldset>

                                        <fieldset>
                                            <h2>Doutorado</h2>
                                            @if (count($pessoa->anexos->anexoDoutorado) > 0)
                                                @foreach($pessoa->anexos->anexoDoutorado as $anexoDoutorado)
                                                    <h3>Doutorado</h3>
                                                    <p>Nome da Instituição: </p>
                                                    <input type="text"  value="{{$anexoDoutorado->nome_instituicacao}}" disabled/>

                                                    <p>Carga horária: </p>
                                                    <input type="number" value="{{$anexoDoutorado->carga_horaria}}" disabled/>

                                                    <p>Descrição: </p>
                                                    <input type="text" value="{{$anexoDoutorado->descricacao}}" disabled/>

                                                    <div class="anexo">
                                                        <a target="_blank" href="{{asset('storage/anexos/doutorado/' .$anexoDoutorado->anexo)}}">Anexo Doutorado - {{$anexoDoutorado->nome_instituicacao}}</a>
                                                    </div>
                                                    @if(!is_null($pessoa->pontuacao_id))
                                                    <strong>Pontuação: </strong>
                                                    <input type="number" name="pontuacao_doutorada[id][]" value="{{$anexoDoutorado->pontuacaoDoutorado->id}}" hidden/>
                                                    <input type="number" name="pontuacao_doutorada[pontuacao][]" id="doutorado" value="{{$anexoDoutorado->pontuacaoDoutorado->pontuacao}}" min="0" step="5" max="5"/>
                                                    @endif
                                                    <hr style="border-top: 2px solid;"/>
                                                @endforeach
                                            @else
                                                <div class="sem-anexo">
                                                    <strong>Não possui Anexos!</strong>
                                                </div>
                                            @endif
                                            <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                                            <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                                        </fieldset>
                                    @endif

                                    <fieldset>
                                        <h2>Experiência</h2>
                                        @if (count($pessoa->anexos->anexoExperiencia) > 0)
                                            <?php $index = 0?>
                                            @foreach($pessoa->anexos->anexoExperiencia as $anexoExperiencia)
                                                <h3>Experiência - {{$anexoExperiencia->cargo}}</h3>
                                                <p>Nome do Cargo: </p>
                                                <input type="text"  value="{{$anexoExperiencia->cargo}}" disabled/>

                                                <p>Nome do Empregador: </p>
                                                <input type="text" value="{{$anexoExperiencia->empregador}}" disabled/>

                                                <p>Nome do Supervisor: </p>
                                                <input type="text" value="{{$anexoExperiencia->nome_supervisor}}" disabled/>

                                                <p>Atribuições: </p>
                                                <input type="text" value="{{$anexoExperiencia->atribuicoes}}" disabled/>

                                                <p>Data de Entrada: </p>
                                                <input type="date" id="data_entrada-{{$index}}" name="pontuacao_experiencia[data_entrada][]" value="{{$anexoExperiencia->data_entrada}}" />

                                                <p>Data de Saída: </p>
                                                <input type="date" id="data_saida-{{$index}}" name="pontuacao_experiencia[data_saida][]" value="{{$anexoExperiencia->data_saida}}" />

                                                <div class="anexo">
                                                    <a target="_blank" href="{{asset('storage/anexos/experiencia/' .$anexoExperiencia->anexo)}}">Anexo Experiência - {{$anexoExperiencia->nome_instituicacao}}</a>
                                                </div>
                                                @if(!is_null($pessoa->pontuacao_id))
                                                <strong>Pontuação: </strong>
                                                <input type="number" name="pontuacao_experiencia[id][]" value="{{$anexoExperiencia->pontuacaoExperiencia->id}}" hidden/>
                                                <input type="number" id="pontuacao_experiencia-{{$index}}" name="pontuacao_experiencia[pontuacao][]" value="{{$anexoExperiencia->pontuacaoExperiencia->pontuacao}}" min="0" step="any" max="40"/>
                                                @endif
                                                <?php $index++?>
                                                    <hr style="border-top: 2px solid;"/>
                                            @endforeach
                                        @else
                                            <div class="sem-anexo">
                                                <strong>Não possui Anexos!</strong>
                                            </div>
                                        @endif

                                        <input type="submit" name="prev" style="background: green" class="acao" value="Aceitar"/>
                                        <a href="{{route('recurso-recusarmotivo', $pessoa->recurso->id)}}"><input type="button" name="prev" style="background: red" class="acao" value="Recusar"/></a>
                                        <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                                    </fieldset>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
    <script src="{{asset('js/registro/function.js')}}"></script>
    <script>
        $(function () {
            for (var i = 0; i < 6; i++) {
                $( "#tecnico-"+i).change(function() {

                    var max = parseFloat($(this).attr('max'));
                    var min = parseInt($(this).attr('min'));
                    if ($(this).val() > max)
                    {
                        $(this).val(max);
                    }
                    else if ($(this).val() < min)
                    {
                        $(this).val(min);
                    }
                });
            }

            for (var i = 0; i < 3; i++) {
                $( "#especializacao-" + i).change(function() {

                    var max = parseFloat($(this).attr('max'));
                    var min = parseInt($(this).attr('min'));
                    if ($(this).val() > max)
                    {
                        $(this).val(max);
                    }
                    else if ($(this).val() < min)
                    {
                        $(this).val(min);
                    }
                });
            }

            for (var i = 0; i < 3; i++) {
                $( "#mestrado-" + i).change(function() {

                    var max = parseFloat($(this).attr('max'));
                    var min = parseInt($(this).attr('min'));
                    if ($(this).val() > max)
                    {
                        $(this).val(max);
                    }
                    else if ($(this).val() < min)
                    {
                        $(this).val(min);
                    }
                });
            }

            for (var i = 0; i < 2; i++) {
                $( "#mestrado-" + i).change(function() {

                    var max = parseFloat($(this).attr('max'));
                    var min = parseInt($(this).attr('min'));
                    if ($(this).val() > max)
                    {
                        $(this).val(max);
                    }
                    else if ($(this).val() < min)
                    {
                        $(this).val(min);
                    }
                });
            }

            for (var i = 0; i < 6; i++) {
                $( "#pontuacao_experiencia-" + i).change(function() {

                    var max = 40;
                    var min = parseInt($(this).attr('min'));
                    if ($(this).val() > max)
                    {
                        $(this).val(max);
                    }
                    else if ($(this).val() < min)
                    {
                        $(this).val(min);
                    }
                });
            }

            $( "#doutorado").change(function() {

                var max = parseFloat($(this).attr('max'));
                var min = parseInt($(this).attr('min'));
                if ($(this).val() > max)
                {
                    $(this).val(max);
                }
                else if ($(this).val() < min)
                {
                    $(this).val(min);
                }
            });


        });
    </script>
@endsection
