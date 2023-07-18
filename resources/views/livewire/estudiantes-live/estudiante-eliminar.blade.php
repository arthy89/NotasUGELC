<div>
    <div wire:ignore.self class="modal fade" id="estudiante_eliminar-{{ $est_act->id_est }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ELIMINAR ESTUDIANTE</h5>
                    <button type="button" class="btn btn-outline-light fw-bold" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>

                @if (session()->has('cerrarModal'))
                    <script>
                        $(document).ready(function() {
                            $('#estudiante_eliminar-{{ $est_act->id_est }}').modal('hide');
                        })
                    </script>
                @endif

                {{-- formulario --}}
                <form wire:submit.prevent="eliminar_estudiante">
                    @csrf
                    <div class="modal-body text-center">
                        <p class="fs-4">¿Está seguro de <strong>eliminar</strong> a <span
                                class="fw-bold text-uppercase">{{ $est_act->est_apell }},
                                {{ $est_act->est_name }}</span>?</p>
                        <p class="fst-italic">Esta acción no se podrá deshacer.</p>
                    </div>
                    <div class="modal-footer bg-light text-white">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark"></i> Cerrar</button>
                        <button wire:click.prevent="eliminar_estudiante" type="button" class="btn btn-danger"><i
                                class="fa-solid fa-user-xmark"></i>
                            Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
