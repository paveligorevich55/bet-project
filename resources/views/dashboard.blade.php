<x-panel.app-layout>

        <div class="flex flex-wrap -mx-3">
            <div class="relative z-20 w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-7/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-transparent border-0 border-solid shadow-none border-black-125 rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap -ml-3">
                            <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-6/12">
                                <div class="flex flex-col h-full">
                                    <h2 class="mb-0 font-bold dark:text-white">General Statistics</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 sm:flex-0 shrink-0 sm:w-6/12 lg:w-5/12">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-sm">Users</p>
                                            <h5 class="mb-0 font-bold dark:text-white">
                                                {{$visitorCount}}
{{--                                                <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>--}}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl">
                                            <i class="ni leading-none ni-circle-08 text-lg relative top-3.5 text-white" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">

                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today Visitors</p>
                                            <h5 class="mb-0 font-bold dark:text-white">
                                                {{$todayEventsCount}}
{{--                                                <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span>--}}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl">
                                            <i class="ni leading-none ni-watch-time text-lg relative top-3.5 text-white" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full max-w-full px-3 mt-6 sm:flex-0 shrink-0 sm:mt-0 sm:w-6/12 lg:w-5/12">
                        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">

                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-sm">New Users</p>
                                            <h5 class="mb-0 font-bold dark:text-white">
                                                {{$uniqueVisitorCount}}
{{--                                                <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span>--}}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl">
                                            <i class="ni leading-none ni-world text-lg relative top-3.5 text-white" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
                            <div class="flex-auto p-4">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex-none w-2/3 max-w-full px-3">
                                        <div>
                                            <p class="mb-0 font-sans font-semibold leading-normal text-sm">Clicks on link</p>
                                            <h5 class="mb-0 font-bold dark:text-white">
                                                {{$clicks}}
{{--                                                <span class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span>--}}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                                        <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl">
                                            <i class="ni leading-none ni-image text-lg relative top-3.5 text-white" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mt-6 -mx-3">
                    <div class="w-full max-w-full px-3 flex-0 lg:w-10/12">
                        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-4 pb-0">
                                <h6 class="mb-0 dark:text-white">Traffic channels</h6>
                                <div class="flex items-center">
                  <span class="py-2.6 mr-6 rounded-1.8 text-sm inline-block whitespace-nowrap bg-transparent px-0 text-center align-baseline font-normal leading-none text-white">
                    <i class="rounded-circle mr-1.5 inline-block h-2 w-2 align-middle bg-fuchsia-500"></i>
                    <span class="leading-tight dark:text-white text-slate-700 text-xs">Organic search</span>
                  </span>
                                    <span class="py-2.6 mr-6 rounded-1.8 text-sm inline-block whitespace-nowrap bg-transparent px-0 text-center align-baseline font-normal leading-none text-white">
                    <i class="rounded-circle mr-1.5 inline-block h-2 w-2 align-middle bg-slate-700"></i>
                    <span class="dark:text-white text-slate-700">Referral</span>
                  </span>
                                    <span class="py-2.6 mr-6 rounded-1.8 text-sm inline-block whitespace-nowrap bg-transparent px-0 text-center align-baseline font-normal leading-none text-white">
                    <i class="rounded-circle mr-1.5 inline-block h-2 w-2 align-middle bg-cyan-500"></i>
                    <span class="dark:text-white text-slate-700">Social media</span>
                  </span>
                                </div>
                            </div>
                            <div class="flex-auto p-4">
                                <canvas id="chart-line-traffic" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div class="relative z-20 flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 flex-0">
                            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZF1E35KQXZZ9pd6L?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
                <div class="relative z-20 flex flex-col h-full min-w-0 mt-6 break-words bg-white border-0 md:mt-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-4 pb-0">
                        <div class="flex items-center">
                            <h6 class="dark:text-white">Pages</h6>
                            <button type="button" class="active:shadow-soft-xs active:opacity-85 ease-soft-in leading-pro text-xs bg-150 bg-x-25 rounded-3.5xl p-1.2 h-6 w-6 mb-0 ml-auto flex cursor-pointer items-center justify-center border border-solid border-lime-500 bg-transparent text-center align-middle font-bold text-lime-500 shadow-none transition-all hover:bg-transparent hover:text-lime-500 hover:opacity-75 hover:shadow-none active:bg-lime-500 active:text-black hover:active:bg-transparent hover:active:text-lime-500 hover:active:opacity-75 hover:active:shadow-none" data-target="tooltip_trigger">
                                <i class="fas fa-check text-3xs"></i>
                            </button>
                            <div class="z-50 hidden px-2 py-1 text-center text-white bg-black rounded-lg max-w-46 text-sm" id="tooltip" role="tooltip" data-popper-placement="bottom">
                                See how much traffic do you get from social media
                                <div id="arrow" class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-auto px-4 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center justify-center w-full mb-0 align-top border-gray-200 dark:text-white/80 text-slate-500">
                                <thead class="align-bottom">
                                <tr>
                                    <th class="py-3 pl-2 pr-6 font-bold uppercase align-middle border-b border-gray-200 border-solid text-xxs text-slate-400 opacity-70 whitespace-nowrap tracking-none">Page</th>
                                    <th class="py-3 pl-2 pr-6 font-bold uppercase align-middle border-b border-gray-200 border-solid text-xxs text-slate-400 opacity-70 whitespace-nowrap tracking-none">Page Views</th>

                                </tr>
                                </thead>
                                <tbody class="align-top">

                                @foreach($mostFrequentAttributes as $key)
                                <tr>
                                    <td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
                                        <p class="mb-0 font-semibold leading-normal text-sm">{{$loop->index + 1 . '. - '}}{{$key->attribute}}</p>
                                    </td>
                                    <td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
                                        <p class="mb-0 font-semibold leading-normal text-sm">{{$key->count}}</p>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <div id="globe" class="absolute right-0 mt-24 lg-max:overflow-hidden top-1/10 sm:mt-4 lg:mr-24">
                    <canvas width="700" height="600" class="w-3/4 -mr-48 h-3/4 lg-max:w-full lg:mt-12 lg:mr-0 lg:w-full"></canvas>
                </div>
            </div>
        </div>

    @push('scripts')

        <script src="{{asset('/assets/js/plugins/chartjs.min.js')}}"></script>
        <script src="{{asset('/assets/js/plugins/threejs.js')}}"></script>
        <script src="{{asset('/assets/js/plugins/orbit-controls.js')}}"></script>
        <script>
            var labels = ['Saturday', 'Sunday', 'Monday', 'Thursday', 'Wednesday', 'Thirthday', 'Friday', 'Saturday'];
            var labels = {{ Js::from($labels) }};
            var dataOrganic = {{ Js::from($dataOrganic) }};
            var dataReferral = {{ Js::from($dataReferral) }};
            var dataDirect = {{ Js::from($dataDirect) }};

            var ctx1 = document.getElementById("chart-line-traffic").getContext("2d");

            var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
            gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

            var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
            gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
            gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

            // Line chart
            new Chart(ctx1, {
                type: "line",
                data: {
                    labels: labels,
                    datasets: [

                    {
                        label: "Direct",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#17c1e8",
                        borderColor: "#17c1e8",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        data: dataDirect,
                        maxBarThickness: 6

                    },
                    {
                        label: "Organic Traffic",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#cb0c9f",
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        data: dataOrganic,
                        maxBarThickness: 6

                    },
                    {
                      label: "Referral",
                      tension: 0.4,
                      borderWidth: 0,
                      pointRadius: 2,
                      pointBackgroundColor: "#3A416F",
                      borderColor: "#3A416F",
                      borderWidth: 3,
                      backgroundColor: gradientStroke2,
                      data: dataReferral,
                      maxBarThickness: 6
                    },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#9ca2b7'
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: true,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#9ca2b7',
                                padding: 10
                            }
                        },
                    },
                },
            });
        </script>
    @endpush
</x-panel.app-layout>
