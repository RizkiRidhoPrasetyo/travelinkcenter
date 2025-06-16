<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #2D2766; color: white;">
            <div class="modal-header border-0 flex-column align-items-center">
                <h5 class="modal-title w-100 text-center mb-3" id="loginModalLabel" style="color: white;">Login</h5>
                <button type="button" class="btn-close btn-close-white position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label" style="color: white;">Email</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background-color: #fff; color: #2D2766;">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" style="border: none;" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label" style="color: white;">Password</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background-color: #fff; color: #2D2766;">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" style="border: none;" required>
                        </div>
                    </div>
                    <button type="submit" class="btn w-100" style="background-color: #ff7f00; color: white;">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message || 'Login berhasil!');
                window.location.href = '/travelinkclub'; 
            } else {
                alert(data.message || 'Email atau password salah!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan. Silakan coba lagi.');
        });
    });
</script>
