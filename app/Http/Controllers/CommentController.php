<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function storeComment(Request $request, $postId)
{
    $request->validate([
        'content' => 'required',
    ]);

    Comment::create([
        'post_id' => $postId,
        'user_id' => Auth::user()->id,
        'content' => $request->input('content'),
        'parent_id' => $request->input('parent_id', null), // Mendukung balasan
    ]);

    return redirect()->back()->with('success', 'Komentar sukses ditambahkan');
}

}
