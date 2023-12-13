<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <a href="{{ route('home') }}" class="btn btn-success"><img
                    src="http://ofictd.ugelcarabaya.edu.pe/images/login_Carabaya.gif" width="30px" alt=""> UGEL
                CARABAYA</a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @auth
                    @if (Auth::user()->rol == 'Admin')
                        <li class="nav-item">
                            <a class="btn mx-1 {{ Str::startsWith(request()->url(), route('usuarios')) ? 'btn-success' : 'btn-outline-dark' }}"
                                aria-current="page" href="{{ route('usuarios') }}">
                                Gestión de Usuarios
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->rol == 'Director')
                        <li class="nav-item">
                            <a class="btn mx-1 {{ Str::startsWith(request()->url(), route('docentes')) ? 'btn-success' : 'btn-outline-dark' }}"
                                aria-current="page" href="{{ route('docentes') }}">Docentes</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="btn mx-1 {{ Str::startsWith(request()->url(), route('estudiantes_index')) ? 'btn-success' : 'btn-outline-dark' }}"
                            aria-current="page" href="{{ route('estudiantes_index') }}">Estudiantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn mx-1 {{ Str::startsWith(request()->url(), route('notas_index')) ? 'btn-success' : 'btn-outline-dark' }}"
                            aria-current="page" href="{{ route('notas_index') }}">Notas</a>
                    </li>

                    @if (Auth::user()->rol == 'Admin' || Auth::user()->rol == 'Director')
                        <li class="nav-item">
                            <a class="btn mx-1 {{ Str::startsWith(request()->url(), route('estadisticas_index')) ? 'btn-success' : 'btn-outline-dark' }}"
                                aria-current="page" href="{{ route('estadisticas_index') }}">Estadísticas</a>
                        </li>
                    @endif
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar de sesión') }}</a>
                        </li>
                    @endif

                    @if (Route::has('registro'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('registro') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }} - {{ Auth::user()->rol }}
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <span class="dropdown-item disabled">
                                    <small class="badge bg-secondary">{{ Auth::user()->institucion->inst_name }}</small>
                                </span>
                                <a class="dropdown-item" href="{{ route('perfil') }}">
                                    <span class="fw-bold">Editar Perfil</span>
                                </a>
                                <a class="dropdown-item text-bg-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <strong>Cerrar Sesión</strong>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>
