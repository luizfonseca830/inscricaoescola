@extends('layouts.app', ['activePage' => 'avaliacao', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">

@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                <form id="formulario_registro" action="{{ route('/visualizacao') }}" method="post">
                    <ul id="progress">
                        <li class="ativo" style="width: 100%">Filtra Inscritos</li>
                    </ul>
                    @csrf
                    <label>Data Início</label>
                    <input type="date" name="data_inicio" class="form-control">

                    <label>Data Fim</label>
                    <input type="date" name="data_fim" class="form-control">

                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </main>
        </div>
    </div>
@endsection
