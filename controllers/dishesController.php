<?php

// Appel des classes
require_once(__DIR__.'/../models/Dish.php');

// Appel des fonctions

// Variables
$typesOfDishes = Dish::dishTypes();
$firstDishType = Dish::firstDishType();

// Appel des vues

include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/dishes.php');
include(__DIR__.'/../views/templates/footer.php');