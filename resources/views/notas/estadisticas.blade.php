@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-6 py-2">
                    <p class="fs-1 fw-bold shadow rounded text-center text-bg-success">ESTADÍSTICAS</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">
                                    <p class="h4 text"><strong>GRADO</strong></p>
                                </label>
                                <select id="grado" class="form-select" aria-label="Default select example">
                                    <option value="" selected>Seleccione el grado...</option>
                                    <option value="PRIMER">PRIMER</option>
                                    <option value="SEGUNDO">SEGUNDO</option>
                                    <option value="TERCER">TERCER</option>
                                    <option value="CUARTO">CUARTO</option>
                                    <option value="QUINTO">QUINTO</option>
                                    <option value="SEXTO">SEXTO</option>
                                    <option value="TODO">TODO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">
                                    <p class="h4 text"><strong>CURSO</strong></p>
                                </label>
                                <select id="curso" class="form-select" aria-label="Default select example">
                                    <option value="" selected>Seleccione el curso...</option>
                                    <option value="1">MATEMÁTICA</option>
                                    <option value="2">COMUNICACIÓN</option>
                                    <option value="3">PERSONAL SOCIAL</option>
                                    <option value="4">CIENCIA Y AMBIENTE</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <button type="button" onclick="buscar()" class="btn btn-success shadow">
                                <i class="fa-solid fa-magnifying-glass"></i> Buscar
                            </button>
                        </div>
                    </div>

                    {{-- Card de estadisticas --}}
                    @livewire('notas.estadisticas-live')
                </div>
            </div>
            {{-- @livewire('notas.grado-x', ['grado' => $grado, 'curso' => $curso]) --}}
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var grado;
        var curso;

        function buscar() {
            grado = document.getElementById('grado').value;
            curso = document.getElementById('curso').value;

            if (grado && curso) {
                Livewire.emit('card', grado, curso);
            } else {

                Lobibox.notify('error', {
                    width: 400,
                    img: "{{ asset('imgs/error.png') }}",
                    position: 'top right',
                    title: "ERROR EN GRADO Y CURSO",
                    msg: 'Seleccione el Grado y el Curso'
                });
            }

        }
    </script>
@endpush
