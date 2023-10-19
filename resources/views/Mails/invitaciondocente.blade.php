<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Invitación</title>
</head>

<body style="background-color: #f4f6f9;">
    <div class="p-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card text-center p-0">
                    <div class="card-header text-bg-success">
                        INVITACIÓN
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Usted fue invitado para registrarse en el Sistema de Notas</h5>
                        <p class="card-text">
                            El Director: <b>{{ $inv_correo->user_->name }}</b> le hace alcance de la invitación para
                            completar su registro en el
                            sistema de notas de la Institución <b>{{ $inv_correo->institucion->inst_name }} -
                                {{ $inv_correo->institucion->distrito }}</b>. Haga
                            click en el botón de abajo para ir a su
                            formulario de registro.
                        </p>
                        <a href="{{ route('docentes_registro', $inv_correo->add_token) }}" class="btn btn-primary">
                            Ir a Registrarme
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
