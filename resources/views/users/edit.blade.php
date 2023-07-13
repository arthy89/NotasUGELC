@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @if (session('actualizado'))
                <div class="row justify-content-end mb-1 position-absolute">
                    <div class="toast align-items-right text-white bg-success border-0 float-right" role="alert"
                        aria-live="assertive" aria-atomic="true" data-delay="100">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ session('actualizado') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif

            @if (session('contra'))
                <div class="row justify-content-end mb-1 position-absolute">
                    <div class="toast align-items-right text-white bg-success border-0 float-right" role="alert"
                        aria-live="assertive" aria-atomic="true" data-delay="100">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ session('contra') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-md-8">
                <h2>Editando información de - <strong>{{ $usuario->name }}</strong></h2>
                <form action="{{ route('editar_usuario_g', $usuario->id) }}" method="POST">

                    @csrf

                    @method('put')

                    <div class="card">
                        <div class="card-header text-bg-success">{{ __('Editando información personal') }}</div>


                        <div class="card-body">
                            {{-- nombres --}}
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Nombres y Apellidos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ $usuario->name }}">
                                </div>
                                @if ($errors->has('name'))
                                    <p class="text-danger"><em>Ingrese un nombre</em></p>
                                @endif
                            </div>

                            {{-- email --}}
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" value="{{ $usuario->email }}">
                                </div>
                                @if ($errors->has('email'))
                                    <p class="text-danger"><em>El correo ingresado es inválido o ya está registrado</em></p>
                                @endif
                            </div>

                            {{-- rol --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Rol</label>
                                <div class="col-sm-4">
                                    <select class="js-example-basic-single" name="rol" style="width: 100%;"
                                        id="rol">
                                        <option value="Admin">Administrador
                                        </option>
                                        <option value="Director">Director</option>
                                    </select>
                                </div>
                            </div>

                            {{-- institucion --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Institución</label>
                                <div class="col-sm-6">
                                    <select class="js-example-basic-single" name="institucion" style="width: 100%"
                                        id="institucion">
                                        @foreach ($instituciones as $institucion)
                                            <option value="{{ $institucion->id_inst }}">{{ $institucion->inst_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-end ">Guardar
                                información</button>
                        </div>
                    </div>
                </form>


                {{-- NUEVA CONTRASENA --}}
                <form action="{{ route('editar_usuario_pass', $usuario->id) }}" method="POST">

                    @csrf

                    @method('put')

                    <div class="card mt-3">
                        <div class="card-header text-bg-success">{{ __('Crear nueva contraseña') }}</div>


                        <div class="card-body">
                            {{-- PASSWORD --}}
                            <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña Nueva</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="password" id="pass1">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">Repita la Contraseña</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pass2">
                                </div>
                                @if ($errors->has('password'))
                                    <p class="text-danger"><em>Ingrese una contraseña</em></p>
                                @endif
                                <span class="text-danger py-0 text-sm" id="mensaje_t"></span>
                                <span class="text-danger py-0 text-sm" id="mensaje"></span>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-end disabled" id="boton">Guardar
                                nuevo
                                usuario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            // select tipo caja
            $('#rol').val("{{ $usuario->rol }}");
            $('#rol').select2().trigger('change');

            $('#institucion').val("{{ $usuario->id_inst }}");
            $('#institucion').select2().trigger('change');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.toast').toast('show');
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
@endpush
