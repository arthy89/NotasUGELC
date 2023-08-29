<div>
    <style>
        .cursor-pointer {
            cursor: pointer;
        }
    </style>
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header text-bg-success">Lista completa de estudiantes</div>
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
                            <td class="bg-success text-white fw-bold">DISTRITO</td>
                            <td class="bg-success text-white fw-bold">IIEE</td>
                            <td class="bg-success text-white fw-bold">APELLIDOS Y NOMBRES</td>
                            <td class="bg-success text-white fw-bold">GRADO</td>
                            <td class="bg-success text-white fw-bold">SECCIÓN</td>
                            <td class="bg-success text-white fw-bold">ACCIÓN</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudiantes as $est)
                            <tr>
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
                            </tr>

                            {{-- ? modal accion --}}
                            @livewire('estudiantes-live.estudiante-eliminar', ['est' => $est], key($est->id_est))
                            {{-- @livewire('estudiantes-live.estudiante-editar', ['est' => $est], key($est->id_est)) --}}
                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <!-- Botón "Anterior" -->
                        <li class="page-item {{ $estudiantes->previousPageUrl() ? '' : 'disabled' }}">
                            <a class="page-link cursor-pointer" wire:click="previousPage" tabindex="-1">
                                Anterior
                            </a>
                        </li>

                        <!-- Números de página -->
                        @php
                            $start = max(1, $estudiantes->currentPage() - 2);
                            $end = min($start + 4, $estudiantes->lastPage());
                        @endphp

                        <!-- Mostrar número 1 -->
                        @if ($start > 1)
                            <li class="page-item">
                                <a class="page-link cursor-pointer" wire:click="gotoPage(1)">1</a>
                            </li>
                            @if ($start > 2)
                                <li class="page-item disabled">
                                    <a class="page-link">...</a>
                                </li>
                            @endif
                        @endif

                        <!-- Mostrar números de página -->
                        @for ($page = $start; $page <= $end; $page++)
                            <li class="page-item {{ $page == $estudiantes->currentPage() ? 'active' : '' }}">
                                <a class="page-link cursor-pointer"
                                    wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                            </li>
                        @endfor

                        <!-- Mostrar última página -->
                        @if ($end < $estudiantes->lastPage())
                            @if ($end < $estudiantes->lastPage() - 1)
                                <li class="page-item disabled">
                                    <a class="page-link">...</a>
                                </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link cursor-pointer"
                                    wire:click="gotoPage({{ $estudiantes->lastPage() }})">{{ $estudiantes->lastPage() }}</a>
                            </li>
                        @endif

                        <!-- Botón "Siguiente" -->
                        <li class="page-item {{ $estudiantes->nextPageUrl() ? '' : 'disabled' }}">
                            <a class="page-link cursor-pointer" wire:click="nextPage">
                                Siguiente
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
