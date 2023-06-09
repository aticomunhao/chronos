<div id="menup">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #355089;" >
            <div class="container">
                <a class="navbar-brand" style="font-weight:bold; font-size: 28px; color:#ffffff;" href="{{ url('/home') }}">Chronos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="btn-group">
                    <div class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffffff;">
                    Área de pessoal
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="gerenciar-funcionario">Gerenciar Funcionarios</a></li>
                        <li><a class="dropdown-item" href="gerenciar-voluntario">Gerenciar Voluntários</a></li>

                    </ul>
                    <div class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffffff;">
                    Gerencia
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="gerenciar-dados-bancarios">Gerenciar Dados Bancarios</a></li>


                    </ul>
                </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:#ffffff;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
{{--
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:#ffffff;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
