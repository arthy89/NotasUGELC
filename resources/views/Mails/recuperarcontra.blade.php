<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reestablecer Contraseña | UGEL CARABAYA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

</head>

<body class="hold-transition login-page">
    <div class="row">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                Enlace para reestablecer su contraseña
            </div>

            <div class="card-body">
                <h3>Hola {{ $user->name }} {{ $user->apell }}</h3>
                <p class="login-box-msg">
                    Para restablecer tu contraseña, haz clic en el siguiente enlace:
                </p>

                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('formress', $token) }}" class="btn btn-primary btn-block">Reestablecer
                            Contraseña</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
