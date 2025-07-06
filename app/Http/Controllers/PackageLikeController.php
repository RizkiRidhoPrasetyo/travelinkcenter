<?php

namespace App\Http\Controllers;

use App\Models\PackageLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageLikeController extends Controller
{
    public function toggle($id)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $userId = Auth::id();
        $like = PackageLike::where('package_id', $id)->where('user_id', $userId)->first();
        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            PackageLike::create(['package_id' => $id, 'user_id' => $userId]);
            $liked = true;
        }
        $count = PackageLike::where('package_id', $id)->count();
        return response()->json(['liked' => $liked, 'count' => $count]);
    }

    public function count($id)
    {
        $count = PackageLike::where('package_id', $id)->count();
        $liked = false;
        if (Auth::check()) {
            $liked = PackageLike::where('package_id', $id)->where('user_id', Auth::id())->exists();
        }
        return response()->json(['liked' => $liked, 'count' => $count]);
    }
}
