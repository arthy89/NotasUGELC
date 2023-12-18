<div>
    <div wire:ignore.self class="modal fade" id="delgrado-{{ $grado_act->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ELIMINAR GRADO</h5>
                    <button type="button" class="btn btn-outline-light fw-bold" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>

                @if (session()->has('cerrarModal'))
                    <script>
                        $(document).ready(function() {
                            $('#delgrado-{{ $grado_act->id }}').modal('hide');
                        })
                    </script>
                @endif

                {{-- formulario --}}
                <form wire:submit.prevent="elminiar_grado">
                    @csrf
                    <div class="modal-body text-center">
                        <p class="fs-4">¿Está seguro de <strong>eliminar</strong> el grado <span
                                class="fw-bold text-uppercase">{{ $grado_act->grado }} {{ $grado_act->seccion }}</span>?
                        </p>
                        <p class="fst-italic">Está a punto de elminar un grado a su disposición.</p>
                    </div>
                    <div class="modal-footer bg-light text-white">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark"></i> Cerrar</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-trash-can" data-bs-toggle="tooltip" data-bs-html="true" title=""
                                data-bs-original-title="<b>ELIMINAR</b>"></i>
                            Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session()->has('gradoBorrado'))
        <script>
            Lobibox.notify('success', {
                width: 400,
                img: "{{ asset('imgs/success.png') }}",
                position: 'top right',
                title: "GRADO ELIMINADO",
                msg: 'Se eliminó el Grado y la Sección correctamente.'
            });
        </script>
    @endif
</div>
