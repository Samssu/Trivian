function openFullscreen(event) {
    event.preventDefault(); // Mencegah link default (redirect)

    const img = event.target; // Mendapatkan gambar yang diklik
    const overlay = document.getElementById("fullscreen-overlay");
    const fullscreenImage = document.getElementById("fullscreen-image");

    // Set gambar fullscreen sesuai gambar yang diklik
    fullscreenImage.src = img.src;
    fullscreenImage.style.maxWidth = "100%";
    fullscreenImage.style.maxHeight = "100%";

    // Tampilkan overlay dan gambar
    overlay.style.display = "flex";
}

function closeFullscreen() {
    const overlay = document.getElementById("fullscreen-overlay");
    overlay.style.display = "none"; // Menyembunyikan overlay ketika diklik
}
