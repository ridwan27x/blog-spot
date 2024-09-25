@extends('layouts.app')
<style>

</style>
@section('content')
<div class="container">
    <h1 class="mb-4">{{ $post->title }}</h1>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <p>{{ $post->content }}</p>
        </div>
        <div class="card-footer text-muted">
            Diterbitkan pada {{ $post->created_at->format('d M Y H:i') }}
        </div>
    </div>

    <div class="komentar mb-4">
        <h2>Komentar</h2>

        @foreach ($post->comments as $comment)
        <div class="mb-3 border p-3 rounded">
            <strong>{{ $comment->user->name }}</strong>
            <p>{{ $comment->content }}</p>

            <!-- Form untuk balasan -->
            <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mb-2">
                @csrf
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="2" required placeholder="Balas komentar..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm mt-2">Balas</button>
            </form>

            <!-- Tampilkan balasan -->
            @if ($comment->replies->count() > 0)
                <div class="ml-4">
                    @foreach ($comment->replies as $reply)
                    <div class="pl-3 mb-2">
                        <strong>{{ $reply->user->name }}</strong>
                        <p>{{ $reply->content }}</p>

                        <!-- Form untuk balasan reply -->
                        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mb-2">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $reply->id }}">
                            <div class="form-group">
                                <textarea name="content" class="form-control" rows="2" required placeholder="Balas balasan..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-sm mt-2">Balas</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
        @endforeach

        <!-- Form untuk komentar baru -->
        <h3>Tinggalkan Komentar:</h3>
        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <textarea name="content" class="form-control" rows="3" required placeholder="Tulis komentar..."></textarea>
            </div>
            <button type="submit" class="btn btn-success">Komentar</button>
        </form>
    </div>

    <a href="{{ route('home') }}" class="btn btn-secondary mt-3">
        <i class="bi bi-arrow-left"></i> Kembali ke Daftar Postingan
    </a>
</div>
@endsection
