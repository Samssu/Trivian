<!-- Overlay -->
<div id="overlay" style="
    display: none; 
    position: fixed; 
    top: 0; 
    left: 0; 
    width: 100%; 
    height: 100%; 
    background: rgba(0, 0, 0, 0.5); 
    z-index: 999;">
</div>

<!-- Card di Tengah -->
<div id="community-card" class="position-fixed bg-white shadow-lg rounded" 
    style="
        display: none; 
        width: 90%; 
        max-width: 600px; 
        max-height: 80%; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%);
        overflow-y: auto; 
        z-index: 1000;">
    <!-- Header Card -->
    <div class="d-flex justify-content-between align-items-center p-3 rounded-top" style="background-color: #2E2E66;">
        <h5 class="mb-0 fw-bold text-white w-100 text-center">Select Community</h5>
        <button id="close-card" class="btn text-white p-0" style="font-size: 1.5rem;">
            &times;
        </button>
    </div>

    <!-- List Komunitas -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex align-items-center">
            <a href="{{route('createpost_kolab')}}" class="d-flex align-items-center text-decoration-none text-dark w-100">
                <img src="{{url('images/uxid.png')}}" alt="Icon" class="rounded-circle me-3"
                    style="width: 40px; height: 40px; object-fit: cover;">
                <span class="fw-bold">UXID (UX Indonesia)</span>
            </a>
        </li>
    </ul>
</div>

<!-- Button Trigger -->
<a href="#" class="position-fixed d-flex align-items-center justify-content-center text-white" 
    style="
        width: 60px; 
        height: 60px; 
        bottom: 80px; 
        right: 40px; 
        background-color: #232E66; 
        border-radius: 50%; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); 
        text-decoration: none;
        z-index: 1000;"
    id="responsive-icon">
    <i class="bi bi-plus fs-3"></i>
</a>

<!-- Script -->
<script>
    const icon = document.getElementById('responsive-icon');
    const overlay = document.getElementById('overlay');
    const card = document.getElementById('community-card');
    const closeBtn = document.getElementById('close-card');

    // Tampilkan card dan overlay
    icon.addEventListener('click', function(event) {
        event.preventDefault();
        overlay.style.display = 'block';
        card.style.display = 'block';
    });

    // Sembunyikan card dan overlay
    closeBtn.addEventListener('click', function() {
        overlay.style.display = 'none';
        card.style.display = 'none';
    });

    // Klik overlay untuk menutup card
    overlay.addEventListener('click', function() {
        overlay.style.display = 'none';
        card.style.display = 'none';
    });
</script>

<!-- Bootstrap Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

<!-- Media Queries untuk Responsif -->
<style>
    /* Default: Desktop */
    #community-card {
        max-width: 600px;
    }

    /* Tablet */
    @media (max-width: 768px) {
        #community-card {
            width: 95%;
            max-height: 90%;
        }
    }

    /* Smartphone */
    @media (max-width: 576px) {
        #community-card {
            width: 100%;
            max-height: 95%;
        }
    }
</style>
