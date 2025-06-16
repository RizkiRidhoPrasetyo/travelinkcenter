@extends('frontend.layouts')

@section('content')

    <div class="container-fluid mt-0 mb-5" style="background-color: #f8f9fa; height: auto;">
        <div class="row align-items-center" style="height: 100%;">
            <div class="col-md-6 text-start">
                <h1 class="card-title card-title-hero" style="font-size: 60px; font-weight: semi bold; text-align: left;">Enjoy the thrill of a
                    <span style="font-family: 'Covered By Your Grace', cursive; color: yellow;">Vacation</span> with many offers from us
                </h1>
                <p class="card-text" style="text-align: left;">Register with us in the following form to enjoy more services</p>
                <a href="#" class="btn" style="background-color: #2D2766; color: white; text-align: left; display: inline-block;" data-bs-toggle="modal" data-bs-target="#membershipModal">Join Membership</a>
                <a href="#" class="btn" style="background-color: #2D2766; color: white; text-align: left; display: inline-block;" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/header1.png') }}" class="img-fluid"
                    style="max-width: 100%; height: auto; object-fit: cover;" alt="...">
            </div>
        </div>
    </div>

    @auth
    <div class="container-fluid bg-light" style="margin-top: -20px; position: sticky; top: 0; z-index: 1030;"> <!-- Menambahkan posisi sticky agar navbar tetap mengambang saat scroll -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">Travelink Club</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#clubNavbar"
                    aria-controls="clubNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="clubNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('benefits') }}">Benefits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @endauth

    <div class="container mt-5">
        <div class="row mt-5">
            <h3 class="text-center mb-4">Current Offer</h3>
            @foreach($travelinkPackages as $package)
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ Storage::url($package->images[0] ?? 'default.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $package->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $package->name }}</h5>
                        <p class="card-text">Region: {{ $package->region }}</p>
                        <p class="card-text">Promo Price: {{ $package->promo_price }}</p>
                        
                        <div class="actions">
                            <button class="btn btn-like" data-id="{{ $package->id }}">
                                <i class="bi bi-hand-thumbs-up"></i> Like
                            </button>
                            <button class="btn btn-comment" data-id="{{ $package->id }}">
                                <i class="bi bi-chat"></i> Comment
                            </button>
                            <button class="btn btn-rate" data-id="{{ $package->id }}">
                                <i class="bi bi-star"></i> Rate
                            </button>
                        </div>
                        <a href="{{ route('top-destinations') }}" class="btn btn-primary mt-2">Explore</a> <!-- Button untuk Explore -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <h3 class="text-center mb-4">Promo that will expire</h3>
            <div class="col-lg-4">
                <div class="card border-0 mb-3">
                    <a href="single-blog.html" style="color: #111;text-decoration: none">
                        <img src="assets/images/b1.jpg" style="height: 500px;object-fit: cover;" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Wisata Populer Indonesia</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 mb-3">
                    <a href="single-blog.html" style="color: #111;text-decoration: none">
                        <img src="assets/images/b2.jpg" style="height: 500px;object-fit: cover;" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Wisata Populer Indonesia</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 mb-3">
                    <a href="single-blog.html" style="color: #111;text-decoration: none">
                        <img src="assets/images/b3.jpg" style="height: 500px;object-fit: cover;" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Wisata Populer Indonesia</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5" style="margin-top: 50px;"> <!-- Menambahkan margin-top untuk menurunkan posisi -->
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/images/TravelinkCenter.png') }}" alt="Travelink Center Logo" style="max-width: 350px;"> <!-- Memperbesar ukuran logo -->
                </div>
                <h2 class="fw-bold">Travelink Club Benefits</h2>
                <p style="text-align: justify;">Sebagai anggota Travelink Club, Anda akan secara otomatis memenuhi syarat untuk mengakses penawaran eksklusif yang dirancang khusus untuk Anda. Terus kembali dan akses website kami secara teratur untuk mencari tahu apa yang baru bagi anggota klub kami, dan segera bertindak cepat untuk memanfaatkan penawaran yang sangat istimewa ini.</p>
                <a href="#" class="btn" style="background-color: #2D2766; color: white; text-align: left; display: inline-block;" data-bs-toggle="modal" data-bs-target="#membershipModal">Join Membership</a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="assets/images/socialmediacoveradge.png" alt="Social media Coverage" class="mb-3">
                        <h5>Social media Coverage</h5>
                        <p>Our advanced spyware detection engine can identify if a device contains spyware or bugging software.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="assets/images/partnermitraluas.png" alt="Partner mitra luas" class="mb-3">
                        <h5>Partner mitra luas</h5>
                        <p>Find malicious keyboards installed on your device that could allow someone to record things you type (e.g. passwords).</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="assets/images/lokasikantorstrategis.png" alt="Lokasi kantor strategis" class="mb-3">
                        <h5>Lokasi kantor strategis</h5>
                        <p>Check which apps can access your location, microphone or camera. Get alerted if a known tracking app is installed.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4 text-center">
                        <img src="assets/images/responsif.png" alt="Responsif" class="mb-3">
                        <h5>Responsif</h5>
                        <p>Analyze your operating system for signs of tampering that could compromise security, such as jailbreaking.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="assets/images/opentothepublic.png" alt="Open to the public" class="mb-3">
                        <h5>Open to the public</h5>
                        <p>Our intelligent system will either safely remove threats for you or provide easy-to-follow instructions.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="assets/images/mediaterpercaya.png" alt="Media terpercaya" class="mb-3">
                        <h5>Media terpercaya</h5>
                        <p>We create easy-to-use apps that check your device for vulnerabilities in a matter of minutes.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-5" style="background-image: url('{{ asset('assets/images/tempodulu.jpg') }}'); background-size: cover; background-position: center; height: 500px; position: relative; padding: 0; margin: 0;"> <!-- Menghilangkan ruang kosong di sisi kanan dan kiri -->
            <div class="position-absolute w-100 h-100" style="top: 0; left: 0; z-index: 1; background-color: rgba(0, 0, 0, 0.5);"></div> <!-- Overlay hitam transparan -->
            <div class="row align-items-center h-100" style="position: relative; z-index: 2;">
                <div class="col text-center">
                    <h1 class="text-white fw-bold" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">FREQUENTLY ASKED QUESTIONS</h1>
                    <p class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">
                        Welcome to the travelinkcenter FAQ page, where we answer<br>
                        frequently asked questions by our customers. We want to ensure<br>
                        that your travel experience with us is as simple as possible.
                    </p>
                    <a href="#" class="btn btn-success rounded-pill px-4 shadow" style="background-color: #0BC71A; color: black;">contact number <i class="bi bi-telephone"></i></a>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.partials.popup')
    @include('frontend.partials.login_popup')
@endsection