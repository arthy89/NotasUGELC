<div>
    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .custom-checkbox {
            border: 1px solid #a6a6a6;
        }
    </style>
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header text-bg-success">Seleccione la SECCIÓN que desea llenar las notas</div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-10 mb-3">
                        <div wire:ignore class="row text-center">
                            @foreach ($secciones as $secc)
                                <div class="col-2 d-grid gap-2">
                                    <button wire:click="$emit('seccion', '{{ $secc }}')"
                                        class="btn btn-sm btn-primary shadow">Sección
                                        <strong class="fs-6">&nbsp; {{ $secc }}</strong>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @if ($mostrarTabla)
                    <table class="table table-sm table-bordered shadow">
                        <thead class="text-center">
                            <tr>
                                <th class="bg-success text-white fw-bold" width="40px">N°</th>
                                <th class="bg-success text-white fw-bold" width="400px">APELLIDOS Y NOMBRES</th>
                                <th class="bg-success text-white fw-bold">1</th>
                                <th class="bg-success text-white fw-bold">2</th>
                                <th class="bg-success text-white fw-bold">3</th>
                                <th class="bg-success text-white fw-bold">4</th>
                                <th class="bg-success text-white fw-bold">5</th>
                                <th class="bg-success text-white fw-bold">6</th>
                                <th class="bg-success text-white fw-bold">7</th>
                                <th class="bg-success text-white fw-bold">8</th>
                                <th class="bg-success text-white fw-bold">9</th>
                                <th class="bg-success text-white fw-bold">10</th>
                                <th class="bg-success text-white fw-bold">GUARDAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($estudiantes as $est)
                                @if (!$secc || $est->est_seccion === $secc)
                                    <tr>
                                        <td class="text-center">{{ $est->rowNumber }}</td>
                                        <td class="text-uppercase">{{ $est->est_apell }}, {{ $est->est_name }}</td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <input class="form-check-input custom-checkbox" type="checkbox"
                                                value="2" name="notas[]">
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#estudiante_eliminar-{{ $est->id_est }}">
                                                <i class="fa-solid fa-floppy-disk" data-bs-toggle="tooltip"
                                                    data-bs-html="true" title=""
                                                    data-bs-original-title="<b>GUARDAR</b>"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
