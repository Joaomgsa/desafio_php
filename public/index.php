<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Teste de Programação</title>
</head>
<body>
    <section class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-primary">Teste de Programação</h1>
                    <p class="text-start">A Coleta Seletiva: Um Pilar para Cidades Sustentáveis</p>    
                    <p class="text-center">A coleta seletiva se ergue como um pilar fundamental para a construção de cidades mais sustentáveis e saudáveis. Através da separação consciente dos resíduos, damos vida a um ciclo virtuoso que beneficia o meio ambiente, a economia e a sociedade.</p> 
                    <p class="text-center">Um Planeta Mais Verde: Ao reciclar, reduzimos drasticamente a quantidade de lixo enviada aos aterros sanitários, diminuindo a poluição do solo e dos lençóis freáticos. Preservamos recursos naturais finitos, como árvores e minérios, e combatemos as mudanças climáticas ao reduzir a emissão de gases do efeito estufa.</p>   
                    <p class="text-center">Uma Economia Circular: A coleta seletiva impulsiona a economia circular, gerando renda e empregos através da reciclagem e reutilização de materiais. Cooperativas de catadores e empresas de reciclagem são beneficiadas, impulsionando o desenvolvimento local.</p>   
                    <p class="text-center">Uma Sociedade Consciente: A prática da coleta seletiva promove a educação ambiental e a conscientização sobre a responsabilidade individual com o futuro do planeta. Incentiva o consumo consciente e a busca por soluções sustentáveis, construindo uma sociedade mais engajada na proteção ambiental.</p>
                    <p class="text-center">Cidades Vibrantes e Saudáveis: Cidades com coleta seletiva eficiente apresentam ruas mais limpas, menos doenças transmitidas por vetores e ar mais puro. A qualidade de vida dos cidadãos aumenta, criando um ambiente propício para o bem-estar e a prosperidade.</p>
                    <p class="text-center">A coleta seletiva é, portanto, um investimento crucial para o presente e o futuro das nossas cidades. Ao adotá-la como um hábito diário, cada cidadão contribui para a construção de um futuro mais verde, justo e próspero para todos.</p>
                    <p class="text-center">Quer saber mais informações sobre Coleta Seletiva? Preencha as suas informações abaixo:</a></p>
                </div>
            </div>
        </div>
        <div>
            <form action="./php/enviar.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="validacao.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</body>
</html>