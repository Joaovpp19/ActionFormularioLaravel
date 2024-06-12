<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinária</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #6c757d;
        }

        .container-custom {
            max-width: 1500px;
            margin: auto;
        }
        
        .navbar {
            margin-bottom: 7px;
        }

        .navbar-brand {
            color: #ffcc99;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: black;
            font-weight: 400;
            font-size: 1.1rem;
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

        .section-title {
            margin-top: 40px;
            margin-bottom: 20px;
            line-height: 0.5;
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
        }

        .section-content {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #ffffff;
            text-align: center;
            margin-bottom: 40px;
        }

        .gallery img {
            line-height: 0.5;
            max-width: 750px;
            padding: 1rem 2rem;
            margin-bottom: 70px;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card {
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 1.25rem;
        }
    </style>
</head>
<body>
    <div class="container-custom">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('principal') }}">Culinária</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('principal') }}">Principal</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('quemsomos') }}">Quem Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contato') }}">Contato</a></li>
                </ul>
            </div>
            </div>
        </nav>

        <!-- Jumbotron -->
        <div class="jumbotron mt-4">
            <h1 class="display-4">Bem-vindo ao Mundo da Culinária!</h1>
            <p class="lead">Aqui você encontra as melhores receitas e dicas de culinária.</p>
            <hr class="my-4">
            <p>Explore nossas receitas e descubra novos sabores.</p>
        </div>

        <!-- Seção de Introdução -->
        <section class="mt-5">
            <h2 class="section-title">Sobre o Nosso Site</h2>
            <p class="section-content">Nosso site é dedicado a compartilhar receitas incríveis e dicas úteis para cozinheiros de todos os níveis. Seja você um iniciante ou um chef experiente, temos algo para você!</p>
        </section>
        <section class="gallery mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/culinaria1.jpg') }}" class="img-fluid" alt="Imagem 1">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/culinaria2.jpg') }}" class="img-fluid" alt="Imagem 2">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/culinaria3.jpg') }}" class="img-fluid" alt="Imagem 3">
                </div>
            </div>
        </section>

        <!-- Receitas Populares -->
        <section class="mt-5">
            <h2 class="section-title">Receitas Populares</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Receita 1">
                        <div class="card-body">
                            <h5 class="card-title">Receita 1</h5>
                            <p class="card-text">Descrição da Receita 1.</p>
                            <a href="#" class="btn btn-primary">Ver Receita</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Receita 2">
                        <div class="card-body">
                            <h5 class="card-title">Receita 2</h5>
                            <p class="card-text">Descrição da Receita 2.</p>
                            <a href="#" class="btn btn-primary">Ver Receita</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Receita 3">
                        <div class="card-body">
                            <h5 class="card-title">Receita 3</h5>
                            <p class="card-text">Descrição da Receita 3.</p>
                            <a href="#" class="btn btn-primary">Ver Receita</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
