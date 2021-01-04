@extends('layouts.app', ['activePage' => 'avaliacao', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @forelse($pessoas as $pessoa)
                    <tr>
                        <td>{{$pessoa->id}}</td>
                        <td>{{$pessoa->nome_completo}}</td>
                        <td>{{$pessoa->cpf}}</td>
                        <td><a href="{{route('visualizacao-pessoa', $pessoa->id)}}"> <input type="button"
                                                                                            class="btn btn-outline-info"
                                                                                            value="Visualizar"></a>
                        </td>
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


@endsection
@section('script')
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
    <script>$(document).ready(function () {
            // Setup - add a text input to each footer cell
            $('#example tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });

            // DataTable
            var table = $('#example').DataTable({
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every(function () {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function () {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                }
            });

        });
    </script>
@endsection
