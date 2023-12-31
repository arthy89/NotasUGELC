@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-6 py-2">
                    <p class="fs-1 fw-bold shadow rounded text-center text-bg-success">
                        {{ $curso->curso_name }} - {{ $grado }}
                    </p>
                </div>
            </div>
            @livewire('notas.grado-x', ['grado' => $grado, 'curso' => $curso])
        </div>
    </div>
@endsection
