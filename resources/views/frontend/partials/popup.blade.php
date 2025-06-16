<div class="modal fade" id="membershipModal" tabindex="-1" aria-labelledby="membershipModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #2D2766; color: white;">
            <div class="modal-header border-0 flex-column align-items-center">
                <h5 class="modal-title w-100 text-center mb-3" id="membershipModalLabel" style="color: white;">membership registration form</h5>
                <div class="w-100 text-center mb-2">
                    <!-- Stepper -->
                    <div class="d-flex justify-content-center align-items-center mb-3" style="gap: 24px;">
                        <div>
                            <span class="d-inline-block rounded-circle" style="background:#ffb800;width:32px;height:32px;line-height:32px;color:#2D2766;font-weight:bold;">1</span>
                            <div style="font-size:12px;color:#fff;">Step 1</div>
                        </div>
                        <div style="height:4px;width:40px;background:#fff;opacity:0.3;border-radius:2px;"></div>
                        <div>
                            <span class="d-inline-block rounded-circle" style="background:#fff;opacity:0.3;width:32px;height:32px;line-height:32px;color:#2D2766;font-weight:bold;">2</span>
                            <div style="font-size:12px;color:#fff;opacity:0.3;">Step 2</div>
                        </div>
                        <div style="height:4px;width:40px;background:#fff;opacity:0.3;border-radius:2px;"></div>
                        <div>
                            <span class="d-inline-block rounded-circle" style="background:#fff;opacity:0.3;width:32px;height:32px;line-height:32px;color:#2D2766;font-weight:bold;">3</span>
                            <div style="font-size:12px;color:#fff;opacity:0.3;">Step 3</div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(session('register_success'))
                    <script>
                        alert('Registrasi berhasil! Data Anda sudah masuk ke sistem.');
                    </script>
                @endif
                @if(session('register_failed'))
                    <script>
                        alert('Registrasi gagal! {{ session('register_failed') }}');
                    </script>
                @endif
                <!-- Step 1 -->
                <div id="step-1">
                    <form>
                        <div class="mb-4">
                            <label for="name" class="form-label" style="color: white;">Name</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #fff; color: #2D2766;">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" style="border: none;">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label" style="color: white;">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #fff; color: #2D2766;">
                                    <i class="bi bi-telephone"></i>
                                </span>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" style="border: none;" pattern="[0-9]{10,15}" title="Masukkan nomor HP yang valid (hanya angka, 10-15 digit)" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                        </div>
                        <button type="button" class="btn w-100" style="background-color: #ff7f00; color: white;" id="next-step">Next Step</button>
                    </form>
                </div>

                <!-- Step 2 -->
                <div id="step-2" style="display: none;">
                    <form method="POST" action="{{ route('register.store') }}" autocomplete="off">
                        @csrf
                        <input type="hidden" id="reg_name" name="name">
                        <input type="hidden" id="reg_phone" name="phone">
                        <div class="mb-4">
                            <label for="email" class="form-label" style="color: white;">Email</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #fff; color: #2D2766;">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" style="border: none;">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label" style="color: white;">Password</label>
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #fff; color: #2D2766;">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" style="border: none;">
                            </div>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color: #ff7f00; color: white;">Submit</button>
                    </form>
                </div>
            </div>

            <script>
                document.getElementById('next-step').addEventListener('click', function(e) {
                    // Validasi input nama dan nomor telepon
                    const nameInput = document.getElementById('name');
                    const phoneInput = document.getElementById('phone');
                    let valid = true;
                    if (!nameInput.value.trim()) {
                        valid = false;
                        nameInput.classList.add('is-invalid');
                    } else {
                        nameInput.classList.remove('is-invalid');
                    }
                    if (!phoneInput.value.trim()) {
                        valid = false;
                        phoneInput.classList.add('is-invalid');
                    } else {
                        phoneInput.classList.remove('is-invalid');
                    }
                    if (!valid) {
                        e.preventDefault();
                        // Tidak ada alert popup, hanya validasi visual
                        return;
                    }
                    // Switch to Step 2
                    document.getElementById('step-1').style.display = 'none';
                    document.getElementById('step-2').style.display = 'block';

                    // Set hidden fields for step 2
                    document.getElementById('reg_name').value = nameInput.value;
                    document.getElementById('reg_phone').value = phoneInput.value;

                    // Update Stepper Icons
                    const step1Icon = document.querySelector('#membershipModal .d-flex div:nth-child(1) span');
                    const step2Icon = document.querySelector('#membershipModal .d-flex div:nth-child(3) span');

                    // Ambil warna referensi dari step 1 (warna awal)
                    const step1InitialBg = '#ffb800';
                    const step1InitialColor = '#2D2766';

                    step1Icon.style.background = step1InitialBg;
                    step1Icon.style.color = step1InitialColor;
                    step2Icon.style.background = step1InitialBg;
                    step2Icon.style.color = step1InitialColor;

                    // Update Stepper Text
                    const step1Text = document.querySelector('#membershipModal .d-flex div:nth-child(1) div');
                    const step2Text = document.querySelector('#membershipModal .d-flex div:nth-child(3) div');

                    step1Text.style.opacity = '0.3';
                    step2Text.style.opacity = '1';
                    step2Text.style.color = '#fff'; // Ensure Step 2 text color matches Step 1
                });

                // Step 2 validation
                const step2Form = document.querySelector('#step-2 form');
                if (step2Form) {
                    step2Form.addEventListener('submit', function(e) {
                        const emailInput = document.getElementById('email');
                        const passwordInput = document.getElementById('password');
                        let valid = true;
                        if (!emailInput.value.trim()) {
                            valid = false;
                            emailInput.classList.add('is-invalid');
                        } else {
                            emailInput.classList.remove('is-invalid');
                        }
                        if (!passwordInput.value.trim()) {
                            valid = false;
                            passwordInput.classList.add('is-invalid');
                        } else {
                            passwordInput.classList.remove('is-invalid');
                        }
                        if (!valid) {
                            e.preventDefault();
                            // Tidak ada alert popup, hanya validasi visual
                            return;
                        }
                    });
                }
            </script>
        </div>
    </div>
</div>
