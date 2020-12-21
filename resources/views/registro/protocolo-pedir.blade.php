@extends('layouts.header-footer')
@extends('layouts.modal-message')
@section('title')
    <title>INSTITUTO SÃO JOSÉ - REGISTRO</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/registro/comprovante.css')}}"/>
@endsection
<!-- -->
@section('content')
    <main class="container">
        <div class="row">
            <h2>Pesquisa Inscrição: </h2>
        </div>
        <form method="post" action="comprovante-procurar">
            @csrf
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Digite seu CPF</span>
                </div>
                <input type="text" id="cpf" name="cpf" class="form-control" aria-label="Small"
                       aria-describedby="inputGroup-sizing-sm">
                <br>

            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Data de Nascimento</span>
                </div>
                <input type="date" name="data_nascimento" id="data_nascimento"
                       autocomplete="data_nascimento" value="{{old('data_nascimento')}}"
                       class="@error('data_nascimento') is-invalid @enderror form-control"/>
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Pesquisar">
            <div style="width: 100%; margin-top: 2%;">
                @if (session()->has('sucess'))
                    <strong>Número do protocolo: {{session('sucess')}}</strong>
                    <div class="row">
                        <a href="{{route('gerarpdf-comprovante', session('sucess'))}}" target="_blank">Download do
                            Comprovante de Inscrição</a>
                    </div>
                    {{session()->forget('sucess')}}
                @endif
            </div>
        </form>
    </main>
@endsection

@section('script')
    <script src="{{asset('js/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('js/registro/mask.js')}}"></script>
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
