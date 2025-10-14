<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Authors</title>
</head>
<body>
    <h3>Ini adalah halaman penulis dari buku.</h3>

    @foreach ($authors as $item)
    <ul>
        <li>{{ $item['name'] }}</li>
        <li>{{ $item['bio'] }}</li>
    </ul>
    @endforeach
</body>
</html>