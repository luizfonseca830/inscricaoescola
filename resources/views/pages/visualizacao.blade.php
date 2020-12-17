@extends('layouts.app', ['activePage' => 'avaliacao', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <input class="form-control" id="pesquisa" type="text" placeholder="Procurar..">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @forelse($pessoas as $pessoa)
                        <tr>
                            <th>{{$pessoa->id}}</th>
                            <th>{{$pessoa->nome_completo}}</th>
                            <th>{{$pessoa->cpf}}</th>
                            <th><a href="{{route('visualizacao-pessoa', $pessoa->id)}}"> <input type="button" class="btn btn-outline-info" value="Visualizar"></a></th>
                       </tr>

                    @empty
                        <tr>
                            <td colspan="2">Nenhum Resultado Encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
