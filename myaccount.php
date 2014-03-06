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
							<section id="profil_img">
								<img src="http://placehold.it/250x250"/>
							</section>
							<section id="profil_infos">
								<table>
									<tr>
										<th> Nom: </th>
										<td> <?php echo $_SESSION["user"]->getNom(); ?> </td>
										<th> Prénom: </th>
										<td> <?php echo $_SESSION["user"]->getPrenom(); ?> </td>
									</tr>
									<tr>
										<th> E-mail: </th>
										<td> <?php echo $_SESSION["user"]->getEmail(); ?> </td>
										<th> Adresse: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> Résidence: </th>
										<td> PHP </td>
										<th> Sexe: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> Date de naissance: </th>
										<td> PHP </td>
										<th> Numéro de téléphone: </th>
										<td> <?php echo $_SESSION["user"]->getTel(); ?> </td>
									</tr>
								</table>
							</section>
							
							<section id="profil_avis">
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
							</section>
							
							<section id="profil_biographie">
								<h2> Biographie:
								<input type='button' class="btn" value="Modifier" style="height:30px; width:80px;"/>
								</h2>
								<!--<textarea class="form-control" rows="20" cols="85"> </textarea>-->
								<article style='border:1px dashed black; height: 309px; width:700px;'></article>
							</section>
						</div>
					</li>
					<li>
						<a href="#account_logements"> <h1> Mes logements </h1> </a>
						<div id="account_logements">
							LOGEMENTS MIS EN LOCATION
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
