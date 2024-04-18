
<?php
// Importar PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail= new PHPMailer(true);
session_start();
$_SESSION["nome"] = filter_input(INPUT_POST, 'nome');
$_SESSION["email"] = filter_input(INPUT_POST, 'email');


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
    $teste = getenv('TESTE');

    // Verificar se os campos estão vazios
     if(empty($nome) || empty($email) || empty($mensagem)) {
         throw new Exception('Por favor, preencha todos os campos.');
    }
    
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = 'mailerdevjoaomgsa@gmail.com';
    $mail->Password = 'dfbcceahyclibrxc';
    $mail->SMTPSecure = 'tls';
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    // Informações de envio
    $mail->setFrom('mailerdevjoaomgsa@gmail.com', 'Mailer Service');
    $mail->addAddress($_POST['email'], $_POST['nome']);

    //Corpo da Mensagem
    $subject = 'Confirmação de Contato';
    $body = 'Olá, ' . $nome . '!<br><br> Recebemos sua mensagem e em breve entraremos em contato com mais informações sobre a coleta seletiva.<br>'.'Usuário :'. $nome.'<br><br>'. 'Mensagem: <br>' .$mensagem . '<br><br>Atenciosamente, Equipe Atendimento.';
    $altbody = 'Olá, ' . $nome . '! Recebemos sua mensagem e em breve entraremos em contato com mais informações sobre a coleta seletiva.';
    
    // Enviar mensagem
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = $altbody;
    $mail->send();
    
    // Redirecionar para a página de sucesso - Ajustar
    header('Location:  ../../success.php');


}

catch (Exception $e)
{
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

?>