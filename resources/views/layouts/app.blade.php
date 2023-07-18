<!doctype html>
<html lang="es">

<head>
    @include('layouts.common-head')
    @stack('css')

    @livewireStyles
</head>

<body style="background-color: #f4f6f9; font-family: 'SF';">
    <style>
        .form-control {
            background-color: #f4f6f9;
        }
    </style>
    <div id="app">

        @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('layouts.common-end')

    @stack('scripts')

    @livewireScripts

</body>

</html>
