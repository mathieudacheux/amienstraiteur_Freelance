<?php

// Appel des classes
require_once(__DIR__ . '/../models/Admin.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $login = trim(filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS));
    $password = $_POST['password'];

    // Vérification des données
    if ($login !== '' || $password !== '') {
        // Vérification du mot de passe
        $admin = Admin::passwordVerification($login);
        $passwordVerification = password_verify($password, $admin);
        if ($passwordVerification === true) {
            header('Location: /admin');
        }
    }
}

// Appel des vues
include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/connexion.php');
include(__DIR__ . '/../views/templates/footer.php');
