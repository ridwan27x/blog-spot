@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-primary">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Buat Postingan Baru</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control" placeholder="Masukkan judul postingan" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Konten</label>
                            <textarea name="content" class="form-control" rows="5" placeholder="Masukkan konten postingan" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="file" class="form-label">Lampirkan File (Opsional)</label>
                            <input type="file" name="file" class="form-control-file">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Publikasikan</button>
                    </form>
                </div>
            </div>
            <a href="{{ route('home') }}" class="btn btn-secondary mt-3">
                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Postingan
            </a>
        </div>
    </div>
</div>
@endsection