<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="table.css"/>	
		<!-- <link rel="icon" href="pictures/logo_loiret.png"/> -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Table Multi</title>
	<head>
	<body>
		<h1>Bonjour, voici un générateur de multiplication</h1>
		<section class="table">
			<div class="x3">
				<?php
					include "table3.php";
				?>
			</div>
			<div class="?x...">
				<form action="index.php" method="post">
					<label for="number" id="number">Choose a number</label>
					<select name="number" id="number">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<div>
						<input type="submit" value="Calcul"/>
					</div>
				</form>
				<?php
					include "tablerow.php";
				?>
				</br>
			</div>
			<div class="third">
				<form action="index.php" method="post">
					<div>
						<input type="checkbox" id="1" name="1">
						<lable for="1">x1</label>
					</div>
					<div>
						<input type="checkbox" id="2" name="2">
						<lable for="2">x2</label>
					</div>
					<div>
						<input type="checkbox" id="3" name="3">
						<lable for="3">x3</label>
					</div>
					<div>
						<input type="checkbox" id="4" name="4">
						<lable for="4">x4</label>
					</div>
					<div>
						<input type="checkbox" id="5" name="5">
						<lable for="5">x5</label>
					</div>
					<div>
						<input type="checkbox" id="6" name="6">
						<lable for="6">x6</label>
					</div>
					<div>
						<input type="checkbox" id="7" name="7">
						<lable for="7">x7</label>
					</div>
					<div>
						<input type="checkbox" id="8" name="8">
						<lable for="8">x8</label>
					</div>
					<div>
						<input type="checkbox" id="9" name="9">
						<lable for="9">x9</label>
					</div>
					<div>
						<input type="checkbox" id="10" name="10">
						<lable for="10">x10</label>
					</div>
					<div class="button">
						<input type="submit" value="Calcul"/>
					</div>
				</form>
				<?php
					include "tableselect.php";
				?>
				<a href="index.php">Erase</a>
			</div>
		</section>	
	</body>
</html>