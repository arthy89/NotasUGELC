<div>
    <div wire:ignore.self class="modal fade" id="estudiante_crear" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white fw-bold">
                    <h5 class="modal-title" id="exampleModalCenterTitle">AGREGAR NUEVO ESTUDIANTE</h5>
                    <button type="button" class="btn btn-outline-light fw-bold" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>

                {{-- formulario --}}
                <form wire:submit.prevent="guardar_estudiante">
                    @csrf
                    <div class="modal-body">
                        @if ($errors->any())
                            <div wire:ignore.self class="alert alert-danger" role="alert">
                                <strong>Error</strong>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif

                        @if (session()->has('cerrarModal'))
                            <script>
                                $(document).ready(function() {
                                    $('#estudiante_crear').modal('hide');
                                })
                            </script>
                        @endif

                        {{-- apellidos --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Apellidos</label>
                            <div class="col-sm-10">
                                <input wire:model="estudiante.est_apell" type="text"
                                    class="form-control text-uppercase">
                            </div>
                        </div>
                        {{-- nombres --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nombres</label>
                            <div class="col-sm-10">
                                <input wire:model="estudiante.est_name" type="text"
                                    class="form-control text-uppercase">
                            </div>
                        </div>
                        @if (Auth::user()->rol == 'Admin' && Auth::user()->id_inst == 1)
                            {{-- institucion --}}
                            <div wire:ignore.self class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Institución</label>
                                <div class="col-sm-10 mt-1">
                                    <select wire:model="estudiante.id_inst" class="inst" style="width: 100%">
                                        <option></option>
                                        @foreach ($instituciones as $inst)
                                            @if ($inst->id_inst != 0)
                                                <option value="{{ $inst->id_inst }}">{{ $inst->inst_name }} -
                                                    {{ $inst->distrito }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif

                        {{-- grado y seccion --}}
                        @if (Auth::user()->rol == 'Admin' || Auth::user()->rol == 'Director')
                            <div class="mb-3 row">
                                {{-- grado --}}
                                <label class="col-sm-2 col-form-label">Grado</label>
                                <div wire:ignore.self class="col-sm-4 mt-1 ">
                                    <select wire:model="estudiante.est_grado" class="form-select form-control"
                                        style="width: 100%">
                                        <option>Seleccione...</option>
                                        <option value="PRIMERO">PRIMERO</option>
                                        <option value="SEGUNDO">SEGUNDO</option>
                                        <option value="TERCERO">TERCERO</option>
                                        <option value="CUARTO">CUARTO</option>
                                        <option value="QUINTO">QUINTO</option>
                                        <option value="SEXTO">SEXTO</option>
                                    </select>
                                </div>
                                {{-- seccion --}}
                                <label class="col-sm-2 col-form-label">Sección</label>
                                <div wire:ignore.self class="col-sm-4 mt-1">
                                    <select wire:model="estudiante.est_seccion" class="form-select form-control"
                                        style="width: 100%">
                                        <option>Seleccione...</option>
                                        <option value="ÚNICA">ÚNICA</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                    </select>
                                </div>
                            </div>
                        @endif

                        {{-- <p>{{ $doc_multig }}</p>

                        <p>
                            @foreach ($doc_multig as $grados)
                                {{ $grados->grado }} - {{ $grados->seccion }}
                            @endforeach
                        </p> --}}


                        {{-- *DOCENTE MULTIGRADO --}}
                        @if (Auth::user()->rol == 'Docente' && $doc_multig->count() > 0)
                            <div class="mb-3 row">
                                {{-- grado --}}
                                <label class="col-sm-2 col-form-label">Grado</label>
                                <div wire:ignore.self class="col-sm-4 mt-1 ">
                                    <select id="grado" wire:model.defer="estudiante.est_grado" wire:key="grado"
                                        class="form-select form-control" style="width: 100%">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                                {{-- seccion --}}
                                <label class="col-sm-2 col-form-label">Sección</label>
                                <div wire:ignore.self class="col-sm-4 mt-1">
                                    <select id="seccion" wire:model.defer="estudiante.est_seccion" wire:key="seccion"
                                        class="form-select form-control" style="width: 100%">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark"></i> Cerrar</button>
                        <button wire:click.prevent="guardar_estudiante" type="button" class="btn btn-success"><i
                                class="fa-solid fa-user-plus"></i>
                            Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    @if (Auth::user()->rol == 'Docente' && $doc_multig->count() > 0)
        <script>
            // Obtener la información de los grados y secciones desde PHP
            const grados_secc = JSON.parse("{!! addslashes($doc_multig) !!}");

            // Nuevo elemento a agregar
            const nuevoElemento = {
                grado: '{{ Auth::user()->grado }}',
                seccion: '{{ Auth::user()->seccion }}'
            };

            // Agregar el nuevo elemento al objeto grados_secc
            grados_secc.push(nuevoElemento);

            // Imprimir el objeto para verificar los cambios
            console.log(grados_secc);

            const selectGrados = document.getElementById('grado');

            const selectSecciones = document.getElementById('seccion');


            // Obtener una lista única de grados
            const gradosUnicos = [...new Set(grados_secc.map(item => item.grado))];

            // Agregar opciones al elemento select
            gradosUnicos.forEach(grado => {
                const option = document.createElement('option');
                option.value = grado;
                option.text = `${grado}`;
                selectGrados.add(option);
            });

            // Manejar el evento change del select de grados
            selectGrados.addEventListener('change', function() {
                // Obtener el valor seleccionado
                const selectedGrado = this.value;

                // Filtrar las secciones correspondientes al grado seleccionado y ordenar de forma descendente alfabéticamente
                const secciones = grados_secc
                    .filter(item => item.grado === selectedGrado)
                    .map(item => item.seccion)
                    .sort((a, b) => a.localeCompare(b));

                // Limpiar opciones existentes y agregar el predeterminado
                selectSecciones.innerHTML = `<option value="">Seleccione...</option>`;

                // Agregar opciones al select de secciones
                secciones.forEach(seccion => {
                    const option = document.createElement('option');
                    option.value = seccion;
                    option.text = `${seccion}`;
                    selectSecciones.add(option);
                });
            });
        </script>
    @endif

    @if (Auth::user()->rol == 'Admin' && Auth::user()->id_inst == 1)
        <script>
            document.addEventListener('livewire:load', function() {
                $('.inst').select2({
                    dropdownParent: $('#estudiante_crear'),
                    placeholder: "Seleccione...",
                    allowClear: true
                });

                $(".inst").change(function(e) {
                    let inst = $(this).val();
                    @this.set('estudiante.id_inst', inst);
                })
            });

            document.addEventListener('livewire:update', function() {
                $('.inst').select2({
                    dropdownParent: $('#estudiante_crear'),
                    placeholder: "Seleccione...",
                    allowClear: true
                });

                $(".inst").change(function(e) {
                    let inst = $(this).val();
                    @this.set('estudiante.id_inst', inst);
                })
            });
        </script>
    @endif
@endpush
