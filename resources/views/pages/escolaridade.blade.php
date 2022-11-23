@extends('layouts.app', ['activePage' => 'EscolaridadeRequest', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('content')
{{--    @dd($escolaridades)--}}
    <div class="content">
        <div class="row justify-content-center" id="carregando">
            <img src="{{asset('/gifs/Spinner-1s-164px.gif')}}">
        </div>
                <div class="col-12 text-right">
                    <a href="{{route('escolaridade-criar')}}" class="btn btn-sm btn-primary">Adicionar Série</a>
                </div>
        <div id="tabela-none" class="container-fluid" style="display: none">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Série</th>
                    <th>Escolaridade</th>

                </tr>
                </thead>
                <tbody>
                @foreach($escolaridades as $escolaridade)
                    <tr>
                        <td>{{$escolaridade->id}}</td>
                        <td>{{$escolaridade->nivel_escolaridade}}</td>
                        <td>{{$escolaridade->modulo_id == 1 ? 'Ensino Fundamental' : 'Ensino Médio'}}</td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Série</th>
                    <th>Escolaridade</th>
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
                        "first": "Primeiro",
                        "last": "Último",
                        "next": "Próximo",
                        "previous": "Anterior"
                    },
                }
            });

            if (table) {
                $("#tabela-none").css("display", "block");
                $("#carregando").css("display", "none");
            }
        });
    </script>
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
