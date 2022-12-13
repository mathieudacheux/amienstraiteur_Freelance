<?php

// Appel des configurations

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once(__DIR__ . '/../vendor/autoload.php');

// Appel des classes

// Appel des fonctions

// Variables

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	echo '<pre>' , var_dump($_POST) , '</pre>';
	die();
	$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
	if (testInput($email, MAIL_REGEX) != 'true') {
		$errors['email'] = testInput($email, MAIL_REGEX);
	}

	$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS));
	if (testInput($name, NAME_REGEX) != 'true') {
		$errors['name'] = testInput($name, NAME_REGEX);
	}

	$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT));
	if (testInput($phone, PHONE_REGEX) != 'true') {
		$errors['phone'] = testInput($phone, PHONE_REGEX);
	}



	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'contact.adresse.restaurant@gmail.com';                     //SMTP username
		$mail->Password   = 'fvagoshdamoiqmpu';                               //SMTP password
		$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom($email);
		$mail->addAddress('contact.adresse.restaurant@gmail.com', 'Restaurant l\'adresse');     //Add a recipient
		// $mail->addAddress('ellen@example.com');               //Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Mot de passe oublié';
		$mail->Body    = 'Bonjour ' . $user->firstname . ' ' . $user->lastname . ',<br> Veuillez cliquer sur le lien suivant pour réinitialiser votre mot de passe. <br> <a href="' . $_SERVER['HTTP_ORIGIN'] . '/modif-mdp?token=' . $token . '">Réinitialiser mon mot de passe</a> !';
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		SessionFlash::set('message', 'Un email vous a été envoyé');
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	http: //projetdwwm.localhost/oubli-mot-de-passe
}

// Appel des vues

include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/home.php');
include(__DIR__ . '/../views/templates/footer.php');
