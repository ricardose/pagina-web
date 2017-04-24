<?php
	$rut = $_GET['rut'];
	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellidos'];
	$correo = $_GET['correo'];
	$telefono = $_GET['telefono'];
	$tarjeta = $_GET['tarjeta'];
	$ntarjeta = $_GET['ntarjeta'];

	require('phpmailer/PHPMailerAutoload.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->Username = "freshsoundstore@gmail.com";
	$mail->Password = "guitarra123";
	$mail->setFrom('freshsoundstore@gmail.com', 'Fresh Sounds');
	$mail->addAddress($correo, $nombre);
	$mail->Subject = "Comprobante";
	$mail->isHTML(true);
	$mail->Body = '<a href="http://localhost/web/comprobante.php?rut=' . $rut . '&nombre=' . $nombre . '&apellidos=' . $apellidos . '&correo=' . $correo . '&telefono=' . $telefono . '">Comprobante</a>';
	if ($mail->send()) {
	print('Correo enviado exitosamente.') ;
	} else {
	print('Error: ' . $mail->ErrorInfo) ;
	}
?>
