<div>
    <div wire:ignore.self class="modal fade" id="addgrado" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white fw-bold">
                    <h5 class="modal-title" id="exampleModalCenterTitle">AGREGAR GRADO</h5>
                    <button type="button" class="btn btn-outline-light fw-bold" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                {{-- formulario --}}
                <form wire:submit.prevent="guardar_grados">
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
                                    $('#addgrado').modal('hide');
                                })
                            </script>
                        @endif

                        {{-- GRADO Y SECCION --}}
                        <div class="mb-3 row">
                            {{-- grado --}}
                            <label class="col-sm-2 col-form-label">Grado</label>
                            <div class="col-sm-4 mt-1 ">
                                <select wire:model="multigrado.grado" class="form-select form-control"
                                    style="width: 100%">
                                    <option value="">Seleccione...</option>
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
                                <select wire:model="multigrado.seccion" class="form-select form-control"
                                    style="width: 100%">
                                    <option value="">Seleccione...</option>
                                    <option value="UNICA">ÚNICA</option>
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
                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-check"></i>
                            Aceptar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @if (session()->has('gradoAgregado'))
        <script>
            Lobibox.notify('success', {
                width: 400,
                img: "{{ asset('imgs/success.png') }}",
                position: 'top right',
                title: "GRADO AGREGADO",
                msg: 'Se agregó el Grado y la Sección correctamente.'
            });
        </script>
    @endif
</div>
