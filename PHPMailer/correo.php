<?php
// Importar clases PHPMailer en el espacio de nombres global
// Deben estar en la parte superior de su script, no dentro de una función
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Pasar `true` habilita excepciones
try {
    //Configuraciones de servidor
    $mail->SMTPDebug = 2;                                 // Habilitar salida de depuración detallada
    $mail->isSMTP();                                      // Configurar el remitente para usar SMTP
    $mail->Host = 'smtp.dreamhost.com';                  // Especificar servidores SMTP principales y de respaldo
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'grupobinar@gmail.com';                     // SMTP username
$mail->Password   = 'UVDhN/08hB';                           // Contraseña SMTP
    $mail->SMTPSecure = 'ssl';                            // Habilitar encriptación SSL, TLS también es aceptado con el puerto 587
    $mail->Port = 465;                                    // TCP puerto para conectarse

    //Destinatarios
    $mail->setFrom('grupobinar@gmail.com', 'Mailer');          //Este es el correo electrónico desde el que envía su formulario
    $mail->addAddress('brujidat@gmail.com', 'Juan Usuario'); // Agregar una dirección de destinatario
    //$mail->addAddress('contacto@example.com');               // Nombre es opcional
    //$mail->addReplyTo('info@example.com', 'Información');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Archivos adjuntos
    //$mail->addAttachment('/var/tmp/archivo.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/imagen.jpg', 'nuevo.jpg');    // Nombre opcional

    //Contenido
    $mail->isHTML(true);                                  // Establecer formato de correo electrónico a HTML
    $mail->Subject = 'La línea de asunto va aquí';
    $mail->Body    = 'El texto del cuerpo va aquí';
    //$mail->AltBody = 'Este es el cuerpo en texto plano para clientes de correo no HTML';

    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no pudo ser enviado.';
    echo 'Error de correo: ' . $mail->ErrorInfo;
}
?>
