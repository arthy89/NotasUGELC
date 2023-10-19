<div>
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header text-bg-success">
                Lista de Docentes
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-magnifying-glass"></i></span>
                            <input wire:model="search" type="text" class="form-control"
                                placeholder="Buscar por nombre" aria-label="Username" aria-describedby="basic-addon1"
                                style="background-color: #fff">
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover shadow rounded">
                    <thead>
                        <tr>
                            <td class="bg-success text-white fw-bold">N°</td>
                            <td class="bg-success text-white fw-bold">APELLIDOS Y NOMBRES</td>
                            <td class="bg-success text-white fw-bold">CORREO</td>
                            <td class="bg-success text-white fw-bold">GRADO</td>
                            <td class="bg-success text-white fw-bold">SECCIÓN</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($docentes as $docente)
                            <td>
                                {{ $docente->rowNumber }}
                            </td>
                            <td>
                                {{ $docente->name }}
                            </td>
                            <td>
                                {{ $docente->email }}
                            </td>
                            <td>
                                {{ $docente->grado }}
                            </td>
                            <td>
                                {{ $docente->seccion }}
                            </td>
                        @endforeach

                        {{-- @foreach ($estudiantes as $est) --}}
                        {{-- <tr>
                                <td>{{ $est->rowNumber }}</td>
                                <td>{{ $est->distrito }}</td>
                                <td>{{ $est->inst_name }}</td>
                                <td class="text-uppercase">{{ $est->est_apell }}, {{ $est->est_name }}</td>
                                <td>{{ $est->est_grado }}</td>
                                <td class="text-center">{{ $est->est_seccion }}</td>
                                <td>
                                    <a href="{{ route('estudiantes_editar', $est) }}" class="btn btn-warning btn-sm"
                                        data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="<b>EDITAR</b>" ESTUDIANTE"><i
                                            class="fa-solid fa-user-pen"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#estudiante_eliminar-{{ $est->id_est }}">
                                        <i class="fa-solid fa-trash-can" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="" data-bs-original-title="<b>ELIMINAR</b>"></i>
                                    </button>
                                </td>
                            </tr> --}}

                        {{-- ? modal accion --}}
                        {{-- @livewire('estudiantes-live.estudiante-eliminar', ['est' => $est], key($est->id_est)) --}}
                        {{-- @livewire('estudiantes-live.estudiante-editar', ['est' => $est], key($est->id_est)) --}}
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
