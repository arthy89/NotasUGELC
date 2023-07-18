<div>
    <div wire:ignore.self class="modal fade" id="estudiante_editar-{{ $est_act->id_est }}" tabindex="-1"
        aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning ">
                    <h5 class="modal-title" id="exampleModalCenterTitle">EDITAR ESTUDIANTE</h5>
                    <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <form wire:submit.prevent="editar_estudiante">
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
                                    $('#estudiante_editar-{{ $est_act->id_est }}').modal('hide');
                                })
                            </script>
                        @endif
                        {{-- apellidos --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Apellidos</label>
                            <div class="col-sm-10">
                                <input wire:model="est.est_apell" type="text" class="form-control">
                            </div>
                        </div>
                        {{-- nombres --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nombres</label>
                            <div class="col-sm-10">
                                <input wire:model="est.est_name" type="text" class="form-control">
                            </div>
                        </div>

                        {{-- institucion --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Institución</label>
                            <div class="col-sm-10 mt-1">
                                <select wire:model="est.id_inst" class="inst{{ $est_act->id_est }}" style="width: 100%">
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

                        {{-- grado y seccion --}}
                        <div class="mb-3 row">
                            {{-- grado --}}
                            <label class="col-sm-2 col-form-label">Grado</label>
                            <div class="col-sm-4 mt-1 ">
                                <select wire:model="est.est_grado" class="grado{{ $est_act->id_est }}"
                                    style="width: 100%">
                                    <option></option>
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
                            <div class="col-sm-4 mt-1">
                                <select wire:model="est.est_seccion" class="seccion{{ $est_act->id_est }}"
                                    style="width: 100%">
                                    <option></option>
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
                        <button wire:click.prevent="editar_estudiante" type="button" class="btn btn-success"><i
                                class="fa-solid fa-user-plus"></i>
                            Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {
            $('.grado{{ $est_act->id_est }}, .seccion{{ $est_act->id_est }}, .inst{{ $est_act->id_est }}')
                .select2({
                    dropdownParent: $('#estudiante_editar-{{ $est_act->id_est }}'),
                    placeholder: "Seleccione...",
                    allowClear: true
                });

            $(".grado{{ $est_act->id_est }}").change(function(e) {
                let grado{{ $est_act->id_est }} = $(this).val();
                @this.set('est.est_grado', grado{{ $est_act->id_est }});
            })

            $(".seccion{{ $est_act->id_est }}").change(function(e) {
                let seccion{{ $est_act->id_est }} = $(this).val();
                @this.set('est.est_seccion', seccion{{ $est_act->id_est }});
            })

            $(".inst{{ $est_act->id_est }}").change(function(e) {
                let inst{{ $est_act->id_est }} = $(this).val();
                @this.set('est.id_inst', inst{{ $est_act->id_est }});
            })
        });

        document.addEventListener('livewire:update', function() {
            $('.grado{{ $est_act->id_est }}, .seccion{{ $est_act->id_est }}, .inst{{ $est_act->id_est }}')
                .select2({
                    dropdownParent: $('#estudiante_editar-{{ $est_act->id_est }}'),
                    placeholder: "Seleccione...",
                    allowClear: true
                });

            $(".grado{{ $est_act->id_est }}").change(function(e) {
                let grado{{ $est_act->id_est }} = $(this).val();
                @this.set('est.est_grado', grado{{ $est_act->id_est }});
            })

            $(".seccion{{ $est_act->id_est }}").change(function(e) {
                let seccion{{ $est_act->id_est }} = $(this).val();
                @this.set('est.est_seccion', seccion{{ $est_act->id_est }});
            })

            $(".inst{{ $est_act->id_est }}").change(function(e) {
                let inst{{ $est_act->id_est }} = $(this).val();
                @this.set('est.id_inst', inst{{ $est_act->id_est }});
            })
        });
    </script>
@endpush
