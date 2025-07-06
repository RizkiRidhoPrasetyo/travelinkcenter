@extends('frontend.layouts')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Booking Destinasi Wisata</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('booking.store') }}">
                        @csrf
                        <input type="hidden" name="package_id" value="{{ $package_id ?? '' }}">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email', auth()->user()->email ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No Telepon</label>
                            <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone', auth()->user()->phone ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal Booking</label>
                            <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="notes" class="form-label">Catatan (opsional)</label>
                            <textarea id="notes" class="form-control" name="notes">{{ old('notes') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
