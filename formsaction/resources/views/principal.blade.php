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

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; 
            gap: 1rem; 
            padding: 1rem;
        }

        .gallery img {
            flex: 1 1 calc(33.333% - 2rem); 
            max-width: 100%; 
            border-radius: 10px; 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
        }

        .gallery img {
            object-fit: cover; 
            height: 350; 
            width: 450px;
        }

        .asset {
            max-width: 750px;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 1.25rem;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            font-size: 17px;
        }
        footer p, footer a {
            color: #6c757d;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container-custom">
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
            <h1 class="display-4">Bem-vindo ao Mundo da Culinária!</h1>
            <p class="lead">Aqui você encontra as melhores receitas e dicas de culinária.</p>
            <hr class="my-4">
            <p>Explore nossas receitas e descubra novos sabores.</p>
        </div>

        <section class="mt-5">
            <h2 class="section-title">Sobre o Nosso Site</h2>
            <p class="section-content">Nosso site é dedicado a compartilhar receitas incríveis e dicas úteis para cozinheiros de todos os níveis. Seja você um iniciante ou um chef experiente, temos algo para você!</p>
        </section>
        <section class="gallery mt-5">
            <div class="gallery">
                    <img src="{{ asset('img/culinaria1.jpg') }}" class="img-fluid1" alt="Imagem 1">
                
                    <img src="{{ asset('img/culinaria2.jpg') }}" class="img-fluid1" alt="Imagem 2">
                
                    <img src="{{ asset('img/culinaria3.jpg') }}" class="img-fluid1" alt="Imagem 3">
                </div>
            </div>
        </section>
        <section class="mt-5">
            <h2 class="section-title">Receitas Populares</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/culinaria4.jpg') }}" class="card-img-top" alt="Receita 1">
                        <div class="card-body">
                            <h5 class="card-title">Ratatouille</h5>
                            <p class="card-text">Um prato tradicional da culinária francesa, cujo o nome significa picar ou
                            triturar, perfeito para qualquer refeição.</p>
                            <a href="https://www.tudogostoso.com.br/receita/135302-ratatouille.html" class="btn btn-primary">Ver Receita</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/culinaria6.jpg') }}" class="card-img-top" alt="Receita 2">
                        <div class="card-body">
                            <h5 class="card-title">Pizza Caseira</h5>
                            <p class="card-text">uma massa gostosa e crocante feita de forma caseira para você comer sozinho ou acompanhado</p>
                            <a href="https://receitas.globo.com/receitas-da-tv/cozinha-pratica/massa-de-pizza-caseira-gnt.ghtml" class="btn btn-primary">Ver Receita</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/culinaria5.jpg') }}" class="card-img-top" alt="Receita 3">
                        <div class="card-body">
                            <h5 class="card-title">Picadinho de Carne com Legumes</h5>
                            <p class="card-text">Carne desfiada ao ponto com alguns legumes e frutas para trazer suculência e sabor ao prato</p>
                            <a href="https://receitasdemarchi.com.br/pratos-principais/picadinho-de-carne-com-legumes" class="btn btn-primary">Ver Receita</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="container footer-conta">
            <p class="mb-2"><a href="#">Voltar ao topo</a></p>
            <p>João Vitor - 3°DS Manhã, 2024.</p>
            <p>Todos os direitos reservados. &middot; <a href="https://github.com/Joaovpp19">Privacidade</a> &middot;
            <a href="https://github.com/Joaovpp19">Termos</a></p>
        </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
