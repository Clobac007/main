<?php
// ALTER TABLE table_name AUTO_INCREMENT = value;

$dns = "mysql:host=localhost;dbname=prj_ampoule;charset=utf8";
$pdo = new PDO($dns, "root", "");
$query1 = $pdo->query("SELECT id, colonne2, colonne3, colonne4, colonne5 FROM test");
if ($query1 != FALSE)
{
	$resultat1 = $query1->fetchAll();
	foreach($resultat1 as $key => $value)
	{
		echo "<p>";
		echo ""
		echo "</p>";
	}
}
else
{
	echo "<p>Aucune interventions n'as été engregistrer</p>";
}
?>