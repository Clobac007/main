<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="bdtrain.css"/>	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Affichage BDD</title>
	</head>
	<body>
	<?php
		$dns = "mysql:host=localhost;dbname=exercices_sql;charset=utf8";
		$pdo = new PDO($dns, "root", "");
	?>
	<div class="first">
		<h1>Utilisateurs du nom de Palmer</h1>
		<?php
			$query1 = $pdo->query("SELECT first_name, last_name FROM users WHERE last_name='Palmer'");
			$resultat1 = $query1->fetchAll();
			foreach($resultat1 as $key1 => $value1)
			{
				echo $value1["first_name"] . " " . $value1["last_name"] . "</br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="second">
		<h1>Utilisatrices</h1>
		<?php
			$query2 = $pdo->query("SELECT first_name, last_name FROM users WHERE gender='Female'");
			$resultat2 = $query2->fetchAll();
			foreach($resultat2 as $key2 => $value2)
			{
				echo $value2["first_name"] . " " . $value2["last_name"] . "</br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="third">
		<h1>Etats des utilisateurs</h1>
		<?php
			$query3 = $pdo->query("SELECT first_name, last_name, country_code FROM users WHERE country_code LIKE 'N%'");
			$resultat3 = $query3->fetchAll();
			foreach($resultat3 as $key3 => $value3)
			{
				echo $value3["first_name"] . " " . $value3["last_name"] . " " . $value3["country_code"] . "</br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="four">
		<h1>Mails des utilisateurs</h1>
		<?php
			$query4 = $pdo->query("SELECT first_name, last_name, email FROM users WHERE email LIKE '%google%'");
			$resultat4 = $query4->fetchAll();
			foreach($resultat4 as $key4 => $value4)
			{
				echo $value4["first_name"] . " " . $value4["last_name"] . " " . $value4["email"] . "</br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="five">
		<h1>Répartitions par Etats des utilisateurs</h1>
		<?php
			$query5 = $pdo->query("SELECT country_code, COUNT(country_code) FROM users GROUP BY country_code ORDER BY COUNT(country_code)");
			$resultat5 = $query5->fetchAll();
			foreach($resultat5 as $key5 => $value5)
			{
				echo $value5["country_code"] . " = " . $value5["COUNT(country_code)"] . "</br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="six">
		<?php
			// $pdo->query("INSERT INTO users VALUES (1001, 'Michel', 'Smith', 'msmith@google.com', 'Male', '59.163.23.97', '02/12/1992', '', 'http://slideshare.net/felis.jpg', '', 'CN')");
			// $pdo->query("DELETE INTO users WHERE first_name='Michel'");
		?>
	</div>
	<div class="seven">
		<h1>Répartitions Hommes/Femmes</h1>
		<?php
			$query7 = $pdo->query("SELECT gender, COUNT(gender) FROM users GROUP BY gender");
			$resultat7 = $query7->fetchAll();
			foreach($resultat7 as $key7 => $value7)
			{
				echo $value7["gender"] . " = " . $value7["COUNT(gender)"] . "</br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="eight">
		<?php
			// UPDATE users SET birth_date = REPLACE (birth_date, '/', '-')
		?>
	</div>
	</body>
</html>