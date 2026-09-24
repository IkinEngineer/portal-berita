<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Dashboard</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">Portal Berita</a>
            <div class="">
                @if (session()->has('key'))
                    <a class="btn btn-outline-secondary" href="">Logout</a>
                @else
                    <a class="btn btn-outline-secondary"  href="/login">Login</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center mt-auto bg-light py-3">
        <p>&copy;LSP-2026 | Ainur Rozikin</p>
    </footer>
</body>
</html>