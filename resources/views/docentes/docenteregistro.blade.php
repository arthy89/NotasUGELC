@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Registro Docente</h2>

                <p class="mb-0">
                    Usted fue invitado por el <b>Director: {{ $invitacion->user_->name }}</b> para acceder al Sistema de
                    Notas de la
                    institución:
                </p>

                <h5><b>{{ $invitacion->institucion->inst_name }} - {{ $invitacion->institucion->distrito }}</b></h5>

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>Error</strong>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                <div class="card">
                    <div class="card-header text-bg-success">
                        Registro Docente
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docentes_registro_store', $invitacion->add_token) }}">

                            @csrf

                            <div class="row mb-3">
                                <label for="" class="col-xl-2 col-3 col-form-label">Institución</label>
                                <div class="col-xl-10 col-9">
                                    <input type="text" class="form-control" disabled
                                        value="{{ $invitacion->institucion->inst_name }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-xl-2 col-3 col-form-label">Correo</label>
                                <div class="col-xl-10 col-9">
                                    <input type="email" class="form-control" disabled value="{{ $invitacion->email }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-xl-2 col-3 col-form-label">Apellidos y Nombres</label>
                                <div class="col-xl-10 col-9">
                                    <input type="text" required autofocus placeholder="Apellidos y nombres..."
                                        class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="mb-3 row">

                                <label class="col-sm-2 col-form-label">Grado</label>
                                <div class="col-sm-4 mt-1 ">
                                    <select class="form-select form-control" style="width: 100%" name="grado">
                                        <option value="" hidden>Seleccione...</option>
                                        <option value="PRIMERO" {{ old('grado') == 'PRIMERO' ? 'selected' : '' }}>PRIMERO
                                        </option>
                                        <option value="SEGUNDO" {{ old('grado') == 'SEGUNDO' ? 'selected' : '' }}>SEGUNDO
                                        </option>
                                        <option value="TERCERO" {{ old('grado') == 'TERCERO' ? 'selected' : '' }}>TERCERO
                                        </option>
                                        <option value="CUARTO" {{ old('grado') == 'CUARTO' ? 'selected' : '' }}>CUARTO
                                        </option>
                                        <option value="QUINTO" {{ old('grado') == 'QUINTO' ? 'selected' : '' }}>QUINTO
                                        </option>
                                        <option value="SEXTO" {{ old('grado') == 'SEXTO' ? 'selected' : '' }}>SEXTO
                                        </option>
                                    </select>

                                </div>

                                <label class="col-sm-2 col-form-label">Sección</label>
                                <div class="col-sm-4 mt-1">
                                    <select class="form-select form-control" style="width: 100%" name="seccion">
                                        <option value="" hidden>Seleccione...</option>
                                        <option value="ÚNICA" {{ old('seccion') == 'ÚNICA' ? 'selected' : '' }}>ÚNICA
                                        </option>
                                        <option value="A" {{ old('seccion') == 'A' ? 'selected' : '' }}>A</option>
                                        <option value="B" {{ old('seccion') == 'B' ? 'selected' : '' }}>B</option>
                                        <option value="C" {{ old('seccion') == 'C' ? 'selected' : '' }}>C</option>
                                        <option value="D" {{ old('seccion') == 'D' ? 'selected' : '' }}>D</option>
                                        <option value="E" {{ old('seccion') == 'E' ? 'selected' : '' }}>E</option>
                                        <option value="F" {{ old('seccion') == 'F' ? 'selected' : '' }}>F</option>
                                        <option value="G" {{ old('seccion') == 'G' ? 'selected' : '' }}>G</option>
                                        <option value="H" {{ old('seccion') == 'H' ? 'selected' : '' }}>H</option>
                                    </select>

                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-xl-2 col-3 col-form-label">Contraseña</label>
                                <div class="col-xl-10 col-9">
                                    <input type="password" required placeholder="Escriba su contraseña..."
                                        class="form-control" name="password" id="pass1">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password2" class="col-xl-2 col-3 col-form-label">Repita su contraseña</label>
                                <div class="col-xl-10 col-9">
                                    <input type="password" required placeholder="Confirme su contraseña..."
                                        class="form-control" name="password2" id="pass2">
                                </div>

                                @if ($errors->has('password'))
                                    <p class="text-danger"><em>Ingrese una contraseña</em></p>
                                @endif
                                <span class="text-danger py-0 text-sm" id="mensaje_t"></span>
                                <span class="text-danger py-0 text-sm" id="mensaje"></span>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="vercontra">Mostrar contraseñas</label>
                                        <input class="form-check-input" type="checkbox" role="switch" id="vercontra">
                                    </div>
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
                                    <button type="submit" class="btn btn-success float-end disabled"
                                        id="boton">Registrarse</button>
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
    <script>
        $(document).ready(() => {
            $('#inst').select2();
        });
    </script>

    <script>
        $(document).ready(() => {

            var pass1 = $('#pass1');
            var pass2 = $('#pass2');

            function comparar() {
                var contra1 = pass1.val();
                var contra2 = pass2.val();
                var mensaje = $('#mensaje');
                var tam = $('#mensaje_t');
                var boton = $('#boton');

                if (contra1.length < 6 || contra1 == "") {
                    mensaje.hide();
                    tam.show();
                    tam.text("La contraseña debe tener 6 caracteres o más");
                }

                if (contra1.length >= 6) {
                    tam.hide();
                }

                if (contra1 != contra2) {
                    boton.addClass('disabled');
                    mensaje.removeClass('text-success');
                    mensaje.addClass('text-danger');
                    mensaje.show();
                    mensaje.text("Las contraseñas no son iguales");
                }

                if (contra1 == contra2 && contra1.length >= 6 && contra2.length >= 6) {
                    boton.removeClass('disabled');
                    mensaje.removeClass('text-danger');
                    mensaje.addClass('text-success');
                    mensaje.show();
                    mensaje.text("Las contraseñas son iguales");
                }
            }

            pass1.keyup(function() {
                comparar();
            });

            pass2.keyup(function() {
                comparar();
            });
        });
    </script>

    <script>
        $(document).ready(() => {
            var pass1 = $('#pass1');
            var pass2 = $('#pass2');
            var vercontra = $('#vercontra');

            vercontra.change(function() {
                if (vercontra.prop('checked')) {
                    pass1.attr('type', 'text');
                    pass2.attr('type', 'text');
                } else {
                    pass1.attr('type', 'password');
                    pass2.attr('type', 'password');
                }

            });


        });
    </script>

    {{-- @if (session('status'))
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
    @endif --}}
@endpush
