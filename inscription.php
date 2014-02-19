<!DOCTYPE html>
<html>
	<head>
	<title>FreeBed Location</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="style_inscription.css"/>
	<script src="prefixfree.min.js"></script>
	<script src="jquery-1.10.2.min.js"></script>
		<meta charset="UTF-8"/>
		<title>FreeBed Location</title>
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
						<a href=""> Inscription </a>
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

	<div id="inscription">
			<form name="inscription" onsubmit="return verifFormu();">
			<ul>
				<li> *Nom : <input type="text" name="nom" id="nom" required /> </li>
				<li> *Prenom : <input type="text" name="prenom" id="prenom" required /></li>
				<li> *E-mail : <input type="mail" name="mail" id="mail" required /></li>
				<li> *Mot de passe : <input type="password" name="password" id="password" required /></li>
				<li> *Confirmation du mot de passe : <input type="password" id="password2" required /></li>
				<li> *Sexe : <input type="radio" name="homme"label="homme"> Homme</input>
							<input type="radio" name="femme"label="femme"> Femme</input>
				</li>
					Date de naissance : *
					<!--Code de gen des dates (1-30,1-12-1900-2014)-->
					<select name="jour">
       				 <?php for ($jour = 1 ; $jour <= 31 ; $jour++)
					{
					?>
                  <option value="<?php echo $jour ?>"><?php echo $jour; ?></option>
					<?php              
					}
					?>  
					</select>
					<select name="mois">
					        <?php for ($mois = 1 ; $mois <= 12 ; $mois++)
					{
					?>
					                  <option value="<?php echo $mois ?>"><?php echo $mois; ?></option>
					<?php              
					}
					?>  
					</select>
					</select>
					<select name="annee">
					        <?php for ($annee = 1900 ; $annee <= 2014 ; $annee++)
					{
					?>
					                  <option value="<?php echo $annee ?>"><?php echo $annee; ?></option>
					<?php              
					}
					?> 
					<!--Fin du code de Gen-->
					<br/>
					</select>
					<br/>
					<br/>
					<input type="submit" value="Envoyer">
					<br/>
					</input>
					* : Champ obligatoire.
					
					</form>
						</body>
</html>