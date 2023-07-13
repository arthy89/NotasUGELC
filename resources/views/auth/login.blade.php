@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Incio de Sesión en el Sistema de Notas</h2>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->has('email'))
                    <div class="alert alert-danger" role="alert">
                        {{ '¡Error de inicio de sesión, credenciales incorrectas!' }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header text-bg-success">
                        Incio de Sesión
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">

                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" required autofocus placeholder="Correo electrónico..."
                                        class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
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
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
