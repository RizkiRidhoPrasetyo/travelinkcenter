@extends('frontend.layouts')

@section('content')
    <div class="container mt-5">
        <div class="card card-hero-primary">
            <img src="{{ asset('frontend/assets/images/bunga.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body text-white card-hero position-absolute text-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Paket Travel</li>
                    </ol>
                </nav>
                <h1 class="card-title card-title-hero">Paket Travel</h1>
                <p class="card-text">Semua daftar paket travel yang kami sediakan.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mt-5">
            <h3 class="text-center mb-4">Paket Travel Indonesia</h3>
            @foreach ($packages as $package)
                <div class="col-lg-4 mb-5">
                    <div class="card" style="border: none">
                        <img src="{{ asset('assets/images/' . $package->image) }}" style="height: 400px;object-fit: cover;"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $package->title }}</h4>
                        </div>
                        <div class="card-body d-block p-0 mx-auto w-75">
                            <a href="{{ route('travel.single', $package->id) }}" class="d-block mb-3 card-link btn btn-primary">Detail</a>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-outline-primary me-2 like-button" data-id="{{ $package->id }}">Like</button>
                            <button class="btn btn-outline-secondary me-2 comment-button" data-id="{{ $package->id }}">Comment</button>
                            <div class="d-inline-block">
                                @for ($i = 1; $i <= 5; $i++)
                                    <span class="text-warning {{ $i <= $package->average_rating ? 'text-warning' : 'text-muted' }}">★</span>
                                @endfor
                            </div>
                            <div class="mt-2">
                                <span id="likes-count-{{ $package->id }}">{{ $package->likes_count }}</span> Likes
                            </div>
                            <div class="mt-2">
                                <span id="comments-count-{{ $package->id }}">{{ $package->comments_count }}</span> Comments
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        $(document).on('click', '.like-button', function() {
            const packageId = $(this).data('id');
            $.ajax({
                url: `/packages/${packageId}/like`,
                method: 'POST',
                success: function(response) {
                    $(`#likes-count-${packageId}`).text(response.likes);
                }
            });
        });

        $(document).on('submit', '.comment-form', function(e) {
            e.preventDefault();
            const packageId = $(this).data('id');
            const comment = $(`#comment-input-${packageId}`).val();
            const rating = $(`#rating-input-${packageId}`).val();

            $.ajax({
                url: `/packages/${packageId}/comment`,
                method: 'POST',
                data: { comment, rating },
                success: function(response) {
                    $(`#comments-count-${packageId}`).text(response.comments_count);
                    $(`#average-rating-${packageId}`).text(response.average_rating.toFixed(1));
                }
            });
        });
    </script>
@endsection