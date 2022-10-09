@extends('layouts.header-footer')

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
            <h2>Comprovante de Inscrição: {{$comprovante}}</h2>
        </div>
        <div class="row">
            <a href="{{route('gerarpdf-comprovante', $comprovante)}}" target="_blank">Download Do Comprovante de Inscrição</a>
        </div>
    </main>
@endsection

@section('script')

@endsection
