{{--<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">--}}
{{--    <!-- Primary Navigation Menu -->--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between h-16">--}}
{{--            <div class="flex">--}}
{{--                <!-- Logo -->--}}
{{--                <div class="shrink-0 flex items-center">--}}
{{--                    <a href="{{ route('dashboard') }}">--}}
{{--                        <x-panel.application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <!-- Navigation Links -->--}}
{{--                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
{{--                    <x-panel.nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                        {{ __('Dashboard') }}--}}
{{--                    </x-panel.nav-link>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Settings Dropdown -->--}}
{{--            <div class="hidden sm:flex sm:items-center sm:ml-6">--}}
{{--                <x-panel.dropdown align="right" width="48">--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">--}}
{{--                            <div>{{ Auth::user()->name }}</div>--}}

{{--                            <div class="ml-1">--}}
{{--                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
{{--                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </button>--}}
{{--                    </x-slot>--}}

{{--                    <x-slot name="content">--}}
{{--                        <x-panel.dropdown-link :href="route('profile.edit')">--}}
{{--                            {{ __('Profile') }}--}}
{{--                        </x-panel.dropdown-link>--}}

{{--                        <!-- Authentication -->--}}
{{--                        <form method="POST" action="{{ route('logout') }}">--}}
{{--                            @csrf--}}

{{--                            <x-panel.dropdown-link :href="route('logout')"--}}
{{--                                    onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                {{ __('Log Out') }}--}}
{{--                            </x-panel.dropdown-link>--}}
{{--                        </form>--}}
{{--                    </x-slot>--}}
{{--                </x-panel.dropdown>--}}
{{--            </div>--}}

{{--            <!-- Hamburger -->--}}
{{--            <div class="-mr-2 flex items-center sm:hidden">--}}
{{--                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">--}}
{{--                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Responsive Navigation Menu -->--}}
{{--    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">--}}
{{--        <div class="pt-2 pb-3 space-y-1">--}}
{{--            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">--}}
{{--                {{ __('Dashboard') }}--}}
{{--            </x-responsive-nav-link>--}}
{{--        </div>--}}

{{--        <!-- Responsive Settings Options -->--}}
{{--        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">--}}
{{--            <div class="px-4">--}}
{{--                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>--}}
{{--                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--            </div>--}}

{{--            <div class="mt-3 space-y-1">--}}
{{--                <x-responsive-nav-link :href="route('profile.edit')">--}}
{{--                    {{ __('Profile') }}--}}
{{--                </x-responsive-nav-link>--}}

{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <x-responsive-nav-link :href="route('logout')"--}}
{{--                            onclick="event.preventDefault();--}}
{{--                                        this.closest('form').submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-responsive-nav-link>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
{{--        <nav>--}}
{{--            <!-- breadcrumb -->--}}
{{--            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">--}}
{{--                <li class="leading-normal text-sm">--}}
{{--                    <a class="opacity-50 text-slate-700" href="javascript:void(0);">Pages</a>--}}
{{--                </li>--}}
{{--                <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>--}}
{{--            </ol>--}}
{{--            <h6 class="mb-0 font-bold capitalize">Dashboard</h6>--}}
{{--        </nav>--}}

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
{{--                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">--}}
{{--                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">--}}
{{--                  <i class="fas fa-search"></i>--}}
{{--                </span>--}}
{{--                    <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />--}}
{{--                </div>--}}
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                            <i class="fa fa-user sm:mr-1"></i>
                            <span class="hidden sm:inline">{{__('Sign Out')}}</span>
                        </a>
                    </form>
                </li>
                <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:void(0);" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                        <div class="w-4.5 overflow-hidden">
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        </div>
                    </a>
                </li>
{{--                <li class="flex items-center px-4">--}}
{{--                    <a href="javascript:void(0);" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">--}}
{{--                        <i class="cursor-pointer fa fa-cog"></i>--}}
{{--                        <!-- fixed-plugin-button-nav  -->--}}
{{--                    </a>--}}
{{--                </li>--}}

                <!-- notifications -->

{{--                <li class="relative flex items-center pr-2">--}}
{{--                    <p class="hidden transform-dropdown-show"></p>--}}
{{--                    <a href="javascript:void(0);" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">--}}
{{--                        <i class="cursor-pointer fa fa-bell"></i>--}}
{{--                    </a>--}}

{{--                    <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">--}}
{{--                        <!-- add show class on dropdown open js -->--}}
{{--                        <li class="relative mb-2">--}}
{{--                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:void(0);">--}}
{{--                                <div class="flex py-1">--}}
{{--                                    <div class="my-auto">--}}
{{--                                        <img src="/build/assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />--}}
{{--                                    </div>--}}
{{--                                    <div class="flex flex-col justify-center">--}}
{{--                                        <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New message</span> from Laur</h6>--}}
{{--                                        <p class="mb-0 leading-tight text-xs text-slate-400">--}}
{{--                                            <i class="mr-1 fa fa-clock"></i>--}}
{{--                                            13 minutes ago--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="relative mb-2">--}}
{{--                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:void(0);">--}}
{{--                                <div class="flex py-1">--}}
{{--                                    <div class="my-auto">--}}
{{--                                        <img src="/build/assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />--}}
{{--                                    </div>--}}
{{--                                    <div class="flex flex-col justify-center">--}}
{{--                                        <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>--}}
{{--                                        <p class="mb-0 leading-tight text-xs text-slate-400">--}}
{{--                                            <i class="mr-1 fa fa-clock"></i>--}}
{{--                                            1 day--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="relative">--}}
{{--                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:void(0);">--}}
{{--                                <div class="flex py-1">--}}
{{--                                    <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-nav-brand text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">--}}
{{--                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
{{--                                            <title>credit-card</title>--}}
{{--                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">--}}
{{--                                                    <g transform="translate(1716.000000, 291.000000)">--}}
{{--                                                        <g transform="translate(453.000000, 454.000000)">--}}
{{--                                                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>--}}
{{--                                                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex flex-col justify-center">--}}
{{--                                        <h6 class="mb-1 font-normal leading-normal text-sm">Payment successfully completed</h6>--}}
{{--                                        <p class="mb-0 leading-tight text-xs text-slate-400">--}}
{{--                                            <i class="mr-1 fa fa-clock"></i>--}}
{{--                                            2 days--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</nav>
