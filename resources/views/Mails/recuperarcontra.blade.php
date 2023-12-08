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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body style="background-color: #f4f6f9;">
    <div class="p-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card text-center p-0">
                    <div class="card-header text-bg-success">
                        Enlace para reestablecer su contraseña
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Hola {{ $user->name }} {{ $user->apell }}</h3>
                        <p class="login-box-msg">
                            Para restablecer tu contraseña, haz clic en el siguiente enlace:
                        </p>
                        <a href="{{ route('formress', $token) }}" class="btn btn-primary btn-block">Reestablecer
                            Contraseña</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
