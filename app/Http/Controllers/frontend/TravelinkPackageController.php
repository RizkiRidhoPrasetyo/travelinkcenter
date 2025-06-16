<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Benefit;
use App\Models\TravelinkPackage; // Pastikan model ini di-import

class TravelinkPackageController extends Controller
{
    public function index()
    {
        return view('frontend.packagetravel.index');
    }

    public function club()
    {
        $travelinkPackages = TravelinkPackage::all(); // Ambil data paket dari database

        return view('frontend.club', compact('travelinkPackages'));
    }
}
