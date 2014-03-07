<?php
	/**
	 * Class User, pour stocker en session l'utilisateur en cours
	 */
	class User {
		private $email, $password;
		private $occupation, $nom, $prenom, $tel;
		private $date_naissance, $adresse, $sexe, $avatar;
		
		// Constructeur de l'objet User	
		public function __construct($mail, $pwd) {
			global $bdd;
			$this->email = $mail;
			$this->password = $pwd;
			$query = "SELECT nom, prenom, oqp, tel, date_de_naissance AS date, adresse, sexe, avatar
						FROM user WHERE email = '".$this->email."' AND password = '".$this->password."';";
			$response = $bdd->query($query);
			$donnees = $response->fetch();
			if ($donnees != NULL) {
				$this->nom = $donnees["nom"];
				$this->prenom = $donnees["prenom"];
				$this->occupation = $donnees["oqp"];
				$this->tel = $donnees["tel"];
				$this->date_naissance = $donnees["date"];
				$this->adresse = $donnees["adresse"];
				if($donnees["sexe"] == 0)
					$this->sexe = "Non renseigné";
				if($donnees["sexe"] == 1)
					$this->sexe = "Homme";
				if($donnees["sexe"] == 2)
					$this->sexe = "Femme";
				$this->avatar = $donnees["avatar"];
			}
			$response->CloseCursor();
		}
		
		//  Accesseurs
		public function getType() {
			global $bdd;
			$type = 999;  // Type par défaut d'un utilisateur non loggué
			
			$query = "SELECT type FROM user WHERE email = '".$this->email."' AND password = '".$this->password."';";
			$response = $bdd->query($query);
			$donnees = $response->fetch();
			if($donnees)
				$type = $donnees["type"];
			$response->CloseCursor();
			
			return intval($type);
		}
		
		public function getID() {
			global $bdd;
			$id = 999;  // Type par défaut d'un utilisateur non loggué
			
			$query = "SELECT id FROM user WHERE email = '".$this->email."' AND password = '".$this->password."';";
			$response = $bdd->query($query);
			$donnees = $response->fetch();
			if($donnees)
				$id = $donnees["id"];
			$response->CloseCursor();
			
			return intval($id);
		}
		
		public function getNom() {
			return $this->nom;
		}
		public function getPrenom() {
			return $this->prenom;
		}
		public function getOccupation() {
			return $this->occupation;
		}
		public function getTel() {
			return $this->tel;
		}
		public function getPassword() {
			return $this->password;
		}
		public function getEmail() {
			return $this->email;
		}
		public function getDateNaissance() {
			return $this->date_naissance;
		}
		public function getAdresse() {
			return $this->adresse;
		}
		public function getSexe() {
			return $this->sexe;
		}
		public function getAvatar() {
			return $this->avatar;
		}
	}
?>