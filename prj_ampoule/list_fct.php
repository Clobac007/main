<?php
// ALTER TABLE table_name AUTO_INCREMENT = value;
function display($resultat1)
{
	if (!empty($resultat1))
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>Date</th>";
		echo "<th>Numero d'etage</th>";
		echo "<th>Emplacement</th>";
		echo "<th>Prix</th>";
		echo "</tr>";
		foreach($resultat1 as $key => $value)
		{
			echo "<tr>";
			echo "<td>" . $value["colonne2"] . "</td>";
			echo "<td>" . $value["colonne3"] . "</td>";
			echo "<td>" . $value["colonne4"] . "</td>";
			echo "<td>" . $value["colonne5"] . "</td>";
			echo "<td><input type='checkbox' id='".$value["id"]."' name='".$value["id"]."'" . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "<p>Aucune interventions n'as été engregistrer</p>";
	}
}

$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");
$query1 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test");
$resultat1 = $query1->fetchAll();
if (!empty($_POST))
{
	foreach($_POST as $keys => $values)
	{
		$pdo->query("DELETE FROM test WHERE id='".$keys."'");
	}
	header("Refresh:0");
}
display($resultat1);
?>