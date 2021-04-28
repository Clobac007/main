<?php
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
		echo "<th id='full'></th>";
		echo "<th id='full'></th>";
		echo "</tr>";
		foreach($resultat1 as $key => $value)
		{
			echo "<tr>";
			echo "<td>" . $value["colonne2"] . "</td>";
			echo "<td>" . "n°" . $value["colonne3"] . "</td>";
			echo "<td>" . $value["colonne4"] . "</td>";
			echo "<td>" . $value["colonne5"] . " €" . "</td>";
			echo "<td><input type='checkbox' id='".$value["id"]."' name='".$value["id"]."'" . "</td>";
			echo "<td><button type='submit' name='".$value["id"]."'/> Modifier </button>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<div class='btn'>";
		echo "<button onclick='myFunction()' id='del' type='submit' name='dellete'>Supprimer les cases cocher</button>";
	}
	else
	{
		echo "<p>Aucune interventions n'as été engregistrer</p>";
	}
}

$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");
$query1 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne2");
$resultat1 = $query1->fetchAll();
if (isset($_POST['dellete']))
{
	foreach($_POST as $keys => $values)
	{
		$pdo->query("DELETE FROM test WHERE id='".$keys."'");
		$pdo->query("ALTER TABLE test AUTO_INCREMENT = '".$keys."'");
	}
	header("Refresh:0");
}
display($resultat1);
?>