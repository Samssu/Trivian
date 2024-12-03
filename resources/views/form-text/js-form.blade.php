 <!-- Posts Section -->
 <div class="list-group mt-1" id="last">
     <!-- 1 Container Komentar -->
     <div class="list-group-item border-0 shadow-sm mb-3">
         <div class="d-flex align-items-start">
             <!-- Profile Picture -->
             <img src="/images/pasfoto5.jpg" alt="User" class="rounded-circle me-3"
                 style="width: 50px; height: 50px; object-fit: cover;">
             <div class="flex-grow-1">
                 <!-- Post Header -->
                 <div class="d-flex flex-column">
                     <div class="d-flex align-items-center">
                         <h6 class="fw-bold mb-0">
                             <a href="{{ route('profile') }}" class="text-decoration-none text-dark">
                                 Asep Ilhamsyah
                             </a>
                             <span class="text-muted ms-2">
                                 <a href="{{ route('profile') }}"
                                     class="text-decoration-none text-muted">@tengAsep02</a>
                             </span>
                         </h6>

                         <small class="text-muted ms-3">28 Nov</small>
                     </div>

                     <!-- Jam atau Riwayat Waktu -->
                     <small class="text-muted mt-1">9 hours ago</small>
                 </div>

                 <!-- Role  -->
                 <a href="#" class="btn"
                     style="font-size: 0.7rem; padding: 5px 10px; background-color: #A5B68D; color: white; border-radius: 50px; margin-top: 9px; text-decoration: none; opacity: 1; transition: opacity 0.3s; font-weight: bold;">
                     Javascipt
                 </a>

                 <!-- Post Content -->
                 <p class="mt-3 mb-1">
                     Halo teman-teman pecinta kucing,<br>
                     Saya ingin berbagi kabar tentang kucing terbaru yang membawa banyak keunikan

                 </p>


                 <!-- Link di bawah paragraf -->
                 <a href="https://KucingImpact.com">https://KucingImpact.com</a>


                 <!-- Container untuk grid gambar -->
                 <div class="image-container mt-3"
                     style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                     <!-- Gambar pertama -->
                     <a href="{{ route('view-post', ['id' => 1]) }}"
                         onclick="openImageFullscreen(event, '/images/fotoform.jpg')">
                         <img id="fullscreen-1" src="/images/fotoform.jpg" alt="Deskripsi Gambar 1"
                             class="img-fluid rounded" style="width: 100%; cursor: pointer;" />
                     </a>
                 </div>

                 <!-- Overlay untuk Fullscreen -->
                 <div id="image-overlay" class="image-overlay"
                     style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); z-index: 1000; justify-content: center; align-items: center;">
                     <img id="fullscreen-image" src="" alt="Fullscreen Image" class="img-fluid"
                         style="max-width: 90%; max-height: 90%; cursor: pointer;" onclick="closeFullscreen()" />
                 </div>


                 <!-- Overlay untuk Fullscreen -->
                 <div id="image-overlay" class="image-overlay"
                     style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); z-index: 1000; justify-content: center; align-items: center;">
                     <img id="fullscreen-image" src="" alt="Fullscreen Image" class="img-fluid"
                         style="max-width: 90%; max-height: 90%;" />
                     <button onclick="closeFullscreen()"
                         style="position: absolute; top: 20px; right: 20px; background: #fff; border: none; padding: 10px; cursor: pointer;">Close</button>
                 </div>



                 <!-- CSS untuk Overlay Fullscreen -->
                 <style>
                 .image-container {
                     display: grid;
                     grid-template-columns: repeat(2, 1fr);
                     gap: 10px;
                 }

                 .image-overlay {
                     display: flex;
                 }

                 .image-overlay {
                     position: fixed;
                     top: 0;
                     left: 0;
                     width: 100%;
                     height: 100%;
                     background-color: rgba(0, 0, 0, 0.7);
                     display: flex;
                     justify-content: center;
                     align-items: center;
                     z-index: 9999;
                     cursor: pointer;
                 }

                 .image-overlay img {
                     max-width: 90%;
                     max-height: 90%;
                     object-fit: contain;
                 }
                 </style>



                 <!-- Post Actions -->
                 <div class="d-flex gap-4 text-muted mt-3">
                     <!-- Comment Button -->
                     <a href="#" class="text-decoration-none comment-toggle">
                         <i class="bi bi-chat me-1"></i> <span class="comment-count">54</span>
                     </a>

                     <!-- Like Button -->
                     <a href="#" class="text-decoration-none like-button" data-likes="164">
                         <i class="bi bi-heart me-1"></i> <span class="like-count">164</span>
                     </a>

                     <!-- Share Button -->
                     <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>

                     <!-- Save Button -->
                     <a href="#" class="text-decoration-none save-button">
                         <i class="bi bi-bookmark me-1"></i>
                     </a>
                 </div>

                 <!-- Comments Section (Hidden by Default) -->
                 <div class="comments-section mt-3" style="display: none;">
                     <!-- Existing Comments -->
                     <div class="existing-comments">
                         <div class="d-flex align-items-start mb-3">
                             <img src="/images/mysql.png" alt="User" class="rounded-circle me-2"
                                 style="width: 40px; height: 40px; object-fit: cover;">
                             <div>
                                 <strong>Dayat bang</strong>
                                 <p class="mb-1">This is amazing! Thank you for sharing!</p>
                                 <!-- Post Actions -->
                                 <div class="d-flex gap-4 text-muted mt-3">
                                     <!-- Comment Button -->
                                     <a href="#" class="text-decoration-none comment-toggle">
                                         <i class="bi bi-chat me-1"></i> <span class="comment-count">54</span>
                                     </a>

                                     <!-- Like Button -->
                                     <a href="#" class="text-decoration-none like-button" data-likes="164">
                                         <i class="bi bi-heart me-1"></i> <span class="like-count">164</span>
                                     </a>

                                     <!-- Share Button -->
                                     <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>

                                     <!-- Save Button -->
                                     <a href="#" class="text-decoration-none save-button">
                                         <i class="bi bi-bookmark me-1"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>

                         <div class="d-flex align-items-start mb-3">
                             <img src="/images/kokomi.png" alt="User" class="rounded-circle me-2"
                                 style="width: 40px; height: 40px; object-fit: cover;">
                             <div>
                                 <strong>@Miaw Kopling</strong>
                                 <p class="mb-1">Laravel 10 is great! I love the new routing feature.</p>
                                 <!-- Post Actions -->
                                 <div class="d-flex gap-4 text-muted mt-3">
                                     <!-- Comment Button -->
                                     <a href="#" class="text-decoration-none comment-toggle">
                                         <i class="bi bi-chat me-1"></i> <span class="comment-count">54</span>
                                     </a>
                                     <!-- Like Button -->
                                     <a href="#" class="text-decoration-none like-button" data-likes="164">
                                         <i class="bi bi-heart me-1"></i> <span class="like-count">164</span>
                                     </a>
                                     <!-- Share Button -->
                                     <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>

                                     <!-- Save Button -->
                                     <a href="#" class="text-decoration-none save-button">
                                         <i class="bi bi-bookmark me-1"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>

                         <div class="d-flex align-items-start mb-3">
                             <img src="/images/kokomi.png" alt="User" class="rounded-circle me-2"
                                 style="width: 40px; height: 40px; object-fit: cover;">
                             <div>
                                 <strong>@Miaw Kopling</strong>
                                 <p class="mb-1">Laravel 10 is great! I love the new routing feature.</p>
                                 <!-- Post Actions -->
                                 <div class="d-flex gap-4 text-muted mt-3">
                                     <!-- Comment Button -->
                                     <a href="#" class="text-decoration-none comment-toggle">
                                         <i class="bi bi-chat me-1"></i> <span class="comment-count">54</span>
                                     </a>
                                     <!-- Like Button -->
                                     <a href="#" class="text-decoration-none like-button" data-likes="164">
                                         <i class="bi bi-heart me-1"></i> <span class="like-count">164</span>
                                     </a>
                                     <!-- Share Button -->
                                     <a href="#" class="text-decoration-none"><i class="bi bi-share me-1"></i></a>

                                     <!-- Save Button -->
                                     <a href="#" class="text-decoration-none save-button">
                                         <i class="bi bi-bookmark me-1"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- Add Comment -->
                     <div class="add-comment">
                         <textarea class="form-control mb-2" placeholder="Add a comment..." rows="2"></textarea>
                         <button class="btn btn-primary btn-sm">Post Comment</button>
                     </div>
                 </div>
             </div>
             <!-- Three Dots Button -->
             <div class="dropdown ms-3">
                 <button class="btn btn-link text-muted p-0" data-bs-toggle="dropdown">
                     <i class="bi bi-three-dots"></i>
                 </button>
                 <ul class="dropdown-menu dropdown-menu-end">
                     <li><a class="dropdown-item" href="#">Edit</a></li>
                     <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                 </ul>
             </div>
         </div>
     </div>
     <!-- batas Comentar -->


     <!-- Panggil file JS -->
     <script src="{{ asset('js/comentar.js') }}"></script>