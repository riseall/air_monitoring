import Echo from "laravel-echo";

import Pusher from "pusher-js";
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
    encrypted: true,
});

console.log(import.meta.env.VITE_PUSHER_APP_KEY);
console.log(import.meta.env.VITE_PUSHER_APP_CLUSTER);

window.Echo.channel("sensor-data").listen("SensorDataUpdated", (event) => {
    console.log("Data sensor diperbarui:", event.sensorData);
    // Lakukan refresh data di halaman atau perbarui state
    location.reload();
});
