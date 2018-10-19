// Ingreso de Fecha completa en la cabecera
let fecha = new Date(),

	dias = [
		'Domingo',
		'Lunes',
		'Martes',
		'Miércoles',
		'Jueves',
		'Viernes',
		'Sábado'
	],

	meses = [
		'Enero',
		'Febrero',
		'Marzo',
		'Abril',
		'MAyo',
		'Junio',
		'Julio',
		'Agosto',
		'Setiembre',
		'Octubre',
		'Noviembre',
		'Diciembre'
	];

	document.getElementById('fecha').innerHTML = dias[fecha.getDay()] + ', ' + fecha.getDate() + ' de ' + meses[fecha.getMonth()] + ' de ' + fecha.getFullYear();


// Menu responsive
$(document).ready(main_menu);

function main_menu() {
	var marcador = 0;
	if ($(window).width() < 769) {
		$('.bt-menu').on('click', function () {
			if (marcador == 1) {
				$('.main-menu').animate({
					top: '39'
				});
				$('.bt-menu').addClass('bt-menu2');

				marcador = 0;
			} else {
				marcador = 1;
				$('.main-menu').animate({
					top: '-280'
				});
				$('.bt-menu').removeClass('bt-menu2');
			}
		});
	} else {
		$('.main-menu').css({
			top: '0'
		});
	}
}