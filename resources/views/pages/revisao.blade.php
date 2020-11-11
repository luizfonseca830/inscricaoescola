@extends('layouts.app', ['activePage' => 'revisao', 'titlePage' => __('Icons')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
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
                        <th scope="col">Revisão</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @forelse($pessoas as $pessoa)
                        <tr>
                            <th>{{$pessoa->id}}</th>
                            <th>{{$pessoa->nome_completo}}</th>
                            <th>{{$pessoa->cpf}}</th>
                            <th>{{$pessoa->cargo->cargo}}</th>
                            @if(is_null($pessoa->status_aprovado))
                                @if($pessoa->status == '0')
                                    <th style="color: red">Avaliado</th>
                                @elseif($pessoa->status == 1)
                                    <th style="color: green">Avaliado</th>
                                @endif
                            @else
                                @if($pessoa->status_aprovado == '0')
                                    <th style="color: red">Revisado</th>
                                @elseif($pessoa->status_aprovado == 1)
                                    <th style="color: green">Revisado</th>
                                @else
                                    <th>Não Verificado</th>
                                @endif
                            @endif
                            @if(is_null($pessoa->status_aprovado))
                                <th><a href="{{route('/aprovar', $pessoa->id)}}"> <input type="button"
                                                                                         class="btn btn-outline-success"
                                                                                         value="Revisar"></a></th>
                            @endif
                            <th><a href="{{route('visualizacao-avaliar', $pessoa->id)}}"> <input type="button" class="btn btn-outline-info" value="Visualizar"></a></th>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Nenhum Resultado Encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div style="width: 100%; margin-left: 50%">
                    {!! $pessoas->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
