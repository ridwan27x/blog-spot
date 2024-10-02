<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Report;

class ReportController extends Controller
{
    public function create($postId)
    {
        $post = Post::findOrFail($postId);
        return view('reports.create', compact('post'));
    }

    public function store(Request $request, $postId)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $post = Post::findOrFail($postId);

        // Membuat laporan baru
        $report = new Report();
        $report->post_id = $post->id;
        $report->judul = $request->judul;
        $report->deskripsi = $request->deskripsi;
        $report->save();

        return redirect()->route('posts.index', $postId)->with('success', 'Laporan telah dikirim.');
    }
}
