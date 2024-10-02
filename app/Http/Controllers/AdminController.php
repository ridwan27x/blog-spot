<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Report;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }

    public function adminhome()
    {
        $posts = Post::all();
        return view('adminhome', compact('posts',));
    }
    public function laporanAdmin()
    {
        $reports = Report::with('post')->get();
        
        return view('laporanadmin', compact('reports'));
    }


    public function approveReport($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'Disetujui';
        $report->save();

        return redirect()->back()->with('success', 'Laporan telah disetujui.');
    }

    public function rejectReport($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'Ditolak';
        $report->save();

        return redirect()->back()->with('success', 'Laporan telah ditolak.');
    }
}
