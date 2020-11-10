@extends('layouts.header-footer')
@extends('layouts.modal-message')
@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        button {
            border: none;
            width: 100%;
        }
    </style>
@endsection
@section('content')
    @extends('layouts.modal-cache')
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="container" src="{{asset('images/caruosel/escola1.png')}}" alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('images/caruosel/escola2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/caruosel/carrusel-fundo.png')}}" alt="Third slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </section>

    <main id="main">
        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">
                <div class="row justify-content-md-center">
                    @if ($inscricao->status_liberar == '1' || !is_null($inscricao->data_liberar) )
                        @if ($inscricao->nome_ou_anexo == 'Inscrição' && ($inscricao->status_liberar == 1) || strtotime($inscricao->data_liberar) <= strtotime(date('Y-m-d H:i')))
                            <div class="col-lg-4">
                                <a href="{{route('registro')}}">
                                    <button class="icon-box">
                                        <i class="icofont-plus"></i>
                                        <h3>Inscrição</h3>
                                    </button>
                                </a>
                            </div>
                        @endif
                    @endif
                    @if ($protocolo->status_liberar == '1' || !is_null($protocolo->data_liberar) )
                        @if ($protocolo->nome_ou_anexo == 'Protocolo' && ($protocolo->status_liberar == 1) || strtotime($protocolo->data_liberar) <= strtotime(date('Y-m-d H:i')))
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <a href="{{route('protocolo')}}">
                                    <button class="icon-box">
                                        <i class="icofont-ui-note"></i>
                                        <h3>Buscar Protocolo</h3>
                                    </button>
                                </a>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </section><!-- End Featured Section -->
    </main>
@endsection

@section('script')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
