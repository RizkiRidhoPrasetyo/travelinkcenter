@extends('frontend.layouts')

@section('content')
<div class="container-fluid" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%); min-height: 80vh; padding-top: 0;">
    <!-- Hero Section -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center align-items-center text-center" style="background-image: url('{{ asset('assets/images/malang-hero.jpg') }}'); background-size: cover; background-position: center; height: 500px; position: relative;">
                    <div class="col-12 text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2;">
                        <h1 class="display-4 fw-bold" style="color: white; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Explore Malang</h1>
                        <p class="lead" style="color: white; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">Discover Malang's best destinations.</p>
                        <a href="{{ url('/Paket-travel') }}" class="btn btn-lg rounded-pill px-4 shadow" style="background-color: #ffc107; color: black;">Temukan Sekarang</a>
                    </div>
                    <div class="position-absolute w-100 h-100" style="top: 0; left: 0; z-index: 1;">
                        <img src="{{ asset('assets/images/malanghub.jpg') }}" alt="Malang Icon" class="img-fluid w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center align-items-center text-center" style="background-image: url('{{ asset('assets/images/travelclub.jpg') }}'); background-size: cover; background-position: center; height: 500px; position: relative;">
                    <div class="col-12 text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2;">
                        <h1 class="display-4 fw-bold" style="color: white; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Travelink Club</h1>
                        <p class="lead" style="color: white; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">Gabung bersama kami untuk mendapatkan jutaan promo lainnya</p>
                        <a href="{{ url('/travelinkclub') }}" class="btn btn-lg rounded-pill px-4 shadow" style="background-color: #ffc107; color: black;">Gabung Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Buttons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="background-color: transparent; width: auto; height: auto; display: flex; align-items: center; justify-content: center; position: absolute; top: 50%; transform: translateY(-50%); left: 10px;">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 40px; height: 40px; stroke-width: 3;"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="background-color: transparent; width: auto; height: auto; display: flex; align-items: center; justify-content: center; position: absolute; top: 50%; transform: translateY(-50%); right: 10px;">
            <span class="carousel-control-next-icon" aria-hidden="true" style="width: 40px; height: 40px; stroke-width: 3;"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Highlight Section -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">Paket Wisata</h2>
        <div class="row g-4 my-2">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/bromo.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Perjalanan Jawa</h5>
                        <p class="card-text">Jelajahi keindahan Gunung Bromo dan sekitarnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/podcast.jpeg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Kumpul Perusahaan</h5>
                        <p class="card-text">Cocok untuk kegiatan team-building dan acara perusahaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/edukasi.jpeg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Wisata Edukasi</h5>
                        <p class="card-text">Belajar dan menjelajah dengan tur edukasi di Malang.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/penginapan.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Penginapan</h5>
                        <p class="card-text">Berbagai rekomendasi tempat penginapan untuk anda.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- frame 2 -->
    <div class="row justify-content-center align-items-center py-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('assets/images/TravelinkCenter.png') }}" alt="Travelink Club Logo" class="img-fluid mb-4" style="max-height: 150px;">
        </div>
        <div class="col-md-8">
            <p class="fs-5 text-muted">Malang, sebuah kota yang terletak di dataran tinggi Jawa Timur, dikenal dengan udara sejuknya, pemandangan alam yang memukau, dan kekayaan budaya yang memikat. Kota ini menjadi destinasi favorit bagi wisatawan yang mencari ketenangan sekaligus petualangan.</p>
            <p class="fs-5 text-muted">Dari keindahan Gunung Bromo yang megah hingga pesona air terjun Coban Rondo yang menenangkan, Malang menawarkan pengalaman wisata yang tak terlupakan. Ditambah dengan taman hiburan seperti Jatim Park, kota ini menjadi tempat yang sempurna untuk keluarga, pasangan, maupun solo traveler.</p>
            <p class="fs-5 text-muted">Travelink Center hadir sebagai mitra perjalanan terbaik Anda di Malang. Dengan pengalaman bertahun-tahun, kami siap membantu Anda menjelajahi keindahan Malang dengan layanan yang profesional dan ramah. Percayakan perjalanan Anda kepada kami, dan nikmati liburan yang penuh kesan dan kepuasan.</p>
        </div>
    </div>

    <!-- Top Deals Section -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">Top Deals</h2>
        <div class="row g-4">
            @foreach($topDeals as $deal)
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ Storage::url($deal->images[0] ?? 'default.jpg') }}" alt="{{ $deal->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $deal->name }}</h5>
                        <p class="card-text">Promo Price: {{ $deal->promo_price }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Top Destinations Section -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">Top Destinations</h2>
        <div class="row g-4">
            @foreach($topDestinations as $destination)
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ Storage::url($destination->images[0] ?? 'default.jpg') }}" alt="{{ $destination->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="card-text">Region: {{ $destination->region }}</p>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>

    <!-- Custom Project Card Section -->
    <div class="row justify-content-center align-items-center py-5">
        <!-- Wide Card -->
        <div class="col-12 mb-4">
            <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
                <div class="card-img-top" style="background-image: url('{{ asset('assets/images/labuan-bajo.jpg') }}'); background-size: cover; background-position: center; height: 300px;"></div>
                <div class="card-body text-center" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                    <h5 class="card-title fw-bold">Project A</h5>
                    <p class="card-text text-muted">Dokumentasi trip labuan bajo</p>
                    <a href="#" class="btn btn-warning rounded-pill px-4">View Details</a>
                </div>
            </div>
        </div>

        <!-- Large Card -->
        <div class="col-md-7 mb-4"> <!-- Increased width to 7 columns -->
            <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;"> <!-- Ensured consistent border-radius -->
                <div class="card-img-top" style="background-image: url('{{ asset('assets/images/podcastmerah.png') }}'); background-size: cover; background-position: center; height: 350px;"> <!-- Adjusted height -->
                </div>
                <div class="card-body text-start" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                    <h5 class="card-title fw-bold">Project B</h5>
                    <p class="card-text text-muted">Podcast</p>
                    <a href="#" class="btn btn-warning rounded-pill px-4">View Details</a>
                </div>
            </div>
        </div>

        <!-- Small Card -->
        <div class="col-md-5 mb-4"> <!-- Reduced width to 5 columns -->
            <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;"> <!-- Ensured consistent border-radius -->
                <div class="card-img-top" style="background-image: url('{{ asset('assets/images/study-tour.jpg') }}'); background-size: cover; background-position: center; height: 350px;"> <!-- Adjusted height to match Project B -->
                </div>
                <div class="card-body text-start" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                    <h5 class="card-title fw-bold">Project C</h5>
                    <p class="card-text text-muted">Dokomentasi Study Tour</p>
                    <a href="#" class="btn btn-warning rounded-pill px-4">View Details</a>
                </div>
            </div>
        </div>

        <!-- Medium Card 1 -->
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;"> <!-- Adjusted border-radius to match Project C -->
                <div class="card-img-top" style="background-image: url('{{ asset('assets/images/berita-terkini.jpg') }}'); background-size: cover; background-position: center; height: 200px;"> <!-- Reduced height -->
                </div>
                <div class="card-body text-center" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                    <h5 class="card-title fw-bold">Project D</h5>
                    <p class="card-text text-muted">Berita terkini</p>
                    <a href="#" class="btn btn-warning rounded-pill px-4">View Details</a>
                </div>
            </div>
        </div>

        <!-- Medium Card 2 -->
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-lg" style="border-radius: 20px, overflow: hidden;"> <!-- Adjusted border-radius to match Project C -->
                <div class="card-img-top" style="background-image: url('{{ asset('assets/images/berita-terkini2.jpg') }}'); background-size: cover; background-position: center; height: 200px;"> <!-- Reduced height -->
                </div>
                <div class="card-body text-center" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                    <h5 class="card-title fw-bold">Project E</h5>
                    <p class="card-text text-muted">Berita terkini</p>
                    <a href="#" class="btn btn-warning rounded-pill px-4">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">OUR PROFESSIONAL TEAM</h2>
        <p class="text-center text-muted mb-5">Travelink Center menghadirkan solusi perjalanan, event, dan media kreatif yang andal dan berkesan. Kami fokus pada kepuasan pelanggan melalui layanan profesional dan pengalaman wisata tak terlupakan.</p>
        <div class="row g-4 align-items-end">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/masa.png') }}" alt="Custom SEO Services" class="card-img-top" style="height: 100%; object-fit: contain; border-radius: 10px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title" style="background-color: #ffc107; width: 100%; padding: 5px 10px; border-radius: 5px;">Chief OF Tour and Travel</h5>
                        <p class="card-text text-muted">Adit Kurnia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 50px;">
                <div class="card border-0 shadow-lg h-100">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/bapak.png') }}" alt="SEO Website Design" class="card-img-top" style="height: 100%; object-fit: contain; border-radius: 10px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title" style="background-color: #ffc107; width: 100%; padding: 5px 10px; border-radius: 5px;">CEO/FOUNDER</h5>
                        <p class="card-text text-muted">Sugiyanto</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="{{ asset('assets/images/masa.png') }}" alt="SEO Consulting" class="card-img-top" style="height: 100%; object-fit: contain; border-radius: 10px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title" style="background-color: #ffc107; width: 100%; padding: 5px 10px; border-radius: 5px;">Chief OF Event And Entertainment</h5>
                        <p class="card-text text-muted">Adit Kurnia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</div>
@endsection