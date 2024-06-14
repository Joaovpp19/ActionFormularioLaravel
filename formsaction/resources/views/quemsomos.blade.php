<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #6c757d;
        }  
        .p {
           padding: 560px;
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
        .float-right {
            color: ff851b;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 560px;
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
            box-shadow: 4 4px 15px rgba(0, 0, 0, 0.1); 
            border-color: #6c757d;
        }

        .gallery img {
            object-fit: cover;  
            height: 350;  
            width: 450px;
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
            <h1 class="display-4">Quem somos?</h1>
        <div class="content">
            <p>&nbsp; &nbsp; &nbsp; Somos uma equipe apaixonada por culinária, dedicada a trazer as melhores receitas, dicas e truques culinários para você. Nossa missão é inspirar e capacitar amantes da cozinha de todos os níveis a criar pratos deliciosos e memoráveis.
            Nossa equipe é composta por chefs experientes, críticos gastronômicos e entusiastas da culinária que trabalham juntos para oferecer um conteúdo diversificado e de alta qualidade.
            Estamos sempre em busca de novas tendências e técnicas para compartilhar com nossos seguidores.
            Junte-se a nós nesta jornada culinária e descubra o prazer de cozinhar com paixão e criatividade!</p>
            <div class="gallery">
                    <img src="{{ asset('img/equipeculinaria.jpg') }}" class="img-fluid1" alt="Imagem 1">
                
                    <img src="{{ asset('img/culinaria2.jpg') }}" class="img-fluid1" alt="Imagem 2">
                </div></div>
                <footer class="container footer-conta">
            <p class="mb-2"><a href="#">Voltar ao topo</a></p>
            <p>João Vitor - 3°DS Manhã, 2024.</p>
            <p>Todos os direitos reservados. &middot; <a href="https://github.com/Joaovpp19">Privacidade</a> &middot;
            <a href="https://github.com/Joaovpp19">Termos</a></p>
        </footer>

</body>
</html>
