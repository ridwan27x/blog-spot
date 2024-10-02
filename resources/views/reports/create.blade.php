@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Laporan untuk Post: "{{ $post->title }}"</h2>
    <form action="{{ route('reports.store', $post->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul-laporan">Judul Laporan</label>
            <input type="text" class="form-control" name="judul" id="judul-laporan" placeholder="Masukkan judul laporan" required>
        </div>
        <div class="form-group">
            <label for="deskripsi-laporan">Deskripsi Laporan</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi-laporan" rows="4" placeholder="Masukkan deskripsi laporan" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Laporan</button>
    </form>
</div>
@endsection
