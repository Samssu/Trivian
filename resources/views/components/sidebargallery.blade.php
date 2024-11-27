<!-- SideBar Kanan Community -->
<section class="container d-flex mt-4" style="gap: 50px;">
    <!-- Sidebar -->
    <section class="sidebar bg-white shadow-sm p-4"
        style="border-radius: 10px; width: 100%; max-width: 250px; min-height: 600px;">

        <!-- Create gallery Button -->
        <section class="create-community mb-3">
            <a href="{{route('create-gallery')}}" class="btn btn-primary w-100" style="border-radius: 10px;">
                + Create Project
            </a>
        </section>

        <!-- Category Section -->
        <section class="category-section mb-4">
            <h6 class="text-white bg-primary p-2 rounded" style="font-size: 14px;">Category</h6>
            <ul class="list-unstyled ms-2">
                <li><input type="checkbox" id="category1" class="me-2"> <label for="category1">Website</label></li>
                <li><input type="checkbox" id="category2" class="me-2"> <label for="category2">Technology</label></li>
                <li><input type="checkbox" id="category3" class="me-2"> <label for="category3">Mobile Developer</label>
                </li>
                <li><input type="checkbox" id="category4" class="me-2"> <label for="category4">Artificial
                        Intelligence</label></li>
                <li><input type="checkbox" id="category5" class="me-2"> <label for="category5">Design</label></li>
                <li><input type="checkbox" id="category6" class="me-2"> <label for="category6">Business</label></li>
                <li><input type="checkbox" id="category7" class="me-2"> <label for="category7">Lifestyle</label></li>
                <li><input type="checkbox" id="category8" class="me-2"> <label for="category8">Communication</label>
                </li>
                <li><input type="checkbox" id="category9" class="me-2"> <label for="category9">Game</label></li>
                <li><input type="checkbox" id="category10" class="me-2"> <label for="category10">Education</label></li>
                <li><input type="checkbox" id="category11" class="me-2"> <label for="category11">Sport</label></li>
                <li><input type="checkbox" id="category12" class="me-2"> <label for="category12">Music</label></li>
                <li><input type="checkbox" id="category13" class="me-2"> <label for="category13">Health</label></li>
            </ul>
        </section>

        <!-- Filter Section -->
        <section class="filter-section">
            <h6 class="text-white bg-primary p-2 rounded" style="font-size: 14px;">Filter</h6>
            <!-- Location Filter -->
            <div class="mb-3">
                <label for="location" class="form-label" style="font-size: 14px;">Location</label>
                <select id="location" class="form-select" style="border-radius: 10px;">
                    <option selected>Select City</option>
                    <option value="1">New York</option>
                    <option value="2">Los Angeles</option>
                    <option value="3">Chicago</option>
                </select>
            </div>

            <!-- Sort By Filter -->
            <div>
                <label for="sortBy" class="form-label" style="font-size: 14px;">Sort by</label>
                <select id="sortBy" class="form-select" style="border-radius: 10px;">
                    <option selected>Sort by</option>
                    <option value="1">Newest</option>
                    <option value="2">Popular</option>
                    <option value="3">Oldest</option>
                </select>
            </div>
        </section>
    </section>

    <style>
    @media (max-width: 768px) {

        /* Perkecil ukuran sidebar pada layar ponsel */
        .sidebar {
            width: 50%;
            /* Sidebar menempati 80% dari lebar layar */
            max-width: 200px;
            /* Batasi lebar maksimal sidebar */
            min-height: auto;
            /* Tinggi otomatis di ponsel */
            margin: 0 auto;
            /* Pusatkan sidebar jika diperlukan */
        }

        /* Tambahkan padding untuk jarak yang nyaman */
        .sidebar {
            padding: 10px;
        }

        /* Jarak antara elemen container tetap fleksibel */
        .container.d-flex {
            gap: 20px;
            /* Kurangi jarak antar elemen */
        }
    }
    </style>