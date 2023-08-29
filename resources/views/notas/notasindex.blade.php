@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-6 py-2">
                    <p class="fs-1 fw-bold shadow rounded text-center text-bg-success">NOTAS</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="row text-center">
                        @foreach ($cursos as $curso)
                            <div class="col-sm-6 col-lg-4 col-xxl-3 d-grid gap-2 mt-2">
                                <a href="{{ route('grados_index', $curso->curso_name) }}"
                                    class="btn {{ $curso->id_curso === 1 ? 'btn-primary' : ($curso->id_curso === 2 ? 'btn-warning' : ($curso->id_curso === 3 ? 'btn-danger' : ($curso->id_curso === 4 ? 'btn-success' : 'btn-light'))) }}">{{ $curso->curso_name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
