@extends('layouts.app', ['activePage' => 'Relatorios', 'titlePage' => __('Relatórios')])
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
                            <li class="ativo" style="width: 100%">Relatório</li>
                        </ul>

                        <fieldset>
                            <h2>Relatório</h2>

                            <input type="submit" name="next" id="confirma" class="acao" style="width: auto" value="Gerar Relatório"/>
                        </fieldset>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection

