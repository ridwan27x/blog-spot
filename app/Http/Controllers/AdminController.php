<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data pengguna dari database
        return view('admin', compact('users'));
    }


    
}
