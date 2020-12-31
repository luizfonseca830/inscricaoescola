@extends('layouts.app', ['activePage' => 'TelaLiberar', 'titlePage' => __('TelaLiberar')])
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
            <div class="container">
                <div class="row">
                    <input class="form-control" id="pesquisa" type="text" placeholder="Procurar..">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Nome da Tela</th>
                            <th scope="col">Data Liberar</th>
                            <th scope="col">Data Encerrar</th>
                            <th scope="col">Opções</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @forelse($tipos_telas as $tela)
                            <tr>
                                <th>{{$tela->id}}</th>
                                <th>{{$tela->tipo}}</th>
                                @if ($tela->tipo == 'PDF')
                                    <th>{{$tela->nome_anexo_mostrar}}</th>
                                @else
                                    <th>{{$tela->nome_ou_anexo}}</th>
                                @endif
                                @if (!is_null($tela->data_inicial))
                                    <th>{{date('d/m/Y H:i', strtotime($tela->data_inicial))}}</th>
                                @elseif ($tela->status_liberar == '1')
                                    <th>Essa tela está liberada</th>
                                @else
                                    <th>Essa tela não está liberada</th>

                                @endif
                                @if (!is_null($tela->data_final))
                                    <th>{{date('d/m/Y H:i', strtotime($tela->data_final))}}</th>
                                @elseif ($tela->status_liberar == '1')
                                    <th>Essa tela está liberada</th>
                                @else
                                    <th>Essa tela não está liberada</th>

                                @endif
                                <th>
                                    <a href="{{route('tela-unica-mostra', $tela->id)}}" style="margin-right: 15px"><i class="material-icons" style="color: blue">create</i></a>
                                    <a href="{{route('tela-deletar', $tela->id)}}"><i class="material-icons" style="color: red">delete</i></a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Nenhum Resultado Encontrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div style="width: 100%; margin-left: 50%">
                        {!! $tipos_telas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
