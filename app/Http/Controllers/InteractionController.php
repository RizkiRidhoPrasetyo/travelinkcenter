<?php

namespace App\Http\Controllers;

use App\Models\TravelinkPackage;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteractionController extends Controller
{
    public function like(Request $request, $id)
    {
        $package = TravelinkPackage::findOrFail($id);
        $package->increment('likes');

        return response()->json(['success' => true, 'likes' => $package->likes]);
    }

    public function comment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        $package = TravelinkPackage::findOrFail($id);

        $comment = new Comment([
            'travelink_package_id' => $id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);
        $comment->save();

        $package->comments_count = $package->comments()->count();
        $package->average_rating = $package->comments()->avg('rating');
        $package->save();

        return response()->json(['success' => true, 'comments_count' => $package->comments_count, 'average_rating' => $package->average_rating]);
    }
}
