<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
</head>
<body>
    <h2>Selamat datang, {{ Auth::user()->name }}</h2>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
