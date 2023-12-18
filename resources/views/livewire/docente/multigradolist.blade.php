<div>

    <div class="row">
        <div class="col-8">
            <h2>Grados asignados</h2>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addgrado">
                <b><i class="fa-solid fa-plus"></i></b> Agregar Grado
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <table class="table table-striped table-hover shadow rounded">
                <thead>
                    <tr>
                        <td class="bg-success text-white fw-bold text-center" width="500px">GRADO</td>
                        <td class="bg-success text-white fw-bold text-center" width="500px">SECCIÓN</td>
                        <td class="bg-success text-white fw-bold text-center" width="500px">ACCIÓN</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center fw-bold">{{ Auth::user()->grado }}</td>
                        <td class="text-center fw-bold">{{ Auth::user()->seccion }}</td>
                        <td class="text-center fw-bold"> PRINCIPAL</td>
                    </tr>

                    @if ($gradosList)
                        @foreach ($gradosList as $gradom)
                            <tr>
                                <td class="text-center">{{ $gradom->grado }}</td>
                                <td class="text-center">{{ $gradom->seccion }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#delgrado-{{ $gradom->id }}">
                                        <i class="fa-solid fa-trash-can" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="" data-bs-original-title="<b>ELIMINAR</b>"></i>
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>

    {{-- modal para agregar grados --}}
    @livewire('docente.addgrado')

    {{-- ? modal accion --}}
    @if ($gradosList)
        @foreach ($gradosList as $gradom)
            @livewire('docente.delgrado', ['gradom' => $gradom], key($gradom->id))
        @endforeach
    @endif

</div>
