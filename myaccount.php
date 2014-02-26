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
							</article>
							<section id="profil_infos">
								<table>
									<tr>
										<th> Nom: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> Prénom: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> E-mail: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> Adresse: </th>
										<td> PHP </td>
									</tr>
								</table>
								<table>
									<tr>
										<th> Date de naissance: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> Numéro de Téléphone: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> Lieu: </th>
										<td> PHP </td>
									</tr>
									<tr>
										<th> Sexe: </th>
										<td> PHP </td>
									</tr>
								</table>
								
								<article id="profil_biographie">
									<h2> Biographie: </h2>
									<input type="textarea" class="form-control"style="height: 200px;width:600px;"/>
								</article>
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