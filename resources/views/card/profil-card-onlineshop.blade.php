  <link href="{{ asset('css/card-gallery.css') }}" rel="stylesheet">

  <!-- Card 1 -->
  <section class="col">
      <div class="card shadow-sm h-100">
          <img src="/images/images (5) (1).jpeg" class="card-img-top p-3" alt="Online Shop">
          <div class="card-body">
              <h5 class="card-title mb-1">Online Shop</h5>
              <p class="card-text text-muted mb-1">
                Want to learn about running your own online shop? Join the leading-edge E-commerce User Group.
              </p>
              <!-- Like and View Icons -->
              <div class="d-flex align-items-center gap-3">
                  <!-- Like Icon -->
                  <div class="d-flex align-items-center gap-1 like-container" style="cursor: pointer;">
                      <i class="bi bi-heart" id="like-icon" style="font-size: 1.2rem;"></i>
                      <span id="like-count">0</span>
                  </div>
                  <!-- View Icon -->
                  <div class="d-flex align-items-center view-container">
                      <i class="bi bi-eye" id="view-icon" style="font-size: 1.2rem;"></i>
                      <span id="view-count">123</span>
                  </div>

              </div>
              <!-- Button -->
              <a href="{{ route('profile-gallery-onlineshop') }}" class="btn btn-primary btn-sm w-100 mt-2">See
                  Project</a>
          </div>


          <div class="card-footer bg-white d-flex justify-content-center gap-3">
              <a href="https://facebook.com" target="_blank" class="text-primary">
                  <i class="bi bi-facebook fs-5"></i>
              </a>
              <a href="https://instagram.com" target="_blank" class="text-danger">
                  <i class="bi bi-instagram fs-5"></i>
              </a>
              <a href="https://twitter.com" target="_blank" class="text-info">
                  <i class="bi bi-twitter fs-5"></i>
              </a>
          </div>
      </div>
  </section>
  <!-- Panggil file JS -->
  <script src="{{ asset('js/cardgallery.js') }}"></script>

  <script>

  </script>