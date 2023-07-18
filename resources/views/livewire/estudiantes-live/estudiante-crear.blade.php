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
                            <div class="alert alert-danger" role="alert">
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
                        @if (Auth::user()->rol == 'Admin' && Auth::user()->id_inst == 0)
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
    @if (Auth::user()->rol == 'Admin' && Auth::user()->id_inst == 0)
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
