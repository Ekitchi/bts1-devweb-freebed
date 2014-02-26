<!DOCTYPE html>
<!-- Traitements pré-HTML -->
<?php
	//  Inclusion du fichier permettant la connexion à la BDD
	include_once ("connexion.php");
	
	$resultat = "";
	// Sert à stocker le résultat des requêtes pour l'afficher dans le Tableau de bord
	/*
	 * Traitements des données envoyées par les volet d'adminitration
	 */
	//  Ajout d'un user via le formulaire simplifié
	if (isset($_POST["AjoutUser"])) {
		if ($_POST["nom"] != "" && $_POST["prenom"] != "" && $_POST["courriel"] != "") {
			$query = "INSERT INTO user (nom, prenom, email, password) 
				VALUES ('" . $_POST["nom"] . "', '" . $_POST["prenom"] . "', '" . $_POST["courriel"] . "', '" . $default_password . "');";
			try {
				$response = $bdd -> query($query);
			} 
			catch (Exception $e) {
				$resultat = "<span class='warning'>" . $e -> getMessage() . "</span>";
			}
			$resultat = "<span class='info'>Requête effectuée sans problèmes</span>";
	
		} else {
			$resultat = "<span class='warning'>Formulaire incomplet</span>";
		}
	}
	
	//  Suppression d'un ou plusieurs utilisateurs'
	if (isset($_POST["HandleUsers"])) {
		if ($_POST["HandleUsers"] == "supprimer" && isset($_POST["IDs"])) {
			foreach ($_POST["IDs"] as $id) {
				$query = "DELETE FROM user WHERE id = ".intval($id).";";
				try {
					$response = $bdd -> query($query);
				} catch (Exception $e) {
					$resultat = "<span class='warning'>" . $e -> getMessage() . "</span>";
				}
				$resultat = "<span class='info'>Requête effectuée sans problèmes</span>";
			}
		}
		
		elseif (preg_match("#^ReinitMdP-[0-9]+#", $_POST["HandleUsers"])) {
			$id = $_POST["HandleUsers"];
			$id = preg_filter("#^ReinitMdP-#", "", $id);
			$query = "UPDATE user SET password = '".$default_password."' WHERE id = ".intval($id).";";
			try {
				$response = $bdd -> query($query);
			} catch (Exception $e) {
				$resultat = "<span class='warning'>" . $e -> getMessage() . "</span>";
			}
			$resultat = "<span class='info'>Requête effectuée sans problèmes</span>";
		}
	}
	
	/*
	 * Requêtes d'informations pour les volets d'administration
	 */
	//  Définition de la requête à exécuter
	$query = "SELECT * FROM user";
	//  Envoi de la requête SQL
	$response = $bdd -> query($query);
	
	//  $reponse est un tableau contenant les lignes renvoyées par la requête
	//  Pour le gérer on passe le tableau des réponse dans un while et on formatera le résultat
	//  sous la forme d'une chaine de caractère correspondant a du code HTML appelée $users
	$users = "";
	
	while ($données = $response -> fetch()) {
		//  Ici je formate ma ligne en HTML, ça permet de n'avoir à includer qu'une variable dans le HTML
		$users = $users . "
			<tr>
				<td>" . $données['id'] . "</td>
				<td>" . $données['nom'] . "</td>
				<td>" . $données['prenom'] . "</td>
				<td>" . $données['email'] . "</td>
				<td>
				<input type='submit' value='Modifier' />
				<button type='submit' value='ReinitMdP-". $données['id'] ."' name='HandleUsers' onclick='return confirm(\"Etes-vous sûr de vouloir réinitialiser le mot de passe de cet utilisateur ?\");'>Réinitialiser le MdP</>
				</td>
				<td><input type='checkbox' name='IDs[]' value='" . $données['id'] . "' /></td>
			</tr>";
	}
	//  Il faut fermer le traitement avec CloseCursor
	$response -> CloseCursor();
	
	//  Récupération des logements
	$query = "SELECT * FROM bien";
	$response = $bdd -> query($query);
	
	$biens = "";
	
	while ($données = $response -> fetch()) {
		$biens = $biens . "<tr><td>" . $données['id'] . "</td>
				<td>" . $données['nom'] . "</td>
				<td>" . $données['prenom'] . "</td>
				<td><input type='submit' value='Modifier' /><input type='submit' value='Supprimer' /></td></tr>";
	}
	$response -> CloseCursor();
?>

<!-- Début du HTML proprement dit -->
<html>
	<head>
		<title>FreeBed - Administration</title>
		<meta charset="Utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="admin_menu.js"></script>
	</head>
	<body>
		<menu>
			<h2>Bienvenue,</h2>
			<h3>Administrateur</h3>
			<ul>
				<li class="selected" id="menu_01">
					<a href="#" onclick="adminMenu('menu_01', 'board_01');">Tableau de bord</a>
				</li>
				<li class="deselected" id="menu_02">
					<a href="#" onclick="adminMenu('menu_02', 'board_02');">Gestion des utilisateurs</a>
				</li>
				<li class="deselected" id="menu_03">
					<a href="#" onclick="adminMenu('menu_03', 'board_03');">Gestion des locations</a>
				</li>
				<li class="deselected" >
					<a href="../main.php" >Retour à l'Accueil</a>
				</li>
			</ul>
		</menu>

		<section>
			<header id="global_header">
				<h1>Administration</h1>
				<hr />
			</header>

			<article id="board_01" class="visible">
				<header>
					<h2>Tableau de bord</h2>
				</header>
				<article>
					<?php echo($resultat); ?>
				</article>
				<footer></footer>
			</article>

			<article id="board_02" class="hidden">
				<header>
					<h2>Gestion des utilisateurs</h2>
				</header>
				<article>
					<h3>Liste des utilisateurs :</h3>
					<form method="post" action="index.php">
						<table cellspacing="0">
							<tr>
								<th>ID</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Courriel</th>
								<th>Actions</th>
								<th>Supprimer</th>
							</tr>
							<!-- Ici je n'ai plus qu'a afficher ma string toute formatée pour visualiser tous mes users -->
							<?php echo($users); ?>
						</table>
						<strong>Supprimer les utilisateurs cochés :</strong><input type="submit" value="supprimer" name="HandleUsers" onclick="return confirm('Etes-vous sûr de vouloir effacer ces utilisateurs ? \n Pas de retour arrière possible')"/>
					</form>

					<h3>Ajouter un utilisateur</h3>
					<form method="post" action="index.php">
						<label for="nom">Nom</label>
						<input type="text" name="nom" id="nom"/>
						<br />
						<label for="prenom">Prénom</label>
						<input type="text" name="prenom" id="prenom"/>
						<br />
						<label for="courriel">Courriel</label>
						<input type="text" name="courriel" id="courriel"/>
						<br />
						<input type="submit" value="Ajouter" name="AjoutUser" />
					</form>

				</article>
				<footer></footer>
			</article>

			<article id="board_03" class="hidden">
				<header>
					<h2>Gestion des locations</h2>
				</header>
				<article>
					<table cellspacing="0">
						<tr>
							<th>ID</th>
							<th>Nom</th>
							<th>Type</th>
							<th>Adresse</th>
							<th>Description</th>
							<th>Surface</th>
							<th>Actions</th>
						</tr>
						<?php echo($biens); ?>
					</table>
				</article>
				<footer></footer>
			</article>
		</section>
	</body>
</html>