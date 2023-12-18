<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>UGEL CARABAYA</title>

<meta name="description" content="Aplicativo de notas para la UGEL CARABAYA, etapa de Examen de Salida 2023">

<!-- Ico -->
<link rel="icon" type="image/x-icon" href="{{ asset('imgs/ugelico.png') }}">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
{{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
<link href="" rel="stylesheet">

{{-- Fontawesome --}}
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" type="text/css">

{{-- Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

{{-- Datatables --}}
<link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap5.min.css') }}">

{{-- Select 2 --}}
<link rel="stylesheet" href="{{ asset('assets/select2/select2.min.css') }}">

{{-- Notificaciones --}}
<link rel="stylesheet" href="{{ asset('assetsnotf/css/Lobibox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assetsnotf/css/notifications.css') }}">

<!-- Scripts -->
@vite(['resources/js/app.js'])
@vite(['resources/scss/app.scss'])

<style>
    @font-face {
        font-family: SF;
        src: url('{{ asset('assets/fonts/San Francisco Font/SFProDisplay-Regular.ttf') }}');
    }
</style>
