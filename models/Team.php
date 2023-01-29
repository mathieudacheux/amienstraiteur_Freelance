<?php
	require_once(__DIR__ . '/../config/Database.php');

	class Team {
		private int $id;
		private string $firstname;
		private string $lastname;
		private string $post;
		private object $pdo;

		public function __construct($lastname, $firstname, $post) {
			$this->lastname = $lastname;
			$this->firstname = $firstname;
			$this->post = $post;
			$this->pdo = Database::getInstance();
		}

		public function setId($id) {
			$this->id = $id;
		}
		public function setFirstname($firstname) {
			$this->firstname = $firstname;
		}
		public function setLastname($lastname) {
			$this->lastname = $lastname;
		}
		public function setPost($post) {
			$this->post = $post;
		}


		public function getId() {
			return $this->id;
		}
		public function getFirstname() {
			return $this->firstname;
		}
		public function getLastname() {
			return $this->lastname;
		}
		public function getPost() {
			return $this->post;
		}

		// Méthode pour récupérer tous les membres
		public static function getAll() {
			$pdo = Database::getInstance();
			$sql = "SELECT * FROM team";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$team = $stmt->fetchAll();
			return $team;
		}

		// Méthode pour modifier un membre
		public function update($id) {
			$sql = "UPDATE team SET firstname = :firstname, lastname = :lastname, post = :post WHERE id = :id";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':firstname', $this->firstname);
			$stmt->bindValue(':lastname', $this->lastname);
			$stmt->bindValue(':post', $this->post);
			$stmt->bindValue(':id', $id);
			$stmt->execute();
		}
	}