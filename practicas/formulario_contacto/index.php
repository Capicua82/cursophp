<?php

$errores ="";
$enviado = "";

if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZER_STRING);        
    } else {
        $errores .= "Por favor ingresa un nombre <br />";
    }

    if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		// Comprobamos que sea un correo valido
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores.= "Por favor ingresa un correo valido <br />";
		}
	} else {
		$errores.= 'Por favor ingresa un correo <br />';
	}

    if (!empty($mensaje)) {
		// Podemos sanear la cadena de texto con filter_var, pero queremos que en el mensaje los signos se conviertan en entidades HTML
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores.= 'Por favor ingresa el mensaje.<br />';
	}

 // Comprobamos si hay errores, si no hay entonces enviamos.
	if (!$errores) {
		$enviar_a = 'moramamba@gmail.com';
		$asunto = 'Correo enviado desde miPagina.com';
		$mensaje = "De: $nombre \n";
		$mensaje.= "Correo: $correo \n";
		$mensaje.= 'Mensaje: ' . $_POST['mensaje'];

		// mail($enviar_a, $asunto, $mensaje);
		$enviado = 'true';
	}
}


require 'index.view.php';

?>