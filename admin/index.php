<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed - Administration</title>
		<meta charset="Utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="admin_menu.js"></script>
	</head>
	<body>
		<menu>
			<h2>Bienvenue,</h2>
			<h3>Administrateur</h3>
			<ul>
				<li class="selected" id="menu_01">
					<a href="#" onclick="adminMenu('menu_01', 'board_01');">Tableau de bord</a>
				</li>
				<li class="deselected" id="menu_02">
					<a href="#" onclick="adminMenu('menu_02', 'board_02');">Gestion des utilisateurs</a>
				</li>
				<li class="deselected" id="menu_03">
					<a href="#" onclick="adminMenu('menu_03', 'board_03');">Gestion des locations</a>
				</li>
			</ul>
		</menu>
		
		<section>
			<header id="global_header">
				<h1>Administration</h1>
				<hr />
			</header>
			
			<article id="board_01" class="visible">
				<header>
					<h2>Tableau de bord</h2>
				</header>
				<article></article>
				<footer></footer>
			</article>
			
			<article id="board_02" class="hidden">
				<header>
					<h2>Gestion des utilisateurs</h2>
				</header>
				<article>
					<table>
						<tr>
							<th>ID</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Actions</th>
						</tr>
					</table>
				</article>
				<footer></footer>
			</article>
			
			<article id="board_03" class="hidden">
				<header>
					<h2>Gestion des locations</h2>
				</header>
				<article>
					<table>
						<tr>
							<th>ID</th>
							<th>Nom</th>
							<th>Adresse</th>
							<th>Description</th>
							<th>Actions</th>
						</tr>
					</table>
				</article>
				<footer></footer>
			</article>
		</section>
	</body>
</html>