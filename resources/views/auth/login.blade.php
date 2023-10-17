@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Incio de Sesión en el Sistema de Notas</h2>

                <div class="card">
                    <div class="card-header text-bg-success">
                        Incio de Sesión
                    </div>
                    <div class="card-body">

                        <form method="POST" action="">

                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-xl-2 col-3 col-form-label">Correo</label>
                                <div class="col-xl-10 col-9">
                                    <input type="email" required autofocus placeholder="Correo electrónico..."
                                        class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-xl-2 col-3 col-form-label">Contraseña</label>
                                <div class="col-xl-10 col-9">
                                    <input type="password" required placeholder="Su contraseña asignada..."
                                        class="form-control" name="password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Recordar mi
                                            sesión</label>
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="remember">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success float-end">Iniciar Sesión</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ route('form-olvide') }}"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                        Olvidé mi contraseña
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @if (session('status'))
        <script>
            Lobibox.notify('success', {
                width: 400,
                img: "{{ asset('imgs/success.png') }}",
                position: 'top right',
                title: "CIERRE DE SESIÓN CORRECTO",
                msg: '{{ session('status') }} Vuelva pronto'
            });
        </script>
    @endif

    @if ($errors->has('email'))
        <script>
            Lobibox.notify('error', {
                width: 400,
                img: "{{ asset('imgs/error.png') }}",
                position: 'top right',
                title: "ERROR DE SESIÓN",
                msg: '¡Error de inicio de sesión, credenciales incorrectas!'
            });
        </script>
    @endif

    @if (session('contraAct'))
        <script>
            Lobibox.notify('success', {
                width: 400,
                img: "{{ asset('imgs/success.png') }}",
                position: 'top right',
                title: "Contraseña Reestablecida",
                msg: '{{ session('contraAct') }}'
            });
        </script>
    @endif
@endpush
