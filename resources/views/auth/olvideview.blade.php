@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bg-success">Recuperando la contraseña</div>

                    <form action="{{ route('enviarcorreo') }}" method="POST">

                        @csrf

                        <div class="card-body">
                            <p class="text-danger">
                                Por favor ingrese el <b>CORREO</b> con el que se registró en el sistema.
                            </p>
                            <p>A ese correo se enviará un link con el que podrá reestablecer su contraseña. Si no puede
                                acceder
                                o recuperar su contraseña, contacte con el Administrador.</p>

                            <div class="row mb-3">
                                <label for="email" class="col-xl-2 col-3 col-form-label">Correo</label>
                                <div class="col-xl-10 col-9">
                                    <input type="email" required autofocus placeholder="Correo electrónico..."
                                        class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">

                                </div>

                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success float-end">Enviar Correo</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @error('email')
        <script>
            Lobibox.notify('error', {
                width: 400,
                img: "{{ asset('imgs/error.png') }}",
                position: 'top right',
                title: "Error de Correo",
                msg: 'Es posible que el correo no esté registrado en el sistema'
            });
        </script>
    @enderror
@endpush
