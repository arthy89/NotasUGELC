@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <form action="{{ route('resetcontra') }}" method="POST">

                    @csrf

                    <div class="card">
                        <div class="card-header text-bg-danger">{{ __('Cambiar Contraseña') }}</div>

                        <div class="card-body">

                            <small class="">
                                <ul>
                                    <li>
                                        Su contraseña deberá tener como mínimo 6 dígitos.
                                    </li>
                                    <li>
                                        Solo se admiten letras y números.
                                    </li>
                                </ul>
                            </small>

                            <div class="mb-3 row">
                                <input type="hidden" class="form-control" value="{{ $token }}" name="token"
                                    hidden>
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

                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-danger float-end disabled" id="boton">Cambiar
                                        Contraseña</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
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

    @if ($errors->has('nueva') || $errors->has('password'))
        <script>
            Lobibox.notify('error', {
                width: 400,
                img: "{{ asset('imgs/error.png') }}",
                position: 'top right',
                title: "¡Error de Contraseña!",
                msg: 'Digite la contraseña de acuerdo a las indicaciones'
            });
        </script>
    @endif
@endpush
