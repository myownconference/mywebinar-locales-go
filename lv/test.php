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
	'main-title' => 'Testēšanas pakalpojums',

	// common
	'menu-step1' => 'Jauns tests',
	'menu-step2' => 'Pieteikšanās iestatījumi',
	'menu-step3' => 'Jautājums-Atbilde',

	'title-prev-step' => 'Iepriekšējais solis',
	'title-next-step' => 'Nākamais solis',

	// errors
	'header-error' => 'Kļūda',
	'error-text' => 'kaut kas noticis. Kļūda: ',

	'error-empty-name-test' => 'testa nosaukums tukšs',
	'error-empty-time-test' => 'nav testa darbības laika',
	'error-empty-score-test' => 'punkti par testu nav noteikti',
	'error-empty-score' => 'norādiet punktu skaitu',
	'error-empty-field' => 'laukā %s tukšs',

	'error-empty-title-question' => 'jautājuma teksts nevar būt tukšs',
	'error-no-answers' => 'nepieciešama vismaz viena atbilde',
	'error-empty-answer' => 'atbilde nevar būt tukša',
	'error-need-more-answers' => 'nepieciešamas vairāk atbilžu iespējas',
	'error-no-correct-answer' => 'vajadzīga pareizā atbilde',
	'error-empty-phrase' => 'frāze nevar būt tukša',
	'error-need-one' => 'Atlasiet atbildes opciju',
	'error-need-multi' => 'Izvēlieties atbildes iespējas',
	'error-need-text' => 'Ievadiet atbildi',
	'error-need-phrase' => 'Savāc frāzi',

	'error-login-empty-field' => 'tukšs lauks',
	'error-login-wrong-email' => 'nederīgs pasta formāts',
	'error-login-wrong-phone' => 'nederīgs tālruņa formāts',

	// step 1
	'placeholder-test-name' => 'Pārbaudes nosaukums',
	'title-random-questions' => 'Izpildiet jautājumus nejauši',
	'desc-score-custom' => 'novērtē katru jautājumu',
	'title-time-test' => 'Ierobežot laika pārbaudi',
	'desc-time-test' => 'minūtes, lai nokārtotu pārbaudi',
	'title-score-test' => 'Novērtējiet jautājumus',
	'desc-score-test' => 'punkti par visu testu',
	'delete-arbitary-questions' => 'Lai iespējotu šo opciju &quot;Novērtējiet jautājumus&quot;, noņemiet jautājumu (-us) №{qs} ar patvaļīgu atbildi.',
	'title-partial-correct' => 'Apsveriet daļēji pareizās atbildes',

	// step 2
	'field-header' => 'Pierakstieties',
	'field-title' => 'Apsveikumi viesiem',
	'field-name' => 'Ievadiet savu vārdu',
	'field-email' => 'Ievadiet savu e-pastu',
	'field-ident' => 'Ievadiet ID',
	'field-tel' => 'Ievadiet savu tālruni',
	'field-photo' => 'Uzņemiet fotoattēlu',
	'field-footer' => 'Sāciet',
	'title-add-field' => 'Pievienot lauku',
	'title-preview' => 'priekšskatījums',

	// step 3
	'title-total-questions' => 'Kopā jautājumi',
	'title-questions' => 'Jūsu jautājumi',
	'title-new-question' => 'Jauns jautājums',

	'add-answer' => 'Pievienot opciju',
	'or' => 'vai',
	'custom-answer' => 'lauka jūsu izvēle',

	'answer-type-one' => 'viena pareizā atbilde',
	'answer-type-multi' => 'vairāku atbilžu varianti',
	'answer-type-phrase' => 'apkopot frāzi',
	'answer-type-text' => 'nejauša atbilde',

	'placeholder-question' => 'Ievadiet jautājumu',
	'placeholder-answer' => 'Ierakstiet atbildi',
	'placeholder-phrase-answer' => 'Ievadiet frāzi',
	'placeholder-text-answer' => 'Savstarpēja atbilde',
	'placeholder-custom-answer' => 'Pielāgots variants',

	'title-complete' => 'Tests ir gatavs',

	// test
	'login-welcome-header' => 'Apsveikumi!',
	'login-welcome-text' => 'Testa laikā jūs varat izlaist jebkuru jautājumu, lai atbildētu uz to vēlāk.<br>Jautājumu skaits: <span>{qst}</span><br>',
	'login-welcome-text-time' => '<br>Laiks eksāmena nokārtošanai: <span>{time} minūtes</span>',
	'login-welcome-footer' => 'Sāciet, kad esat gatavs',
	'login-welcome-button' => 'Sāciet testu',

	'test-skip' => 'Izlaist',
	'test-next' => 'Atbildes ikona',

	'result-header' => 'Rezultāti',
	'result-correct' => 'Pareizi',
	'result-wrong' => 'Nepareizi',
	'result-skip' => 'Neatbildēts',
	'result-score' => 'punktus',
	'result-close' => 'Aizvērt',

	// results
	'tab-all' => 'Viss',
	'tab-week' => 'Nedēļa',
	'tab-yesterday' => 'Vakar',
	'tab-today' => 'Šodien',
	'tab-custom' => 'Izvēlieties periodu',

	'results-header' => 'Testa vēsture',
	'results-no-result' => 'Šajā dienā nebija nekas',

	'results-time-from' => 'No',
	'results-time-to' => 'Pirms',
	'results-download-all' => 'Lejupielādēt visu',

	'month-january' => 'Janvāris',
	'month-february' => 'Februāris',
	'month-march' => 'Marts',
	'month-april' => 'Aprīlis',
	'month-may' => 'Maijs',
	'month-june' => 'Jūnijs',
	'month-july' => 'Jūlijs',
	'month-august' => 'Augustus',
	'month-september' => 'Septembris',
	'month-october' => 'Oktobris',
	'month-november' => 'Novembris',
	'month-december' => 'Decembris',

	'details-date' => 'Izveidota',
	'details-name' => 'Nosaukums',
	'details-answers' => 'Atbildes',
	'details-correct' => 'Pareizi',
	'details-score' => 'Punkti',
	'details-result' => 'Rezultāti',
	'details-complete' => 'pabeigts',

	// pdf
	'pdf-user-name' => 'Nosaukums',
	'pdf-user-email' => 'Email',
	'pdf-user-ident' => 'ID',
	'pdf-user-tel' => 'Tālruņa numurs',
	'pdf-user-photo' => 'Fotogrāfijas',

	'pdf-title-correct' => 'Pareizas atbildes',
	'pdf-title-wrong' => 'Nepareizas atbildes',
	'pdf-title-skip' => 'Neatbildētās atbildes',
	'pdf-title-score' => 'Punkti',
	'pdf-title-time' => 'Pavadīts laiks',
	
	'pdf-wrong' => 'nepareizi',
	'pdf-skip' => 'neatbildēts',

	// месяцы и дни
	'January' => 'Janvāris',
	'February' => 'Februāris',
	'March' => 'Marts',
	'April' => 'Aprīlis',
	'May' => 'Maijs',
	'June' => 'Jūnijs',
	'July' => 'Jūlijs',
	'August' => 'Augusts',
	'September' => 'Septembris',
	'October' => 'Oktobris',
	'November' => 'Novembris',
	'December' => 'Decembris',
	'Jan' => 'Jan',
	'Feb' => 'Feb',
	'Mar' => 'Mar',
	'Apr' => 'Apr',
	'Jun' => 'Jūn',
	'Jul' => 'Jūl',
	'Aug' => 'Aug',
	'Sep' => 'Sep',
	'Oct' => 'Okt',
	'Nov' => 'Nov',
	'Dec' => 'Dec',
	'Monday' => 'Pirmdiena',
	'Tuesday' => 'Otrdiena',
	'Wednesday' => 'Trešdiena',
	'Thursday' => 'Ceturtdiena',
	'Friday' => 'Piektdiena',
	'Saturday' => 'Sestdiena',
	'Sunday' => 'Svētdiena',
	'Su' => 'Su',
	'Mo' => 'Pir',
	'Tu' => 'Ot',
	'We' => 'Tr',
	'Th' => 'Ce',
	'Fr' => 'Piek',
	'Sa' => 'Ses',
);
