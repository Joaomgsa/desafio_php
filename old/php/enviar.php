/**
 * Script PHP para enviar e-mails a partir de um formulário de contato.
 * Ainda é necessário adicionar validações e melhorias de segurança.
 */

<?php
// Importar PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail= new PHPMailer(true);


try
{
    echo 'Mensagem enviada com sucesso!';
    // $nome = $_POST['nome'];
    // $email = $_POST['email'];
    // $mensagem = $_POST['mensagem'];

    // if(empty($nome) || empty($email) || empty($mensagem)) {
    //     die('Por favor, preencha todos os campos.');
    // }
    
    // $mail->isSMTP();
    // $mail->SMTPAuth = true;
    // $mail->Username = 'joaomgse@gmail.com';
    // $mail->Password = 'nw_q2613x';
    // $mail->SMTPSecure = 'tls';

    // $mail->Host = 'smtp.gmail.com';
    // $mail->Port = 587;

    // $mail->setFrom('joaomgse@gmail.com', 'Mailer Serviço');
    // $mail->addAddress($_POST['email'], $_POST['nome']);

    // //Corpo da Mensagem
    // $mail->isHTML(true);
    // $mail->Subject = 'Confirmação de Contato';
    // $mail->Body = 'Olá, ' . $_POST['nome'] . '! Recebemos sua mensagem e em breve entraremos em contato com mais informações sobre a coleta seletiva.';
    // $mail->AltBody = 'Olá, ' . $_POST['nome'] . '! Recebemos sua mensagem e em breve entraremos em contato com mais informações sobre a coleta seletiva.';
    // $mail->send();

}

catch (Exception $e)
{
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
?>