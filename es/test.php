<?php

/**
 * +---------------------------------------------------------------------------+
 * | Copyright (c) 2003-2019 Dosware, LLC & Akovana, UAB. All rights reserved. |
 * |                                                                           |
 * | Unauthorized copying of this file, via any medium is strictly prohibited. |
 * | Proprietary and confidential.                                             |
 * |                                                                           |
 * | Written for myownconference.com <contact@myownconference.com>             |
 * +---------------------------------------------------------------------------+
 */


return array(
	'main-title' => 'Servicio de Pruebas',

	// common
	'menu-step1' => 'Nueva prueba',
	'menu-step2' => 'Ajustes de Login',
	'menu-step3' => 'Preguntas',

	'title-prev-step' => 'Paso previo',
	'title-next-step' => 'Paso siguiente',

	// errors
	'header-error' => 'Error',
	'error-text' => 'Algo está mal. Error: ',

	'error-empty-name-test' => 'el nombre de la prueba está vacío',
	'error-empty-time-test' => 'el tiempo para la prueba está vacío',
	'error-empty-score-test' => 'el puntaje para la prueba no está establecido',
	'error-empty-score' => 'indique el número de puntos',
	'error-empty-field' => 'el campo %s está vacío',

	'error-empty-title-question' => 'el texto de la pregunta no puede estar vacío',
	'error-no-answers' => 'se necesita al menos una respuesta',
	'error-empty-answer' => 'el texto de la respuesta no puede estar vacío',
	'error-need-more-answers' => 'Se requieren más variantes de respuesta',
	'error-no-correct-answer' => 'se necesita la respuesta correcta',
	'error-empty-phrase' => 'la frase no puede estar vacía',
	'error-need-one' => 'Seleccione la opción de respuesta',
	'error-need-multi' => 'Seleccione las opciones de respuesta',
	'error-need-text' => 'Escriba el texto de la respuesta',
	'error-need-phrase' => 'Ponga las palabras en el orden correcto',

	'error-login-empty-field' => 'campo vacío',
	'error-login-wrong-email' => 'formato de correo inválido',
	'error-login-wrong-phone' => 'formato de teléfono incorrecto',

	// step 1
	'placeholder-test-name' => 'Nombre de la prueba',
	'title-random-questions' => 'Corra las pruebas de manera aleatoria',
	'desc-score-custom' => 'evalúe cada pregunta',
	'title-time-test' => 'Limite el tiempo de la prueba',
	'desc-time-test' => 'minutos para completer la prueba',
	'title-score-test' => 'Evaluar las preguntas',
	'desc-score-test' => 'puntaje para el test completo',
	'delete-arbitary-questions' => 'Para habilitar la opción &quot;Evaluar las preguntas&quot;, elimine las pregunta(s) №{qs} con respuesta aleatoria.',
	'title-partial-correct' => 'Considere respuestas parcialmente correctas',

	// step 2
	'field-header' => 'Login',
	'field-title' => 'Bienvenida a los invitados',
	'field-name' => 'Entre su nombre',
	'field-email' => 'Entre su Email',
	'field-ident' => 'Entre el identificador',
	'field-tel' => 'Entre su teléfono',
	'field-photo' => 'Haga una foto',
	'field-footer' => 'Inicio',
	'title-add-field' => 'Agregue el campo',
	'title-preview' => 'vista previa',

	// step 3
	'title-total-questions' => 'Preguntas totales',
	'title-questions' => 'Preguntas',
	'title-new-question' => 'Nuevas preguntas',

	'add-answer' => 'Agregue una opción',
	'or' => 'o',
	'custom-answer' => 'complete su opción',

	'answer-type-one' => 'una respuesta correcta',
	'answer-type-multi' => 'opciones de respuestas múltiples',
	'answer-type-phrase' => 'armar una frase',
	'answer-type-text' => 'respuesta aleatoria',

	'placeholder-question' => 'Entre la pregunta',
	'placeholder-answer' => 'Entre la respuesta',
	'placeholder-phrase-answer' => 'Entre la frase',
	'placeholder-text-answer' => 'Respuesta aleatoria',
	'placeholder-custom-answer' => 'Opción personalizada',

	'title-complete' => 'Completo',

	// test
	'login-welcome-header' => '¡Bienvenido!',
	'login-welcome-text' => 'Al realizar la prueba, puede saltarse cualquier pregunta y responderla después.<br>Numero de preguntas: <span>{qst}</span><br>',
	'login-welcome-text-time' => '<br>Tiempo de la prueba: <span>{time} minutos</span>',
	'login-welcome-footer' => 'Comience cuando esté listo',
	'login-welcome-button' => 'Inicie la prueba',

	'test-skip' => 'Saltar',
	'test-next' => 'Responder',

	'result-header' => 'Resultados',
	'result-correct' => 'Correcto',
	'result-wrong' => 'Incorrecto',
	'result-skip' => 'Sin respuesta',
	'result-score' => 'puntos',
	'result-close' => 'Cerrar',

	// results
	'tab-all' => 'Todo',
	'tab-week' => 'Semana',
	'tab-yesterday' => 'Ayer',
	'tab-today' => 'Hoy',
	'tab-custom' => 'Seleccione el período',

	'results-header' => 'Historial de la prueba',
	'results-no-result' => 'En este día no hay nada',

	'results-time-from' => 'De',
	'results-time-to' => 'Para',
	'results-download-all' => 'Descargar todo',

	'month-january' => 'Enero',
	'month-february' => 'Febrero',
	'month-march' => 'Marzo',
	'month-april' => 'Abril',
	'month-may' => 'Mayo',
	'month-june' => 'Junio',
	'month-july' => 'Julio',
	'month-august' => 'Agosto',
	'month-september' => 'Setiembre',
	'month-october' => 'Octubre',
	'month-november' => 'Noviembre',
	'month-december' => 'Diciembre',

	'details-date' => 'Creado',
	'details-name' => 'Nombre',
	'details-answers' => 'Respuestas',
	'details-correct' => 'Correctas',
	'details-score' => 'Puntaje',
	'details-result' => 'Resultados',
	'details-complete' => 'completas',

	// pdf
	'pdf-user-name' => 'Nombre',
	'pdf-user-email' => 'Email',
	'pdf-user-ident' => 'Identificador',
	'pdf-user-tel' => 'Teléfono',
	'pdf-user-photo' => 'Foto',

	'pdf-title-correct' => 'Correcto',
	'pdf-title-wrong' => 'Incorrecto',
	'pdf-title-skip' => 'Saltado',
	'pdf-title-score' => 'Puntaje',
	'pdf-title-time' => 'Tiempo uilizado',
	
	'pdf-wrong' => 'incorrecto',
	'pdf-skip' => 'sin respuesta',

	// месяцы и дни
	'January' => 'Enero',
	'February' => 'Febrero',
	'March' => 'Marzo',
	'April' => 'Abril',
	'May' => 'Mayo',
	'June' => 'Junio',
	'July' => 'Julio',
	'August' => 'Agosto',
	'September' => 'Setiembre',
	'October' => 'Octubre',
	'November' => 'Noviembre',
	'December' => 'Diciembre',
	'Jan' => 'Ene',
	'Feb' => 'Feb',
	'Mar' => 'Mar',
	'Apr' => 'Abr',
	'Jun' => 'Jun',
	'Jul' => 'Jul',
	'Aug' => 'Ago',
	'Sep' => 'Set',
	'Oct' => 'Oct',
	'Nov' => 'Nov',
	'Dec' => 'Dic',
	'Monday' => 'Lunes',
	'Tuesday' => 'Martes',
	'Wednesday' => 'Miércoles',
	'Thursday' => 'Jueves',
	'Friday' => 'Viernes',
	'Saturday' => 'Sábado',
	'Sunday' => 'Domingo',
	'Su' => 'Dom',
	'Mo' => 'Lun',
	'Tu' => 'Mar',
	'We' => 'Mie',
	'Th' => 'Jue',
	'Fr' => 'Vie',
	'Sa' => 'Sáb',
);
