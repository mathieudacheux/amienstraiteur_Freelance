<?php

// Appel des classes
require_once(__DIR__.'/../models/Dish.php');

// Variables
$starters = Dish::getLast('starters');
$dishes = Dish::getLast('dishes');
$desserts = Dish::getLast('desserts');

// Appel des vues

include(__DIR__.'/../views/templates/header.php');
include(__DIR__.'/../views/home.php');
include(__DIR__.'/../views/templates/footer.php');