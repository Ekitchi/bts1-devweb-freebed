<!-- traitement pré-HTML -->
<?php
	include_once ("includes.php");
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
								<table>
									<tr>
										<th> Nom: </th>
										<td> <input type="text" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user']->getNom(); ?>"/> </td>
										<th> Prénom: </th>
										<td> <input type="text" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user']->getPrenom(); ?>"/> </td>
									</tr>
									<tr>
										<th> E-mail: </th>
										<td> <input type="email" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user']->getEmail(); ?>"/> </td>
										<th> Adresse: </th>
										<td> <textarea rows="1" style="width:100%" class="form-control"><?php echo $_SESSION['user']->getAdresse(); ?></textarea> </td>
									</tr>
									<tr>
										<th> Occupation: </th>
										<td> <input type="text" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user']->getOccupation(); ?>"/> </td>
										<th> Sexe: </th>
										<td> <input type="text" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user']->getSexe(); ?>"/> </td>
									</tr>
									<tr>
										<th> Date de naissance: </th>
										<td> <input type="date" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user']->getDateNaissance(); ?>"/> </td>
										<th> Numéro de téléphone: </th>
										<td> <input type="tel" style="width:100%;" class="form-control" value="<?php echo $_SESSION['user']->getTel(); ?>"/> </td>
									</tr>
								</table>
							</article>
							
							<!--<section id="profil_avis">
								<article class="avis_user">
									<table border="1">
										<tr>
											<th> <a href="#account_profil"> User </a> </th>
										</tr>
										<tr>
											<td> AVIS </td>
										</tr>
									</table>
									<table border="1">
										<tr>
											<th> <a href="#account_profil"> User </a> </th>
										</tr>
										<tr>
											<td> AVIS </td>
										</tr>
									</table>
									<table border="1">
										<tr>
											<th> <a href="#account_profil"> User </a> </th>
										</tr>
										<tr>
											<td> AVIS </td>
										</tr>
									</table>
									<table border="1">
										<tr>
											<th> <a href="#account_profil"> User </a> </th>
										</tr>
										<tr>
											<td> AVIS </td>
										</tr>
									</table>
								</article>
							</section>-->
							
							<article id="profil_biographie">
								<h2>Biographie:</h2>
								<textarea class="form-control" rows="20" cols="85"></textarea>
							</article>
							
							<footer id="profil_footer">
								<input type="submit" class="btn btn-profil" value="Annuler"/>
								<input type="submit" class="btn btn-profil" value="Enregistrer"/>
								<p style="float:right;margin:15px;">Voulez-vous enregistrer les modifications ?</p>
							</footer>
						</div>
					</li>
					
					
					<li>
						<a href="#account_logements"> <h1> Mes logements </h1> </a>
						<div id="account_logements">
							<section class="mes_logements">
								<img src="http://placehold.it/120x120"/>
								<table>
									<tr>
										<th>Annonce</th>
										<th>Adresse</th>
										<th>Ville</th>
										<th>Quartier</th>
										<th>Type</th>
										<th>Capacité d'accueil</th>
										<th>Tarif/jour</th>
										<th>Tarif/semaine</th>
									</tr>
									<tr>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
									</tr>
								</table>
							</section>
							
							<section class="mes_logements">
								<img src="http://placehold.it/120x120"/>
								<table>
									<tr>
										<th>Annonce</th>
										<th>Adresse</th>
										<th>Ville</th>
										<th>Quartier</th>
										<th>Type</th>
										<th>Capacité d'accueil</th>
										<th>Tarif/jour</th>
										<th>Tarif/semaine</th>
									</tr>
									<tr>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
									</tr>
								</table>
							</section>
							
							<section class="mes_logements">
								<img src="http://placehold.it/120x120"/>
								<table>
									<tr>
										<th>Annonce</th>
										<th>Adresse</th>
										<th>Ville</th>
										<th>Quartier</th>
										<th>Type</th>
										<th>Capacité d'accueil</th>
										<th>Tarif/jour</th>
										<th>Tarif/semaine</th>
									</tr>
									<tr>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
									</tr>
								</table>
							</section>
							
							<section class="mes_logements">
								<img src="http://placehold.it/120x120"/>
								<table>
									<tr>
										<th>Annonce</th>
										<th>Adresse</th>
										<th>Ville</th>
										<th>Quartier</th>
										<th>Type</th>
										<th>Capacité d'accueil</th>
										<th>Tarif/jour</th>
										<th>Tarif/semaine</th>
									</tr>
									<tr>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
										<td>PHP</td>
									</tr>
								</table>
							</section>
						</div>
					</li>
					
					
					<li>
						<a href="#account_modifier"> <h1> Modifier mes logements </h1> </a>
						<div id="account_modifier">
							MODIFICATION
						</div>
					</li>
					<li>
						<a href="#account_historique"> <h1> Historique </h1> </a>
						<div id="account_historique">
							HISTORIQUES DES LOCATIONS
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
