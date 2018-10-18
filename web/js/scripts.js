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