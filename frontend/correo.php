<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) && !empty($_POST['correo'])) {
        $name = $_POST['nombre'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: noreply@example.com". "\r\n";
        $header.= "Reply-To: noreply@example.com". "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = mail($correo,$asunto,$mensaje,$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}

?>