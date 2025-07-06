<?php

namespace App\Http\Controllers;

use App\Models\PackageComment;
use App\Models\TravelinkPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageCommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        $package = TravelinkPackage::findOrFail($id);
        $comment = new PackageComment();
        $comment->package_id = $package->id;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();

        // Optionally return the new comment with user info
        $comment->load('user');
        return response()->json([
            'success' => true,
            'comment' => [
                'user' => $comment->user->name ?? 'User',
                'comment' => $comment->comment,
                'created_at' => $comment->created_at->diffForHumans(),
            ]
        ]);
    }

    public function list($id)
    {
        $comments = PackageComment::with('user')
            ->where('package_id', $id)
            ->latest()
            ->get()
            ->map(function($c) {
                return [
                    'user' => $c->user->name ?? 'User',
                    'comment' => $c->comment,
                    'created_at' => $c->created_at->diffForHumans(),
                ];
            });
        return response()->json(['comments' => $comments]);
    }
}
