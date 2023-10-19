<div>
    <div wire:ignore.self class="modal fade" id="docente_invitar" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white fw-bold">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ENVIAR INVITACIÓN A DOCENTE</h5>
                    <button type="button" class="btn btn-outline-light fw-bold" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                {{-- formulario --}}
                <form wire:submit.prevent="enviar_invitacion">
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
                                    $('#docente_invitar').modal('hide');
                                })
                            </script>
                        @endif

                        {{-- indicaciones --}}
                        <div class="mb-3 row">
                            <p>Escriba el <b>correo electrónico</b> del docente a quién desee invitar. Se le enviará un
                                mensaje al correo
                                con un formulario para que pueda registrarse en el sistema.</p>
                        </div>
                        {{-- apellidos --}}
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-10">
                                <input wire:model="invitacion.email" type="email" class="form-control" required
                                    placeholder="correo@ejemplo.com">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                class="fa-solid fa-xmark"></i> Cerrar</button>
                        <button wire:click.prevent="enviar_invitacion" type="button" class="btn btn-success">
                            <i class="fas fa-paper-plane"></i>
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- @push('scripts')
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
@endpush --}}
