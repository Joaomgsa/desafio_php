<?php

// Inicia a sessão
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos CSS Nativo e Bootstrap-->
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Cabeçalho da Página-->
    <header>
        <title>Teste de Programação</title>
    </header>

    <!-- Barra de Navegação-->
    <div class="container-fluid bg-primary fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex align-items-center">
                <!-- Botão de alternância de navegação -->
                <img src="./img/logopref.png" alt="Reciclagem" width="53" height="26" id="imagem-mobile">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <!-- Itens do menu -->
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="./img/logopref.png" alt="Reciclagem" width="53" height="26" id="imagem-desktop">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/Joaomgsa">Contato</a>
                        </li>
                    </ul>
                    <div class="ms-auto">
                        <a href="https://github.com/Joaomgsa/Limpeza">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Fim da Barra de Navegação-->
</head>

<body>
    <!-- Conteúdo da Página-->
    <main class="bg-black text-white opacity-half" style="--bs-bg-opacity: .5;" >
        <section class="container d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-md-12">
                    <article class="justify-content-center align-items-center">
                        <div class="bg-black p-3 opacity-quarter" style="--bs-bg-opacity: .4;">
                            <div class="mt-5">
                                <h1 class="text-primary text-center">Coleta Seletiva</h1>
                                <p class="text-start fs-4 text-center">Um Pilar para Cidades Sustentáveis</p>
                            </div>
                            <div class="row align-items-start">
                                <div class="col d-flex flex-column align-items-center">
                                    <span class="fa-3x"><i class="fas fa-building"></i></span>
                                    <h3>Cidades Inteligentes</h3>
                                    <p style="width: 18rem;">Através da separação consciente dos resíduos, damos vida a um ciclo virtuoso que beneficia o meio ambiente,
                                        a economia e a sociedade.</p>
                                    <a href="#saiba-mais" class="icon-link">Saiba mais</a>
                                </div>
                                <div class="col d-flex flex-column align-items-center">
                                    <span class="fa-3x"><i class="fas fa-leaf"></i></span>
                                    <h3>Um Planeta Verde:</h3>
                                    <p style="width: 18rem;">Ao reciclar, reduzimos drasticamente a quantidade de lixo enviada aos aterros sanitários, diminuindo a poluição do solo e dos lençóis freáticos.</p>
                                    <a href="#saiba-mais" class="icon-link">Saiba mais</a>
                                </div>
                                <div class="col d-flex flex-column align-items-center">
                                    <span class="fa-3x"><i class="fas fa-globe-africa"></i></span>
                                    <h3>Sustentabilidade:</h3>
                                    <p style="width: 18rem;"> A coleta seletiva é, portanto, um investimento crucial para o presente e o futuro das nossas cidades. Contribuindo para um futuro próspero.</p>
                                    <a href="#saiba-mais" class="icon-link">Saiba mais</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>


        <!-- Formulário de Contato-->
        <section class="container p-3 d-flex justify-content-center align-items-center">
            <div class="card bg-secondary card-custom">
                <div class="card-body">
                    <h6 class="card-title">Para saber mais insira suas informações abaixo:</h6>
                    <form action="./php/enviar.php" method="post" id="form-saiba-mais">
                        <div class="mb-2 input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <label for="nome" class="form-label visually-hidden">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        </div>
                        <div class="mb-2 input-group">
                            <span class="input-group-text"><i class="fas fa-mail-bulk"></i></span>
                            <label for="email" class="form-label visually-hidden">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="mail@dominio.com.br" required>
                        </div>
                        <div class="mb-2 input-group">
                            <span class="input-group-text"><i class="fas fa-comments"></i></span>
                            <label for="mensagem" class="form-label visually-hidden">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Conte aqui o que deseja saber" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer>
        <div class="container-fluid bg-primary">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center text-white">© 2024 Prefeitura. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fim do Footer-->
</body>

</html>