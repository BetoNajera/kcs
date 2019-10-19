// Previene saltos indeseables en href="#"
(function($) {
	$('a[href="#"]').click( function(e) {
		e.preventDefault();
	} );
} )( jQuery );


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
		'Mayo',
		'Junio',
		'Julio',
		'Agosto',
		'Setiembre',
		'Octubre',
		'Noviembre',
		'Diciembre'
	];

	document.getElementById('fecha').innerHTML = dias[fecha.getDay()] + ', ' + fecha.getDate() + ' de ' + meses[fecha.getMonth()] + ' de ' + fecha.getFullYear();

	document.getElementById('year').innerHTML = fecha.getFullYear();


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


// Efecto transformación de logo
setTimeout(function() {
	$('.logo-card').css('transform', 'rotateY(0deg)');
	$('.logo-card .frontal').css('opacity', 1);
}, 2000);


// Aparece Modal
setTimeout(function() {
	$('.bg-modal').show();
	$('.modal').show();
	$('.modal').addClass('bajan');
}, 4000);


// Cierre de Modal
$('#cerrar-modal').on('click', function() {
	$('.modal').removeClass('bajan');
	$('.modal').addClass('suben');
	// $('#video-modal').get(0).pause();
	// $('#video-modal').get(0).currentTime = 0;
	setTimeout(function() {
		$('.bg-modal').hide();
	}, 900);
});