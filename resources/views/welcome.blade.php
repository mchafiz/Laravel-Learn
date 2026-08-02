<!-- resources/views/welcome.blade.php -->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hello Laravel</title>
</head>
<body>
    <!-- Menampilkan teks dengan escaping untuk mencegah XSS -->
    <h1>{{ $message }}</h1>

    <!-- Contoh logika Blade: jika ada daftar, tampilkan -->
    @if(!empty($items))
        <ul>
            @foreach($items as $item)
                <li>{{ $item }}</li> <!-- mencetak isi item -->
            @endforeach
        </ul>
    @else
        <p>Tidak ada item.</p>
    @endif
</body>
</html>