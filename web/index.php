<?php 

error_reporting(0);

include 'php/config.php';

$p = $_GET['p'];

$t = 2401201341;

$description = '';

$keywords = '';

$title = '';

$refresh = '';

if ($remoteConn == 0 && $refrescar == 1) {
	$refresh = '
		<script>
			var int = self.setInterval("refresh()", 5000);

			function refresh() {
			    location.reload(true);
			}
		</script>
	';
}

if (!isset($p) || $p == 'inicio/') {
	$description = 'Bienvenidos al mundo de Kallpa Corredores de Seguros, donde nos esforzamos para que su tranquilidad y seguridad le permita todos los días sonreírle a la vida';

	$title = 'KCS | Corredores de Seguros - Inicio';

} elseif (isset($p) && $p == 'nosotros/') {
	$description = 'Estas en nosotros';

	$title = 'KCS | Corredores de Seguros - Nosotros';

} elseif (isset($p) && $p == 'salud/') {
	$description = 'Estas en Seguros de Salud';

	$title = 'KCS | Corredores de Seguros - Seguros de Salud';

} elseif (isset($p) && $p == 'vida/') {
	$description = 'Estas en Seguros de Vida';

	$title = 'KCS | Corredores de Seguros - Seguros de Vida';

} elseif (isset($p) && $p == 'patrimonio/') {
	$description = 'Estas en Seguros Patrimonio';

	$title = 'KCS | Corredores de Seguros - Seguros Patrimonio';

} elseif (isset($p) && $p == 'beneficios/') {
	$description = 'Estas en Beneficios Kallpa';

	$title = 'KCS | Corredores de Seguros - Beneficios Kallpa';

} elseif (isset($p) && $p == 'contacto/') {
	$description = 'Estas en Contacto';

	$title = 'KCS | Corredores de Seguros - Contacto';
}

include 'inc/index.view.php';