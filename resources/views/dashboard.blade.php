@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('DashBoard')])
@extends('layouts.modal-message')
@section('title')
    <title>INSTITUTO SÃO JOSÉ</title>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Total de Inscrições</p>
                            <h3 class="card-title">{{$inscricao_total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">1° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_primeiroano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">2° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_segundoano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">3° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_terceiroano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">4° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_quartoano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">5° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_quintoano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">6° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_sextoano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">7° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_setimoano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">8° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_oitavomoano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">9° ano do Ensino Fundamental I</p>
                            <h3 class="card-title">{{$inscricao_nonoano->total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <h3 class="card-title">Inscrições</h3>
                        </div>
                        <div class="card-footer justify-content-center">
                            <!-- Chart's container -->
                            <div id="inscricao" style="width: 100%; height: 260px"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <!-- Charting library -->
    <script src="public/js/http_unpkg.com_chart.js@2.9.3_dist_Chart.js"></script>
    <!-- Chartisan -->
    <script src="public/js/http_unpkg.com_@chartisan_chartjs@^2.1.0_dist_chartisan_chartjs.umd.js"></script>
    <script src="{{asset('js/area-restrita/functions.js')}}"></script>
    <script>
        const incricao = new Chartisan({
            el: '#inscricao',
            url: "@chart('chart_inscricao')",
            hooks: new ChartisanHooks()
                .datasets('doughnut')
                .pieColors(),
        });
    </script>
@endsection
