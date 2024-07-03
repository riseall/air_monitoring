@extends('layout.main')
@section('content')
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.tailwindcss.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3 rounded-xl">
            <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <table id="myTable" class="display text-sm text-center"
                        style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr
                                class="bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900 bg-opacity-100 text-white text-sm">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>CO<sub>2</sub></th>
                                <th>NO<sub>2</sub></th>
                                <th>CO</th>
                                <th>Benzene</th>
                                <th>Toluene</th>
                                <th>PM2.5</th>
                                <th>Temperature</th>
                                <th>Humidity</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('data') }}",
                responsive: true,
                columns: [{
                        data: "id",
                        name: "id"
                    },
                    {
                        data: "tanggal",
                        name: "tanggal"
                    },
                    {
                        data: "co2",
                        name: "co2"
                    },
                    {
                        data: "no2",
                        name: "no2"
                    },
                    {
                        data: "co",
                        name: "co"
                    },
                    {
                        data: "benzene",
                        name: "benzene"
                    },
                    {
                        data: "toluene",
                        name: "toluene"
                    },
                    {
                        data: "pm25",
                        name: "pm25"
                    },
                    {
                        data: "temperature",
                        name: "temperature"
                    },
                    {
                        data: "humidity",
                        name: "humidity"
                    },
                ],
            });
        });
    </script>
@endsection
