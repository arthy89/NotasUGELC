@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <h2>Crear nuevo usuario - Administrador</h2>
                <form action="{{ route('crear_usuario_g') }}" method="POST">

                    @csrf

                    <div class="card">
                        <div class="card-header text-bg-success">{{ __('Crando Nuevo Usuario') }}</div>


                        <div class="card-body">
                            {{-- nombres --}}
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Nombres y Apellidos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                                @if ($errors->has('name'))
                                    <p class="text-danger"><em>Ingrese un nombre</em></p>
                                @endif
                            </div>

                            {{-- email --}}
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                                @if ($errors->has('email'))
                                    <p class="text-danger"><em>El correo ingresado es inválido o ya está registrado</em></p>
                                @endif
                            </div>

                            {{-- PASSWORD --}}
                            <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
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

                            {{-- rol --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Rol</label>
                                <div class="col-sm-4">
                                    <select class="form-select form-control" name="rol" style="width: 100%;">
                                        <option value="">Seleccione...</option>
                                        <option value="Admin">Administrador
                                        </option>
                                        <option value="Director">Director</option>
                                        <option value="Docente">Docente</option>
                                    </select>
                                </div>
                            </div>

                            {{-- GRADO Y SECCION --}}
                            <div class="mb-3 row">
                                {{-- grado --}}
                                <label class="col-sm-2 col-form-label">Grado</label>
                                <div class="col-sm-4 mt-1 ">
                                    <select name="grado" class="form-select form-control" style="width: 100%">
                                        <option value="">Seleccione...</option>
                                        <option value="PRIMERO">PRIMERO</option>
                                        <option value="SEGUNDO">SEGUNDO</option>
                                        <option value="TERCERO">TERCERO</option>
                                        <option value="CUARTO">CUARTO</option>
                                        <option value="QUINTO">QUINTO</option>
                                        <option value="SEXTO">SEXTO</option>
                                    </select>
                                </div>
                                {{-- seccion --}}
                                <label class="col-sm-2 col-form-label">Sección</label>
                                <div class="col-sm-4 mt-1">
                                    <select name="seccion" class="form-select form-control" style="width: 100%">
                                        <option value="">Seleccione...</option>
                                        <option value="ÚNICA">ÚNICA</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                    </select>
                                </div>
                            </div>

                            {{-- institucion --}}
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Institución</label>
                                <div class="col-sm-6">
                                    <select class="select2" name="institucion" style="width: 100%">
                                        @foreach ($instituciones as $institucion)
                                            <option value="{{ $institucion->id_inst }}">{{ $institucion->inst_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-end disabled" id="boton">Guardar nuevo
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
            $('.select2').select2();
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
