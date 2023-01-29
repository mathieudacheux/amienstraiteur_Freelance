<?php
	require_once(__DIR__ . '/../../helpers/testInputs.php');
	require_once(__DIR__ . '/../../helpers/SessionFlash.php');
	require_once(__DIR__ . '/../../models/Team.php');

if ($_SERVER['REQUEST_URI'] == '/admin/equipe') {
	$team = Team::getAll();
	include(__DIR__ . '/../../views/admin/templates/dbHeader.php');
	include(__DIR__ . '/../../views/admin/dbTeam.php');
	include(__DIR__ . '/../../views/admin/templates/dbFooter.php');
}

if ($_SERVER['REQUEST_URI'] == '/admin/membre/edit/1') {
	$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
	$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));
	$post = trim(filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS));
	$id = 1;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($lastname)) {
			SessionFlash::set('error', 'Veuillez renseigner le nom de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}
		if (empty($firstname)) {
			SessionFlash::set('error', 'Veuillez renseigner le prénom de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}
		if (empty($post)) {
			SessionFlash::set('error', 'Veuillez renseigner le poste de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}

		$member =	new Team($lastname, $firstname, $post);
		$member->update($id);
		SessionFlash::set('success', 'L\'employé a bien été modifié');
		header('Location: /admin/equipe');
		exit();
	}
	header('Location: /admin/equipe');
	exit();
}

if ($_SERVER['REQUEST_URI'] == '/admin/membre/edit/2') {

	$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
	$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));
	$post = trim(filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS));
	$id = 2;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($lastname)) {
			SessionFlash::set('error', 'Veuillez renseigner le nom de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}
		if (empty($firstname)) {
			SessionFlash::set('error', 'Veuillez renseigner le prénom de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}
		if (empty($post)) {
			SessionFlash::set('error', 'Veuillez renseigner le poste de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}

		$member =	new Team($lastname, $firstname, $post);
		$member->update($id);
		SessionFlash::set('success', 'L\'employé a bien été modifié');
		header('Location: /admin/equipe');
		exit();
	}

	header('Location: /admin/equipe');
	exit();
}

if ($_SERVER['REQUEST_URI'] == '/admin/membre/edit/3') {

	$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
	$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS));
	$post = trim(filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS));
	$id = 3;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($lastname)) {
			SessionFlash::set('error', 'Veuillez renseigner le nom de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}
		if (empty($firstname)) {
			SessionFlash::set('error', 'Veuillez renseigner le prénom de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}
		if (empty($post)) {
			SessionFlash::set('error', 'Veuillez renseigner le poste de l\'employé');
			header('Location: /admin/equipe');
			exit();
		}

		$member =	new Team($lastname, $firstname, $post);
		$member->update($id);
		SessionFlash::set('success', 'L\'employé a bien été modifié');
		header('Location: /admin/equipe');
		exit();
	}

	header('Location: /admin/equipe');
	exit();
}