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
                    @if ($inscricao->status_liberar == '1' && is_null($inscricao->data_final) &&  is_null($inscricao->data_inicial)
                                    || $inscricao->data_final >= now() && $inscricao->data_inicial <= now()
                                    || is_null($inscricao->data_final) && !is_null($inscricao->data_inicial) && $inscricao->data_inicial <= now())
                        <div class="col-lg-4">
                            <a href="{{route('registro')}}">
                                <button class="icon-box">
                                    <em class="icofont-plus"></em>
                                    <h3>Inscrição</h3>
                                </button>
                            </a>
                        </div>
                    @endif

                    @if ($protocolo->status_liberar == '1' && is_null($protocolo->data_final) &&  is_null($protocolo->data_inicial)
                                     || $protocolo->data_final >= now() && $protocolo->data_inicial <= now()
                                     || is_null($protocolo->data_final) && !is_null($protocolo->data_inicial) && $protocolo->data_inicial <= now())
                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <a href="{{route('protocolo')}}">
                                <button class="icon-box">
                                    <em class="icofont-ui-note"></em>
                                    <h3>Buscar Protocolo</h3>
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </section><!-- End Featured Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="row justify-content-center" style="margin-left: 10%">
                @foreach($pdfs as $pdf)
                    @if ($pdf->status_liberar == '1' && is_null($pdf->data_final) &&  is_null($pdf->data_inicial)
                                                     || $pdf->data_final >= now() && $pdf->data_inicial <= now()
                                                     || is_null($pdf->data_final) && !is_null($pdf->data_inicial) && $pdf->data_inicial <= now())
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom: 2%">
                            <a href="{{asset('pdf/'.$pdf->nome_ou_anexo)}}" target="_blank">
                                <div class="card" style="width: 18rem;">
                                    <em class="card-img-top bx bxl-adobe"
                                       style="font-size: 150px; color: orangered; text-align: center"></em>
                                    <div class="card-body">
                                        <p class="card-text text-center">{{$pdf->nome_anexo_mostrar}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

        </section>
    </main>
@endsection

@section('script')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
@endsection
