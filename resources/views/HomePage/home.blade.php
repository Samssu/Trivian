@extends('layouts.app')

@section('content')
    @include('partials.navbar2')
    @include('components.sidebarhome')
     
    <section class="col-md-8 col-lg-9 position-relative" style="margin: 20px 20px;">
        <div class="d-flex flex-column" style="height: 100%; padding: 20px; overflow-y: auto; ">

            <!-- Form untuk create post -->
            @include('form-text.input-field')


            <!-- Menampilkan Postingan -->

            
            {{-- @include('form-text.ui-form') --}}
            @include('form-text.ui-form-colab')

        </div>
        
    </section>


@include('kolab.icon_create')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
