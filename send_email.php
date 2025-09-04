<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'innovabyte.es'; // Servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'luiscarlos@innovabyte.es'; // Usuario SMTP
        $mail->Password = '27979699$C'; // Contraseña SMTP
        $mail->SMTPSecure = 'ssl'; // Seguridad SSL
        $mail->Port = 465; // Puerto SMTP

        // Remitente y destinatario
        $mail->setFrom('web@innovabyte.es', 'InnovaByte');
        $mail->addAddress('luiscarlos@innovabyte.es', 'Luis Carlos'); // Destinatario

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto de la WEB de InnovaByte';
        $mail->CharSet = 'UTF-8';
        $mail->Body    = "Nombre: $name<br>Email: $email<br>Mensaje: $message";
        $mail->AltBody = "Nombre: $name\nEmail: $email\nMensaje: $message";

        $mail->send();
        echo 'El mensaje ha sido enviado';
    } catch (Exception $e) {
        echo "El mensaje no pudo ser enviado. Error: {$mail->ErrorInfo}";
    }
}
