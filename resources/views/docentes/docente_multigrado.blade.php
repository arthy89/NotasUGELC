@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                @livewire('docente.multigradolist')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
