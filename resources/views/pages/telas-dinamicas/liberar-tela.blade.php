@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'TelaLiberar', 'title' => __('TelaLiberar')])
@extends('layouts.modal-message')
@section('title')
    <title>INSTITUTO SÃO JOSÉ</title>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-right">
                        <a href="{{route('tela-criar')}}" class="btn btn-sm btn-primary">Adicionar Tela/PDF</a>
                    </div>
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
                                    <a href="{{route('tela-unica-mostra', $tela->id)}}" style="margin-right: 15px"><i class="fa fa-pencil" style="color: blue"></i></a>
                                    @if ($tela->nome_ou_anexo != 'Inscrição' && $tela->nome_ou_anexo != 'Protocolo')
                                    <a href="{{route('tela-deletar', $tela->id)}}"><i class="fa fa-trash" style="color: red"></i></a>
                                    @endif
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
