<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- Nucleo Icons -->
        <link href="{{asset('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- Popper -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="m-0 font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white/80">

        <main class="mt-0 transition-all duration-200 ease-soft-in-out">
            {{$slot}}
        </main>

        <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <!-- main script file  -->
        <script src="../../../assets/js/soft-ui-dashboard-pro-tailwind.js?v=1.0.1"></script>
    </body>
</html>
