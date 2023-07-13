<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>UGEL CARABAYA</title>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" type="text/css">

{{-- Datatables --}}
<link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap5.min.css') }}">

{{-- Select 2 --}}
<link rel="stylesheet" href="{{ asset('assets/select2/select2.min.css') }}">

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
