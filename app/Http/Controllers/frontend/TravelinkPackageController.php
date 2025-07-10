<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Benefit;
use App\Models\TravelinkPackage;
use App\Models\PackageRating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TravelinkPackageController extends Controller
{
    // ...existing code...
    public function index()
    {
        return view('frontend.packagetravel.index');
    }

    public function club()
    {
        $travelinkPackages = TravelinkPackage::all(); // Ambil data paket dari database

        return view('frontend.club', compact('travelinkPackages'));
    }

    public function topDestinations()
    {
        $topDestinations = TravelinkPackage::all(); // Fetch all TravelinkPackage data
        return view('frontend.top_destinations', compact('topDestinations'));
    }

    public function topDeals()
    {
        $topDeals = TravelinkPackage::all(); // Fetch all TravelinkPackage data
        return view('frontend.top_deals', compact('topDeals'));
    }
}
