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
                            <p class="card-category">Total de Inscrições 2021</p>
                            <h3 class="card-title">{{$inscricao_total}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>


                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Total de Inscrições 2022</p>
                            <h3 class="card-title">{{$inscritos_2022}}</h3>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
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
