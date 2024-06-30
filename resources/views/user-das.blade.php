@extends('users.main')
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="px-16">
            {{-- Parameter --}}
            <div class="w-full max-w-full mt-0 py-6 pt-2">
                <div
                    class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-2xl border-b-0 border-solid bg-white p-6">
                        <div class="w-full bg-white rounded-lg">
                            hello
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex">
                {{-- Card AQI --}}
                <div class="w-2/3">
                    @include('layout.partial.cards-aqi')
                </div>
                {{-- Suhu Kelembapan --}}
                <div class="w-full max-w-full mt-0 lg:w-1/3 lg:flex-none">
                    @include('users.partial.temp-humi')
                </div>
            </div>
            {{-- Rekomendasi Aktivitas --}}
            <div class="w-full max-w-full mt-0">
                <div
                    class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-b-lg border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-2xl border-b-0 border-solid bg-white p-6">
                        <div class="w-full bg-white rounded-lg">
                            HEllo
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik --}}
            <div class="flex flex-wrap mt-6 -mx-3">
                {{-- Diagram Batang --}}
                <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div
                        class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                            <h6>Grafik Batang Kualitas Udara</h6>
                            <select class="p-1 rounded-md text-xs bg-slate-700 text-white" id="parameter1"
                                name="parameter1">
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="pm25">PM2.5
                                </option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co2">CO2</option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="no2">NO2</option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co">CO</option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="benzene">Benzene
                                </option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="toluene">Toluene
                                </option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="temperature">
                                    Temperature
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
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="pm25">PM2.5
                                </option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co2">CO2</option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="no2">NO2</option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="co">CO</option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="benzene">Benzene
                                </option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="toluene">Toluene
                                </option>
                                <option class="py-3 bg-white text-slate-900 hover:bg-slate-300" value="temperature">
                                    Temperature
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

            {{-- Berita --}}
            {{-- <div class="flex flex-wrap mt-6 -mx-3">
                <div class="grid lg:grid-cols-3 gap-6 px-3 md:grid-cols-2">
                    @foreach ($news['articles'] as $article)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="md:flex">
                                <div class="p-8">
                                    <img class="h-48 w-full object-cover md:w-48 items-center justify-center rounded-lg shadow-md"
                                        src="{{ $article['image'] }}" alt="{{ $article['title'] }}">

                                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                                        {{ $article['title'] }}</div>
                                    <p class="mt-2 text-gray-500 text-wrap">{{ $article['description'] }}</p>
                                    <a href="{{ $article['url'] }}"
                                        class="block mt-4 text-blue-500 hover:text-blue-700">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>

    <script>
        var chart1 = "{{ route('chart1.data') }}";
        var chart2 = "{{ route('chart.data') }}";
        window.chartData = {
            dataTemp: @json($dataTemp),
            dataHumi: @json($dataHumi)
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3"></script>
    <!-- Import Moment.js and Chart.js Adapter for Moment.js -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@1.0.0"></script>
    <!-- Import jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <Script src="./assets/js/chart-1.js"></Script>
    <Script src="./assets/js/chart-2.js"></Script>
    <Script src="./assets/js/user-das.js"></Script>
    <!-- end cards -->
@endsection
