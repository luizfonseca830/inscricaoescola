@extends('layouts.app', ['activePage' => 'RelatoriosIrmaos', 'titlePage' => __('Relatórios De Irmãos Na Escola')])
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
                    <form id="formulario_registro" method="post" action="{{route('gerar-relatorioirmaos')}}">
                        @csrf
                        <ul id="progress">
                            <li class="ativo" style="width: 100%">Relatório De Irmãos Na Escola</li>
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
                            <input type="submit" name="next" id="confirma" class="acao" style="width: auto"
                                   value="Gerar Relatório"/>
                        </fieldset>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
