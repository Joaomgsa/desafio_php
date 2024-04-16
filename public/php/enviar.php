
<?php
// Importar PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail= new PHPMailer(true);


/**
 * Script PHP para enviar e-mails a partir de um formulário de contato.
 * Ainda é necessário adicionar validações e melhorias de segurança.
 */

try
{
    // Obter dados do POST e limpar a entrada
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, 'mensagem');

    // Verificar se os campos estão vazios
    if(empty($nome) || empty($email) || empty($mensagem)) {
        throw new Exception('Por favor, preencha todos os campos.');
    }
    
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = 'joaomgsae@gmail.com';
    $mail->Password = 'gdjnsvotidvutghc';
    $mail->SMTPSecure = 'tls';

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    $mail->setFrom('joaomgse@gmail.com', 'Mailer Service');
    $mail->addAddress($_POST['email'], $_POST['nome']);

    //Corpo da Mensagem
    $mail->isHTML(true);
    $mail->Subject = 'Confirmação de Contato';
    $mail->Body = 'Olá, ' . $nome . '! Recebemos sua mensagem e em breve entraremos em contato com mais informações sobre a coleta seletiva.';
    $mail->AltBody = 'Olá, ' . $nome . '! Recebemos sua mensagem e em breve entraremos em contato com mais informações sobre a coleta seletiva.';
    $mail->send();
    
    // Redirecionar para a página de sucesso - Ajustar
    header('Location: ../public/success.php');

}

catch (Exception $e)
{
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

?>