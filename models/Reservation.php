<?php
	require_once(__DIR__ . '/../config/Database.php');

	class Reservation {
		private int $id;
		private string $firstname;
		private string $lastname;
		private string $email;
		private string $phone;
		private string $datetime;
		private string $created_at;
		private string|NULL $validated_at;
		private PDO $pdo;

		public function __construct(string $datetime, string $firstname, string $email, string $lastname, string $phone) {
			$this->pdo = Database::getInstance();
			$this->datetime = $datetime;
			$this->firstname = $firstname;
			$this->email = $email;
			$this->phone = $phone;
			$this->lastname = $lastname;
		}

		public function setId($id) {
			$this->id = $id;
		}
		public function setNbOfClients($nbOfClients) {
			$this->nbOfClients = $nbOfClients;
		}
		public function setDatetime($datetime) {
			$this->datetime = $datetime;
		}
		public function setId_users($id_users) {
			$this->id_users = $id_users;
		}
		public function setCreated_at($created_at) {
			$this->created_at = $created_at;
		}
		public function setValidated_at($validated_at) {
			$this->validated_at = $validated_at;
		}

		public function getId() {
			return $this->id;
		}
		public function getNbOfClients() {
			return $this->nbOfClients;
		}
		public function getDatetime() {
			return $this->datetime;
		}
		public function getId_users() {
			return $this->id_users;
		}
		public function getCreated_at() {
			return $this->created_at;
		}
		public function getValidated_at() {
			return $this->validated_at;
		}

		/**
		 * Méthode permettant de créer une nouvelle réservation
		 * 
		 * @return true si la réservation a été créée, @return false sinon
		 */
		public function create() {
			$query = "INSERT INTO `reservations` (`datetime`, `firstname`, `lastname`, `email`, `phone`) VALUES (:datetime, :firstname, :lastname, :email, :phone);";

			$sth = $this->pdo->prepare($query);
			
			$sth->bindValue(':datetime', $this->datetime, PDO::PARAM_STR);
			$sth->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
			$sth->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
			$sth->bindValue(':email', $this->email, PDO::PARAM_STR);
			$sth->bindValue(':phone', $this->phone, PDO::PARAM_STR);

			if($sth->execute()) {
				return ($sth->rowCount() == 1) ?  true : false;
			}
		}

		/**
		 * Méthode permettant de récupérer toutes les réservations
		 * 
		 * @return array $reservations
		 */
		public static function getAll() {

			$pdo = Database::getInstance();
				$query = "SELECT `reservations`.`id`, `reservations`.`lastname`, `reservations`.`phone`, `reservations`.`email`, `reservations`.`datetime`, `reservations`.`validated_at` FROM `reservations` WHERE `reservations`.`datetime` > NOW() ORDER BY `reservations`.`datetime`;";

			$sth = $pdo->prepare($query);

			if($sth->execute()) {
				return $sth->fetchAll();
			}
			return false;
		}

		/**
		 * Méthode permettant de récupérer une réservation
		 * 
		 * @param int $id
		 * 
		 * @return object si la réservation existe, @return false sinon
		 */
		public static function get(int $id):mixed {
			
			$pdo = Database::getInstance();

			$query = "SELECT `reservations`.`id`, `reservations`.`lastname`, `reservations`.`firstname`, `reservations`.`phone`, `reservations`.`email`, `reservations`.`datetime`, `reservations`.`validated_at` FROM `reservations` WHERE `reservations`.`id` = :id;";

			$sth = $pdo->prepare($query);

			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return $sth->fetch();
			}
			return false;
		}

		/**
		 * Méthode permettant de modifier une réservation
		 * 
		 * @param int $id
		 * 
		 * @return true si la réservation a été modifiée, @return false sinon
		 */
		public function update(int $id):bool {
			
			$query = "UPDATE `reservations` SET `number_of_persons` = :nbOfClients, `reservation_date` = :datetime, `validated_at` = :validation WHERE `id` = :id;";

			$sth = $this->pdo->prepare($query);

			$sth->bindValue(':nbOfClients', $this->nbOfClients, PDO::PARAM_INT);
			$sth->bindValue(':datetime', $this->datetime, PDO::PARAM_STR);
			$sth->bindValue(':validation', $this->validated_at, PDO::PARAM_STR);
			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return ($sth->rowCount() == 1) ?  true : false;
			}
			return false;
		}

		/**
		 * Méthode permettant de supprimer une réservation
		 * 
		 * @param int $id
		 * 
		 * @return true si la réservation a été supprimée, @return false sinon
		 */
		public static function delete(int $id):bool {
			
			$pdo = Database::getInstance();

			$query = "DELETE FROM `reservations` WHERE `id` = :id;";

			$sth = $pdo->prepare($query);

			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return ($sth->rowCount() == 1) ?  true : false;
			}
		}

		/**
		 * Méthode permettant de valider une réservation
		 * 
		 * @param int $id
		 * 
		 * @return bool
		 */
		public static function validate(int $id):bool {
			$pdo = Database::getInstance();

			$query = "UPDATE `reservations` SET `validated_at` = NOW() WHERE `id` = :id;";

			$sth = $pdo->prepare($query);

			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return ($sth->rowCount() == 1) ?  true : false;
			}
			return false;
		}

		/**
		 * Méthode permettant de récupérer les réservations d'un utilisateur
		 * 
		 * @param int $id
		 * 
		 * @return array $reservations
		 */
		public static function getByUser(int $id):array {
			$pdo = Database::getInstance();

			$query = "SELECT `reservations`.`id`, `users`.`lastname`, `users`.`phone`, `users`.`email`, `reservations`.`reservation_date`, `reservations`.`number_of_persons`, `reservations`.`validated_at` FROM `reservations` INNER JOIN `users` ON `reservations`.`id_users` = `users`.`id` WHERE `reservations`.`id_users` = :id AND `reservations`.`number_of_persons` != 0 AND  `reservations`.`reservation_date` > NOW() ORDER BY `reservations`.`reservation_date`;";

			$sth = $pdo->prepare($query);

			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return $sth->fetchAll();
			}
			return false;
		}

		/**
		 * Récupère les commandes d'un utilisateur
		 * 
		 * @param int $id
		 * 
		 * @return array
		 */
		public static function getOrders(int $id):array {
			$pdo = Database::getInstance();

			$query = "SELECT `reservations`.`id`, `users`.`lastname`, `users`.`phone`, `users`.`email`, `reservations`.`reservation_date`, `reservations`.`number_of_persons`, `reservations`.`validated_at` FROM `reservations` INNER JOIN `users` ON `reservations`.`id_users` = `users`.`id` WHERE `reservations`.`id_users` = :id AND `reservations`.`number_of_persons` = 0 AND  `reservations`.`reservation_date` > NOW() ORDER BY `reservations`.`reservation_date`;";

			$sth = $pdo->prepare($query);

			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return $sth->fetchAll();
			}
			return false;
		}

		/**
		 * Récupère les commandes d'une réservation
		 * 
		 * @param int $id
		 * 
		 * @return array
		 */
		public static function getOrdersByReservation(int $id):array {
			$pdo = Database::getInstance();

			$query = "SELECT `orders`.`id`, `orders`.`id_reservations` FROM `orders` INNER JOIN `reservations` ON `orders`.`id_reservations` = `reservations`.`id` WHERE `reservations`.`id` = :id;";

			$sth = $pdo->prepare($query);

			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return $sth->fetchAll();
			}
			return false;
		}

		/**
		 * Récupère les réservations d'une commande
		 * 
		 * @param int $id
		 * 
		 * @return object ou false
		 */
		public static function getByOrder(int $id):object|bool {
			$pdo = Database::getInstance();

			$query = "SELECT * FROM `orders` INNER JOIN `reservations` ON `orders`.`id_reservations` = `reservations`.`id` WHERE `orders`.`id` = :id;";

			$sth = $pdo->prepare($query);

			$sth->bindValue(':id', $id, PDO::PARAM_INT);

			if($sth->execute()) {
				return $sth->fetch();
			}
			return false;
		}
	}