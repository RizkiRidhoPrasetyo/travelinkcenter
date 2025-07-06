<x-mail::message>
<div style="text-align:center; margin-bottom:24px;">
    <img src="{{ asset('assets/images/TravelinkCenter.png') }}" alt="Travelink Center Logo" style="max-width:180px; margin-bottom:16px;">
</div>

<h2 style="color:#2D2766; font-weight:bold;">Halo, <span style="color:#ff7f00;">Halo Pelanggan TravelinkCenter</span></h2>
<p style="font-size:16px; margin-bottom:8px;">Selamat datang di Portal Aplikasi Travelink Center!</p>
<p style="margin-bottom:8px;">Terima kasih telah mendaftar layanan kami.<br>
Untuk mendapatkan akses penuh ke Portal Aplikasi Travelink Center, harap verifikasi email Anda terlebih dahulu dengan menekan tombol di bawah ini.</p>

<p style="font-size:15px; color:#888; margin-bottom:24px;">
Welcome to Travelink Center Website Portal!<br>
Thank you for registering for our service.<br>
To get full access to Travelink Center Application Portal, please verify your email first by pressing the verification button below.
</p>

@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
    {{ $actionText ?? 'Verifikasi Email' }}
</x-mail::button>
@endisset

<p style="margin-top:24px; color:#888; font-size:13px;">
Jika Anda tidak membuat akun, abaikan email ini.<br>
If you did not create an account, no further action is required.
</p>

@isset($actionText)
@endisset
</x-mail::message>
