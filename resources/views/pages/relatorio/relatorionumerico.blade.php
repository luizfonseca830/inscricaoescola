@extends('layouts.app', ['activePage' => 'RelatorioNumerico', 'titlePage' => __('Relatório Numérico')])
@section('title')
    <title>INSTITUTO SÃO JOSÉ</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                <div class="row">
                    <form id="formulario_registro" method="post" action="{{route('gerar-relatorionumerico')}}">
                        @csrf
                        <ul id="progress">
                            <li class="ativo" style="width: 100%">Relatório Numérico</li>
                        </ul>

                        <fieldset>
                            <div class="alert alert-warning" role="alert">
                                Atenção: Para o funcionamento correto é necessário informa todos os filtros
                                <br>
                                Ou caso queira trazer todos os inscritos click em gerar relatório</div>
                            <h3>Selecione a Escolaridade</h3>
                            <select name="Filtroescolaridade">
                                <option value="">Todas</option>
                                @foreach($escolaridades as $escolaridade)
                                    <option value="{{$escolaridade->id}}">{{$escolaridade->nivel_escolaridade}}</option>
                                @endforeach
                            </select>
                            <h3>Inicio do periodo de inscrição</h3>
                            <input class="form-control" type="datetime-local" name="periodo_inicio" >
                            <h3>Fim periodo de inscrição</h3>
                            <input class="form-control" type="datetime-local" name="periodo_fim">
                            <input type="submit" name="next" id="confirma" class="acao" style="width: auto"
                                   value="Gerar Relatório"/>
                        </fieldset>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection

