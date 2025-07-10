<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function history()
    {
        $user = auth()->user();
        $bookings = \App\Models\Booking::with('package')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        return view('frontend.booking_history', compact('bookings'));
    }
    public function create($packageId)
    {
        return view('frontend.booking_form', [
            'package_id' => $packageId
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:8,15',
            'date' => 'required|date',
            'package_id' => 'required|integer',
        ]);

        $booking = \App\Models\Booking::create([
            'user_id' => auth()->check() ? auth()->id() : null,
            'package_id' => $request->package_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'notes' => $request->notes,
        ]);

        return redirect()->route('booking.create', $request->package_id)->with('success', 'Booking berhasil dikirim!');
    }

    public function index()
    {
        $bookings = \App\Models\Booking::with(['user', 'package'])->latest()->get();
        return view('admin.booking_index', compact('bookings'));
    }
}
