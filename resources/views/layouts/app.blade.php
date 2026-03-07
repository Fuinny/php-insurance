<!DOCTYPE html>
<html>
<head>
    <title>Insurance System</title>
    @vite(['resources/sass/app.scss'])
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">Insurance</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('owners.index') }}">Owners</a>
            <a class="nav-link" href="{{ route('cars.index') }}">Cars</a>
        </div>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
