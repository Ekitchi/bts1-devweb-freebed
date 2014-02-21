<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<meta charset="UTF-8"/>
	</head>

	<body>
		<header>
			<nav id="menu" name="menu">
				<ul id="rechercher" name="rechercher">
					<li>
						<input type="text"  placeholder="Où allez-vous ?" style="height:30px; width:250px; border-radius:4px;">
						</input>
					</li>
					<li>
						<input type="button" value="Trouver !" style="height:34px; border-radius:4px;"/>
					</li>
				</ul>

				<ul id="connexion" name="connexion">
					<li id="register">
						<a href="inscription.php"> Inscription </a>
					</li>
					<li id="login">
						<a href=""> Connexion </a>
						<div>
							<table>
								<tr>
									<td><label for="username"> Nom d'utilisateur: </label></td>
									<td>
									<input type="text" placeholder="Nom d'utilisateur" id="username" name="username"/>
									</td>
								</tr>
								<tr>
									<td><label for="password"> Mot de passe: </label></td>
									<td>
									<input type="password" placeholder="Mot de passe" id="password" name="password"/>
									</td>
								</tr>
								<tr>
									<td colspan="2">
									<input type="checkbox" id="remember" name="remember"/>
									<label for="remember">Se souvenir de moi</label></td>
								</tr>
								<tr>
									<td colspan="2">
									<input type="button" value="Se connecter"/>
									</td>
								</tr>
							</table>
						</div>
					</li>
				</ul>
			</nav>
		</header>
		


		<body>
			<section>
				<article>
					<ul id="menu_account">
						<li>
							<a href="#account_resume" tabindex="0"> <h1> Résumé </h1> </a>
							<div id="account_resume">
								INFORMATIONS
							</div>
						</li>
						<li>
							<a href="#account_profil"> <h1> Profil </h1> </a>
							<div id="account_profil">
								NOM, PRENOM
							</div>
						</li>
						<li>
							<a href="#account_louer"> <h1> Louer votre logement </h1> </a>
							<div id="account_louer">
								AJOUTER VOTRE LOGEMENT
							</div>
						</li>
					</ul>
				</article>
			</section>	
			
			
			
		</body>
</html>
		