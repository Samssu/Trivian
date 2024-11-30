<!-- User Follow -->
<div class="d-flex align-items-center justify-content-between mb-3">
    <div class="d-flex align-items-center">
        <img src="/images/pasfoto5.jpg" alt="User" class="rounded-circle me-3"
            style="width: 50px; height: 50px; object-fit: cover;">
        <div>
            <h6 class="mb-0">
                <a href="#" class="text-dark text-decoration-none" style="font-size: 1.1rem;">hidaGrikeBoss</a>
            </h6>
            <small class="text-muted">@samssu</small>
        </div>
    </div>
    <button class="btn btn-sm rounded-pill"
        style="background-color: #003366; border-color: #003366; color: white; padding: 0.375rem 0.75rem;"
        onclick="toggleFollow(this)">+ Follow</button>
</div>

<!-- Script untuk toggle tombol Follow/Followed -->
<script>
function toggleFollow(button) {
    // Memeriksa apakah tombol sudah berstatus Followed
    if (button.innerText === '+ Follow') {
        button.innerText = 'Followed';
        button.style.backgroundColor = 'white';
        button.style.color = '#003366'; // Mengubah teks menjadi biru tua
        button.style.borderColor = '#003366'; // Menambahkan border biru tua
    } else {
        button.innerText = '+ Follow';
        button.style.backgroundColor = '#003366';
        button.style.color = 'white';
        button.style.borderColor = '#003366';
    }
}
</script>