document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll(".sidebar a");
    const breadcrumbCurrentPage = document.getElementById("current-page");
    const titlePage = document.getElementById("title-page");

    // Memeriksa local storage saat halaman dimuat
    const storedBreadcrumbText = localStorage.getItem("breadcrumbText");
    if (storedBreadcrumbText) {
        breadcrumbCurrentPage.textContent = storedBreadcrumbText;
        titlePage.textContent = storedBreadcrumbText;
    }

    sidebarLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            // Mengambil teks dari data-page attribute
            let clickedPage = this.getAttribute("data-page");

            // Memperbarui teks pada breadcrumb
            breadcrumbCurrentPage.textContent = clickedPage;
            titlePage.textContent = clickedPage;

            // Menyimpan teks pada breadcrumb ke dalam local storage
            localStorage.setItem("breadcrumbText", clickedPage);
        });
    });
});
