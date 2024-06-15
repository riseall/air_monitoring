// chart 2

$(document).ready(function () {
    function fetchData(parameter) {
        console.log("Fetching data for parameter:", parameter);
        $.ajax({
            url: chart2,
            method: "GET",
            data: { parameter: parameter },
            success: function (data) {
                updateChart(data);
            },
        });
    }

    function updateChart(data) {
        var ctx2 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
        gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); // purple colors

        if (window.myChart instanceof Chart) {
            myChart.destroy();
        }

        window.myChart = new Chart(ctx2, {
            type: "line",
            data: {
                labels: data.labels,
                datasets: [
                    {
                        label: data.parameter,
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: data.values,
                        maxBarThickness: 6,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                interaction: {
                    intersect: false,
                    mode: "index",
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: "#b2b9bf",
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                        },
                        beginAtZero: true,
                        // title: {
                        //     display: true,
                        //     text: data.parameter,
                        // },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            color: "#b2b9bf",
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                        },
                    },
                },
            },
        });
    }

    $("#parameter").change(function () {
        var parameter = $(this).val();
        fetchData(parameter);
    });

    // Initial load
    fetchData($("#parameter").val());
});
// end chart 2
