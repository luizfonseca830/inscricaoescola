@extends('layouts.app', ['activePage' => 'avaliacao', 'titlePage' => __('Typography')])
@extends('layouts.modal-message')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <main class="container" id="ajuste">
                <form id="form" method="POST" action="{{ route('delete-pessoa', $pessoa->id) }}">
                    @csrf
                    @method('DELETE')
                    <label>Nome</label>
                    <input type="text" class="form-control" value="{{$pessoa->nome_completo}}" disabled>
                    <Label>Motivo</Label>
                    <textarea id="motivo" name="motivo" class="form-control">
                    </textarea>

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
