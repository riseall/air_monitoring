// setup block for temperature
const ctxTemp = document.getElementById("myTemp").getContext("2d");
const gradientTemp = ctxTemp.createLinearGradient(0, 30, 70, 150);
gradientTemp.addColorStop(0, "#fad961");
gradientTemp.addColorStop(1, "#f76b1c");

const dataTemp = window.chartData.dataTemp;
const bgcTemp = [gradientTemp, "rgba(255, 99, 132, 0.2)"];
const dataT = {
    datasets: [
        {
            data: dataTemp,
            backgroundColor: bgcTemp,
            borderWidth: 0,
            cutout: "87%",
        },
    ],
};

// setup block for humidity
const ctxHumi = document.getElementById("myHumi").getContext("2d");
const gradientHumi = ctxHumi.createLinearGradient(0, 30, 70, 30);
gradientHumi.addColorStop(0, "#7922e5");
gradientHumi.addColorStop(1, "#1579ff");

const dataHumi = window.chartData.dataHumi;
const bgcHumi = [gradientHumi, "rgba(54, 162, 235, 0.2)"];
const dataH = {
    datasets: [
        {
            data: dataHumi,
            backgroundColor: bgcHumi,
            borderWidth: 0,
            cutout: "87%",
        },
    ],
};

// counter plugin block
const counter = {
    id: "counter",
    beforeDraw(chart, args, options) {
        const {
            ctx,
            chartArea: { width, height },
        } = chart;
        ctx.save();
        ctx.font = options.fontSize + "px " + options.fontFamily;
        ctx.textAlign = "center";
        ctx.fillStyle = options.fontColor;
        ctx.fillText(
            chart.config.data.datasets[0].data[0] + options.unit,
            width / 2,
            height / 2 + options.fontSize * 0.34
        );
    },
};

// config block for temperature
const configTemp = {
    type: "doughnut",
    data: dataT,
    options: {
        plugins: {
            legend: {
                display: false,
            },
            tooltip: {
                enabled: false,
            },
            counter: {
                fontColor: gradientTemp,
                fontSize: 15,
                fontFamily: "serif",
                unit: "°C",
            },
        },
    },
    plugins: [counter],
};

// config block for humidity
const configHumi = {
    type: "doughnut",
    data: dataH,
    options: {
        plugins: {
            legend: {
                display: false,
            },
            tooltip: {
                enabled: false,
            },
            counter: {
                fontColor: gradientHumi,
                fontSize: 15,
                fontFamily: "serif",
                unit: "%",
            },
        },
    },
    plugins: [counter],
};

// render init block for temperature
const myTemp = new Chart(document.getElementById("myTemp"), configTemp);

// render init block for humidity
const myHumi = new Chart(document.getElementById("myHumi"), configHumi);
