<?php

// Connexion à la base de données

define('DB_HOST', 'localhost');
define('DB_NAME', 'database');
define('DB_USER', 'root');
define('DB_PASS', 'root');

// REGEX

// define('REGEX_MAIL', '/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/');
// define('REGEX_PASSWORD', '/^[a-zA-Z0-9._-]{8,}$/');
// define('REGEX_NAME', '/^[a-zA-Z0-9._-]{2,}$/');
// define('REGEX_PHONE', '/^[0-9]{10}$/');
// define('REGEX_POSTAL_CODE', '/^[0-9]{5}$/');

define('NAME_REGEX', "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/");
define('MAIL_REGEX', "/^[a-zA-Z0-9_.+-]+@[a-zA-Z-]+\.[a-zA-Z-.]+$/");
define('PWD_REGEX', "/(?=.*[A-Z])(?=.*\d)(?=.*[\W])[A-Za-z\d\W]{8,}/");
define('PHONE_REGEX', "/^[0][1-9]-?[0-9]{2}-?[0-9]{2}-?[0-9]{2}-?[0-9]{2}$/");
define('NB_REGEX', "/^[1-8]$/");
define('DATE_REGEX', "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/");
define('TIME_REGEX', "/[1-8]/");

// Tableau d'erreurs

$errors = [];