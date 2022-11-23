    <link rel="stylesheet" href="{{asset('css/registro/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/registro/comprovante.css')}}"/>

    <main class="container">
        <div class="row">
            <h2>Comprovante de Inscrição Para O Sorteio de Vagas – ANO LETIVO:{{date("Y", strtotime($comprovante->pessoa->created_at))}}</h2>
        </div>
        <div>
            <h4>{{$comprovante}}</h4>
        </div>
        <div class="row">
            <a href="{{route('gerarpdf-comprovante', $comprovante)}}" target="_blank">Download Do Comprovante de Inscrição</a>
        </div>
    </main>
