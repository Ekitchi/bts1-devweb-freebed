<?php

$div_hdr_guest = "

		<ul id='header_connexion' name='header_connexion'>
			<li id='header_register'>
				<a href='inscription.php'> Inscription </a>
			</li>
			<li id='header_login'>
				<a href='#'> Connexion </a>
				<div>
					<form method='post' action='main.php'>
						<table>
							<tr>
								<td><label for='connexion_username'> Courriel : </label></td>
								<td>
								<input type='text' placeholder='Nom de compte' id='connexion_username' name='connexion_username' class='form-control'/>
								</td>
							</tr>
							<tr>
								<td><label for='connexion_password'> Mot de passe : </label></td>
								<td>
								<input type='password' placeholder='Mot de passe' id='connexion_password' name='connexion_password' class='form-control'/>
								</td>
							</tr>
							<tr>
								<td colspan='2'>
								<input type='checkbox' id='connexion_remember' name='connexion_remember'/>
								<label for='connexion_remember''>Se souvenir de moi</label></td>
							</tr>
							<tr>
								<td colspan='2'>
								<input type='submit' value='Se connecter' class='btn-header-connexion'/>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</li>
		</ul>";



$div_hdr_loggued = "

		<ul id='header_connexion' name='header_connexion'>
			<li id='header_register'>
				<form method='post' action='main.php'>
					<input type='submit' value='Déconnexion' name='deco' />
				</form>
			</li>
			<li id='header_login'>
				<a href='myaccount.php'> Mon compte </a>
				<div>
					<table>
						<tr>
							<td colspan='2'> <a href='myaccount.php#account_profil'> Mon profil </a> </td>
						</tr>
						<tr>
							<td colspan='2'> <a href='myaccount.php#account_logements'> Mes locations </a> </td>
						</tr>
						<tr>
							<td colspan='2'>
							 <a href='myaccount.php#account_modifier'> Gérer mes logements </a>
							 </td>
						</tr>
						<tr>
							<td colspan='2'>
							<a href='myaccount.php#account_historique'> Historique </a>
							</td>
						</tr>
					</table>
				</div>
			</li>
		</ul>";
				
				
				
				
$div_hdr_admin= "

		<ul id='header_connexion' name='header_connexion'>
			<li id='header_register'>
				<form method='post' action='main.php'>
					<input type='submit' value='Déconnexion' name='deco' />
				</form>
			</li>
			<li id='header_login'>
				<a href='myaccount.php'> Mon compte </a>
				<div>
					<table>
						<tr>
							<td colspan='2'> <a href='myaccount.php#account_profil'> Mon profil </a> </td>
							<td> <a href='admin'> Administration </a> </td>
						</tr>
						<tr>
							<td colspan='2'> <a href='myaccount.php#account_logements'> Mes locations </a> </td>
						</tr>
						<tr>
							<td colspan='2'>
							 <a href='myaccount.php#account_modifier'> Gérer mes logements </a>
							 </td>
						</tr>
						<tr>
							<td colspan='2'>
							<a href='myaccount.php#account_historique'> Historique </a>
							</td>
						</tr>
					</table>
				</div>
			</li>
		</ul>";
		
	//  Script de log :
	if(isset($_POST["connexion_username"]) && isset($_POST["connexion_password"])) {
		logIn($_POST["connexion_username"], $_POST["connexion_password"]);
	}
	
	// Script de log out :
	if(isset($_POST["deco"])) {
		logOut();
	}
	//  Ici on va placer le traitement SI LOGGUE, SINON SI ADMIN, SINON PAS LOGGUE
	if (isset($_SESSION["user"]) && $_SESSION["user"]->getType() == 0)
		$div_hdr = $div_hdr_loggued;	
	elseif (isset($_SESSION["user"]))
		$div_hdr = $div_hdr_admin;
	else
		$div_hdr = $div_hdr_guest;	
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script>
	function initialize() {
	
	var input = document.getElementById('search_box');
	var autocomplete = new google.maps.places.Autocomplete(input);
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<header>
	<nav id="header" name="header">
		<ul id="header_logo">
			<li>
				<a href="main.php"> <img src="http://placehold.it/100x40"/> </a>
			</li>
		</ul>
		<form action="recherche.php" method="post">
			<ul id="header_rechercher" name="header_rechercher">
			<li>
				<input id="search_box" name="adresse" type="search"  placeholder="Où allez-vous ?" class="form-control form-header" />
			</li>
			<li>
				<button type="submit" name="trouver" class="btn btn-header"/>Trouver !</button>
			</li>
			</ul>
		</form>
		
		<!-- Ici on a plus qu'à poper $div_hdr qui contien déjà la bonne div-->
		<?php echo($div_hdr); ?>
		
	</nav>
</header>