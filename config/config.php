<?php

define('HEAD_TITLE', ['', '', '', '', '']);
define('HEAD_DESCRIPTION', ['', '', '', '', '']);

define('DSN', 'mysql:host=localhost;dbname=amienstraiteur;charset=utf8');
define('USER', 'root');
define('PWD', '');

// define('DSN', 'mysql:host=127.0.0.1:3306;dbname=u993442228_adresse;charset=utf8');
// define('USER', 'u993442228_admin');
// define('PWD', 'Luckydube76260,;:!');

// Gestion des dates et heures en français

// $formatHour = new IntlDateFormatter(
// 	locale: 'fr_FR',
// 	pattern: "HH'h'mm"
// );

// $formatDate = new IntlDateFormatter(
// 	locale: 'fr_FR',
// 	pattern: 'EEEE d MMMM yyyy'
// );

// Définition de 'secret'

define('SECRET', 'adresse_Restaurant753951');

// Horaires réservations

$hours = [
	1 => '09:00',
	2 => '09:30',
	3 => '10:00',
	4 => '10:30',
	5 => '11:00',
	6 => '11:30',
	7 => '12:00',
	8 => '12:30',
	9 => '14:00',
	10 => '14:30',
	11 => '15:00',
	12 => '15:30',
	13 => '16:00',
	14 => '16:30',
	15 => '17:00',
	16 => '17:30'
];