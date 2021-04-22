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
    $mail->SMTPDebug = 0;                                 // Habilitar salida de depuración detallada
    $mail->isSMTP();                                      // Configurar el remitente para usar SMTP
    $mail->Host       = 'mail.ateneaglobal.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mercadeo@ateneaglobal.com';                     // SMTP username
    $mail->Password   = 'TerraNullus45**';                           // Contraseña SMTP
    $mail->SMTPSecure = 'ssl';                            // Habilitar encriptación SSL, TLS también es aceptado con el puerto 587
    $mail->Port = 465;                                    // TCP puerto para conectarse

    //Destinatarios
    $mail->setFrom('mercadeo@ateneaglobal.com', 'Atenea Web Service');          //Este es el correo electrónico desde el que envía su formulario
    $mail->addAddress( 'mercadeo@ateneaglobal.com', 'Atenea Web Service'); // Agregar una dirección de destinatario
    //$mail->addAddress('contacto@example.com');               // Nombre es opcional
    //$mail->addReplyTo('info@example.com', 'Información');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Archivos adjuntos
    //$mail->addAttachment('/var/tmp/archivo.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/imagen.jpg', 'nuevo.jpg');    // Nombre opcional

    $htm='<h1>'.$_POST['name'].'</h1>';
    $htm.='<h1>'.$_POST['telefono'].'</h1>';
    $htm.='<h1>'.$_POST['email'].'</h1>';
    $htm.='<h1>'.$_POST['country'].'</h1>';
    $htm.='<h1>'.$_POST['service'].'</h1>';
    //Contenido
    $mail->isHTML(true);                                  // Establecer formato de correo electrónico a HTML
    $mail->Subject = 'Atenea Global Service';
    $mail->Body    = $htm;
    //$mail->AltBody = 'Este es el cuerpo en texto plano para clientes de correo no HTML';

    $mail->send();

    //Retorno cliente 
    $mail->setFrom('mercadeo@ateneaglobal.com', 'Atenea Web Service');         //Este es el correo electrónico desde el que envía su formulario
    $mail->addAddress( $_POST['email'],$_POST['name']); // Agregar una dirección de destinatario
    //$mail->addAddress('contacto@example.com');               // Nombre es opcional
    //$mail->addReplyTo('info@example.com', 'Información');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Archivos adjuntos
    //$mail->addAttachment('/var/tmp/archivo.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/imagen.jpg', 'nuevo.jpg');    // Nombre opcional

    $htm='<b> Saludos, </b>
    <br>
    <p> Gracias por comunicarse con Atenea Global Services. Su solicitud será atendida por uno de nuestros
    ejecutivos de cuenta a la brevedad posible. </p>

    <p> Estamos a su orden. </p> ' ;
    //Contenido
    $mail->isHTML(true);                                  // Establecer formato de correo electrónico a HTML
    $mail->Subject = 'Atenea Global Service';
    $mail->Body    = $htm;
    //$mail->AltBody = 'Este es el cuerpo en texto plano para clientes de correo no HTML';

    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no pudo ser enviado.';
    echo 'Error de correo: ' . $mail->ErrorInfo;
}
?>
