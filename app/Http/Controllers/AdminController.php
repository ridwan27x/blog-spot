<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); 
        return view('admin', compact('users'));
    }

    public function adminhome()
    {
        // Mengambil semua postingan dari database
        $posts = Post::all();
        
        // Mengirimkan data ke view adminhome
        return view('adminhome', compact('posts'));
    }

    
}
