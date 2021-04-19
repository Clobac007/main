<?php
$person1 = [
    "nom" => "Pierre",
    "age" => 18,
    "notes" => [10, 12, 15, 14, 18]
];

$person2 = [
    "nom" => "Paul",
    "age" => 17,
    "notes" => [15, 12, 13, 17, 8]
];

$person3 = [
    "nom" => "Jacques",
    "age" => 19,
    "notes" => [12, 20, 20, 17, 14]
];

//Créer une fonction qui permet d'afficher les informations (nom et âge) de chaques personnes et d'afficher l'ensemble de leur notes puis la moyenne de celle-ci

//Code à faire ici

function moytab ($array)
{
	foreach ($array as $clé => $elem)
	{
		if ($clé == "notes")
		{
			$n = 0;
			$i = 0;
			foreach ($elem as $nb)
			{
				$n += $nb;
				$i ++;
			}
			$n /= $i;
			echo "Moy : $n </br>";
		}
		else
		{
			echo "$clé :";
			echo "$elem </br>";
		}
	}
	return;
}

// moytab($person1);
// echo "</br>";
// moytab($person2);
// echo "</br>";
// moytab($person3);
// echo "</br>";