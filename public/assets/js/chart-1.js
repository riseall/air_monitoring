function fetchData(parameter1) {
    console.log("Fetching data for parameter:", parameter1);
    $.ajax({
        url: chart1,
        method: "GET",
        data: { parameter1: parameter1 },
        success: function (data) {
            updateChart(data);
        },
        error: function (xhr, status, error) {
            console.error("Error fetching data:", error);
        },
    });
}

function updateChart(data) {
    var ctx = document.getElementById("chart-bars").getContext("2d");

    if (window.myBar instanceof Chart) {
        myBar.destroy();
    }

    window.myBar = new Chart(ctx, {
        type: "bar",
        data: {
            labels: data.labels,
            datasets: [
                {
                    label: data.parameter1,
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "#3A416F",
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
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 600,
                        beginAtZero: true,
                        padding: 15,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: "normal",
                            lineHeight: 2,
                        },
                        color: "#b2b9bf",
                    },
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: true,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: "normal",
                            lineHeight: 2,
                        },
                        color: "#b2b9bf",
                    },
                },
            },
        },
    });
}

$("#parameter1").change(function () {
    var parameter1 = $(this).val();
    fetchData(parameter1);
});

// Initial load
fetchData($("#parameter1").val());
