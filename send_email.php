<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validar campos
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Configuración del correo
        $to = "byteflow@tutamail.com"; // Reemplaza con tu dirección de correo
        $subject = "Nuevo mensaje de contacto de " . $name;
        $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
        $headers = "From: $email";

        // Enviar correo
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado exitosamente.";
        } else {
            echo "Error al enviar el mensaje. Por favor, intenta nuevamente.";
        }
    } else {
        echo "Por favor, completa todos los campos correctamente.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
