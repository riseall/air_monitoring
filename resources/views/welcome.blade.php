@extends('users.main')
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="px-16">
            {{-- Parameter --}}
            <div class="w-full max-w-full mt-0 py-6 pt-2">
                @include('users.partial.parameter')
            </div>

            <div class="flex flex-wrap">
                {{-- Card AQI --}}
                <div class="w-full lg:w-2/3">
                    @include('layout.partial.cards-aqi')
                </div>
                {{-- Suhu Kelembapan --}}
                <div class="w-full lg:w-1/3">
                    @include('users.partial.temp-humi')
                </div>
            </div>
            {{-- Rekomendasi Aktivitas --}}
            <div class="w-full max-w-full mt-0">
                <div
                    class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-b-lg border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-2xl border-b-0 border-solid bg-white p-6">
                        @include('users.partial.rekomendasi')
                    </div>
                </div>
            </div>
            @auth
                {{-- Grafik --}}
                @include('layout.partial.grafik')
            @endauth

            {{-- Berita --}}
            {{-- @include('users.partial.berita') --}}
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
