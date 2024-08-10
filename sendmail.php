<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "pablogianferro@gmail.com"; // Cambia esto a tu dirección de correo
    $subject = "Landing: Nuevo mensaje del formulario de contacto";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $email_body = "Has recibido un nuevo mensaje de contacto.\n\n";
    $email_body .= "Nombre: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Phone: $phone\n\n";
    $email_body .= "Mensaje:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Gracias, tu mensaje ha sido enviado.";
    } else {
        echo "Lo sentimos, algo salió mal. Por favor intenta nuevamente.";
    }
}
?>