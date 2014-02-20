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

		<section id="firstarticle" name="firstarticle">
			<article id="slider1" name="slider1">
				SLIDER1
				<!-- <img src="http://placehold.it/1515x600"> -->
			</article>
		</section>

		<section id="bestrated" name="bestrated">
			<article id="best" name="best">
				<img src="http://placehold.it/1100x500">
			</article>

			<article id="bestdesc" name="bestdesc">
				DESC
			</article>
		</section>

		<section id="mostrented" name="mostrented">
			<article id="renteddesc" name="renteddesc">
				DESC
			</article>

			<article id="rented" name="rented">
				<img src="http://placehold.it/1100x500">
			</article>
		</section>

	</body>
</html>
