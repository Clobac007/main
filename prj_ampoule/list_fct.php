<?php
function display($resultat1, $mark)
{
	if (!empty($resultat1))
	{
		echo "<div class='filter'>";
		echo "<button type='submit' id='filter_date' name='filter_date'>Tri par date</button>";
		echo "<button type='submit' id='filter_floor' name='filter_floor'>Tri par étage</button>";
		echo "<button type='submit' id='filter_place' name='filter_place'>Tri par emplacement</button>";
		echo "<button type='submit' id='filter_price' name='filter_price'>Tri par prix</button>";
		echo "</div>";
		echo "<table>";
		echo "<tr>";
		if ($mark == "date")
			echo "<td id='col'><strong>Date</strong></td>";
		else
			echo "<td id='col'>Date</td>";
		if ($mark == "floor")
			echo "<td id='col'><strong>Numero d'etage</strong></td>";
		else
			echo "<td id='col'>Numero d'etage</td>";
		if ($mark == "place")
			echo "<td id='col'><strong>Emplacement</strong></td>";
		else
			echo "<td id='col'>Emplacement</td>";
		if ($mark == "price")
			echo "<td id='col'><strong>Prix</strong></td>";
		else
			echo "<td id='col'>Prix</td>";
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
			echo "</tr>";
		}
		echo "</table>";
		echo "<div class='btn'>";
		echo "<button onclick='add_mod()' type='button' id='mod_btn_open'>Modifier une intervention</button>";
		echo "<button onclick='myFunction()' type='submit' id='del' name='del'>Supprimer les cases cocher</button>";
		echo "</div>";
	}
	else
	{
		echo "<p>Aucune interventions n'as été engregistrer</p>";
	}
}

$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");
if (isset($_POST['del']))
{
	foreach($_POST as $keys => $values)
	{
		$pdo->query("DELETE FROM test WHERE id='".$keys."'");
		$pdo->query("ALTER TABLE test AUTO_INCREMENT = '".$keys."'");
	}
	header("Refresh:0");
}
if (isset($_POST['filter_date']))
{
	$query1 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne2");
	$resultat1 = $query1->fetchAll();
	$mark = "date";
	display($resultat1, $mark);
}
else if (isset($_POST['filter_floor']))
{
	$query2 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne3");
	$resultat1 = $query2->fetchAll();
	$mark = "floor";
	display($resultat1, $mark);
}
else if (isset($_POST['filter_place']))
{
	$query3 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne4");
	$resultat1 = $query3->fetchAll();
	$mark = "place";
	display($resultat1, $mark);
}
else if (isset($_POST['filter_price']))
{
	$query4 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne5");
	$resultat1 = $query4->fetchAll();
	$mark = "price";
	display($resultat1, $mark);
}
else
{
	$query5 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne2");
	$resultat1 = $query5->fetchAll();
	$mark = "date";
	display($resultat1, $mark);
}
?>