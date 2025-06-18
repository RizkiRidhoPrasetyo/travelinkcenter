@extends('frontend.layouts')

@section('content')
<div class="container-fluid p-0">
    <img src="{{ asset('assets/images/headertopdes.png') }}" class="img-fluid w-100" alt="Top Deals Header">
</div>

<div class="container-fluid bg-light" style="margin-top: -20px; position: sticky; top: 0; z-index: 1030;"> <!-- Menambahkan posisi sticky agar navbar tetap mengambang saat scroll -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Top Deals</a>
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

<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">Top Deals</h2>
    <div class="row g-4">
        @foreach($topDeals as $deal)
        <div class="col-md-3 mb-4"> <!-- Applied consistent styling from Top Destinations -->
            <div class="card border-0 shadow-sm h-100 position-relative">
                <img src="{{ Storage::url($deal->images[0] ?? 'default.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $deal->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $deal->name }}</h5>
                    <p class="card-text">{{ $deal->region }}</p>
                    <div class="position-absolute" style="top: 50%; right: 0; transform: translateY(-50%); background-color: #FFD700; padding: 10px; border-radius: 5px;"> <!-- Promo Price overlay -->
                        <span style="font-weight: bold; color: #2D2766;">Promo Price: {{ $deal->promo_price }}</span>
                    </div>
                    <a href="#" class="btn" style="background-color: #2D2766; color: white;" class="mt-2" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateModal('{{ $deal->images[0] ?? 'default.jpg' }}', '{{ $deal->name }}', '{{ $deal->region }}', '{{ $deal->price }}', '{{ $deal->promo_price }}', '{{ $deal->hashtag }}')">
                        View Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal Popup -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="Detail Image" class="img-fluid mb-3" style="border-radius: 10px;">
                <h5 id="modalTitle" class="fw-bold"></h5>
                <p id="modalRegion" class="text-muted"></p>
                <p id="modalPrice" class="text-muted"></p>
                <p id="modalPromoPrice" class="text-muted"></p>
                <p id="modalHashtag" class="text-muted"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function populateModal(image, title, region, price, promoPrice, hashtag) {
        document.getElementById('modalImage').src = image;
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalRegion').textContent = `Region: ${region}`;
        document.getElementById('modalPrice').textContent = `Price: ${price}`;
        document.getElementById('modalPromoPrice').textContent = `Promo Price: ${promoPrice}`;
        document.getElementById('modalHashtag').textContent = `Hashtag: ${hashtag}`;
    }
</script>
@endsection
