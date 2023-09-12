<!DOCTYPE html>
<html lang="es">

<head>
    <title>Reporte de Resultados</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}

    <style>
        @font-face {
            font-family: SF;
            src: url('{{ asset('assets/fonts/San Francisco Font/SFProDisplay-Regular.ttf') }}');
        }
    </style>

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
            margin-left: auto;
            margin-right: auto;
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

        .texto_est {
            margin-top: -1px;
            margin-bottom: -1px;
        }

        p {
            padding: 5px;
            font-weight: bold;
        }

        .bg-success {
            color: white;
            background: #198754;
            padding: 3px;
            border-radius: 3px;
            padding-left: 5px;
            padding-right: 5px;
        }

        .bg-primary {
            color: white;
            background: #0d6efd;
            padding: 3px;
            border-radius: 3px;
            padding-left: 5px;
            padding-right: 5px;
        }

        .bg-danger {
            color: white;
            background: #dc3545;
            padding: 3px;
            border-radius: 3px;
            padding-left: 5px;
            padding-right: 5px;
        }

        .bg-warning {
            color: black;
            background: #ffc107;
            padding: 3px;
            border-radius: 3px;
            padding-left: 5px;
            padding-right: 5px;
        }

        .bg-info {
            color: black;
            background: #0dcaf0;
            padding: 3px;
            border-radius: 3px;
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>

</head>

<body>

    <h2 class="font-weight-bold text-center display">
        REPORTE DE RESULTADOS DE LA PRUEBA DIAG 2023 - {{ $grado }} DE PRIMARIA
    </h2>

    <table class="">
        <tr class="text-center">
            <td width='150px'>
                IMAGEN
            </td>

            {{-- tabla del medio de los datos --}}
            <td width='350px'>
                <table class="small table-sm table-bordered" style="width:80%; font-size: 8px; ">
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
                        <td>
                            @if ($grado == 'TODO')
                                PRIMERO - SEXTO
                            @else
                                {{ $grado }}
                            @endif
                        </td>
                    </tr>
                </table>
            </td>

            <td width='150px'>
                {{-- tabla de LEYENDA --}}
                <table class="small table-sm table-bordered" style="width:100%; font-size: 8px;" align="center">
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
            <td @if ($grado == 'TODO') colspan="6" @else colspan="5" @endif
                style="border-top: 1px solid white; border-left: 1px solid white;"></td>
            <td colspan="10" class="font-weight-bold" style="font-size: 7px; "> PUNTAJE OBTENIDO POR CADA PREGUNTA
            </td>
            <td width='10px' rowspan="2" class="font-weight-bold" style="font-size: 7px; ">NÚMERO DE ACIERTOS</td>
            <td width='30px' rowspan="2" class="font-weight-bold" style="font-size: 7px; ">NIVEL DE LOGRO OBTENIDO
            </td>
        </tr>
        <tr class="text-center">
            <td width='10px' class="font-weight-bold" style="font-size: 7px; ">Nº</td>
            <td width='40px' class="font-weight-bold" style="font-size: 7px; ">DISTRITO</td>
            <td width='80px' class="font-weight-bold" style="font-size: 7px; ">IIEE</td>
            <td width='100px' class="font-weight-bold" style="font-size: 7px; ">APELLIDOS Y NOMBRES DEL ESTUDIANTE</td>
            @if ($grado == 'TODO')
                <td width='30px' class="font-weight-bold" style="font-size: 7px; ">GRADO</td>
            @endif
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
                    @if (Auth::user()->rol == 'Admin')
                        {{ $est->distrito }}
                    @else
                        {{ $institucion->distrito }}
                    @endif
                </td>

                <td class="text-center" style="font-size: 4px; ">
                    @if (Auth::user()->rol == 'Admin')
                        {{ $est->inst_name }}
                    @else
                        {{ $institucion->inst_name }}
                    @endif
                </td>

                <td class="text-uppercase">
                    {{ $est->est_apell }}, {{ $est->est_name }}
                </td>

                @if ($grado == 'TODO')
                    <td class="text-center">
                        {{ $est->est_grado }}
                    </td>
                @endif

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

    <br>

    <h3 class="font-weight-bold text-center display">
        ESTADÍSTICAS DE LOS RESULTADOS
    </h3>

    <table>
        <tr>
            <td>
                @php
                    $porcentParticipantes = (100 * $participantes_total) / $matriculados_total;
                    $porcentParticipantes = number_format($porcentParticipantes, 2);

                    $noRindieron = $matriculados_total - $participantes_total;
                    $porcentNoRindieron = (100 * $noRindieron) / $matriculados_total;
                    $porcentNoRindieron = number_format($porcentNoRindieron, 2);
                @endphp
                <p class="texto_est">
                    <strong>Matriculados:</strong>
                    <span class="badge bg-success">{{ $matriculados_total }}</span>
                    <span class="badge bg-success">100%</span>
                </p>
                <p class="texto_est">
                    <strong>Participantes:</strong>
                    <span class="badge bg-primary">{{ $participantes_total }}</span>
                    <span class="badge bg-primary">{{ $porcentParticipantes }}%</span>
                </p>
                <p class="texto_est">
                    <strong>No Rindieron:</strong>
                    <span class="badge bg-danger">{{ $noRindieron }}</span>
                    <span class="badge bg-danger">{{ $porcentNoRindieron }}%</span>
                </p>
            </td>

            <td>
                @php
                    $porcentInicio = (100 * $est_inicio) / $participantes_total;
                    $porcentInicio = number_format($porcentInicio, 2);

                    $porcentProceso = (100 * $est_proceso) / $participantes_total;
                    $porcentProceso = number_format($porcentProceso, 2);

                    $porcentLogrado = (100 * $est_logrado) / $participantes_total;
                    $porcentLogrado = number_format($porcentLogrado, 2);

                    $porcentDestacado = (100 * $est_destacado) / $participantes_total;
                    $porcentDestacado = number_format($porcentDestacado, 2);
                @endphp
                <p class="texto_est">
                    <strong>En inicio:</strong>
                    <span class="badge bg-danger">{{ $est_inicio }}</span>
                    <span class="badge bg-danger">{{ $porcentInicio }}%</span>
                </p>
                <p class="texto_est">
                    <strong>En proceso:</strong>
                    <span class="badge bg-warning">{{ $est_proceso }}</span>
                    <span class="badge bg-warning">{{ $porcentProceso }}%</span>
                </p>
                <p class="texto_est">
                    <strong>Logrado:</strong>
                    <span class="badge bg-info">{{ $est_logrado }}</span>
                    <span class="badge bg-info">{{ $porcentLogrado }}%</span>
                </p>
                <p class="texto_est">
                    <strong>Destacado:</strong>
                    <span class="badge bg-success">{{ $est_destacado }}</span>
                    <span class="badge bg-success">{{ $porcentDestacado }}%</span>
                </p>
            </td>

            <td></td>
        </tr>

        <tr>
            <td>
                <canvas id="total"></canvas>
            </td>

            <td>
                <canvas id="porcentajes"></canvas>
            </td>

            <td>
                <canvas id="res_generales"></canvas>
            </td>
        </tr>
    </table>

    <script>
        // <![CDATA[
        document.body.onload = function() {
            document.body.offsetHeight;
            window.print()
        };
        // ]]>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <script>
        var totalChart;
        var porcentajesChart;
        var generalesChart;

        var matriculados_total = {{ $matriculados_total }};
        var participantes_total = {{ $participantes_total }};
        var est_inicio = {{ $est_inicio }};
        var est_proceso = {{ $est_proceso }};
        var est_logrado = {{ $est_logrado }};
        var est_destacado = {{ $est_destacado }};

        var total = document.getElementById('total').getContext("2d");
        var porcentajes = document.getElementById('porcentajes').getContext("2d");
        var res_generales = document.getElementById('res_generales').getContext("2d");

        var noRindieron = matriculados_total - participantes_total;

        const datos_total = {
            labels: ['PARTICIPANTES', 'NO RINDIERON'],
            datasets: [{
                label: 'ESTUDIANTES',
                data: [participantes_total, noRindieron],
                backgroundColor: [
                    'rgb(13, 110, 253, 0.7)',
                    'rgb(220, 53, 69, 0.7)'

                ],
                borderColor: [
                    'rgb(13, 110, 253)',
                    'rgb(220, 53, 69)'
                ],
                borderWidth: 2
            }]
        }

        const datos_porcentajes = {
            labels: ['EN INICIO', 'EN PROCESO', 'LOGRADO', 'DESTACADO'],
            datasets: [{
                label: 'ESTUDIANTES',
                data: [est_inicio, est_proceso, est_logrado, est_destacado],
                backgroundColor: [
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(13, 202, 240, 0.7)',
                    'rgba(25, 135, 84, 0.7)',
                ],
                borderColor: [
                    'rgba(220, 53, 69)',
                    'rgba(255, 193, 7)',
                    'rgba(13, 202, 240)',
                    'rgba(25, 135, 84)',
                ],
                borderWidth: 2
            }]
        }

        const datos_generales = {
            labels: ['EN INICIO', 'EN PROCESO', 'LOGRADO', 'DESTACADO'],
            datasets: [{
                label: 'ESTUDIANTES',
                data: [est_inicio, est_proceso, est_logrado, est_destacado],
                backgroundColor: [
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(13, 202, 240, 0.7)',
                    'rgba(25, 135, 84, 0.7)',
                ],
                borderColor: [
                    'rgba(220, 53, 69)',
                    'rgba(255, 193, 7)',
                    'rgba(13, 202, 240)',
                    'rgba(25, 135, 84)',
                ],
                borderWidth: 2
            }]
        }

        if (totalChart) {
            totalChart.destroy();
        }

        // TOTAL
        totalChart = new Chart(total, {
            plugins: [ChartDataLabels],
            type: 'pie',
            data: datos_total,
            options: {
                animation: {
                    duration: 0
                },
                scales: {
                    x: {
                        ticks: {
                            color: 'black',
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bolder",
                            },
                        }
                    },
                    y: {
                        ticks: {
                            color: 'black',
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bolder",
                            },
                        }
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'SOBRE LA PARTICIPACIÓN',
                        color: "black",
                        font: {
                            family: 'SF',
                            size: "15",
                            weight: "bolder",
                        },
                    },
                    datalabels: {
                        /* anchor puede ser "start", "center" o "end" */
                        anchor: "center",
                        /* Podemos modificar el texto a mostrar */
                        formatter: (dato) => dato,
                        /* Color del texto */
                        color: "black",
                        /* Formato de la fuente */
                        font: {
                            family: 'SF',
                            size: "20",
                            weight: "bold",
                        }
                    },
                    legend: {
                        labels: {
                            color: "black",
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bold",
                            },
                        }
                    },
                }
            }
        });

        if (porcentajesChart) {
            porcentajesChart.destroy();
        }

        // PORCENTAJES
        porcentajesChart = new Chart(porcentajes, {
            plugins: [ChartDataLabels],
            type: 'polarArea',
            data: datos_porcentajes,
            options: {
                animation: {
                    duration: 0
                },
                scales: {
                    x: {
                        ticks: {
                            color: 'black',
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bolder",
                            },
                        }
                    },
                    y: {
                        ticks: {
                            color: 'black',
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bolder",
                            },
                        }
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'PORCENTAJE DE RESULTADOS GENERALES',
                        color: "black",
                        font: {
                            family: 'SF',
                            size: "15",
                            weight: "bolder",
                        },
                    },
                    datalabels: {
                        /* anchor puede ser "start", "center" o "end" */
                        anchor: "center",
                        /* Podemos modificar el texto a mostrar */
                        formatter: (dato) => dato,
                        /* Color del texto */
                        color: "black",
                        /* Formato de la fuente */
                        font: {
                            family: 'SF',
                            size: "20",
                            weight: "bold",
                        }
                    },
                    legend: {
                        labels: {
                            color: "black",
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bold",
                            },
                        }
                    },
                }
            }
        });

        if (generalesChart) {
            generalesChart.destroy();
        }

        // GENERALES
        generalesChart = new Chart(res_generales, {
            plugins: [ChartDataLabels],
            type: 'bar',
            data: datos_generales,
            options: {
                // indexAxis: 'y',
                animation: {
                    duration: 0
                },
                scales: {
                    x: {
                        ticks: {
                            color: 'black',
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bolder",
                            },
                        }
                    },
                    y: {
                        ticks: {
                            color: 'black',
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bolder",
                            },
                        }
                    }

                },
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'RESULTADOS GENERALES',
                        color: "black",
                        font: {
                            family: 'SF',
                            size: "15",
                            weight: "bolder",
                        },
                    },
                    datalabels: {
                        /* anchor puede ser "start", "center" o "end" */
                        anchor: "center",
                        /* Podemos modificar el texto a mostrar */
                        formatter: (dato) => dato,
                        /* Color del texto */
                        color: "black",
                        /* Formato de la fuente */
                        font: {
                            family: 'SF',
                            size: "20",
                            weight: "bold",
                        }
                    },
                    legend: {
                        labels: {
                            color: "black",
                            font: {
                                family: 'SF',
                                size: "12",
                                weight: "bold",
                            },
                        }
                    },
                },
            }
        });
    </script>


</body>

</html>
