@extends('layouts.app', ['activePage' => 'Relatorios', 'titlePage' => __('Relatórios')])
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
                    <form id="formulario_registro" method="post" action="{{route('gerar-relatorio')}}">
                        @csrf
                        <ul id="progress">
                            <li class="ativo" style="width: 100%">Relatório De Inscritos</li>
                        </ul>

                        <fieldset>
                            <h3>Selecione a Série</h3>
                            <select name="Filtroescolaridade">
                                <option value="">Todas</option>
                                @foreach($escolaridades as $escolaridade)
                                    <option value="{{$escolaridade->id}}">{{$escolaridade->nivel_escolaridade}}</option>
                                @endforeach
                            </select>


                            <input class="btn-primary" type="submit" name="next" id="confirma" class="acao" style="width: auto" value="Gerar Relatório"/>
                        </fieldset>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection

