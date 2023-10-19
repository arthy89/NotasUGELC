@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <h2>Editando estudiante: <strong class="text-uppercase">{{ $estudiante->est_apell }},
                            {{ $estudiante->est_name }}</strong></h2>
                </div>
                <div class="col-sm-6">
                    {{-- <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                        data-bs-target="#estudiante_crear">
                        <i class="fa-solid fa-user-plus"></i> Agregar nuevo estudiante
                    </button> --}}
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="{{ route('estudiantes_actualizar', $estudiante) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Editando datos del estudiante
                            </div>
                            <div class="card-body">
                                {{-- apellidos --}}
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Apellidos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control text-uppercase" name="apellidos"
                                            value="{{ old('apellidos', $estudiante->est_apell) }}">
                                    </div>
                                </div>
                                {{-- nombres --}}
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control text-uppercase" name="nombres"
                                            value="{{ old('nombres', $estudiante->est_name) }}">
                                    </div>
                                </div>

                                @if (Auth::user()->rol == 'Admin' && Auth::user()->id_inst == 1)
                                    {{-- institucion --}}
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Institución</label>
                                        <div class="col-sm-10 mt-1">
                                            <select id="inst" style="width: 100%" name="institucion">
                                                @foreach ($instituciones as $inst)
                                                    @if ($inst->id_inst != 0)
                                                        <option value="{{ $inst->id_inst }}"
                                                            {{ old('institucion', $estudiante->id_inst) == $inst->id_inst ? 'selected' : '' }}>
                                                            {{ $inst->inst_name }} - {{ $inst->distrito }}
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
                                    <div class="col-sm-4 mt-1 ">
                                        <select class="form-select form-control" name="grado">
                                            <option value="PRIMERO"
                                                {{ old('grado', $estudiante->est_grado) == 'PRIMERO' ? 'selected' : '' }}>
                                                PRIMERO
                                            </option>
                                            <option value="SEGUNDO"
                                                {{ old('grado', $estudiante->est_grado) == 'SEGUNDO' ? 'selected' : '' }}>
                                                SEGUNDO
                                            </option>
                                            <option value="TERCERO"
                                                {{ old('grado', $estudiante->est_grado) == 'TERCERO' ? 'selected' : '' }}>
                                                TERCERO
                                            </option>
                                            <option value="CUARTO"
                                                {{ old('grado', $estudiante->est_grado) == 'CUARTO' ? 'selected' : '' }}>
                                                CUARTO
                                            </option>
                                            <option value="QUINTO"
                                                {{ old('grado', $estudiante->est_grado) == 'QUINTO' ? 'selected' : '' }}>
                                                QUINTO
                                            </option>
                                            <option value="SEXTO"
                                                {{ old('grado', $estudiante->est_grado) == 'SEXTO' ? 'selected' : '' }}>
                                                SEXTO
                                            </option>
                                        </select>

                                    </div>
                                    {{-- seccion --}}
                                    <label class="col-sm-2 col-form-label">Sección</label>
                                    <div class="col-sm-4 mt-1">
                                        <select class="form-select form-control" name="seccion">
                                            <option value="ÚNICA"
                                                {{ old('seccion', $estudiante->est_seccion) == 'ÚNICA' ? 'selected' : '' }}>
                                                ÚNICA
                                            </option>
                                            <option value="A"
                                                {{ old('seccion', $estudiante->est_seccion) == 'A' ? 'selected' : '' }}>
                                                A
                                            </option>
                                            <option value="B"
                                                {{ old('seccion', $estudiante->est_seccion) == 'B' ? 'selected' : '' }}>
                                                B
                                            </option>
                                            <option value="C"
                                                {{ old('seccion', $estudiante->est_seccion) == 'C' ? 'selected' : '' }}>
                                                C
                                            </option>
                                            <option value="D"
                                                {{ old('seccion', $estudiante->est_seccion) == 'D' ? 'selected' : '' }}>
                                                D
                                            </option>
                                            <option value="E"
                                                {{ old('seccion', $estudiante->est_seccion) == 'E' ? 'selected' : '' }}>
                                                E
                                            </option>
                                            <option value="F"
                                                {{ old('seccion', $estudiante->est_seccion) == 'F' ? 'selected' : '' }}>
                                                F
                                            </option>
                                            <option value="G"
                                                {{ old('seccion', $estudiante->est_seccion) == 'G' ? 'selected' : '' }}>
                                                G
                                            </option>
                                            <option value="H"
                                                {{ old('seccion', $estudiante->est_seccion) == 'H' ? 'selected' : '' }}>
                                                H
                                            </option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-end"><i class="fa-solid fa-save"></i>
                                    Guardar cambios</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#inst').select2({
                placeholder: "Seleccione...",
                allowClear: true
            });
            $('#inst').val("{{ old('institucion', $estudiante->id_inst) }}");
            $('#inst').trigger('change');
        });
    </script>

    @if ($errors->has('apellidos'))
        <script>
            Lobibox.notify('error', {
                width: 400,
                img: "{{ asset('imgs/error.png') }}",
                position: 'top right',
                title: "ERROR EN LOS APELLIDOS",
                msg: 'Por favor complete los apellidos del estudiante'
            });
        </script>
    @endif

    @if ($errors->has('nombres'))
        <script>
            Lobibox.notify('error', {
                width: 400,
                img: "{{ asset('imgs/error.png') }}",
                position: 'top right',
                title: "ERROR EN LOS NOMBRES",
                msg: 'Por favor complete los nombres del estudiante'
            });
        </script>
    @endif
@endpush
