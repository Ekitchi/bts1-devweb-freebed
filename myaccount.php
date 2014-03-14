<!-- traitement pré-HTML -->
<?php
include_once ("includes.php");

if (isset($_POST["sauvegarde"])) {
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirmpassword"];
	$adresse = $_POST["adresse"];
	$oqp = $_POST["occupation"];
	$sexe = $_POST["sexe"];
	$date_de_naissance = $_POST["date_de_naissance"];
	$tel = $_POST["tel"];
	$query = "";
	if ($password == $confirm_password) {
		$query = "UPDATE user SET nom='" . $nom . "' , prenom='" . $prenom . "', date_de_naissance='" . $date_de_naissance . "', adresse='" . $adresse . "', sexe='" . $sexe . "', email='" . $email . "', avatar='default_avatar.jpg', 
			password='" . $password . "', oqp='" . $oqp . "', tel='" . $tel . "' WHERE id='" . $_SESSION["user"] -> getID() . "';";
		$res = $bdd -> query($query);
		
		logOut();
		logIn($email, $password);	
	}


}

//  Récupération des logements
$query = "SELECT * FROM bien WHERE id_L = '" . $_SESSION["user"] -> getID() . "';";
$response = $bdd -> query($query);

$mes_bien = "";

while ($données = $response -> fetch()) {
	$mes_bien = $mes_bien . "
		<section class='mes_logements'>
								<img src='http://placehold.it/120x120'/>
								<table>
									<tr>
										<th>Annonce</th>
										<th>Adresse</th>
										<th>Ville</th>
										<th>Superficie</th>
										<th>Type</th>
										<th>Capacité d'accueil</th>
										<th>Tarif/jour</th>
										<th>Tarif/semaine</th>
									</tr>
									<tr>
										<td>" . $données["nom"] . "</td>
										<td>" . $données["adresse"] . "</td>
										<td>" . $données["ville"] . "</td>
										<td>" . $données["surface"] . " m²</td>
										<td>" . $données["type"]. "</td>
										<td>" . $données["capacite"]. "</td>
										<td>" . $données["tarif_j"]. "</td>
										<td>" . $données["tarif_s"]. "</td>
									</tr>
								</table>
							</section>
		";
}

//affichage de mon historique

$query = "SELECT * FROM historique WHERE idL = '" . $_SESSION["user"] -> getID() . "';";
$response = $bdd -> query($query);

$histo = "";

while ($données = $response -> fetch()) {
	$histo = $histo . "
		<section class='account_historique'>
								
								<table>
									<tr>
										<th>Annonce</th>
										<th>Nom du propriétaire</th>
										<th>Date début</th>
										<th>Date fin</th>
									</tr>
									<tr>
										<td>" .$données["id"]. "</td>
										<td>" .$données["idV"]. "</td>
										<td>" .$données["dateD"]. "</td>
										<td>" .$données["dateF"]. "</td>
									</tr>
								</table>
							</section>
		";
}
$response -> CloseCursor();
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<meta charset="UTF-8"/>
	</head>

	<body>
		<!-- Inclusion du header -->
		<?php
		include_once ("header.php");
		?>

		<section>
			<article>
				<ul id="menu_account">
					<li id="account_page1">
						<a href="#account_profil"> <h1> Profil </h1> </a>
						<div id="account_profil">
							<article id="profil_img">
								<img src="http://placehold.it/250x250"/>
								<input type="file"/>
							</article>
							<article id="profil_infos">
								<form method="post" action="myaccount.php">
									<table>
										<tr>
											<th> Nom: </th>
											<td>
											<input type="text" name="nom" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user'] -> getNom(); ?>"/>
											</td>
											<th> Prénom: </th>
											<td>
											<input type="text" name="prenom" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user'] -> getPrenom(); ?>"/>
											</td>
										</tr>
										<tr>
											<th> E-mail: </th>
											<td>
											<input type="email" name="email" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user'] -> getEmail(); ?>"/>
											</td>
											<th> Adresse: </th>
											<td>											<textarea rows="1"  name="adresse" style="width:100%" class="form-control"><?php echo $_SESSION['user'] -> getAdresse(); ?></textarea></td>
										</tr>
										<tr>
											<th> Occupation: </th>
											<td>
											<input type="text" name="occupation" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user'] -> getOccupation(); ?>"/>
											</td>
											<th> Sexe: </th>
											<td>
											<input type="text" name="sexe" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user'] -> getSexe(); ?>"/>
											</td>
										</tr>
										<tr>
											<th> Date de naissance: </th>
											<td>
											<input type="date" name="date_de_naissance" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user'] -> getDateNaissance(); ?>"/>
											</td>

											<th> Numéro de téléphone: </th>
											<td>
											<input type="tel" name="tel" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user'] -> getTel(); ?>"/>
											</td>
										</tr>
									</table>
							</article>

							<article id="profil_biographie">
								<h2>Biographie:</h2>
								<textarea class="form-control" rows="20" cols="85"></textarea>
							</article>

							<article id="profilpwd">
								<table>
									<tr>
										<th>Nouveau mot de passe:</th>
										<td>
										<input class="form-control" type="password" name="password" value="<?php echo $_SESSION["user"]->getPassword(); ?>"/>
										</td>
									</tr>
									<tr>
										<th>Confirmer le mot de passe:</th>
										<td>
										<input class="form-control" type="password" name="confirmpassword"/>
										</td>
									</tr>
								</table>
							</article>

							<footer id="profil_footer">
								<input type="submit" class="btn btn-profil" value="Annuler"/>
								<input type="submit" class="btn btn-profil" name="sauvegarde" value="Enregistrer"/>
								<p style="float:right;margin:15px;">
									Voulez-vous enregistrer les modifications ?
								</p>
							</footer>
						</div>
					</li>
					</form>

					<li>
						<a href="#account_logements"> <h1> Mes logements </h1> </a>
						<div id="account_logements">
							<section id="logements_ajouter">
								<a href="ajout_location.php">
								<input type="button" class="btn btn-annonce" value="Publier une annonce"/>
								</a>
							</section>
							<!-- affichage des élément de mes biens -->
							<?php

							echo $mes_bien;
							?>
						</div>
					</li>

					<li>
						<a href="#account_avis"> <h1> Mes notes </h1> </a>
						<div id="account_avis">
							<section class="account_avis_container">
								<img src="http://placehold.it/100x100">
								<article class="account_avis_name">
									NOM USER
								</article>
								<article class="account_avis_date">
									Message envoyé le:
									<br/>
									XX/XX/XXXX à XX:XX
								</article>
								<article class="account_avis_desc">
									LOREM IMPSUM DKSD KDFSDKMLVMK
								</article>
							</section>
							<section class="account_avis_container">
								<img src="http://placehold.it/100x100">
								<article class="account_avis_name">
									NOM USER
								</article>
								<article class="account_avis_date">
									Message envoyé le:
									<br/>
									XX/XX/XXXX à XX:XX
								</article>
								<article class="account_avis_desc">
									LOREM IMPSUM DKSD KDFSDKMLVMK
								</article>
							</section>
							<section class="account_avis_container">
								<img src="http://placehold.it/100x100">
								<article class="account_avis_name">
									NOM USER
								</article>
								<article class="account_avis_date">
									Message envoyé le:
									<br/>
									XX/XX/XXXX à XX:XX
								</article>
								<article class="account_avis_desc">
									LOREM IMPSUM DKSD KDFSDKMLVMK
								</article>
							</section>
							<section class="account_avis_container">
								<img src="http://placehold.it/100x100">
								<article class="account_avis_name">
									NOM USER
								</article>
								<article class="account_avis_date">
									Message envoyé le:
									<br/>
									XX/XX/XXXX à XX:XX
								</article>
								<article class="account_avis_desc">
									LOREM IMPSUM DKSD KDFSDKMLVMK
								</article>
							</section>
							<section class="account_avis_container">
								<img src="http://placehold.it/100x100">
								<article class="account_avis_name">
									NOM USER
								</article>
								<article class="account_avis_date">
									Message envoyé le:
									<br/>
									XX/XX/XXXX à XX:XX
								</article>
								<article class="account_avis_desc">
									LOREM IMPSUM DKSD KDFSDKMLVMK
								</article>
							</section>
							<section class="account_avis_container">
								<img src="http://placehold.it/100x100">
								<article class="account_avis_name">
									NOM USER
								</article>
								<article class="account_avis_date">
									Message envoyé le:
									<br/>
									XX/XX/XXXX à XX:XX
								</article>
								<article class="account_avis_desc">
									LOREM IMPSUM DKSD KDFSDKMLVMK
								</article>
							</section>
						</div>
					</li>
					<li>
						<a href="#account_historique"><h1>Historique</h1></a>
						<div id="account_historique">
							<!-- affichage historique -->

							<?php

							echo $histo;
							?>

						</div>
					</li>
					<li>
						<a href="#account_contact"> <h1> Contact </h1> </a>
						<div id="account_contact">
							PRENEZ CONTACT
						</div>
					</li>
				</ul>
			</article>
		</section>
	</body>
</html>
