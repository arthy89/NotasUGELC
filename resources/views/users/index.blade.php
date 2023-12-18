@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Gestión de Usuarios</h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('crear_usuario') }}" class="btn btn-primary float-end"><i
                            class="fa-solid fa-user-plus"></i> Crear nuevo usuario</a>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-bg-success">{{ __('Sección de Usuarios') }}</div>

                    <div class="card-body">
                        Aquí se mostrarán los usuarios <br>
                        <table id="registro" class="table table-striped bg-light shadow mb-5 rounded" width="100%">
                            <thead>
                                <tr>
                                    <th class="bg-success text-white">N°</th>
                                    <th class="bg-success text-white">APELLIDO Y NOMBRES</th>
                                    <th class="bg-success text-white" width='80px'>ROL</th>
                                    <th class="bg-success text-white">CORREO</th>
                                    <th class="bg-success text-white">CONTRASEÑA</th>
                                    <th class="bg-success text-white">INSTITUCIÓN</th>
                                    <th class="bg-success text-white">OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Se eliminó al usuario correctamente',
                'success'
            )
        </script>
    @endif

    <script>
        // $('.formulario').submit(function(e){
        $(document).on('submit', '.formulario', function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro de eliminar al Usuario?',
                text: "Se eliminará al usuario",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.toast').toast('show');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#registro').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('usuarios') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'rol_g_s',
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'contra',
                        name: 'contra'
                    },
                    {
                        data: 'institucion',
                    },
                    {
                        data: 'action',
                        sWidth: '110px',
                        sortable: false
                    },
                ],
                "language": {
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                        "first": "Primero",
                        "last": "Último"
                    }

                }
            });
        });
    </script>

    @if (session('creado'))
        <script>
            Lobibox.notify('success', {
                width: 400,
                img: "{{ asset('imgs/success.png') }}",
                position: 'top right',
                title: "USUARIO CREADO",
                msg: '{{ session('creado') }}'
            });
        </script>
    @endif
@endpush
