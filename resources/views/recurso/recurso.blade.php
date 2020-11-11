@extends('layouts.header-footer')

@section('css')
    <link rel="stylesheet" href="{{asset('css/recurso/style.css')}}">
@endsection

@section('content')
    <main class="container" id="ajuste">
        <div class="row">
            <form id="formulario_registro" method="post" action="{{route('recurso-pedir')}}">
                @csrf
                <ul id="progress">
                    <li class="ativo" >CPF</li>
                    <li>Recurso</li>
                </ul>

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    {{session()->forget('error')}}
                @endif
                @if (session()->has('sucess'))
                    <div class="alert alert-success">{{session('sucess')}}</div>
                    {{session()->forget('sucess')}}
                @endif
                <fieldset>
                    <h2>CPF</h2>
                    <input type="text" id="cpf" name="CPF" placeholder="Informe seu CPF" autofocus/>
                    @error('CPF')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="button" name="next" id="next" class="next acao" value="Proximo"/>
                </fieldset>

                <fieldset>
                    <h2>Recurso</h2>
                    <h3>Descrição do Recurso</h3>
                    <textarea name="comentario" id="comentario" rows="10" cols="30" placeholder="Descreva.."></textarea>
                    @error('comentario')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <p><small class="caracteres"></small></p>
                    <input type="submit" name="next" id="next" class="acao" value="Enviar"/>
                    <input type="button" name="prev" id="prev" class="prev acao" value="Anterior"/>
                </fieldset>
            </form>
        </div>
    </main>

@endsection

@section('script')
    <script src="{{asset('js/registro/function.js')}}"></script>
    <script src="{{asset('js/contador.js')}}"></script>
    <script src="{{asset('js/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('js/registro/mask.js')}}"></script>
@endsection




