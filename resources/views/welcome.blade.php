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
            background: url('https://lh3.googleusercontent.com/-E4OrCZThRvY/W_6rnBmuoPI/AAAAAAAAA5Q/4JwyT-fdsgkX4HH5k8ba7JsnkmYpUguEQCLcBGAs/s1600/background.jpg&quot;') no-repeat center center/cover;
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
            margin-top: 30px;
        }

        .btn {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            font-size: 1em;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #333;
            color: #fff;
        }

        .btn-primary:hover {
            background: #555;
        }

        .btn-secondary {
            background: #fff;
            color: #333;
        }

        .btn-secondary:hover {
            background: #ddd;
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
        <h1>Welcome to blogwan!</h1>
        <h2><span>buat karya dari tulisanmu</span></h2>
        <div class="btn-container">
        </div>
    </div>
</body>
</html>
