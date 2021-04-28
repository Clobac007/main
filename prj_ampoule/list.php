<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/list.css"/>
		<link rel="icon" href="pctr/favicone_ampoule.jpg"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gestionnaire_Historique d'intervention</title>
	</head>
	<body>
		<section class="history">
			<div class="title">
				<p>Liste des interventions</p>
			</div>
			<div class="list">
				<form action="list.php" method="post">
					<?php include "list_fct.php" ?>			
					<input type="submit" value="Supprimer les cases cocher"/>
				</form>	
			</div>
		</section>
	</body>
</html>