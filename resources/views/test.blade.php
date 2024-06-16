@extends('layout.main')
@section('content')
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">

        @include('layout.partial.cards')

        <div class="flex flex-wrap my-6 -mx-3">
            <!-- Maps -->
            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-full md:flex-none lg:w-full lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6>Projects</h6>
                                <p class="mb-0 text-sm leading-normal">
                                    <i class="fa fa-check text-cyan-500"></i>
                                    <span class="ml-1 font-semibold">30 done</span>
                                    this month
                                </p>
                            </div>
                            <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                                <div class="relative pr-6 lg:float-right">
                                    <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-slate-400"></i>
                                    </a>
                                    <p class="hidden transform-dropdown-show"></p>

                                    <ul dropdown-menu
                                        class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                href="javascript:;">Action</a>
                                        </li>
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                href="javascript:;">Another action</a>
                                        </li>
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-6 px-0 pb-2">
                        <div class="overflow-x-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mt-6 -mx-3">
            {{-- Diagram Batang --}}
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6>Grafik Batang Kualitas Udara</h6>
                        <select class="p-1 rounded-md text-xs bg-slate-700 text-white" id="parameter1" name="parameter1">
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="pm25">PM2.5</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co2">CO2</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="no2">NO2</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co">CO</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="benzene">Benzene
                            </option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="toluene">Toluene
                            </option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="temperature">Temperature
                            </option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="humidity">Humidity
                            </option>
                        </select>
                    </div>
                    <div class="flex-auto p-4">
                        <div>
                            <canvas id="chart-bars" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Diagram Alir --}}
            <div class="w-full max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6>Grafik Garis Kualitas Udara</h6>
                        <select class="p-1 rounded-md text-xs bg-slate-700 text-white" id="parameter" name="parameter">
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="pm25">PM2.5</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co2">CO2</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="no2">NO2</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co">CO</option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="benzene">Benzene
                            </option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="toluene">Toluene
                            </option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="temperature">Temperature
                            </option>
                            <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="humidity">Humidity
                            </option>
                        </select>
                    </div>
                    <div class="flex-auto p-4">
                        <div>
                            <canvas id="chart-line" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var chart1 = "{{ route('chart1.data') }}";
        var chart2 = "{{ route('chart.data') }}";
    </script>
    <!-- end cards -->
@endsection
