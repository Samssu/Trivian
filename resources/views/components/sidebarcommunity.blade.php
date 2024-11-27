<!-- SideBar Kanan Community -->
<section class="container d-flex mt-4" style="gap: 50px; ">
    <!-- Sidebar -->
    <section class="sidebar bg-white shadow-sm p-4"
        style="border-radius: 10px; width: 100%; max-width: 250px; min-height: 600px;">

        <!-- Create Community Button -->
        <section class="create-community mb-3">
            <a href="{{ route('create-community') }}" class="btn btn-primary w-100" style="border-radius: 10px;">
                + Create Community
            </a>
        </section>


        <!-- Category Section -->
        <section class="category-section mb-4">
            <h6 class="text-white bg-primary p-2 rounded" style="font-size: 14px;">Category</h6>
            <ul class="list-unstyled ms-2">
                <li><input type="checkbox" id="website" class="me-2"> <label for="website">Website</label></li>
                <li><input type="checkbox" id="tecnology" class="me-2"> <label for="tecnology">Technology</label></li>
                <li><input type="checkbox" id="mobiledev" class="me-2"> <label for="mobiledev">Mobile Developer</label>
                </li>
                <li><input type="checkbox" id="ai" class="me-2"> <label for="ai">Artificial Intelligence</label></li>
                <li><input type="checkbox" id="design" class="me-2"> <label for="design">Design</label></li>
                <li><input type="checkbox" id="business" class="me-2"> <label for="business">Business</label></li>
                <li><input type="checkbox" id="lifestyle" class="me-2"> <label for="lifestyle">Lifestyle</label></li>
                <li><input type="checkbox" id="communication" class="me-2"> <label
                        for="communication">Communication</label>
                </li>
                <li><input type="checkbox" id="game" class="me-2"> <label for="game">Game</label></li>
                <li><input type="checkbox" id="education" class="me-2"> <label for="education">Education</label></li>
                <li><input type="checkbox" id="sport" class="me-2"> <label for="sport">Sport</label></li>
                <li><input type="checkbox" id="music" class="me-2"> <label for="music">Music</label></li>
                <li><input type="checkbox" id="health" class="me-2"> <label for="health">Health</label></li>
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