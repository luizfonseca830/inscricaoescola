@if (Cookie::get('pessoa_cpf'))
    <div class="modal" id="modal" tabindex="-1" role="dialog" style="display: block">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong><p>Termina Inscrição</p></strong>
                </div>
                <div class="modal-body text-center">
                    <p><a href="{{route('registro/anexos')}}">Parace que você não terminou sua incrição, clique aqui para termina.</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endif
<script src="{{asset('js/jquery.min.js')}}"></script>

<script>
    $('#close').click(function () {
        console.log('teste');
        $('#modal').css('display', 'none');
    });
</script>
