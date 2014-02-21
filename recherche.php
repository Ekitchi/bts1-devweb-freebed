<!DOCTYPE html>
<!-- Traitements pré-HTML -->
<?php
	include_once("connexion.php");
?>
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
		<!-- Inclusion du header -->
		<?php include_once("header.php"); ?>
				
		<section>
			<article id="minimap">
				MINIMAP (Option)
			</article>
			<article id="filtre">
				FILTRE
			</article>
		</section>

		<section>
			<article id="allresults">
				<ul>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
				</ul>
			</article>
		</section>

	</body>
</html>