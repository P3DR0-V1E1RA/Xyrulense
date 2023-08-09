<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $to = "sabioscraft29@gmail.com"; // Insira o email para onde deseja enviar a mensagem
    $assunto = "Mensagem de contato do site";
    $headers = "From: $email";

    $enviado = mail($to, $assunto, $mensagem, $headers);

    if ($enviado) {
        echo "Mensagem enviada!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>
