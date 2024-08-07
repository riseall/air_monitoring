import $ from "jquery";
import "datatables.net";
import "datatables.net-dt/css/dataTables.dataTables.css"; // Pastikan path CSS benar

$(document).ready(function () {
    $("#myTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: datatables, // Gantilah dengan URL API yang benar
            type: "GET",
            dataSrc: function (json) {
                return json.data; // Sesuaikan dengan format respon API
            },
        },
        columns: [
            {
                data: null, // Kolom untuk nomor urut
                name: "id",
                render: function (data, type, row, meta) {
                    return meta.row + 1; // Menampilkan nomor urut berdasarkan indeks baris
                },
            },
            { data: "tanggal", name: "tanggal" },
            { data: "co2", name: "co2" },
            { data: "no2", name: "no2" },
            { data: "co", name: "co" },
            { data: "benzene", name: "benzene" },
            { data: "toluene", name: "toluene" },
            { data: "pm25", name: "pm25" },
            { data: "temperature", name: "temperature" },
            { data: "humidity", name: "humidity" },
        ],
        dom: '<"flex justify-between items-center"<"length-menu"l><"search"f>>t<"flex justify-between items-center"<"info"i><"pagination"p>>',
        language: {
            lengthMenu: "Show _MENU_ entries",
            search: "Search:",
            info: "Showing _START_ to _END_ of _TOTAL_ entries",
            paginate: {
                first: "First",
                last: "Last",
                next: "Next",
                previous: "Previous",
            },
        },
        drawCallback: function (settings) {
            var api = this.api();
            var startIndex = api.context[0]._iDisplayStart;

            api.column(0, { page: "current" })
                .nodes()
                .each(function (cell, i) {
                    cell.innerHTML = startIndex + i + 1;
                });
        },
    });
});
