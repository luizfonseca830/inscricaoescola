@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'Gestao', 'title' => __('Gestao')])
@extends('layouts.modal-message')
@section('title')
    <title>INSTITUTO SÃO JOSÉ</title>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('add-user')}}" class="btn btn-sm btn-primary">Adicionar Usuário</a>
                </div>
                <input class="form-control" id="pesquisa" type="text" placeholder="Procurar..">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @forelse($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <th>
                                <a href="{{route('delete-user', $user->id)}}"><i class="fa fa-trash" style="color: red"></i></a>
                                <a href="{{route('edit-user', $user->id)}}"><i class="fa fa-user" style="color: #2180e8"></i></a>
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
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
