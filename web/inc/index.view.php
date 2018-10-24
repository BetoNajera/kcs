<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="author" content="Beto Nàjera - formaseideas.com">
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="keywords" content="<?php echo $keywords; ?>">
		<link rel=“icon” href=“favicon.ico” type=“image/x-icon” />
		<link href="https://file.myfontastic.com/QSgMmW5LJ3kgVssPPFCmYi/icons.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $serverurl; ?>css/fonts.css">
		<link rel="stylesheet" href="<?php echo $serverurl; ?>css/normalize.css">
		<link rel="stylesheet" href="<?php echo $serverurl; ?>css/styles.css?t=<?php echo $t; ?>">
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-87432378-1', 'auto');
          ga('send', 'pageview');
        </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<title><?php echo $title; ?></title>
		<?php echo $refresh; ?>
	</head>

	<body>
		<header>
			<div class="menu-bar">
				<div class="bt-menu">
					<div class="uno"></div>
					<div class="dos"></div>
					<div class="tres"></div>
				</div>
			</div>

			<div class="fecha-menu">
				<div class="wrapper">
					<p id="fecha"></p>

					<nav class="main-menu">
						<ul class="menu">
							<li><a href="<?php echo $serverurl; ?>"<?php echo (!isset($p) || $p == 'inicio/') ? ' class="selected"' : ''; ?>>inicio</a></li>

							<li><a href="<?php echo $serverurl; ?>nosotros/"<?php echo ($p) == 'nosotros/' ? ' class="selected"' : ''; ?>>nosotros</a></li>

							<li><a href="<?php echo $serverurl; ?>salud/"<?php echo ($p) == 'salud/' ? ' class="selected"' : ''; ?>>salud</a></li>

							<li><a href="<?php echo $serverurl; ?>vida/"<?php echo ($p) == 'vida/' ? ' class="selected"' : ''; ?>>vida</a></li>

							<li><a href="<?php echo $serverurl; ?>patrimonio/"<?php echo ($p) == 'patrimonio/' ? ' class="selected"' : ''; ?>>patrimonio</a></li>

							<li><a href="<?php echo $serverurl; ?>beneficios/"<?php echo ($p) == 'beneficios/' ? ' class="selected"' : ''; ?>>beneficios</a></li>

							<li><a href="<?php echo $serverurl; ?>contacto/"<?php echo ($p) == 'contacto/' ? ' class="selected"' : ''; ?>>contacto</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<?php 

		if (isset($p)) {
			$views = explode('/', $p);

			if (is_file('inc/' . $views[0] . '.view.php')) {
				include 'inc/' . $views[0] . '.view.php';
			} else {
				include 'inc/nosotros.view.php'; // Aquí irá la página 404
			}
		} else {
			include 'inc/inicio.view.php';
		}

		 ?>

		<footer>
			<div class="wrapper">
				<div class="datos-footer">
					<p><span class="icon icon-whatsapp"></span> 952-190-780</p>

					<p><span class="icon icon-phone"></span> 391-0491 | 391-0492</p>

					<p><span class="icon icon-location"></span> Calle Fermin Tangüis 145 Of. 302 Urb. Santa Catalina - La Victoria</p>
				</div>

				<div class="rrss-icons">
					<div class="rrss-icon"><a href="whatsapp://send?text=Saludos me comunico por medio de la web www.kcs.pe&phone=+51952190780&abid=+51952190780" class="whatsapp-btn"><span class="icon icon-whatsapp"></span></a></div>

					<div class="rrss-icon"><a href="https://www.facebook.com/search/top/?q=kcs%20corredores%20de%20seguros" target="_blank" class="facebook-btn"><span class="icon icon-facebook"></span></a></div>

					<div class="rrss-icon"><a href="#" class="linkedin-btn"><span class="icon icon-linkedin"></span></a></div>

					<div class="rrss-icon"><a href="#" class="instagram-btn"><span class="icon icon-instagram"></span></a></div>

					<div class="rrss-icon"><a href="#" class="location-btn"><span class="icon icon-location"></span></a></div>

					<div class="rrss-icon"><a href="tel:013910491" class="phone-btn"><span class="icon icon-phone"></span></a></div>
				</div>

				<div class="firma">
					<p><span class="linea-texto">&copy;<span id="year"></span> <span class="barra">|</span> KCS - Kallpa Corredores de Seguros</span> <span class="barra">|</span> <span class="linea-texto">Lima - Perú</span></p>
				</div>
			</div>
		</footer>

		<script src="<?php echo $serverurl; ?>js/scripts.js?t=<?php echo $t; ?>"></script>
	</body>
</html>