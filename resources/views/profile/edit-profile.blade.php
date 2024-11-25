@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Edit Profile Card -->
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <!-- Title -->
            <h5 class="card-title text-center mb-4">
                <i class="bi bi-arrow-left me-2"></i> Edit Profile
            </h5>

            <!-- Profile Image Section -->
            <div class="text-center mb-4">
                <div class="position-relative d-inline-block">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x d-flex gap-2">
                        <button class="btn btn-light btn-sm shadow-sm" title="Edit Photo"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger btn-sm shadow-sm" title="Delete Photo"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="Annisa Isnaini Tsaniya" required>
                    <small class="form-text text-muted">Your name can only be changed once every 1 month.</small>
                </div>

                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="@annisaisn" required>
                    <small class="form-text text-muted">Username can contain only letters, numbers, underscores, and periods.</small>
                </div>

                <!-- Bio -->
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" id="bio" name="bio" rows="2" maxlength="80">— take the risk or lose the chance.</textarea>
                    <small class="form-text text-muted text-end d-block">35/80</small>
                </div>

                <!-- Location -->
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <select id="location" name="location" class="form-select">
                        <option selected>Bandung, West Java</option>
                        <option>Jakarta</option>
                        <option>Surabaya</option>
                        <option>Yogyakarta</option>
                    </select>
                </div>

                <!-- Interest -->
                <div class="mb-3">
                    <label for="interest" class="form-label">Interest</label>
                    <div class="d-flex flex-wrap gap-2 mb-2">
                        <span class="badge bg-primary">Technology</span>
                        <span class="badge bg-primary">Website</span>
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="bi bi-plus"></i> Add Interest</button>
                </div>

                <!-- Link -->
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" value="linkedin.com/in/annisaisnaini/" required>
                    <button type="button" class="btn btn-outline-primary btn-sm mt-2"><i class="bi bi-plus"></i> Add Link</button>
                </div>

                <!-- Save Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4" style="border-radius: 10px;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
