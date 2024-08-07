@extends('layout.main')
@section('content')
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">

        @include('layout.partial.cards')

        @include('layout.partial.grafik')
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
