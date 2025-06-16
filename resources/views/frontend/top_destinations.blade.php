@extends('frontend.layouts')

@section('content')
<div class="container-fluid p-0">
    <img src="{{ asset('assets/images/headertopdes.png') }}" class="img-fluid w-100" alt="Top Destinations Header">
</div>

<div class="container-fluid bg-light" style="margin-top: -20px; position: sticky; top: 0; z-index: 1030;"> <!-- Menambahkan posisi sticky agar navbar tetap mengambang saat scroll -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Top Destination</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#dealsNavbar"
                aria-controls="dealsNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="dealsNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kuliner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Penginapan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container mt-5">
    <div class="row mt-5">
        <h3 class="text-center mb-4">Top Destinations</h3>
        @foreach($travelinkPackages as $package)
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <img src="{{ Storage::url($package->images[0] ?? 'default.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $package->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $package->name }}</h5>
                    <p class="card-text">Region: {{ $package->region }}</p>
                    <a href="#" class="btn btn-primary">Explore</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
