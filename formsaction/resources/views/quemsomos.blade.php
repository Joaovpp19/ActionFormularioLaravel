<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Quem Somos</h1>
        <p>Informações sobre a empresa.</p>
        <nav>
            <a href="{{ route('principal') }}">Home</a>
            <a href="{{ route('quemsomos') }}">Quem Somos</a>
            <a href="{{ route('contato') }}">Contato</a>
        </nav>
    </div>
</body>
</html>
