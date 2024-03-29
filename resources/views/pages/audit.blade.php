@extends('layouts.app', ['activePage' => 'audit', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
        <div class="row justify-content-center" id="carregando">
            <img src="{{asset('/gifs/Spinner-1s-164px.gif')}}">
        </div>
        <div id="tabela-none" class="container-fluid" style="display: none">
            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Usuário</th>
                    <th>Pessoa</th>
                    <th>Motivo</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($audits as $audit)
                    <tr>
                        <td>{{$audit->id}}</td>
                        <td>{{$audit->user->name}}</td>
                        <td>{{json_decode($audit->pessoa)->nome_completo}}</td>
                        <td>{{$audit->motivo}}</td>

                        <td>
                            <a href="{{ route('audit.pessoa', $audit->id) }}"><i class="fa fa-search" style="color: green"></i></a>
                            {{--<!--                            <a href="{{route('aparece-pessoa', $pessoa->id)}}"><i class="fa fa-user" style="color: #2180e8"></i></a>-->--}}
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Nº</th>
                    <th>Usuário</th>
                    <th>Pessoa</th>
                    <th>Motivo</th>
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
