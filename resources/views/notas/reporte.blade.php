<!DOCTYPE html>
<html lang="es">

<head>
    <title>Reporte de Resultados</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}

    <style>
        .text-center {
            text-align: center;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        body {
            font-family: 'SF', sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        .table-bordered {
            border: 1px solid black;
            vertical-align: middle;
            margin-top: 20px;
        }

        .table-bordered>thead>tr>th {
            border: 1px solid black;
            vertical-align: middle;
        }

        .table-bordered>tbody>tr>td {
            border: 1px solid black;
            vertical-align: middle;
        }
    </style>

</head>

<body>

    <h3 class="font-weight-bold text-center display">
        REPORTE DE RESULTADOS DE LA PRUEBA DIAG 2023 - {{ $grado }} DE PRIMARIA
    </h3>

    <table class="table table-sm">
        <tr class="text-center">
            <td width='150px'>
                IMAGEN
            </td>

            {{-- tabla del medio de los datos --}}
            <td width='350px'>
                <table class="small table-sm table-bordered" style="width:100%; font-size: 6px; ">
                    <tr class="text-center">
                        <td class="font-weight-bold">ÁREA CURRICULAR</td>
                        <td>{{ $curso->curso_name }}</td>
                    </tr>
                    <tr class="text-center">
                        <td class="font-weight-bold">DISTRITO</td>
                        <td>{{ $institucion->distrito }}</td>
                    </tr>
                    <tr class="text-center">
                        <td class="font-weight-bold">LOCALIDAD</td>
                        <td>{{ $institucion->distrito }}</td>
                    </tr>
                    <tr class="text-center">
                        <td class="font-weight-bold">IE</td>
                        <td>{{ $institucion->inst_name }}</td>
                    </tr>
                    <tr class="text-center">
                        <td class="font-weight-bold">CÓDIGO MODULAR</td>
                        <td></td>
                    </tr>
                    <tr class="text-center">
                        <td class="font-weight-bold">GRADO</td>
                        <td>{{ $grado }}</td>
                    </tr>
                </table>
            </td>

            <td width='150px'>
                {{-- tabla de LEYENDA --}}
                <table class="small table-sm table-bordered" style="width:100%; font-size: 6px;" align="center">
                    <tr class="text-center" style="font-size: 6px;">
                        <td colspan="2" class="font-weight-bold">LEYENDA</td>
                    </tr>
                    <tr class="text-center">
                        <td width='25px'><b>18 - 20</b></td>
                        <td><b>AD</b> (Muy bueno / Logro destacado)</td>
                    </tr>
                    <tr class="text-center">
                        <td><b>13 - 17</b></td>
                        <td><b>A</b> (Bueno / Logrado)</td>
                    </tr>
                    <tr class="text-center">
                        <td><b>11 - 12</b></td>
                        <td><b>B</b> (En proceso)</td>
                    </tr>
                    <tr class="text-center">
                        <td><b>0 - 10</b></td>
                        <td><b>C</b> (Deficiente / En inicio)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table class="table table-sm table-bordered" style="width:100%; font-size: 6px; ">
        <tr class="text-center">
            <td colspan="5" style="border-top: 1px solid white; border-left: 1px solid white;"></td>
            <td colspan="10" class="font-weight-bold" style="font-size: 7px; "> PUNTAJE OBTENIDO POR CADA PREGUNTA
            </td>
            <td width='30px' rowspan="2" class="font-weight-bold" style="font-size: 7px; ">NÚMERO DE ACIERTOS</td>
            <td width='50px' rowspan="2" class="font-weight-bold" style="font-size: 7px; ">NIVEL DE LOGRO OBTENIDO
            </td>
        </tr>
        <tr class="text-center">
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">Nº</td>
            <td width='40px' class="font-weight-bold" style="font-size: 7px; ">DISTRITO</td>
            <td width='80px' class="font-weight-bold" style="font-size: 7px; ">IIEE</td>
            <td width='150px' class="font-weight-bold" style="font-size: 7px; ">APELLIDOS Y NOMBRES DEL ESTUDIANTE</td>
            <td width='30px' class="font-weight-bold" style="font-size: 7px; ">SECCIÓN</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">1</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">2</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">3</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">4</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">5</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">6</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">7</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">8</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">9</td>
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">10</td>
        </tr>

        @foreach ($estudiantes as $est)
            <tr>
                <td class="text-center">
                    {{ $est->rowNumber }}
                </td>

                <td class="text-center" style="font-size: 4px; ">
                    {{ $institucion->distrito }}
                </td>

                <td class="text-center" style="font-size: 4px; ">
                    {{ $institucion->inst_name }}
                </td>

                <td class="text-uppercase">
                    {{ $est->est_apell }}, {{ $est->est_name }}
                </td>

                <td class="text-center">
                    {{ $est->est_seccion }}
                </td>

                @for ($i = 1; $i <= 10; $i++)
                    @php
                        $notaProperty = 'nota' . $i;
                        $notaValue = $est->$notaProperty;
                    @endphp

                    <td class="text-center">
                        @if ($notaValue)
                            {{ $notaValue }}
                        @else
                            0
                        @endif

                    </td>
                @endfor

                <td class="text-center">
                    @if ($est->aciertos)
                        {{ $est->aciertos }}
                    @else
                        0
                    @endif
                </td>

                <td class="text-center">
                    @if ($est->logro)
                        {{ $est->logro }}
                    @else
                        C-EN INICIO
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    <script>
        // <![CDATA[
        document.body.onload = function() {
            document.body.offsetHeight;
            window.print()
        };
        // ]]>
    </script>
</body>

</html>
