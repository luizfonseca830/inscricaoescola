@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'EscolaridadeRequest', 'title' => __('EscolaridadeRequest')])
@extends('layouts.modal-message')
@section('title')
    <title>INSTITUTO SÃO JOSÉ</title>
@endsection
@section('css')
    <style>
        label {
            position: initial !important;
        }
    </style>
@endsection
@section('content')
    <div class="container" style="margin-top: 60px; margin-bottom: 60px">
        <x-alert/>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"
                         style="background-color: #0275d8; font-weight: bold; color: white">{{ __('Criar Série') }}</div>
                    <div class="card-body">
                        <form method="POST" action="escolaridade-salvar">
                            @csrf

                            <div class="form-group row">
                                <label for="nivel_escolaridade"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Informe o nome da Série:') }}</label>

                                <div class="col-md-6">
                                    <input id="nivel_escolaridade" type="text"
                                           class="form-control @error('nivel_escolaridade') is-invalid @enderror"
                                           name="nivel_escolaridade"
                                           value="{{ old('nivel_escolaridade') }}">

                                    @if ($errors->has('nivel_escolaridade'))
                                        <div id="nivel_escolaridade-error" class="error text-danger pl-3"
                                             for="nivel_escolaridade"
                                             style="display: block;">
                                            <strong>{{ $errors->first('nivel_escolaridade') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label
                                    class="col-md-4 col-form-label text-md-right">{{ __('Selecione a Escolaridade:') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="modulo_id">
                                        <option value="">Não selecionado</option>
                                        @foreach($modulos as $modulo)
                                            <option value="{{$modulo->id}}">{{$modulo->descricao}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
