@extends('frontend.layouts')

@section('content')
<div class="container-fluid p-0" style="background-image: url('{{ asset('assets/images/lifestyle.jpeg') }}'); background-size: cover; background-position: center; height: 100vh;">
    <div class="row justify-content-center align-items-center text-center h-100" style="background-color: rgba(255, 255, 255, 0.8);">
        <div class="col-md-6">
            <div class="position-relative">
                <img src="{{ asset('assets/images/lifestyle.jpeg') }}" class="img-fluid rounded-circle mb-4" style="width: 300px; height: 300px; object-fit: cover; position: relative; z-index: 2;" alt="Lifestyle"> <!-- Gambar lingkaran -->
            </div>
            <h5 class="text-muted">111 ENTRIES IN</h5>
            <h1 class="fw-bold">Lifestyle</h1>
            <p class="lead">Dive into the world of lifestyle with our comprehensive feature that goes beyond mere news to provide insightful and beneficial content for everyone. Explore topics ranging from relationships and travel to culinary delights and wellness.</p>
        </div>
    </div>
</div>
@endsection
