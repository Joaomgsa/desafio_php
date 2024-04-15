/**
 * Script PHP para enviar e-mails a partir de um formulário de contato.
 * Ainda é necessário adicionar validações e melhorias de segurança.
 */

<?php
// Definir o endereço de e-mail de destino
$destino = "seuemail@exemplo.com";

// Obter os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Validar os dados recebidos
if(empty($nome) || empty($email) || empty($mensagem)) {
    die('Por favor, preencha todos os campos.');
}

// Preparar a mensagem de e-mail
$corpo = "Nome: $nome\n";
$corpo .= "Email: $email\n";
$corpo .= "Mensagem: $mensagem\n";

// Enviar o e-mail
if(mail($destino, 'Formulário de Contato', $corpo)) {
    echo 'Mensagem enviada com sucesso!';
} else {
    echo 'Erro ao enviar mensagem.';
}
?>