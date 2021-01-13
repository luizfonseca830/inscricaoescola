<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="{{asset('css/head-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/icofont/icofont/icofont.min.css')}}">
    @yield('css')
</head>
<body>
<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{route('inical')}}"><span>INSTITUTO SÃO JOSÉ</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('inical')}}">Início</a></li>
                <li><a href="{{route('login')}}">Área Restrita</a></li>
                @if(auth()->check())
                    <li><a href="{{route('sair')}}">Sair</a></li>
                @endif
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 footer-links">
                    <h4>Links mais Usados</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Início</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href=pdf/politicadeprivacidade2021.pdf" target="_blank">Política de Privacidade</a>
                        </li>
                    </ul>
                </div>


                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contato</h4>
                    <p>
                        Centro <br>
                        R. Floriano Peixoto, 722<br>
                        Rio Branco - AC <br><br>
                        <strong>Telefone:</strong> (68) 3223-5518<br>
                        <strong>CEP:</strong> 69900-090<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Redes Sociais</h3>
                    <p></p>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/institutosaojoseac/" class="facebook" target="_blank"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/institutosaojose_isj/" class="instagram" target="_blank"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCavmywsWUE80dJqKM-azAUA/" class="youtube" target="_blank"><i
                                class="bx bxl-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Direito Autoral <strong><span>INSTITUTO SÃO JOSÉ</span></strong>. Todos os Direitos Reservados.
        </div>
        <div class="credits">
            Criado por <a href="https://www.linkedin.com/in/fonseca-jorge-384970b3/">Jorge Fonseca</a>
        </div>
    </div>
</footer><!-- End Footer -->
</body>
<script src="{{asset('js/jquery.min.js')}}"></script>
@yield('script')
</html>

