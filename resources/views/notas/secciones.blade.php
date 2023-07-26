@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-6 py-2">
                    <p class="fs-1 fw-bold shadow rounded text-center text-bg-success">{{ $curso->curso_name }}</p>
                </div>
            </div>
            <div class="col-6">
                <div class="row text-center">
                    <div class="col-md-4 d-grid gap-2">
                        <a href="{{ route('seccion_index', [$curso->curso_name, 'PRIMER']) }}"
                            class="shadow btn btn-lg btn-primary">
                            <i class="bi bi-1-circle-fill"></i>&nbsp; Primer Grado</a>
                    </div>
                    <div class="col-md-4 d-grid gap-2">
                        <a href="{{ route('seccion_index', [$curso->curso_name, 'SEGUNDO']) }}"
                            class="btn btn-lg btn-danger ">
                            <i class="bi bi-2-circle-fill"></i>&nbsp; Segundo Grado</a>
                    </div>
                    <div class="col-md-4 d-grid gap-2">
                        <a href="{{ route('seccion_index', [$curso->curso_name, 'TERCERO']) }}"
                            class="btn btn-lg btn-success ">
                            <i class="bi bi-3-circle-fill"></i>&nbsp; Tercer Grado</a>
                    </div>
                </div>

                <div class="row mt-2 text-center">
                    <div class="col-md-4 d-grid gap-2">
                        <a href="{{ route('seccion_index', [$curso->curso_name, 'CUARTO']) }}"
                            class="btn btn-lg btn-warning ">
                            <i class="bi bi-4-circle-fill"></i>&nbsp; Cuarto Grado</a>
                    </div>
                    <div class="col-md-4 d-grid gap-2">
                        <a href="{{ route('seccion_index', [$curso->curso_name, 'QUINTO']) }}" class="btn btn-lg btn-info ">
                            <i class="bi bi-5-circle-fill"></i>&nbsp; Quinto Grado</a>
                    </div>
                    <div class="col-md-4 d-grid gap-2">
                        <a href="{{ route('seccion_index', [$curso->curso_name, 'SEXTO']) }}" class="btn btn-lg btn-dark ">
                            <i class="bi bi-6-circle-fill"></i>&nbsp; Sexto Grado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
