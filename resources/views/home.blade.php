@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bg-success">{{ __('Bienvenido al sistema') }}</div>

                    <div class="card-body">
                        Te damos la bienvenida
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @if (session('status'))
        <script>
            Lobibox.notify('success', {
                width: 400,
                img: "{{ asset('imgs/success.png') }}",
                position: 'top right',
                title: "ACCESO CORRECTO",
                msg: '{{ session('status') }}'
            });
        </script>
    @endif
@endpush
