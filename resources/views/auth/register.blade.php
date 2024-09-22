@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center" style="min-height: 100vh;">
    <div class="col-md-6">
        <div class="card shadow-lg border-0">
            <div class="card-header text-dark text-center">
                <h4>{{ __('Register') }}</h4>
            </div>

            <div class="card-body p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" 
                               class="form-control @error('name') is-invalid @enderror" 
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                               placeholder="Masukkan nama Anda">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" required autocomplete="email"
                               placeholder="Masukkan alamat email Anda">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" 
                               class="form-control @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="new-password"
                               placeholder="Masukkan password Anda">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" 
                               class="form-control" name="password_confirmation" required 
                               autocomplete="new-password" placeholder="Konfirmasi password Anda">
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-success w-100 py-2">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <div class="mt-3 text-center">
                        @if (Route::has('password.request'))
                            <a class="text-primary" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Copyright Section -->
<div class="text-center bg-dark py-2 w-100 position-fixed bottom-0 left-0 right-0">
    <small>&copy; 2024 Ridwan & Fajar. All rights reserved.</small>
</div>

<style>
    body, html {
        height: 100%;
        margin: 0;
        overflow: hidden; /* Menghindari scrolling */
    }
<style>
    body {
        background-color: #f0f2f5; /* Sama dengan warna latar belakang halaman login */
    }
    .card {
        border-radius: 12px; /* Membuat sudut kartu lebih bulat */
    }
    .text-center small {
        color: #ffffff; /* Warna teks copyright */
    }
</style>
@endsection
