<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get(); // Mengambil semua postingan terbaru
        return view('posts.index', compact('posts')); // Kirim variabel $posts ke view
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Simpan post dengan user_id
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
           'user_id' => Auth::user()->id,


        ]);

        return redirect()->route('posts.index')->with('success', 'Post sukses ditambahkan');
    }




    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id); // Cari posting berdasarkan ID
        return view('posts.show', compact('post')); // Mengirimkan data posting ke view
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Validasi input form
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Update data post
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        // Simpan perubahan
        $post->save();

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect()->route('adminhome')->with('success', 'Post berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post) {
            $post->delete();
            return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
        }

        return redirect()->route('posts.index')->with('error', 'Post not found');
    }
}
