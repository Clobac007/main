<?php
	$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
	$pdo = new PDO($dns, "root", "");
	$query2 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test ORDER BY colonne2");
	$resultat2 = $query2->fetchAll();
	echo "<select name='choose' id='choose'>";
	foreach ($resultat2 as $keyr => $valuer)
	{
		echo "<option value='".$valuer["id"]."'>";
		echo $valuer["colonne2"] . " | étage n°" . $valuer["colonne3"] .
			" | " . $valuer["colonne4"] . " | " . $valuer["colonne5"] . " €";
		echo "</option>";
	}
	echo "</select>";
	if (isset($_POST['change']))
	{
		if (!empty($_POST['date_ch']))
			$pdo->query("UPDATE test SET colonne2='".$_POST["date_ch"]."' WHERE id='".$_POST["choose"]."'");
		if (!empty($_POST['floor_ch']))
			$pdo->query("UPDATE test SET colonne3='".$_POST["floor_ch"]."' WHERE id='".$_POST["choose"]."'");
		if (!empty($_POST['place_ch']))
			$pdo->query("UPDATE test SET colonne4='".$_POST["place_ch"]."' WHERE id='".$_POST["choose"]."'");
		if (!empty($_POST['price_ch']))
			$pdo->query("UPDATE test SET colonne5='".$_POST["price_ch"]."' WHERE id='".$_POST["choose"]."'");
		header("Refresh:0");
	}
?>