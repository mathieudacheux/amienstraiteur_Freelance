<?php

// Appel des configurations
require_once(__DIR__.'/../config/config.php');
require_once(__DIR__.'/../config/regex.php');

// Appel des classes
require_once(__DIR__.'/../models/Dish.php');

// Variables
// $starters = Dish::getLast('6');
// $mainCourses = Dish::getLast('12');
// $desserts = Dish::getLast('15');

// Appel des vues

include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/home.php');
include(__DIR__.'/../views/templates/footer.php');