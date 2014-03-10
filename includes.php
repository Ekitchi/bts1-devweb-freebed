<?php
	include_once ("./classes/cl_User.php");  // La classe User, essentielle pour stocker les infos de l'utilisateur
	session_start();  // Démarrage de session
	include_once("./functions/connexion.php");  // Gère l'accès à la base de données
	include_once("./functions/login.php");  // Foncions logIn et logOut
?>