<?php 
	if(isset($_POST['submit'])){
		$to = "iva.eleven@gmail.com";
		$from = $_POST['email'];
		$nombre_apellido = $_POST['nombre_apellido'];
		$subject = "Mensaje enviado al Web CV de Ivana";
		$message = $nombre_apellido . " escribió:" . "\n\n" . $_POST['mensaje'];
		$message2 = "Su mensaje fue enviado con éxito. \n\n" . $_POST['mensaje'];
		
		mail($to, $subject, utf8_decode($message));
		mail($from, $subject, utf8_decode($message2));
		header('Location: gracias.php');
    }
?>