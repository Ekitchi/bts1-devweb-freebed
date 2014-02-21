<?php
try {
	$bdd = new PDO('mysql:host=localhost;dbname=freebed', 'root', 'root');
}
catch (Exception $e ) {
	die('Erreur: '.$e->getMessage());
}
?>