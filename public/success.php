<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <title>Teste de Programação</title>
    </header>
    <div class="container-fluid bg-primary">
        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex align-items-center">
                <img src="./img/logopref.png"  class="navbar-brand" alt="Reciclagem" width="75" height="37">
                <!-- Botão de alternância de navegação -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <!-- Itens do menu -->
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./img/logopref.png" alt="Reciclagem" width="75" height="37">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</head>
<body>
    <main class="bg-black text-white" style="--bs-bg-opacity: .5;">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Alterar texto -->
                <article class="justify-content-center align-items-center">
                   <div class="bg-black p-3" style="--bs-bg-opacity: .4;">
                    <div class="align-items-center" >
                        <h1 class="text-primary">Coleta Seletiva</h1>
                        <p class="text-start fs-4">Um Pilar para Cidades Sustentáveis</p>
                    </div>
                    <div class="row align-items-start">
                        <div class="col d-flex flex-column align-items-center">
                            <span class="fa-3x"><i class="fas fa-building"></i></span>
                            <h3>Coleta Seletiva</h3>
                            <p style="width: 16rem;">Solicitação enviada com sucesso</p>
                            <a href="/" class="icon-link">Saiba mais</a>
                        </div>
                    </div> 
                </article>
            </div>
        </div>
    </section>
    
    <!-- Alterar texto do footer-->
    <footer>
        <div class="container-fluid bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">© 2024 Limpeza. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>