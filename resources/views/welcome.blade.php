<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>welcome</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: url('https://asset.kompas.com/crops/vD7Tp-6Q54HVg9_OLYA3EsqHy3g=/0x120:821x667/750x500/data/photo/2021/10/30/617cc0ced4906.jpg') no-repeat center center/cover;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            padding: 15px 0;
            text-align: right;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            margin-right: 50px;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: #ddd;
        }

        .content {
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6); /* Warna latar transparan untuk konten */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .content h1 {
            font-size: 4em;
            margin-bottom: 20px;
        }

        .content h2 {
            font-size: 2em;
            font-weight: lighter;
            margin-bottom: 30px;
        }

        .content h2 span {
            color: #cfa045;
            font-weight: bold;
        }

        .btn-container {
            margin-top: 20px;
        }

        /* Tombol */
        .btn-create-blog {
            background-color: #f68b1f;
            color: #fff;
            padding:7px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-create-blog:hover {
            background-color: #e07a16;
        }

        .btn-create-blog:active {
            background-color: #cc6e12;
        }
    </style>
</head>
<body class="antialiased">
    <nav>
        <ul>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Home</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>

    <div class="content">
        <div class="container">
            <h1>Welcome to blogme!</h1>

            <!-- Tombol untuk Create Blog -->
            <div class="btn-container">
                <a href="{{ url('/create-blog') }}" class="btn btn-create-blog">CREATE YOUR BLOG</a>
            </div>

            <h2 style="margin-top: 20px;"><span>buat karya dari tulisanmu</span></h2>

        </div>
    </div>
</body>
</html>
