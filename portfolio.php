<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Definir o e-mail do destinatário
    $to = "helobloot@gmail.com";
    
    // Assunto do e-mail
    $subject = "Novo Formulário de Contato";

    // Corpo do e-mail
    $body = "Você recebeu uma nova mensagem do formulário de contato:\n\n";
    $body .= "Nome: $nome\n";
    $body .= "Email: $email\n";
    $body .= "Celular: $celular\n";
    $body .= "Mensagem: $mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n"; // O e-mail de quem está enviando
    $headers .= "Reply-To: $email\r\n"; // Para responder diretamente ao e-mail do remetente

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p>Erro ao enviar a mensagem. Tente novamente mais tarde.</p>";
    }
}
?>