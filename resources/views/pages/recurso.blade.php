@extends('layouts.app', ['activePage' => 'recurso', 'titlePage' => __('Recurso')])
@extends('layouts.modal-message')
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
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Recurso</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        @forelse($recursos as $recurso)
                            <tr>
                                <th>{{$recurso->pessoa->id}}</th>
                                <th>{{$recurso->pessoa->nome_completo}}</th>
                                <th>{{$recurso->pessoa->cpf}}</th>
                                <th>{{$recurso->pessoa->cargo->cargo}}</th>
                                @if($recurso->status == '0')
                                    <th style="color: red">Recusado</th>
                                @elseif($recurso->status == 1)
                                    <th style="color: green">Aceito</th>
                                @else
                                    <th>Não Verificado</th>
                                @endif
                                @if(is_null($recurso->status))
                                    <th><a href="{{route('recurso-unico', $recurso->pessoa->id)}}"> <input type="button" class="btn btn-outline-success" value="Revisar"></a></th>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Nenhum Resultado Encontrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div style="width: 100%; margin-left: 50%">
                        {!! $recursos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
