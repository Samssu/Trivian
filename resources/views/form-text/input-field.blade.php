 <!-- Content Area -->
 <div class="container">
     <!-- Input for New Post -->
     <div class="card shadow-sm mb-4" style="border-radius: 20px;">
         <div class="card-body">
             <div class="d-flex flex-wrap align-items-center">
                 <!-- User Profile -->
                 <div class="me-3 mb-3 mb-md-0">
                     <img src="/images/kokomi.png" alt="User Avatar" class="rounded-circle"
                         style="width: 50px; height: 50px; object-fit: cover;">
                 </div>

                 <!-- Input Form -->
                 <div class="flex-grow-1">
                     <textarea class="form-control" id="postTextarea" placeholder="Let's share what's on your mind..."
                         rows="1" style="border-radius: 20px;"></textarea>
                     <!-- Toolbar for formatting (hidden by default) -->
                     <div id="toolbar" class="mt-2 d-none">
                         <div class="d-flex justify-content-between align-items-center">
                             <!-- Formatting Tools -->
                             <div class="d-flex gap-2">
                                 <button class="btn btn-sm btn-outline-secondary" onclick="formatText('bold')">
                                     <i class="bi bi-type-bold"></i>
                                 </button>
                                 <button class="btn btn-sm btn-outline-secondary" onclick="formatText('italic')">
                                     <i class="bi bi-type-italic"></i>
                                 </button>
                                 <button class="btn btn-sm btn-outline-secondary" onclick="formatText('underline')">
                                     <i class="bi bi-type-underline"></i>
                                 </button>
                                 <select class="form-select form-select-sm w-auto" onchange="setFontSize(this.value)">
                                     <option value="14px">Small</option>
                                     <option value="16px" selected>Normal</option>
                                     <option value="20px">Large</option>
                                 </select>
                                 <label class="btn btn-sm btn-outline-secondary">
                                     <i class="bi bi-image"></i>
                                     <input type="file" accept="image/*" style="display: none;" id="uploadImage">
                                 </label>
                                 <!-- Input for Link -->
                                 <input type="text" class="form-control form-control-sm" id="linkInput"
                                     placeholder="Enter URL" aria-label="Link">
                                 <button class="btn btn-sm btn-outline-secondary" onclick="insertLink()">
                                     <i class="bi bi-link-45deg"></i>
                                 </button>
                             </div>

                             <!-- Cancel Button -->
                             <button class="btn btn-sm btn-outline-danger" onclick="cancelEdit()">
                                 <i class="bi bi-x-circle"></i>
                             </button>
                         </div>
                     </div>

                 </div>

                 <!-- Post Button -->
                 <div class="ms-3 mt-3 mt-md-0">
                     <button class="btn btn-primary w-100 w-md-auto"
                         style="border-radius: 20px; background-color: #2E2E66; border-color: #2E2E66">
                         Create Post
                     </button>
                 </div>
             </div>
         </div>
     </div>

     <!-- Panggil Js input Field -->
     <script src="{{ asset('js/input-field.js') }}"></script>