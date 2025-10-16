<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Genres</title>
</head>
<body>
    <h3>Ini adalah halaman genre dari buku.</h3>

    @foreach ($genres as $genre)
    <ul>
        <li>{{ $genre['name'] }}</li>
        <li>{{ $genre['description'] }}</li>
    </ul>
    @endforeach
</body>
</html>