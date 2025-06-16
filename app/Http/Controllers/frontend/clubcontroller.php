<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelinkPackage;

class clubcontroller extends Controller
{
    public function index(){
        $travelinkPackages = TravelinkPackage::all();
        return view('frontend.club', compact('travelinkPackages', 'benefits'));
    }
}
