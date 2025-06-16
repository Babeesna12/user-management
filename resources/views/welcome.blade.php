<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Laravel</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Font -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8f9fa;
        }
        .welcome-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
</head>
<body>

<div class="welcome-container text-center">
    <h1 class="mb-4">Welcome to user-management</h1>
    <p class="mb-4 text-muted">Build modern applications with simplicity and power.</p>

    @if (Route::has('login'))
        <div class="d-flex justify-content-center gap-2">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
