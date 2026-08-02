<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Laravel Code Dojo')</title>
</head>
<body>
    <header>
        <h1>Laravel Code Dojo</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Laravel Code Dojo</p>
    </footer>
</body>
</html>
