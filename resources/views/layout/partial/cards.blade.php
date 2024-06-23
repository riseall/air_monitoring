<!-- row 1 -->
<div class="flex flex-wrap -mx-3">
    <!-- card1 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-bold text-sm text-slate-800">Carbon Dioxide</p>
                            <h5 id="co2-data" class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->co2 }}
                                <span class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="leading-none text-sm relative top-2.5 text-white">CO<sub>2</sub></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card2 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full pl-3 pr-1">
                        <div>
                            <p class="mb-0 font-bold text-sm text-slate-800">Nitrogen Dioxide</p>
                            <h5 id="no2-data"
                                class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->no2 }}
                                <span class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="leading-none text-sm relative top-2.5 text-white">NO<sub>2</sub></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card3 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full pl-3">
                        <div>
                            <p class="mb-0 font-bold text-sm text-slate-800">Carbon Monoxide</p>
                            <h5 id="co-data"
                                class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->co }}
                                <span class="text-sm leading-normal text-lime-500 font-weight-bolder">ppm</span>
                            </h5>
                        </div>
                    </div>
                    <div class="pr-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="leading-none relative text-sm top-2.5 text-white">CO</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card4 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-bold text-slate-800">Benzene</p>
                            <h5 id="bzn-data"
                                class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->benzene }}
                                <span class="text-sm leading-normal text-lime-500 font-weight-bolder">ppm</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="leading-none text-sm relative top-2.5 text-white">C<sub>6</sub>H<sub>6</sub></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card5 -->
    <div class="w-full max-w-full px-3 xl:mt-6 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-bold text-slate-800">Toluene</p>
                            <h5 id="tln-data"
                                class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->toluene }}
                                <span class="text-sm leading-normal text-lime-500 font-weight-bolder">ppm</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="leading-none text-sm relative top-2.5 text-white">
                                <div>C<sub>6</sub>H<sub>5</sub></div>
                                <div>CH<sub>3</sub></div>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card6 -->
    <div class="w-full max-w-full px-3 xl:mt-6 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-bold text-slate-800">PM2.5</p>
                            <h5 id="pm-data"
                                class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->pm25 }}
                                <span
                                    class="text-sm leading-normal text-lime-500 font-weight-bolder">ug/m<sup>3</sup></span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="fa leading-none fa-braille text-lg relative top-3.5 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card7 -->
    <div class="w-full max-w-full px-3 xl:mt-6 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-bold text-slate-800">Temperature</p>
                            <h5 id="tp-data"
                                class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->temperature }}
                                <span
                                    class="text-sm leading-normal text-lime-500 font-weight-bolder"><sup>o</sup>C</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="fa leading-none fa-thermometer-half text-lg relative top-3.5 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card8 -->
    <div class="w-full max-w-full px-3 xl:mt-6 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
        <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                    <div class="flex-none w-2/3 max-w-full px-3">
                        <div>
                            <p class="mb-0 font-bold text-slate-800">Humidity</p>
                            <h5 id="hm-data"
                                class="mb-0 font-sans text-sm font-semibold leading-normal text-slate-400">
                                {{ $data->humidity }}
                                <span class="text-sm leading-normal text-lime-500 font-weight-bolder">%</span>
                            </h5>
                        </div>
                    </div>
                    <div class="px-3 text-right basis-1/3">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                            <i class="fa leading-none fa-snowflake-o text-lg relative top-3.5 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var dataBaruUrl = "{{ route('new.data') }}";
</script>
