@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Riwayat Booking Anda</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Paket</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $booking)
            <tr>
                <td>{{ $booking->package->name ?? '-' }}</td>
                <td>{{ $booking->date }}</td>
                <td>{{ $booking->status ?? 'Pending' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Belum ada booking.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
