@extends('layout.main')
@section('content')
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">

        @include('layout.partial.cards')

        @include('layout.partial.cards-aqi')

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0"></script>
    <!-- Import Moment.js and Chart.js Adapter for Moment.js -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@1.0.0"></script>
    <!-- Import jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <Script src="./assets/js/chart-1.js"></Script>
    <Script src="./assets/js/chart-2.js"></Script>
    <!-- end cards -->
@endsection
