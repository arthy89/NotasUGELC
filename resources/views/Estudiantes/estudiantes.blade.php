@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-sm-8">
                    @if (Auth::user()->rol == 'Admin' && Auth::user()->id_inst == 0)
                        <h2>Usuario Administrador</h2>
                        <p>Puedes observar y editar todos los registros de estudiantes en el sistema</p>
                    @else
                        <h2>Estudiantes: {{ $institucion[0]->inst_name }} |
                            {{ $institucion[0]->inst_nivel }} | {{ $institucion[0]->distrito }} </h2>
                    @endif

                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#estudiante_crear">
                        <i class="fa-solid fa-user-plus"></i> Agregar nuevo estudiante
                    </button>
                </div>
            </div>

            @livewire('estudiantes-live.estudiantes')

        </div>
    </div>

    {{-- ! MODALES --}}
    @livewire('estudiantes-live.estudiante-crear')
@endsection

@push('scripts')
    @if (session('actualizado'))
        <script>
            Lobibox.notify('success', {
                width: 400,
                img: "{{ asset('imgs/success.png') }}",
                position: 'top right',
                title: "ACTUALIZADO",
                msg: '{{ session('actualizado') }}'
            });
        </script>
    @endif

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('estudianteCreado', function() {
                Lobibox.notify('success', {
                    width: 400,
                    img: "{{ asset('imgs/success.png') }}",
                    position: 'top right',
                    title: "ESTUDIANTE CREADO",
                    msg: 'El estudiante se registró correctamente'
                });
            });
        });
    </script>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('estudianteEliminado', function() {
                Lobibox.notify('success', {
                    width: 400,
                    img: "{{ asset('imgs/success.png') }}",
                    position: 'top right',
                    title: "ESTUDIANTE ELIMINADO",
                    msg: 'El estudiante se eliminó correctamente'
                });
            });
        });
    </script>
@endpush
