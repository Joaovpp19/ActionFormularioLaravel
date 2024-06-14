<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #6c757d;
        }
        .container-custom {
            max-width: 1500px;
            margin: auto;
            padding: 20px;
        }
        .navbar {
            margin-bottom: 7px;
        }
        .navbar-brand {
            color: #ffcc99;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .jumbotron {
            background-color: #ffffff;
            padding: 2rem 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .jumbotron .display-4 {
            font-size: 2.5rem;
            font-weight: bolder;
        }

        .jumbotron p.lead {
            font-size: 1.25rem;
            font-family:Arial, Helvetica, sans-serif;
        }

        .navbar-nav .nav-link {
            color: black;
            font-weight: 400;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #6c757d;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #6c757d;
            border-color:black;
            font-weight: 600;
            font-size: 1.1rem;
            font-weight: bold;
            padding-bottom: 5px;
            padding-top: 5px;
            
        }

    </style>
</head>
<body>
<div class="container-custom">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            &nbsp; &nbsp; &nbsp;
            <a class="navbar-brand" href="{{ route('principal') }}">Culinária</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <li class="nav-item"><a class="nav-link" href="{{ route('principal') }}">Principal</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('quemsomos') }}">Quem Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="jumbotron mt-4">
    <div class="form-container mt-4">
        <h1>Contato</h1>
        <form action="{{ url('/contato.result') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome" class="form-label">nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="telefone" class="form-label">telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="endereco" class="form-label">endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
            <div class="form-group">
                <label for="sexo" class="form-label">sexo</label>
                <select class="form-select" id="sexo" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Enviar</button>
        </form>
    </div>
        </div>
</body>
</html>