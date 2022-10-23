@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'TelaLiberar', 'title' => __('TelaLiberar')])
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"
                         style="background-color: #0275d8; font-weight: bold; color: white">{{ __('Criar Tela/PDF') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tela-criar-salvar') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="tipo_tela"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Tipo Tela:') }}</label>

                                <div class="col-md-6">
                                    <select id="tipo_tela" name="tipo_tela" class="form-control">
                                        <option value="0">Não Selecionado</option>
                                        <option value="Tela" {{old('tipo_tela') == 'Tela' ? 'selected' : ''}}>Tela
                                        </option>
                                        <option value="PDF" {{old('tipo_tela') == 'PDF' ? 'selected' : ''}}>PDF</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row" id="tela" hidden>
                                <label for="tela_nome"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Informe o nome da tela:') }}</label>

                                <div class="col-md-6">
                                    <input id="tela_nome" type="text"
                                           class="form-control @error('tela_nome') is-invalid @enderror"
                                           name="tela_nome"
                                           value="{{ old('tela_nome') }}">

                                    @if ($errors->has('tela_nome'))
                                        <div id="tela_nome-error" class="error text-danger pl-3" for="tela_nome"
                                             style="display: block;">
                                            <strong>{{ $errors->first('tela_nome') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" id="pdf" hidden>
                                <label for="tela_nome"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Informe o nome do pdf:') }}</label>

                                <div class="col-md-6">
                                    <input id="tela_nome_pdf" type="text"
                                           class="form-control @error('tela_nome_pdf') is-invalid @enderror"
                                           name="tela_nome_pdf"
                                           value="{{ old('tela_nome_pdf') }}">

                                    @if ($errors->has('tela_nome_pdf'))
                                        <div id="tela_nome_pdf-error" class="error text-danger pl-3" for="tela_nome_pdf"
                                             style="display: block;">
                                            <strong>{{ $errors->first('tela_nome_pdf') }}</strong>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group row" id="pdf_file" hidden>
                                <label for="arquivo_pdf"
                                       class="col-md-4 col-form-label text-md-right" style="color: red">{{ __('Clique aqui e escolha o pdf') }}</label>
                                <input class="form-control" type="file" name="arquivo_pdf" id="arquivo_pdf">
                            </div>

                            <div class="form-group row" id="liberar" hidden>
                                <label for="liberar"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Liberar tela:') }}</label>

                                <div class="col-md-6">
                                    <select id="status_liberar" name="status_liberar" class="form-control">
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row" id="data_liberar" hidden>
                                <label for="tela_nome"
                                       class="col-md-4 col-form-label text-md-right">
                                    {{ __('Selecione um intervalo para liberar a tela:') }}</label>
                                <input type="datetime-local" name="data_inicial" class="form-control">
                                <input type="datetime-local" name="data_final" class="form-control">
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
    <script>
        $('#tipo_tela').click(function () {
            if ($('#tipo_tela').val() == 'Tela') {
                $('#tela').removeAttr('hidden');
                $('#pdf').attr('hidden', true);
                $('#pdf_file').attr('hidden', true);
                $('#liberar').removeAttr('hidden');
            } else if ($('#tipo_tela').val() == 'PDF') {
                $('#pdf').removeAttr('hidden');
                $('#pdf_file').removeAttr('hidden', true);
                $('#liberar').removeAttr('hidden');
                $('#tela').attr('hidden', true);
            } else {
                $('#tela').attr('hidden', true);
                $('#pdf').attr('hidden', true);
                $('#liberar').attr('hidden', true);
                $('#pdf_file').attr('hidden', true);
            }
        });


        $('#status_liberar').click(function () {
            if ($('#status_liberar').val() == 0) {
                $('#data_liberar').removeAttr('hidden');
            } else {
                $('#data_liberar').attr('hidden', true);
            }
        });
    </script>
@endsection
