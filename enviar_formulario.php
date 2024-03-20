<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "contadoredgargonzalez@gmail.com"; // Reemplaza con tu dirección de correo electrónico

    $asunto = "Mensaje desde formulario de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $headers = "From: $nombre <$email>";

    mail($destinatario, $asunto, $contenido, $headers);

    // Redirecciona después de enviar el correo
    header('Location: gracias.html');
}
?>
