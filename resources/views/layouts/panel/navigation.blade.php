<nav navbar-main class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 mt-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <h6 class="mb-0 mr-4 font-bold capitalize dark:text-white">{{\Illuminate\Support\Facades\Route::currentRouteName()}}</h6>
        </nav>

        <div class="flex items-center">
            <a mini-sidenav-burger href="javascript:void(0);" class="hidden p-0 text-sm transition-all ease-nav-brand text-slate-500 xl:block" aria-expanded="false">
                <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 translate-x-[5px] rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                    <i class="ease-soft relative block h-0.5 translate-x-[5px] rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                </div>
            </a>
        </div>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto" id="navbar">
            <div class="flex items-center md:ml-auto md:pr-4">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
                    <input type="text" class="pl-9 text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                </div>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center mr-2">
                    <a href="{{route('profile.edit')}}" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 dark:text-white">
                        <i class="fa fa-user sm:mr-1" aria-hidden="true"></i>
                        <span class="hidden sm:inline">Profile</span>
                    </a>
                </li>
                <li class="flex items-center">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500 dark:text-white">
                            <i class="fa fa-door-open sm:mr-1" aria-hidden="true"></i>
                            <span class="hidden sm:inline">Sign Out</span>
                        </a>
                    </form>
                </li>
                <li class="flex items-center pl-4 xl:hidden">
                    <a sidenav-trigger class="block p-0 text-sm transition-all ease-nav-brand text-slate-500 dark:text-white" href="javascript:void(0);" aria-expanded="false">
                        <div class="w-4.5 overflow-hidden">
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                            <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all dark:bg-white"></i>
                        </div>
                    </a>
                </li>
                <li class="flex items-center px-4">
                    <a href="javascript:void(0);" class="p-0 text-sm transition-all ease-nav-brand text-slate-500 dark:text-white">
                        <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                        <!-- fixed-plugin-button-nav  -->
                    </a>
                </li>

                <!-- notifications -->
                <li class="relative flex items-center pr-2">
                    <p class="hidden transform-dropdown-show"></p>
                    <a dropdown-trigger href="javascript:void(0);" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500 dark:text-white" aria-expanded="false">
                        <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                    </a>

                    <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7 before:text-5.5 dark:bg-gray-950 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                        <!-- add show class on dropdown open js -->
                        <li class="relative mb-2">
                            <a class="group ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-gray-200/80 lg:transition-colors" href="javascript:;">
                                <div class="flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 text-sm font-normal leading-normal group-hover:text-slate-700 dark:text-white"><span class="font-semibold">New message</span> from Laur</h6>
                                        <p class="mb-0 text-xs leading-tight text-slate-400 group-hover:text-slate-700 dark:text-white dark:opacity-80">
                                            <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="relative mb-2">
                            <a class="group ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-gray-200/80" href="javascript:;">
                                <div class="flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 text-sm font-normal leading-normal group-hover:text-slate-700 dark:text-white"><span class="font-semibold">New album</span> by Travis Scott</h6>
                                        <p class="mb-0 text-xs leading-tight text-slate-400 group-hover:text-slate-700 dark:text-white dark:opacity-80">
                                            <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-gray-200/80" href="javascript:;">
                                <div class="flex py-1">
                                    <div class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 text-sm font-normal leading-normal group-hover:text-slate-700 dark:text-white">Payment successfully completed</h6>
                                        <p class="mb-0 text-xs leading-tight text-slate-400 group-hover:text-slate-700 dark:text-white dark:opacity-80">
                                            <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
