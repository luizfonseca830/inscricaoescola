<div class="sidebar" data-color="orange" data-background-color="white"
     data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            {{ __('Instituto São José') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">build</i>
                    <p>{{ __('Configurações') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'Gestao' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> GU </span>
                                <span class="sidebar-normal"> {{ __('Gestão de Usuário') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'TelaCriar' ? ' active' : '' }}">
                            <a class="nav-link" href="{{route('tela-criar')}}">
                                <span class="sidebar-mini"> LT </span>
                                <span class="sidebar-normal"> {{ __('Criar Tela/Anexos') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'TelaLiberar' ? ' active' : '' }}">
                            <a class="nav-link" href="{{route('tela-liberar')}}">
                                <span class="sidebar-mini"> LT </span>
                                <span class="sidebar-normal"> {{ __('Liberar Tela/Anexos') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item{{ $activePage == 'avaliacao' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('/visualizacao') }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Inscritos') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'Relatorios' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('relatorios')}}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Relatório') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'RelatorioNumerico' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('relatorionumerico')}}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Relatório Numérico') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'RelatorioIrmaos' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('relatorioirmaos')}}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Relatório Irmãos') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
