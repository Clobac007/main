<?php include "fct.php" ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="style/index.css"/>	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gestionnaire</title>
	</head>
	<body>
		<section class="action_page">
			<div class="title">
				<p>Gestionnaire d'ampoules commune de l'immeuble</p>
			</div>
			<div class="form">
				<form action="index.php" method="post">
					<div>
						<input type="date" name="date_ch" required/>
					</div>
					<div>
						<input type="number" name="floor_ch" placeholder="Etage" required/>
					</div>
					<div>
						<input type="text" name="place_ch" placeholder="Position" required/>
					</div>
					<div>
						<input type="number" name="price_ch" placeholder="Prix" required/>
					</div>
					<div class="btn">
						<button type="submit">Effectuer le changement</button>
					</div>
				</form>
			</div>
			<div class="end">
				<p><a href='list.php'>Vers l'historique</a></p>
			</div>
		</section>
	</body>
</html>