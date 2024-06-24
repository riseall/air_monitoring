document.addEventListener("DOMContentLoaded", function () {
    // Memeriksa local storage saat halaman dimuat
    const activeAnchor = localStorage.getItem("activeAnchor");
    const activeDiv = localStorage.getItem("activeDiv");

    if (activeAnchor) {
        // Menambahkan kelas 'act' pada anchor yang tersimpan di local storage
        document.querySelectorAll("a.group").forEach((anchor) => {
            if (anchor.getAttribute("href") === activeAnchor) {
                anchor.classList.add("act");
                const divChild = anchor.querySelector("div");
                if (divChild) {
                    divChild.classList.add("acti");
                    const iChild = divChild.querySelector("i");
                    if (iChild) {
                        iChild.style.color = "white";
                    }
                }
            }
        });
    }

    // Menangani klik pada anchor
    document.querySelectorAll("a.group").forEach((anchor) => {
        anchor.addEventListener("click", function (event) {
            // Menghapus kelas 'act' dari semua anchor
            document
                .querySelectorAll("a.group")
                .forEach((a) => a.classList.remove("act"));
            // Menghapus kelas 'acti' dari semua div dalam anchor
            document
                .querySelectorAll("a.group div")
                .forEach((div) => div.classList.remove("acti"));
            // Mengembalikan warna teks semua tag i dalam tag div ke warna slate-700
            document
                .querySelectorAll("a.group div i")
                .forEach((i) => (i.style.color = "rgb(51 65 85)"));

            // Menambahkan kelas 'act' pada anchor yang diklik
            this.classList.add("act");
            // Menambahkan kelas 'acti' pada div anak pertama dari anchor yang diklik
            const divChild = this.querySelector("div");
            if (divChild) {
                divChild.classList.add("acti");
                // Mengubah warna teks pada elemen i dalam div tersebut menjadi putih
                const iChild = divChild.querySelector("i");
                if (iChild) {
                    iChild.style.color = "white";
                }
            }

            // Menyimpan href anchor yang aktif ke dalam local storage
            localStorage.setItem("activeAnchor", this.getAttribute("href"));

            // Setelah selesai memproses, navigasi ke halaman baru
            setTimeout(function () {
                window.location.href = anchor.getAttribute("href");
            }, 100); // menunda 100 milidetik
        });
    });
});
