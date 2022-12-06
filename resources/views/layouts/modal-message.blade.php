@if (session()->has('sucess'))
    <div class="modal" id="modal" tabindex="-1" role="dialog" style="display: block">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body text-center">
                    <strong>{{session('sucess')}}</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    {{session()->forget('sucess')}}
@endif

@if (session()->has('error'))
    <div class="modal d-block" id="modal" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body text-center">
                    <strong>{{session('error')}}</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    {{session()->forget('error')}}
@endif
@section('script')
    <script>
        $('#close').click(function (){
            $('#modal').hide();
            $('#modal').removeClass('d-block');
            $('#modal').addClass('d-none');
        });
    </script>
@endsection
