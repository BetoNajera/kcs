<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$empresa = $_POST['empresa'];
	$asunto = $_POST['asunto'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= '<li>Favor de ingresar nombre y apellido, es un dato obligatorio</li>';
	}

	if (!empty($empresa)) {
		$empresa = trim($empresa);
		$empresa = filter_var($empresa, FILTER_SANITIZE_STRING);
	}

	if (!empty($asunto)) {
		$asunto = trim($asunto);
		$asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
	}

	if (!empty($telefono)) {
		$telefono = trim($telefono);
		$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
	}

	if (!empty($email)) {
		$email = trim($email);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errores .= '<li>Favor de ingresar un correo válido.</li>';
		}
	} else {
		$errores .= '<li>Favor de ingresar un correo, es un dato obligatorio.</li>';
	}

	if (!empty($mensaje)) {
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	} else {
		$errores .= '<li>Favor de ingresar el mensaje, es un dato obligatorio.</li>';
	}

	if (!$errores) {
		$enviar_a = 'telemarketing2@kcs.pe';
		$subject = 'Información solicitada desde Website';
		$mensaje_preparado = "<b>De:</b> $nombre<br>";
		$mensaje_preparado .= (!empty($empresa) ? "<b>Empresa:</b> $empresa<br>" : "");
		$mensaje_preparado .= (!empty($asunto) ? "<b>Asunto:</b> $asunto<br>" : "");
		$mensaje_preparado .= (!empty($telefono) ? "<b>Teléfono:</b> $telefono<br>" : "");
		$mensaje_preparado .= "<b>E-mail:</b> $email<hr>";
		$mensaje_preparado .= "<b>Mensaje:</b><br>" . $mensaje;

		$headers = "From: $email\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$headers .= "Bcc: dev@formaseideas.com, ydelatore@gmail.com\r\n";
		$success = mail($enviar_a, $subject, $mensaje_preparado, $headers);
		$enviado = true;
	}
}

 ?>
<section class="seccion seccion-inner-hero">
	<div class="wrapper">
		<div class="contenedor-logos">
			<div class="logo-card">
				<figure class="frontal"><a href="<?php echo $serverurl; ?>"><img src="<?php echo $serverurl; ?>img/kcs-logo.png" alt="Kallpa Coderredores de Seguros logo"></a></figure>

				<figure class="posterior"><a href="<?php echo $serverurl; ?>"><img src="<?php echo $serverurl; ?>img/kallpa-old-logo.png" alt="KCS Coderredores de Seguros logo"></a></figure>
			</div>
		</div>

		<h2 class="titulo">Contacto</h2>

		<figure class="hero-pic"><img src="<?php echo $serverurl; ?>img/contacto.png" alt=""></figure>
	</div>
</section>

<section class="seccion fondo-celeste seccion-contacto">
	<div class="wrapper">
		<h1 class="titulo">Contáctanos</h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?p=contacto/" method="post">
			<div class="inputs">
				<input type="text" name="nombre" placeholder="Nombre y Apellido (Obligatorio)" value="<?php if(!$enviado && isset($nombre)) echo $nombre; ?>">

				<input type="text" name="empresa" placeholder="Empresa" value="<?php if(!$enviado && isset($empresa)) echo $empresa; ?>">

				<select name="asunto" id="asunto">
					<option value="">-- Elije Asunto --</option>
                        <option value="Bolsa de Trabajo">Bolsa de Trabajo</option>
                        <option value="Seguro de Vida">Seguro de Vida</option>
                        <option value="Seguro Accidental">Seguro Accidental</option>
                        <option value="Seguro Académico">Seguro Académico</option>
                        <option value="Seguro Vehicular">Seguro Vehicular</option>
                        <option value="Seguro Salud">Seguro Salud</option>
                        <option value="Seguro Oncológico">Seguro Oncológico</option>
                        <option value="SCTR">SCTR</option>
                        <option value="Seguro Incendio y lineas aliadas">Seguro Incendio y lineas aliadas</option>
                        <option value="Seguro Responsabilidad Civil">Seguro Responsabilidad Civil</option>
                        <option value="Seguro de Transporte">Seguro de Transporte</option>
                        <option value="Ramos Técnicos (Seguro CAR - EAR - TREC - RM - TREE)">Ramos Técnicos (Seguro CAR - EAR - TREC - RM - TREE)</option>
				</select>

				<input type="tel" name="telefono" placeholder="Teléfono" value="<?php if(!$enviado && isset($telefono)) echo $telefono; ?>">

				<input type="email" name="email" placeholder="E-mail (Obligatorio)" value="<?php if(!$enviado && isset($email)) echo $email; ?>">
			</div>

			<textarea name="mensaje" id="mensaje" placeholder="Mensaje (Obligatorio)"><?php if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php elseif ($enviado): ?>	
				<div class="alert success">
					<p>Mensaje enviado exitosamente. Muchas gracias por escribirnos</p>
				</div>
			<?php endif; ?>

			<div class="boton">
				<input class="cta" type="submit" name="submit" value="Enviar">
			</div>
		</form>
	</div>
</section>

<section class="seccion seccion-ubicanos fondo-celeste">
	<div class="wrapper">
		<h2 class="titulo">Ubícanos</h2>
	</div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.45446663541!2d-77.01434418518708!3d-12.081008991444493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c881b876539f%3A0xea0576fb277b8fd5!2sKallpa+Corredores+de+Seguros!5e0!3m2!1sen!2s!4v1496706235709" width="1200" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>