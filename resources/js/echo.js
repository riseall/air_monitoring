import Echo from "laravel-echo";

import Pusher from "pusher-js";
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "d3af0eeaaf6a48c2b9a9",
    cluster: "ap1",
    encrypted: true,
});

window.Echo.channel("sensor-data").listen("SensorDataUpdated", (e) => {
    console.log(e.sensorData);
    // Update UI dengan data sensor baru
});
