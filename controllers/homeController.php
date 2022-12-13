<?php

// Appel des configurations

// Appel des classes

require_once(__DIR__ . '/../models/Dish.php');

// Appel des fonctions

// Variables

echo '<pre>' , var_dump(Dish::getLast('starter')) , '</pre>';
die();

// Appel des vues

include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/home.php');
include(__DIR__.'/../views/templates/footer.php');