<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('adminhome', compact('posts'));
    }
} 
