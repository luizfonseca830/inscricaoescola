@extends('layouts.app', ['activePage' => 'TelaCriar', 'titlePage' => __('TelaCriar')])
@extends('layouts.modal-message')
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
                @foreach($arquivos as $arquivo)
                @endforeach
                <div class="row">
                    <form id="formulario_registro" method="post" action="{{route('tela-criar-salvar')}}">
                        @csrf
                        <ul id="progress">
                            <li class="ativo" style="width: 100%">Criar Tela</li>
                        </ul>

                        <fieldset>
                            <h2>Criar Tela</h2>
                            <h3>Tipo Tela</h3>
                            <select id="tipo_tela" name="tipo_tela">
                                <option value="0">Não Selecionado</option>
                                <option value="Tela">Tela</option>
                                <option value="PDF">PDF</option>
                            </select>
                            <div id="tela" hidden>
                                <p>Informe o nome da Tela</p>
                                <input type="text" name="tela_nome" value=""/>
                            </div>
                            <div id="pdf" hidden>
                                <p>Nome da Tela</p>
                                <input type="text" name="tela_nome_pdf" value=""/>
                                <p>Escolha o PDF</p>
                                <select name="nome_pdf">
                                    <option value="0">Não Selecionado</option>
                                    @foreach($arquivos as $arquivo)
                                        <option value="{{substr($arquivo, 62)}}">{{substr($arquivo, 62)}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div id="liberar">
                                <p>Liberar tela</p>
                                <select id="status_liberar" name="status_liberar">
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>

                            <div id="data_liberar" hidden>
                                <p>Selecione uma Data para liberar a Tela</p>
                                <input type="datetime-local" name="data_liberar">
                            </div>

                            <input type="submit" name="next" id="confirma" class="acao" value="Criar"/>
                        </fieldset>
                    </form>
                </div>
            </main>
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
            }
            else if ($('#tipo_tela').val() == 'PDF') {
                $('#pdf').removeAttr('hidden');
                $('#tela').attr('hidden', true);
            }
        });

        $('#status_liberar').click(function () {
            if ($('#status_liberar').val() == 0) {
                $('#data_liberar').removeAttr('hidden');
            }
            else {
                $('#data_liberar').attr('hidden', true);
            }
        });
    </script>
@endsection
