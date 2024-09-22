@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $post->title }}</h1>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <p>{{ $post->content }}</p>

            @if ($post->file_path)
                <a href="{{ asset('storage/' . $post->file_path) }}" class="btn btn-info mt-3" target="_blank">
                    <i class="bi bi-download"></i> Download File
                </a>
            @endif
        </div>
        <div class="card-footer text-muted">
            Diterbitkan pada {{ $post->created_at->format('d M Y H:i') }}
        </div>
    </div>
    <a href="{{ route('home') }}" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Kembali ke Daftar Postingan
    </a>
</div>
@endsection
