// Menampilkan ikon loading
document.getElementById("loading-container").style.display = "block";

// Menyembunyikan ikon loading
document.getElementById("loading-container").style.display = "none";

setTimeout(function () {
    window.location.href = "/"; // Ganti dengan URL halaman lain
}, 60000);
