<div>
    @if ($mostrarCard && $grado && $curso)
        <div class="card shadow" id="reporte">
            <div class="card-header text-bg-success">
                <div class="row">
                    <div class="col-6">Estadísticas de Rendimiento</div>
                    <div class="col-6">
                        <a href="{{ route('imprimir_notas', ['grado' => $grado, 'curso' => $curso]) }}" target="_blank"
                            class="btn btn-light float-end shadow"><i class="fa-solid fa-print"></i>
                            Imprimir Reporte de Resultados
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if ($participantes_total)
                    <div class="row">
                        {{-- SOBRE LA PARTICIPACION --}}
                        <div class="col-4">
                            <div>

                                @php
                                    $porcentParticipantes = (100 * $participantes_total) / $matriculados_total;
                                    $porcentParticipantes = number_format($porcentParticipantes, 2);
                                    
                                    $noRindieron = $matriculados_total - $participantes_total;
                                    $porcentNoRindieron = (100 * $noRindieron) / $matriculados_total;
                                    $porcentNoRindieron = number_format($porcentNoRindieron, 2);
                                @endphp
                                <h5>
                                    <strong>Matriculados:</strong>
                                    <span class="badge bg-success">{{ $matriculados_total }}</span>
                                    <span class="badge bg-success">100%</span>
                                </h5>
                                <h5>
                                    <strong>Participantes:</strong>
                                    <span class="badge bg-primary">{{ $participantes_total }}</span>
                                    <span class="badge bg-primary">{{ $porcentParticipantes }}%</span>
                                </h5>
                                <h5>
                                    <strong>No Rindieron:</strong>
                                    <span class="badge bg-danger">{{ $noRindieron }}</span>
                                    <span class="badge bg-danger">{{ $porcentNoRindieron }}%</span>
                                </h5>


                            </div>
                        </div>

                        {{-- PORCENTAJE DE RESULTADOS C-B-A-AD --}}
                        <div class="col-4">
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
                            <h5>
                                <strong>En inicio:</strong>
                                <span class="badge text-bg-danger">{{ $est_inicio }}</span>
                                <span class="badge text-bg-danger">{{ $porcentInicio }}%</span>
                            </h5>
                            <h5>
                                <strong>En proceso:</strong>
                                <span class="badge text-bg-warning">{{ $est_proceso }}</span>
                                <span class="badge text-bg-warning">{{ $porcentProceso }}%</span>
                            </h5>
                            <h5>
                                <strong>Logrado:</strong>
                                <span class="badge text-bg-info">{{ $est_logrado }}</span>
                                <span class="badge text-bg-info">{{ $porcentLogrado }}%</span>
                            </h5>
                            <h5>
                                <strong>Destacado:</strong>
                                <span class="badge text-bg-success">{{ $est_destacado }}</span>
                                <span class="badge text-bg-success">{{ $porcentDestacado }}%</span>
                            </h5>
                        </div>
                        <div class="col-4">
                            {{-- si es que va xd --}}
                        </div>
                    @else
                        <script>
                            Lobibox.notify('error', {
                                width: 400,
                                img: "{{ asset('imgs/error.png') }}",
                                position: 'top right',
                                title: "ERROR",
                                msg: 'Sin participantes'
                            });
                        </script>
                @endif
            </div>
            <div class="row">
                <div class="col-4">
                    <canvas id="total"></canvas>
                </div>

                <div class="col-4">
                    <canvas id="porcentajes"></canvas>
                </div>

                <div class="col-4">
                    <canvas id="res_generales"></canvas>
                </div>

            </div>
        </div>
</div>
@endif
</div>

@once
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    @endpush
@endonce

<script>
    var totalChart;
    var porcentajesChart;
    var generalesChart;

    document.addEventListener('livewire:load', function() {
        Livewire.on('actualizar', (matriculados_total, participantes_total, est_inicio, est_proceso,
            est_logrado, est_destacado) => {
            // console.log(participantes_total);
            // console.log(matriculados_total);

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
                        'rgba(220, 53, 69, 0.5)',
                        'rgba(255, 193, 7, 0.5)',
                        'rgba(13, 202, 240, 0.5)',
                        'rgba(25, 135, 84, 0.5)',
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
                        'rgba(220, 53, 69, 0.5)',
                        'rgba(255, 193, 7, 0.5)',
                        'rgba(13, 202, 240, 0.5)',
                        'rgba(25, 135, 84, 0.5)',
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
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'SOBRE LA PARTICIPACIÓN',
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
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'PORCENTAJE DE RESULTADOS GENERALES',
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
                    animation: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'RESULTADOS GENERALES',
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
                    }
                }
            });

        });
    });
</script>

{{-- <script>
    var participantesTotal = {{ $participantes_total }};

    document.addEventListener('livewire:load', function() {
        Livewire.on('actualizar', (nuevoValor) => {
            participantesTotal = nuevoValor;
            console.log(participantesTotal);
        });
    });
</script> --}}
