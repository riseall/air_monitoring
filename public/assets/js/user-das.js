// setup block for temperature
const dataTemp = window.chartData.dataTemp;
const bgcTemp = ["rgb(210, 100, 154)", "rgb(202, 230, 178)"];
const dataT = {
    datasets: [
        {
            data: dataTemp,
            backgroundColor: bgcTemp,
            borderWidth: 1,
            cutout: "70%",
        },
    ],
};

// setup block for humidity
const dataHumi = window.chartData.dataHumi;
const bgcHumi = ["rgb(98, 149, 162)", "rgb(202, 230, 178)"];
const dataH = {
    datasets: [
        {
            data: dataHumi,
            backgroundColor: bgcHumi,
            borderWidth: 1,
            cutout: "70%",
        },
    ],
};

// counter plugin block
const counter = {
    id: "counter",
    beforeDraw(chart, args, options) {
        const {
            ctx,
            chartArea: { top, right, bottom, left, width, height },
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
                fontColor: bgcTemp[0],
                fontSize: 17,
                fontFamily: "mono",
                unit: " °C",
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
                fontColor: bgcHumi[0],
                fontSize: 17,
                fontFamily: "mono",
                unit: " %",
            },
        },
    },
    plugins: [counter],
};

// render init block for temperature
const myTemp = new Chart(document.getElementById("myTemp"), configTemp);

// render init block for humidity
const myHumi = new Chart(document.getElementById("myHumi"), configHumi);
