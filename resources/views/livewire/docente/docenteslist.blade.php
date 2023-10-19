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
                            <td class="bg-success text-center text-white fw-bold">N°</td>
                            <td class="bg-success text-center text-white fw-bold">APELLIDOS Y NOMBRES</td>
                            <td class="bg-success text-center text-white fw-bold">CORREO</td>
                            <td class="bg-success text-center text-white fw-bold">GRADO</td>
                            <td class="bg-success text-center text-white fw-bold">SECCIÓN</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($docentes as $docente)
                            <tr>
                                <td class="text-center">
                                    {{ $docente->rowNumber }}
                                </td>
                                <td>
                                    {{ $docente->name }}
                                </td>
                                <td>
                                    {{ $docente->email }}
                                </td>
                                <td class="text-center">
                                    {{ $docente->grado }}
                                </td>
                                <td class="text-center">
                                    {{ $docente->seccion }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <!-- Botón "Anterior" -->
                        <li class="page-item {{ $docentes->previousPageUrl() ? '' : 'disabled' }}">
                            <a class="page-link cursor-pointer" wire:click="previousPage" tabindex="-1">
                                Anterior
                            </a>
                        </li>

                        <!-- Números de página -->
                        @php
                            $start = max(1, $docentes->currentPage() - 2);
                            $end = min($start + 4, $docentes->lastPage());
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
                            <li class="page-item {{ $page == $docentes->currentPage() ? 'active' : '' }}">
                                <a class="page-link cursor-pointer"
                                    wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                            </li>
                        @endfor

                        <!-- Mostrar última página -->
                        @if ($end < $docentes->lastPage())
                            @if ($end < $docentes->lastPage() - 1)
                                <li class="page-item disabled">
                                    <a class="page-link">...</a>
                                </li>
                            @endif
                            <li class="page-item">
                                <a class="page-link cursor-pointer"
                                    wire:click="gotoPage({{ $docentes->lastPage() }})">{{ $docentes->lastPage() }}</a>
                            </li>
                        @endif

                        <!-- Botón "Siguiente" -->
                        <li class="page-item {{ $docentes->nextPageUrl() ? '' : 'disabled' }}">
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
