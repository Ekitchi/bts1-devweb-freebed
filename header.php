<header>
	<nav id="header" name="header">
		<ul id="header_rechercher" name="header_rechercher">
			<li>
				<input type="text"  placeholder="Où allez-vous ?" style="height:30px; width:250px; border-radius:4px;">
				</input>
			</li>
			<li>
				<input type="button" value="Trouver !" style="height:34px; border-radius:4px;"/>
			</li>
		</ul>

		<ul id="header_connexion" name="header_connexion">
			<li id="header_register">
				<a href="inscription.php"> Inscription </a>
			</li>
			<li id="header_login">
				<a href="#"> Connexion </a>
				<div>
					<table>
						<tr>
							<td><label for="connexion_username"> Nom d'utilisateur: </label></td>
							<td>
							<input type="text" placeholder="Nom d'utilisateur" id="connexion_username" name="connexion_username"/>
							</td>
						</tr>
						<tr>
							<td><label for="connexion_password"> Mot de passe: </label></td>
							<td>
							<input type="password" placeholder="Mot de passe" id="connexion_password" name="connexion_password"/>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<input type="checkbox" id="connexion_remember" name="connexion_remember"/>
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