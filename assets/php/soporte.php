<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asusnto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@examen.com" . "\r\n";
        $header = "Reply-TO: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();
        $mail = mail($email, $asunto, $msg, $header);
        if ($mail) {
            echo "<h4> Enviado exitosamente el correo<h4>";
        }
    }
}