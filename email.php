<?php

if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $name = addslashes($_POST["name"]);
    $email = addslashes($_POST["email"]);
    $message = addslashes($_POST["message"]);

    $to = "destinatario@gmail.com";
    $subject = "ASSUNTO DO EMAIL";
    $body = "Nome: ".$name.
            "\nEmail: ".$email.
            "\nMensagem: ".$message;
    $header = "From: remetente@gmail.com";

    if (mail($to, $subject, $body, $header)) {
        echo "  <script>
                    alert('Email enviado com Sucesso!');
                    window.location = './index.html';
                </script>";
    } else {
        echo    "<script>
                    alert('O Email não pode ser enviado!');
                    window.location = './index.html';
                </script>";
    }
}

?>