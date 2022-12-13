<?php

// Regex

define('NAME_REGEX', "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/");
define('MAIL_REGEX', "/^[a-zA-Z0-9_.+-]+@[a-zA-Z-]+\.[a-zA-Z-.]+$/");
define('PWD_REGEX', "/(?=.*[A-Z])(?=.*\d)(?=.*[\W])[A-Za-z\d\W]{8,}/");
define('PHONE_REGEX', "/^[0][1-9]-?[0-9]{2}-?[0-9]{2}-?[0-9]{2}-?[0-9]{2}$/");
define('NB_REGEX', "/^[1-8]$/");
define('DATE_REGEX', "/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/");
define('TIME_REGEX', "/[1-8]/");

// Tableau d'erreurs

$errors = [];