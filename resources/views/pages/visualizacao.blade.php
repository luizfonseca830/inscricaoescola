@extends('layouts.app', ['activePage' => 'avaliacao', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pessoas as $pessoa)
                    <tr>
                        <td>{{$pessoa->id}}</td>
                        <td>{{$pessoa->nome_completo}}</td>
                        <td>{{$pessoa->cpf}}</td>
                        <td><a href="{{route('visualizacao-pessoa', $pessoa->id)}}"> <input type="button"
                                                                                            class="btn btn-outline-info"
                                                                                            value="Visualizar"></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@section('script')

    <script>
        $(document).ready(function () {
            // Setup - add a text input to each footer cell
            // $('#example th').each(function () {
            //     var title = $(this).text();
            //     $(this).html('<input type="text" placeholder="Pesquisa ' + title + '" />');
            // });

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
                },
                "language": {
                    "search": "Pesquisa",
                    "show": "Visualizar",
                    "info": "Mostrando  uma _PAGE_ de _PAGES_ entradas",
                    "lengthMenu": "Mostrando _MENU_ resultados por página",
                    "infoEmpty": "Nenhum resultado foi encontrado.",
                    "infoFiltered": "(filtrados _MAX_ entradas no total.)",
                    "zeroRecords": "Nenhum resultado encontrado.",
                    "paginate": {
                        "first":      "Primeiro",
                        "last":       "Último",
                        "next":       "Próximo",
                        "previous":   "Anterior"
                    },
                }
            });

        });
    </script>
@endsection
