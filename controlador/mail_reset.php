<?php
// $para      = '2c.edgar.barron@gmail.com';
// $asunto    = 'El asunto del correo';
// $descripcion   = 'Este es el cuerpo del correo';
// $de = 'From: barronm13eo@gmail.com';

// if (mail($para, $asunto, $descripcion, $de)){
// echo "Correo enviado satisfactoriamente";
// }

// Varios destinatarios
$para  =$email . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Restablecer contraseña';
$codigo= rand(1000,9999);


// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer contraseña</title>
</head>
<body>
    <h1>SIUT</h1>
    <div style="text-align:center; background-color:#00a886">
        <p>Restablecer contraseña</p>
        <h3>'.$codigo.'</h3>
        <p> <a 
            href="http://localhost/SIUT%20WEB/vistas/reset.php?email='.$email.'&token='.$token.'"> 
            Para restablecer da click aqui </a> </p>
        <p> <small>Si usted no envio este codigo favor de omitir</small> </p>
    </div>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
$enviado =false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado=true;
}

?>
