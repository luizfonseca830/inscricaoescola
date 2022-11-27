@extends('layouts.app', ['activePage' => 'EscolaridadeRequest', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                <form id="form" method="POST" action="{{ route('delete-escolaridade', $escolaridade->id) }}">
                    @csrf
                    @method('DELETE')
                    <label>Série a ser deletada</label>
                    <input type="text" class="form-control" value="{{$escolaridade->nivel_escolaridade}}" disabled>
                    <a href="{{route('escolaridades')}}" class="btn btn-default">Voltar</a>
                    <button id="excluir" class="btn btn-danger">Excluir</button>
                </form>
            </main>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#excluir').click(function () {
            event.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Você tem certeza?',
                text: "Você não pode reverter isso!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, Excluir!',
                cancelButtonText: 'Não, Cancelar!',
                reverseButtons: true
            }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('form').submit();
                    } else
                    if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelado',
                            'Nada aconteceu :)',
                            'error'
                        )
                    }
                }
            )
        });
    </script>
@endsection
