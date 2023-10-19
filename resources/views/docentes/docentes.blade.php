@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-8">
                    <h2>Lista de Docentes</h2>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#docente_invitar">
                        <b>+</b><i class="fa-solid fa-user-tie"></i> Invitar Docente
                    </button>
                </div>
            </div>

            @livewire('docente.docenteslist')
        </div>

        @livewire('docente.docentesinvitar')
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('docenteInvRep', function() {
                Lobibox.notify('success', {
                    width: 400,
                    img: "{{ asset('imgs/success.png') }}",
                    position: 'top right',
                    title: "CORREO REENVIADO",
                    msg: 'Se volvió a enviar la invitación'
                });
            });
        });
    </script>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('docenteInv', function() {
                Lobibox.notify('success', {
                    width: 400,
                    img: "{{ asset('imgs/success.png') }}",
                    position: 'top right',
                    title: "CORREO ENVIADO",
                    msg: 'La invitación fue enviada con éxito'
                });
            });
        });
    </script>
@endpush
