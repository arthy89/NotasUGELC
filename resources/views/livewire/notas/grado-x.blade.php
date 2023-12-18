<div>
    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .custom-checkbox {
            border: 1px solid #a6a6a6;
        }
    </style>
    <div class="col-12">
        <div class="card shadow mx-2">
            <div class="card-header text-bg-success">Seleccione la SECCIÓN que desea llenar las notas
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-10 mb-3">
                        @if (Auth::user()->rol != 'Docente')
                            <div wire:ignore class="row text-center">
                                @foreach ($secciones as $secc)
                                    <div class="col-2 d-grid gap-2">
                                        <button wire:click="$emit('seccion', '{{ $secc }}')"
                                            class="btn btn-sm btn-primary shadow">Sección
                                            <strong class="fs-6">&nbsp; {{ $secc }}</strong>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if (Auth::user()->rol == 'Docente' && $doc_multig->count() > 0)
                            <div wire:ignore class="row text-center">
                                <div class="col-2 d-grid gap-2">
                                    <button
                                        wire:click="$emit('GraSecc', '{{ Auth::user()->grado }}', '{{ Auth::user()->seccion }}')"
                                        class="btn btn-sm btn-success shadow">{{ Auth::user()->grado }}
                                        <strong class="fs-6">{{ Auth::user()->seccion }}</strong>
                                    </button>
                                </div>
                                @foreach ($doc_multig as $item)
                                    <div class="col-2 d-grid gap-2">
                                        <button
                                            wire:click="$emit('GraSecc', '{{ $item->grado }}', '{{ $item->seccion }}')"
                                            class="btn btn-sm btn-primary shadow">{{ $item->grado }}
                                            <strong class="fs-6">{{ $item->seccion }}</strong>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                @if ($mostrarTabla)
                    <table class="table table-sm table-bordered shadow table-rounded">
                        <thead class="text-center">
                            <tr>
                                <th class="bg-success text-white fw-bold" width="40px">N°</th>
                                <th class="bg-success text-white fw-bold" width="400px">APELLIDOS Y NOMBRES</th>
                                <th class="bg-success text-white fw-bold">1</th>
                                <th class="bg-success text-white fw-bold">2</th>
                                <th class="bg-success text-white fw-bold">3</th>
                                <th class="bg-success text-white fw-bold">4</th>
                                <th class="bg-success text-white fw-bold">5</th>
                                <th class="bg-success text-white fw-bold">6</th>
                                <th class="bg-success text-white fw-bold">7</th>
                                <th class="bg-success text-white fw-bold">8</th>
                                <th class="bg-success text-white fw-bold">9</th>
                                <th class="bg-success text-white fw-bold">10</th>
                                <th class="bg-success text-white fw-bold">ACIERTOS</th>
                                <th class="bg-success text-white fw-bold">NIVEL LOGRADO</th>
                                <th class="bg-success text-white fw-bold">GUARDAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estudiantes as $est)
                                @if (!$secc || $est->est_seccion === $secc)
                                    <tr>
                                        @php
                                            $notas_array = [];
                                        @endphp

                                        <td class="text-center">
                                            {{ $est->rowNumber }}
                                        </td>
                                        <td class="text-uppercase">
                                            {{ $est->est_apell }}, {{ $est->est_name }}
                                        </td>
                                        @for ($i = 1; $i <= 10; $i++)
                                            @php
                                                $notaProperty = 'nota' . $i;
                                                $notaValue = $est->$notaProperty;
                                                $notaInputId = "nota{$i}-{$est->id_estudiante}";
                                            @endphp
                                            <td class="text-center" style="text-align: center;">
                                                <input id="{{ $notaInputId }}" type="text"
                                                    class="form-control form-control-sm"
                                                    style="width: 30px; margin: 0 auto;" value="{{ $notaValue }}"
                                                    oninput="this.value = this.value.replace(/[^02]/g, '').slice(0, 2); recalculateSumAndEvaluation({{ $est->id_estudiante }}); updateNotasArray('{{ $est->id_estudiante }}', 'nota{{ $i }}', this.value);"
                                                    maxlength="1" name="{{ $notaInputId }}">
                                            </td>
                                        @endfor
                                        <td class="text-center">
                                            <span id="sumaNotas-{{ $est->id_estudiante }}">{{ $est->aciertos }}</span>
                                            <input type="hidden" name="aciertos-{{ $est->id_estudiante }}"
                                                id="aciertos-{{ $est->id_estudiante }}" value="{{ $est->aciertos }}">
                                        </td>
                                        <td class="text-center">
                                            <span id="evaluation-{{ $est->id_estudiante }}">{{ $est->logro }}</span>
                                            <input type="hidden" name="logro-{{ $est->id_estudiante }}"
                                                id="logro-{{ $est->id_estudiante }}" value="{{ $est->logro }}">
                                        </td>
                                        <td class="text-center">
                                            <button
                                                wire:click.prevent="actualizar_nota({{ $est->id_nota ?? 0 }}, {{ $est->id_estudiante }}, JSON.stringify(notasArrays[{{ $est->id_estudiante }}]), JSON.stringify(aciertosArray[{{ $est->id_estudiante }}]))"
                                                type="submit" class="btn btn-success btn-sm">
                                                <i class="fa-solid fa-floppy-disk"></i> Guardar
                                            </button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    // Array para almacenar las notas de cada estudiante
    var notasArrays = {};

    // Función para actualizar el array de notas
    function updateNotasArray(studentId, notaInputId, notaValue) {
        if (!notasArrays[studentId]) {
            notasArrays[studentId] = {};
        }
        notasArrays[studentId][notaInputId] = notaValue;
    }
</script>

<script>
    var aciertosArray = {};

    function actualizarAciertos(studentId, suma) {
        if (!aciertosArray[studentId]) {
            aciertosArray[studentId] = {};
        }
        aciertosArray[studentId]['aciertos'] = suma;
    }

    function recalculateSumAndEvaluation(idestudiante) {
        let sumaNotas = 0;
        for (let i = 1; i <= 10; i++) {
            let notaValue = parseInt(document.getElementById('nota' + i + '-' + idestudiante).value) || 0;
            sumaNotas += notaValue;
        }

        document.getElementById('sumaNotas' + '-' + idestudiante).textContent = sumaNotas;
        document.getElementById('aciertos' + '-' + idestudiante).value = sumaNotas;
        actualizarAciertos(idestudiante, sumaNotas);

        let evaluation = '';
        if (sumaNotas >= 0 && sumaNotas <= 10) {
            evaluation = 'C-EN INICIO';
        } else if (sumaNotas >= 11 && sumaNotas <= 12) {
            evaluation = 'B-EN PROCESO';
        } else if (sumaNotas >= 13 && sumaNotas <= 17) {
            evaluation = 'A-LOGRADO';
        } else if (sumaNotas >= 18 && sumaNotas <= 20) {
            evaluation = 'AD-DESTACADO';
        }

        document.getElementById('evaluation' + '-' + idestudiante).textContent = evaluation;
        document.getElementById('logro' + '-' + idestudiante).value = evaluation;
    }
</script>
{{-- si el usuario es Docente y es un solo grado y seccion --}}
@if (Auth::user()->rol == 'Docente' && $doc_multig->count() == 0)
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.emit('seccion', '{{ Auth::user()->seccion }}');
        });
    </script>
@endif

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('sinActualizar', function() {
                Lobibox.notify('warning', {
                    width: 400,
                    img: "{{ asset('imgs/warning.png') }}",
                    position: 'top right',
                    title: "SIN DATOS QUE GUARDAR",
                    msg: 'Modifique algun registro de notas para guardar correctamente'
                });
            });
        });
    </script>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('registroActualizado', function() {
                Lobibox.notify('success', {
                    width: 400,
                    img: "{{ asset('imgs/success.png') }}",
                    position: 'top right',
                    title: "NOTAS ACTUALIZADAS",
                    msg: 'Las notas se guardaron correctamente'
                });
            });
        });
    </script>
@endpush
