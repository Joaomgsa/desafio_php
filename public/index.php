<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Alterar texto -->
    <header>
        <title>Bootstrap</title>
    </header>
    <div class="container-fluid bg-primary-subtle text-primary-emphasis">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Botão de alternância de navegação -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <!-- Itens do menu -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <!-- Trocar logo -->
                                <img src="./img/logo1746.jpeg" alt="Reciclagem" width="30" height="30">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <!-- Outros itens do menu -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</head>

<body>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Alterar texto -->
                <h1 class="text-primary">Coleta Seletiva</h1>
                <article class="justify-content-center align-items-center">
                    <div>
                        <p class="text-start fs-4">A Coleta Seletiva: Um Pilar para Cidades Sustentáveis</p>
                    </div>
                    <p>A coleta seletiva se ergue como um pilar fundamental para a construção de cidades mais sustentáveis e saudáveis. Através da separação consciente dos resíduos, damos vida a um ciclo virtuoso que beneficia o meio ambiente, a economia e a sociedade.
                        Um Planeta Mais Verde: Ao reciclar, reduzimos drasticamente a quantidade de lixo enviada aos aterros sanitários, diminuindo a poluição do solo e dos lençóis freáticos. Preservamos recursos naturais finitos, como árvores e minérios, e combatemos as mudanças climáticas ao reduzir a emissão de gases do efeito estufa.
                        A coleta seletiva é, portanto, um investimento crucial para o presente e o futuro das nossas cidades. Ao adotá-la como um hábito diário, cada cidadão contribui para a construção de um futuro mais verde, justo e próspero para todos.
                    </p>
                    <p>Quer saber mais informações sobre Coleta Seletiva? </p>
                </article>
            </div>
        </div>
    </section>
    <section class="container pb-3 d-flex justify-content-center align-items-center">
        <div class="card" style="width :26rem;">
            <div class="card-body">
                <h6 class="card-title">Preencha as suas informações abaixo:</h6>
                <form action="./php/enviar.php" method="post">
                    <div class="mb-2">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-2">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Alterar texto do footer-->
    <footer>
        <div class="container-fluid bg-primary-subtle text-primary-emphasis">
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