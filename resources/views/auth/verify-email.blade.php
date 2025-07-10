@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifikasi Email</div>
                <div class="card-body">
                    <p>Terima kasih telah mendaftar! Sebelum memulai, silakan cek email Anda dan klik link verifikasi yang telah kami kirimkan.</p>
                    <p>Jika Anda belum menerima email, klik tombol di bawah untuk mengirim ulang.</p>
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Kirim Ulang Email Verifikasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
