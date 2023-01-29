<?php

// Appel des configurations

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../config/regex.php');
require_once(__DIR__ . '/../helpers/testInputs.php');

// Appel des classes
require_once(__DIR__.'/../models/Dish.php');
require_once(__DIR__.'/../models/Team.php');

// Variables
$carrousel = array_slice(scandir($_SERVER['DOCUMENT_ROOT']."/public/assets/carrousel"), 2);

$starters = Dish::getLast('starters');
$dishes = Dish::getLast('dishes');
$desserts = Dish::getLast('desserts');
$team = Team::getAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS));
	if (testInput($name, NAME_REGEX) != 'true') {
		$errors['name'] = testInput($name, NAME_REGEX);
	}

	$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS));
	if (testInput($email, MAIL_REGEX) != 'true') {
		$errors['email'] = testInput($email, MAIL_REGEX);
	}

	$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT));
	if (testInput($phone, PHONE_REGEX) != 'true') {
		$errors['phone'] = testInput($phone, PHONE_REGEX);
	}

	$hour = trim(filter_input(INPUT_POST, 'hour', FILTER_SANITIZE_SPECIAL_CHARS));
	if (!in_array($hour, $hours)) {
		$errors['hour'] = 'Heure invalide';
	}

	$date = trim(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS));
	if (testInput($date, DATE_REGEX) != 'true') {
		$errors['message'] = testInput($date, DATE_REGEX);
	}

	$date = date('d/m/Y', strtotime($date));
	$datetime = $date . ' ' . $hour;
	$persons = intval(filter_input(INPUT_POST, 'persons', FILTER_SANITIZE_NUMBER_INT));

	$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS));

	if(empty($errors)) {
		$mail = new PHPMailer(true);
	
		try {
			//Server settings
			$mail->CharSet = 'UTF-8';
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'contact.annexe.restaurant@gmail.com';                     //SMTP username
			$mail->Password   = 'pkcwzwjdxcbklsnr';                               //SMTP password
			$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
			//Recipients
			$mail->setFrom($email);
			$mail->addAddress('contact.annexe.restaurant@gmail.com', 'Restaurant l\'adresse');     //Add a recipient
			// $mail->addAddress('ellen@example.com');               //Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');
	
			//Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Nouveau message client';
			$mail->Body    = 
			'Bonjour vous avez un nouveau message client :<br> 
			Nom : '. $name .'<br>
			Email : '. $email .'<br>
			Téléphone : '. $phone .'<br>
			Date : '. $datetime .'<br>
			Nombre de personnes : '. $persons .'<br>
			Message : '. $message .'<br>';
			// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
			$mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
}

// Appel des vues

include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/home.php');
include(__DIR__ . '/../views/templates/footer.php');
