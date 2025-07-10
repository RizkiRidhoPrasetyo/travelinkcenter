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
                        <a href="{{ url('/Paket-travel') }}" class="btn btn-lg rounded-pill px-4 shadow" style="background-color: #ffc107; color: black;">Find Out Now</a>
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
                        <p class="lead" style="color: white; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">Join us to get millions of other promos</p>
                        <a href="{{ url('/travelinkclub') }}" class="btn btn-lg rounded-pill px-4 shadow" style="background-color: #ffc107; color: black;">Join Now</a>
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
        <h2 class="text-center fw-bold mb-4">Tour Package</h2>
        <div class="row g-4 my-2">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/bromo.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Java Travel</h5>
                        <p class="card-text">Explore the beauty of Mount Bromo and its surroundings.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/podcast.jpeg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Company Gathering</h5>
                        <p class="card-text">Suitable for team-building activities and corporate events.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/edukasi.jpeg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Educational Tourism</h5>
                        <p class="card-text">Learn and explore with educational tours in Malang.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-img-top" style="background-image: url('{{ asset('assets/images/penginapan.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Lodging</h5>
                        <p class="card-text">Various recommendations for accommodation for you.</p>
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
            <p class="fs-5 text-muted">Malang, a city located in the highlands of East Java, is known for its cool air, stunning natural scenery, and captivating cultural richness. This city is a favorite destination for tourists seeking tranquility and adventure.</p>
            <p class="fs-5 text-muted">From the majestic beauty of Mount Bromo to the calming charm of Coban Rondo waterfall, Malang offers an unforgettable travel experience. Coupled with amusement parks such as Jatim Park, this city is a perfect place for families, couples, and solo travelers.</p>
            <p class="fs-5 text-muted">Travelink Center is here as your best travel partner in Malang. With years of experience, we are ready to help you explore the beauty of Malang with professional and friendly service. Trust your trip to us, and enjoy a vacation full of impressions and satisfaction.</p>
        </div>
    </div>

    <!-- Top Deals Section -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">Top Deals</h2>
        <div class="row g-4">
            @foreach($topDeals as $deal)
            <div class="col-md-3 mb-4"> <!-- Applied consistent styling from Club section -->
                <div class="card border-0 shadow-sm h-100 position-relative">
                    <img src="{{ Storage::url($deal->images[0] ?? 'default.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $deal->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $deal->name }}</h5>
                        <p class="card-text">{{ $deal->region }}</p>
                        <div class="position-absolute" style="top: 50%; right: 0; transform: translateY(-50%); background-color: #FFD700; padding: 10px; border-radius: 5px;"> <!-- Promo Price overlay -->
                            <span style="font-weight: bold; color: #2D2766;">Promo Price: {{ $deal->promo_price }}</span>
                        </div>
                        <a href="#" class="btn" style="background-color: #2D2766; color: white;" class="mt-2" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateModal('{{ $deal->images[0] ?? 'default.jpg' }}', '{{ $deal->name }}', '{{ $deal->region }}', '{{ $deal->price }}', '{{ $deal->promo_price }}', '{{ $deal->hashtag }}')">View Detail</a>
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
            <div class="col-md-3 mb-4"> <!-- Applied consistent styling from Club section -->
                <div class="card border-0 shadow-sm h-100 position-relative">
                    <img src="{{ Storage::url($destination->images[0] ?? 'default.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $destination->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="card-text">{{ $destination->region }}</p>
                        <div class="position-absolute" style="top: 50%; right: 0; transform: translateY(-50%); background-color: #FFD700; padding: 10px; border-radius: 5px;"> <!-- Promo Price overlay -->
                            <span style="font-weight: bold; color: #2D2766;">Promo Price: {{ $destination->promo_price }}</span>
                        </div>
                        <a href="#" class="btn" style="background-color: #2D2766; color: white;" class="mt-2" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateModal('{{ $destination->images[0] ?? 'default.jpg' }}', '{{ $destination->name }}', '{{ $destination->region }}', '{{ $destination->price }}', '{{ $destination->promo_price }}', '{{ $destination->hashtag }}')">View Detail</a>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>

<!-- Project Cards Section -->
<div class="row justify-content-center align-items-center py-5">
    <!-- Project A -->
    <div class="col-12 mb-4">
        <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="card-img-top" style="background-image: url('{{ asset('assets/images/labuan-bajo.jpg') }}'); background-size: cover; background-position: center; height: 300px;"></div>
            <div class="card-body text-center" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                <h5 class="card-title fw-bold">Project A</h5>
                <p class="card-text text-muted">Labuan Bajo Documentation</p>
                <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateProjectModal('Project A', '{{ asset('assets/images/labuan-bajo.jpg') }}', 'Labuan Bajo Documentation', 'Labuan Bajo Documentation is a collection of photos and stories from our trip to Labuan Bajo, capturing the beauty of the islands, the sea, and the local culture.')">View Details</a>
            </div>
        </div>
    </div>
    <!-- Project B -->
    <div class="col-md-7 mb-4">
        <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="card-img-top" style="background-image: url('{{ asset('assets/images/podcastmerah.png') }}'); background-size: cover; background-position: center; height: 350px;"></div>
            <div class="card-body text-start" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                <h5 class="card-title fw-bold">Project B</h5>
                <p class="card-text text-muted">Podcast</p>
                <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateProjectModal('Project B', '{{ asset('assets/images/podcastmerah.png') }}', 'Super Podcast Show', 'Super Podcast Show is a live podcast event that is popular among young people in Indonesia, especially in big cities. This event is an evolution of the regular podcast that can usually only be heard online — into a live show held on stage, with famous presenters, topics that are close to young people, and a relaxed and entertaining atmosphere.')">View Details</a>
            </div>
        </div>
    </div>
    <!-- Project C -->
    <div class="col-md-5 mb-4">
        <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="card-img-top" style="background-image: url('{{ asset('assets/images/study-tour.jpg') }}'); background-size: cover; background-position: center; height: 350px;"></div>
            <div class="card-body text-start" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                <h5 class="card-title fw-bold">Project C</h5>
                <p class="card-text text-muted">Documentation Study Tour</p>
                <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateProjectModal('Project C', '{{ asset('assets/images/study-tour.jpg') }}', 'Study Tour', 'Documentation Study Tour is a collection of memorable moments and learning experiences from our educational trips, highlighting the fun and knowledge gained by participants.')">View Details</a>
            </div>
        </div>
    </div>
    <!-- Project D -->
    <div class="col-md-6 mb-4">
        <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="card-img-top" style="background-image: url('{{ asset('assets/images/berita-terkini.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
            <div class="card-body text-center" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                <h5 class="card-title fw-bold">Project D</h5>
                <p class="card-text text-muted">Latest News</p>
                <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateProjectModal('Project D', '{{ asset('assets/images/berita-terkini.jpg') }}', 'Latest News', 'Latest News is a section dedicated to the most recent updates, events, and happenings related to our travel and creative projects.')">View Details</a>
            </div>
        </div>
    </div>
    <!-- Project E -->
    <div class="col-md-6 mb-4">
        <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;">
            <div class="card-img-top" style="background-image: url('{{ asset('assets/images/berita-terkini2.jpg') }}'); background-size: cover; background-position: center; height: 200px;"></div>
            <div class="card-body text-center" style="background: linear-gradient(90deg, #f8fafc 60%, #e6f0fa 100%);">
                <h5 class="card-title fw-bold">Project E</h5>
                <p class="card-text text-muted">Latest News</p>
                <a href="#" class="btn btn-warning rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="populateProjectModal('Project E', '{{ asset('assets/images/berita-terkini2.jpg') }}', 'Latest News', 'Latest News is a section dedicated to the most recent updates, events, and happenings related to our travel and creative projects.')">View Details</a>
            </div>
        </div>
    </div>
</div>

    <!-- About Us Section -->
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">OUR PROFESSIONAL TEAM</h2>
        <p class="text-center text-muted mb-5">Travelink Center provides reliable and memorable travel, event, and creative media solutions. We focus on customer satisfaction through professional services and unforgettable travel experiences.</p>
        <div class="row g-4 align-items-end">
            <div class="col-md-3"> <!-- Adjusted column size -->
                <div class="card border-0 shadow-sm h-100" style="background-color: #979797;"> <!-- Changed background color to gray -->
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/Logo-MTC-Media-Horizontal-LIGHT-290x290.png') }}" alt="SEO Consulting" class="card-img-top" style="height: 250px; object-fit: contain; border-radius: 10px;"> <!-- Adjusted height and object-fit for better image display -->
                        <h5 class="card-title" style="background-color: #ffc107; width: auto; padding: 10px 15px; border-radius: 8px; font-size: 1rem;">MTC Media</h5> <!-- Adjusted padding, border-radius, and font-size for better appearance -->
                    </div>
                </div>
            </div>
            <div class="col-md-3"> <!-- Adjusted column size -->
                <div class="card border-0 shadow-sm h-100" style="background-color: #979797;"> <!-- Changed background color to gray -->
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/polinema_logo.png') }}" alt="SEO Consulting" class="card-img-top" style="height: 250px; object-fit: contain; border-radius: 10px;"> <!-- Adjusted height and object-fit for better image display -->
                        <h5 class="card-title" style="background-color: #ffc107; width: auto; padding: 10px 15px; border-radius: 8px; font-size: 1rem;">Malang State Polytechnic</h5> <!-- Adjusted padding, border-radius, and font-size for better appearance -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Popup -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Changed to modal-lg for larger modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Detail Image" class="img-fluid mb-3 w-100" style="border-radius: 10px; max-height: 500px; object-fit: cover; object-position: center;"> <!-- Increased max-height and width for larger image -->
                    <h5 id="modalTitle" class="fw-bold"></h5>
                    <p id="modalRegion" class="text-muted"></p>
                    <p id="modalPrice" class="text-muted"></p>
                    <p id="modalPromoPrice" class="text-muted"></p>
                    <p id="modalHashtag" class="text-muted"></p>
                    <p id="modalDescription" class="text-muted"></p>
                    <p id="modalRentalDetails" class="text-muted"></p>
                    <div class="mt-3 d-flex justify-content-center gap-2">
                        <button class="btn btn-success btn-sm" id="modalBookingBtn"><i class="bi bi-calendar-check"></i> Booking</button>
                        <button class="btn btn-outline-primary btn-sm" id="modalLikeBtn">
                            <i class="bi bi-hand-thumbs-up"></i> <span id="modalLikeText">Like</span> (<span id="modalLikeCount">0</span>)
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" id="modalCommentBtn"><i class="bi bi-chat"></i> Comment</button>
                        <button class="btn btn-outline-success btn-sm" id="modalShareBtn"><i class="bi bi-share"></i> Share</button>
                    </div>
                    <div class="comments-section mt-2" id="modalCommentsSection" style="display:none;">
                        <form class="form-comment d-flex mb-2" id="modalCommentForm">
                            <input type="text" name="comment" class="form-control form-control-sm me-2" placeholder="Write a comment..." required>
                            <button type="submit" class="btn btn-primary btn-sm">Post</button>
                        </form>
                        <div class="comments-list" id="modalCommentsList"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
let currentPackageId = null;
function populateModal(image, title, region, price, promoPrice, hashtag, id = null) {
    document.getElementById('modalImage').src = image;
    document.getElementById('modalTitle').textContent = title;
    document.getElementById('modalRegion').textContent = `Region: ${region}`;
    document.getElementById('modalPrice').textContent = `Price: ${price}`;
    document.getElementById('modalPromoPrice').textContent = `Promo Price: ${promoPrice}`;
    document.getElementById('modalHashtag').textContent = `Hashtag: ${hashtag}`;
    currentPackageId = id;
    // Set booking button link
    if (id) {
        $('#modalBookingBtn').off('click').on('click', function() {
            window.location.href = '/booking/' + id;
        });
    }
    // Hide comments section initially
    $('#modalCommentsSection').hide();
    $('#modalCommentsList').empty();
}

function updateLikeStatus() {
    if (!currentPackageId) return;
    $.get('/package/' + currentPackageId + '/like-count', function(data) {
        $('#modalLikeCount').text(data.count);
        $('#modalLikeText').text(data.liked ? 'Unlike' : 'Like');
    });
}

$(function() {
    // Show/hide comments section in modal
    $('#modalCommentBtn').on('click', function() {
        $('#modalCommentsSection').toggle();
        if ($('#modalCommentsSection').is(':visible') && $('#modalCommentsList').is(':empty') && currentPackageId) {
            $.get('/package/' + currentPackageId + '/comments', function(data) {
                var list = $('#modalCommentsList');
                list.empty();
                data.comments.forEach(function(c) {
                    list.append('<div class="text-start mb-1"><strong>' + c.user + ':</strong> ' + c.comment + ' <small class="text-muted">' + c.created_at + '</small></div>');
                });
            });
        }
    });

    // Submit comment in modal
    $('#modalCommentForm').on('submit', function(e) {
        e.preventDefault();
        if (!currentPackageId) return;
        var input = $(this).find('input[name=comment]');
        var comment = input.val();
        var list = $('#modalCommentsList');
        $.post({
            url: '/package/' + currentPackageId + '/comment',
            data: {
                comment: comment,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                if(data.success) {
                    list.prepend('<div class="text-start mb-1"><strong>' + data.comment.user + ':</strong> ' + data.comment.comment + ' <small class="text-muted">' + data.comment.created_at + '</small></div>');
                    input.val('');
                }
            }
        });
    });

    $('#detailModal').on('show.bs.modal', function () {
        updateLikeStatus();
    });

    $('#modalLikeBtn').on('click', function() {
        if (!currentPackageId) return;
        $.post({
            url: '/package/' + currentPackageId + '/like',
            data: {_token: '{{ csrf_token() }}'},
            success: function(data) {
                $('#modalLikeCount').text(data.count);
                $('#modalLikeText').text(data.liked ? 'Unlike' : 'Like');
            },
            error: function(xhr) {
                if(xhr.status === 401) {
                    // Show login modal instead of alert
                    // Jika ada login modal, bisa ditampilkan di sini
                }
            }
        });
    });
});

function populateProjectModal(title, image, subtitle, description) {
    document.getElementById('modalTitle').textContent = title + ' - Detail Information';
    document.getElementById('modalImage').src = image;
    document.getElementById('modalRegion').textContent = subtitle;
    document.getElementById('modalPrice').textContent = '';
    document.getElementById('modalPromoPrice').textContent = '';
    document.getElementById('modalHashtag').textContent = '';
    document.getElementById('modalDescription').textContent = description;
    document.getElementById('modalRentalDetails').textContent = '';
    // Sembunyikan tombol booking, like, comment, share untuk project
    document.getElementById('modalBookingBtn').style.display = 'none';
    document.getElementById('modalLikeBtn').style.display = 'none';
    document.getElementById('modalCommentBtn').style.display = 'none';
    document.getElementById('modalShareBtn').style.display = 'none';
    document.getElementById('modalCommentsSection').style.display = 'none';
}
    </script>
</div>
@endsection