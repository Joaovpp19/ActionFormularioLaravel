<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .container-custom {
            max-width: 1000px;
            margin: auto;
        }

        .navbar-nav .nav-link {
            color: black;
            font-weight: 400;
            font-size: 1.1rem;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #6c757d;
            border-color:black;
            font-weight: 500;
            font-size: 1.1rem ;
        }
    </style>
</head>
<body>
    
        <nav>
            <a href="{{ route('principal') }}">Home</a>
            <a href="{{ route('quemsomos') }}">Quem Somos</a>
            <a href="{{ route('contato') }}">Contato</a>
        </nav>
    <div class="container">
        <h1>Contato</h1>
        <form action="{{ url('/contatoresult') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
            <div class="form-group">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
