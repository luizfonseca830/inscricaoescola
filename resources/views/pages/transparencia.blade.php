@extends('layouts.app', ['activePage' => 'transparencia', 'titlePage' => __('Transparencia')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form method="post" action="{{route('pesquisa-transparencia')}}">
                    @csrf
                    <input class="form-control" id="pesquisa" type="text" name="procurar" placeholder="Procurar..">
                </form>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Instrutor</th>
                        <th scope="col">Avaliador</th>
                        <th scope="col">Tela</th>
                        <th scope="col">Detalhes</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @forelse($transparencias as $transparencia)
                        <tr>
                            <th>{{$transparencia->instrutor->id}}</th>
                            <th>{{$transparencia->instrutor->name}}</th>
                            <th>{{$transparencia->pessoa->nome_completo}}</th>
                            <th>{{$transparencia->tela}}</th>
                            <th><a href="{{route('unico-transparencia', $transparencia->id)}}" style="color: #ff9800">Mais Detalhes</a></th>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Nenhum Resultado Encontrado</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div style="width: 100%; margin-left: 50%">
                    {!! $transparencias->links() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
