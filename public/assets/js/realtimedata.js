$(document).ready(function () {
    setInterval(function () {
        $.ajax({
            url: dataBaruUrl,
            type: "GET",
            dataType: "json",
            success: function (response) {
                // Perbarui konten setiap elemen dengan data yang diterima
                $("#co2-data").html(
                    response.no2 +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</span>'
                );
                $("#no2-data").html(
                    response.no2 +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</span>'
                );
                $("#co-data").html(
                    response.co +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</span>'
                );
                $("#bzn-data").html(
                    response.co +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</span>'
                );
                $("#tln-data").html(
                    response.co +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500">ppm</span>'
                );
                $("#pm-data").html(
                    response.co +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500">ug/m<sup>3</sup></span>'
                );
                $("#tp-data").html(
                    response.co +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500"><sup>o</sup>C</span>'
                );
                $("#hm-data").html(
                    response.co +
                        '<span class="text-sm leading-normal font-weight-bolder text-lime-500">%</span>'
                );
                // Perbarui parameter lainnya sesuai kebutuhan
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            },
        });
    }, 5000); // Set interval waktu pengiriman permintaan dalam milidetik (misalnya, setiap 5 detik)
});
