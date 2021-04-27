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
				echo $value1["first_name"] . " " . $value1["last_name"] . "</br></br>";
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
				echo $value2["first_name"] . " " . $value2["last_name"] . "</br></br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="third">
		<h1>Etats des utilisateurs commencant par N</h1>
		<?php
			$query3 = $pdo->query("SELECT first_name, last_name, country_code FROM users WHERE country_code LIKE 'N%'");
			$resultat3 = $query3->fetchAll();
			foreach($resultat3 as $key3 => $value3)
			{
				echo $value3["first_name"] . " " . $value3["last_name"] . " " . $value3["country_code"] . "</br></br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="four">
		<h1>Mails google des utilisateurs</h1>
		<?php
			$query4 = $pdo->query("SELECT first_name, last_name, email FROM users WHERE email LIKE '%google%'");
			$resultat4 = $query4->fetchAll();
			foreach($resultat4 as $key4 => $value4)
			{
				echo $value4["first_name"] . " " . $value4["last_name"] . " " . $value4["email"] . "</br></br>";
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
				echo $value5["country_code"] . " = " . $value5["COUNT(country_code)"] . "</br></br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="six">
		<?php
			// $pdo->query("INSERT INTO users VALUES (DEFAULT, 'Michel', 'Smith', '', 'Male', '59.163.23.97', '02/12/1992', '', 'http://slideshare.net/felis.jpg', '', 'CN')");
			// $pdo->query("UPDATE users SET email='msmith@google.com' WHERE id=1001");
			// $pdo->query("DELETE FROM users WHERE first_name='Michel'");
		?>
	</div>
	<div class="seven">
		<h1>Répartitions Hommes/Femmes</h1>
		<?php
			$query7 = $pdo->query("SELECT gender, COUNT(gender) FROM users GROUP BY gender");
			$resultat7 = $query7->fetchAll();
			foreach($resultat7 as $key7 => $value7)
			{
				echo $value7["gender"] . " = " . $value7["COUNT(gender)"] . "</br></br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="eight">
		<h1>Ages des utilisateurs</h1>
		<?php
			$query81 = $pdo->query("SELECT first_name, last_name, ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y'))/365) AS 'age' FROM users");
			$resultat81 = $query81->fetchAll();
			foreach($resultat81 as $key81 => $value81)
			{
				echo $value81["first_name"] . " " . $value81["last_name"] . " " . $value81["age"] . "</br></br>";
			}
			echo "</br>";
		?>
	</div>
	<div class="eightone">
		<h1>Age moyen</h1>
		<?php
			$query82 = $pdo->query("SELECT ROUND(SUM(ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y'))/365))/1000) AS 'agem' FROM users");
			$resultat82 = $query82->fetchAll();
			foreach($resultat82 as $key82 => $value82)
			{
				echo $value82["agem"] . "</br>";
			}
			echo "</br>";
		?>
		<h1>Age moyen femme</h1>
		<?php
			$query83 = $pdo->query("SELECT ROUND(SUM(ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y'))/365))/478) AS 'agemf' FROM users WHERE gender='Female'");
			$resultat83 = $query83->fetchAll();
			foreach($resultat83 as $key83 => $value83)
			{
				echo $value83["agemf"] . "</br>";
			}
			echo "</br>";
		?>
		<h1>Age moyen homme</h1>
		<?php
			$query84 = $pdo->query("SELECT ROUND(SUM(ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y'))/365))/522) AS 'agemh' FROM users WHERE gender='Male'");
			$resultat84 = $query84->fetchAll();
			foreach($resultat84 as $key84 => $value84)
			{
				echo $value84["agemh"] . "</br>";
			}
			echo "</br>";
		?>
	</body>
</html>