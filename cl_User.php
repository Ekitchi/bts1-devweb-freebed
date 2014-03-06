<?php
	/**
	 * Class User, pour stocker en session l'utilisateur en cours
	 */
	class User {
		private $email, $password;
		private $occupation, $nom, $prenom, $tel;
			
		public function __construct($mail, $pwd) {
			global $bdd;
			$this->email = $mail;
			$this->password = $pwd;
			$query = "SELECT nom, prenom, oqp, tel 
						FROM user 
						WHERE email = '".$this->email."' AND password = '".$this->password."';";
			$response = $bdd->query($query);
			if ($response->fetch() != NULL) {
				$donnees = $response->fetch();
				$this->nom = $donnees["nom"];
				$this->prenom = $donnees["prenom"];
				$this->occupation = $donnees["oqp"];
				$this->tel = $donnees["tel"];
			}
			/*else {
				$this->email = "";
				$this->password = "";
				$this->nom = "Va mourrir";
				$this->prenom = "";
				$this->occupation = "";
				$this->tel = "";
			}*/
			$response->CloseCursor();
		}
		
		public function getType($value='')
		{
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
	}
?>