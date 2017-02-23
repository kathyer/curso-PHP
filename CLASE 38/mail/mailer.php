<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php
	require_once("PHPMailer\PHPMailerAutoload.php");

	$mail = new PHPMailer;

	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html';
	$mail->Host = "smtp.gmail.com"; // Servidor SMTP
	$mail->Port = 587; // Puerto
	$mail->SMTPSecure = "TLS"; // Protocolo de seguridad

	$mail->SMTPAuth = true; // Especificar que tiene autentificación
	$mail->Username = "XXXXX@gmail.com";
	$mail->Password = "YYYYY";
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = '8bit';

	/* Dirección desde la que se envía el correo */
	$mail->setFrom("XXXXXX@gmail.com", "Jose Luis Martín");
	/* Destinatario. Se pueden añadir tantas direcciones como se quiera, ejecutando la misma instrucción */
	$mail->addAddress("correo@email.com", "Jose");

	/* Indica que el mensaje del correo contiene html */
	$mail->isHTML(true);

	$mail->Subject = "titulo del correo";
	$mail->Body = "<h1>Cuerpo del mensaje</h1><h3>Este es el cuerpo del mensaje y el contenido del mismo</h3>";

	if (!$mail->send())
	{
		echo "<p class=\"alert alert-danger\">El correo no puede enviarse <br/>Mailer error: $mail->ErrorInfo</p>";
	}
	else
	{
		echo "<p class=\"alert alert-success\">Correo enviado perfectamente</p>";
	}

	$mail->SmtpClose();

		
?>