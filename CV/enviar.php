<?php 
if (isset($_POST['enviar'])) {
    if ( !empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje']) ) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        // Datos para el correo
        $destinatario = "taielalen56@hotmail.com";
        $asunto = "Contacto desde nuestra web";
        $header = "De: $nombre" . "\r\n";
        $header .= "Correo: $correo" . "\r\n";
        $header .= "Mensaje: $mensaje";
        @$mail = mail($destinatario, $asunto, $header);
        if($mail) {
            echo "<h4>Mail enviado</h4>";
        }
    }
}