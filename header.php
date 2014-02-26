<?php

$div_hdr_guest = "

		<ul id='header_connexion' name='header_connexion'>
			<li id='header_register'>
				<a href='inscription.php'> Inscription </a>
			</li>
			<li id='header_login'>
				<a href='#'> Connexion </a>
				<div>
					<table>
						<tr>
							<td><label for='connexion_username'> Nom d'utilisateur: </label></td>
							<td>
							<input type='text' placeholder='Nom de compte' id='connexion_username' name='connexion_username' class='form-control'/>
							</td>
						</tr>
						<tr>
							<td><label for='connexion_password'> Mot de passe: </label></td>
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
							<input type='button' value='Se connecter'/>
							</td>
						</tr>
					</table>
				</div>
			</li>
		</ul>";



$div_hdr_loggued = "

		<ul id='header_connexion' name='header_connexion'>
			<li id='header_register'>
				<a href='#'> Se déconnecter </a>
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
				<a href='#'> Se déconnecter </a>
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
		
		
?>





<header>
	<nav id="header" name="header">
		<ul id="header_logo">
			<li>
				<a href="main.php"> <img src="http://placehold.it/100x40"/> </a>
			</li>
		</ul>
		<ul id="header_rechercher" name="header_rechercher">
			<li>
				<input type="text"  placeholder="Où allez-vous ?" class="form-control form-header">
				</input>
			</li>
			<li>
				<input type="button" value="Trouver !" class="btn btn-header"/>
			</li>
		</ul>

		<?php echo($div_hdr_admin); ?>
		
	</nav>
</header>