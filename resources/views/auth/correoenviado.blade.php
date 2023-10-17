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

                            <p>
                                El correo se envió correctamente a <b>{{ $email }}</b>, por favor revise si es
                                necesario en
                                "Spam".
                            </p>


                            <div class="row">
                                <div class="col-sm-6">

                                </div>

                                <div class="col-sm-6">
                                    <a href="{{ route('login') }}" class="btn btn-success float-end">Iniciar Sesión</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
