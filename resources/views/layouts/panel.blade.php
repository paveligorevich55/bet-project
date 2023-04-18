<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>


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

    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])



</head>
<body class="m-0 font-sans text-base antialiased font-normal text-left leading-default dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">

    @include('layouts.panel.aside')

    <main class="relative h-full max-h-screen transition-all duration-200 ease-soft-in-out xl:ml-68 rounded-xl">

        <!-- Navbar -->
        @include('layouts.panel.navigation')
        <!-- end Navbar -->
        <div class="w-full px-6 mx-auto">

            @if (Session::has('status'))
                <div class="fixed bottom-1/100 right-1/100 z-2 mb-6 pb-4 mr-1.25">
                    <div id="alert"
                         class="w-85 text-size-sm shadow-soft-2xl pointer-events-auto max-w-full rounded-lg border-0 bg-white bg-clip-padding p-2 transition-opacity ease-linear">
                        <div class="flex items-center p-3 rounded-t-lg bg-clip-padding text-slate-700">
                            <i class="mr-2 ni ni-check-bold text-lime-500"></i>
                            <span class="mr-auto font-semibold">Soft UI Dashboard</span>
                            <small class="text-slate-500">Now</small>
                            <button type="button" onclick="alertClose()">
                                <i class="ml-4 cursor-pointer fas fa-times"></i>
                            </button>
                        </div>
                        <hr
                            class="h-px m-0 bg-transparent border-0 opacity-25 bg-gradient-horizontal-dark dark:bg-gradient-horizontal-light" />
                        <div class="p-3 break-words">{{ Session::get('status') }}</div>
                    </div>
                </div>
            @elseif(Session::has('error'))
                <div class="fixed bottom-1/100 right-1/100 z-2 mb-6 pb-4 mr-1.25">
                    <div id="alert"
                         class="w-85 text-size-sm shadow-soft-2xl pointer-events-auto mt-2 hidden max-w-full rounded-lg border-0 bg-white bg-clip-padding p-2 opacity-0 transition-opacity duration-150 ease-linear">
                        <div class="flex items-center p-3 rounded-t-lg bg-clip-padding text-slate-700">
                            <i class="mr-2 text-transparent ni ni-notification-70 bg-gradient-red bg-clip-text"></i>
                            <span class="mr-auto font-semibold text-transparent bg-gradient-red bg-clip-text">Soft UI
                        Dashboard</span>
                            <small class="text-slate-500">Now</small>
                            <i class="ml-4 cursor-pointer fas fa-times"></i>
                        </div>
                        <hr
                            class="h-px m-0 bg-transparent border-0 opacity-25 bg-gradient-horizontal-dark dark:bg-gradient-horizontal-light" />
                        <div class="p-3 break-words">{{ Session::get('error') }}</div>
                    </div>
                </div>
            @endif

            @if(!Route::is('dashboard'))
                @include('layouts.panel.banner')
            @endif

            {{$slot}}

            @include('layouts.panel.footer')
        </div>


    </main>

    @stack('scripts')
    <script src="{{asset('/assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
    <script src="{{asset('/assets/js/soft-ui-dashboard-pro-tailwind.js')}}" async></script>

    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";
        }
    </script>

</body>
</html>
