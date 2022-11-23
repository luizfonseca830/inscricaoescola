@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'ModuloRequest', 'title' => __('ModuloRequest')])
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
    <div class="content" style="margin-top: 60px; margin-bottom: 60px">
        <x-alert/>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"
                         style="background-color: #0275d8; font-weight: bold; color: white">{{ __('Criar Escolaridade') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('modulo-salvar') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="escolaridade_nome"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Informe o nome da escolaridade:') }}</label>

                                <div class="col-md-6">
                                    <input id="descricao" type="text"
                                           class="form-control @error('descricao') is-invalid @enderror"
                                           name="descricao"
                                           value="{{ old('descricao') }}">

                                    @if ($errors->has('descricao'))
                                        <div id="escolaridade_nome-error" class="error text-danger pl-3" for="descricao"
                                             style="display: block;">
                                            <strong>{{ $errors->first('descricao') }}</strong>
                                        </div>
                                    @endif
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
