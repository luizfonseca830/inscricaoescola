@extends('layouts.header-footer')
@section('title')
    <title>INSTITUTO SÃO JOSÉ</title>
@endsection
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
                        <img class="container" src="{{asset('images/caruosel/INSCRIÇÃO-ONLINE.png')}}"
                             alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('images/caruosel/alunos.jpg')}}" alt="Second slide">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset('images/caruosel/alunosprimario.jpg')}}" alt="Third slide">
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


    @foreach($pdfs as $pdf)
        @if ($pdf->status_liberar == '1' || !is_null($pdf->data_liberar) )
            @if (($pdf->status_liberar == '1') || strtotime($pdf->data_liberar) <= strtotime(date('Y-m-d H:i')))
                <!-- ======= Services Section ======= -->
                    <section id="services" class="services">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="section-title" data-aos="fade-up">
                                    <h2>Relatórios</h2>
                                </div>
                                <br>
                                <div class="col-lg-4 col-md-6  align-items-stretch">
                                    <a href="{{asset($pdf->nome_ou_anexo)}}" target="_blank">
                                        <button class="icon-box">
                                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                            <h4>{{$pdf->nome_anexo_mostrar}}</h4>
                                            <p>Clique aqui para baixar</p>
                                        </button>
                                    </a>
                                </div>
                                @endif
                                @endif
                                @endforeach
                            </div>

                        </div>
                    </section><!-- End Services Section -->

    </main>
@endsection

@section('script')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
