<?php

// Connexion à la base de données

define('DB_HOST', 'localhost');
define('DB_NAME', 'database');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// REGEX

define('REGEX_MAIL', '/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/');
define('REGEX_PASSWORD', '/^[a-zA-Z0-9._-]{8,}$/');
define('REGEX_NAME', '/^[a-zA-Z0-9._-]{2,}$/');
define('REGEX_PHONE', '/^[0-9]{10}$/');
define('REGEX_POSTAL_CODE', '/^[0-9]{5}$/');

// Tableau d'erreurs

$errors = [];