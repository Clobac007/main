<?php
$notes1 = [15, 16, 17, 18, 16, 19];
$notes2 = [5, 11, 12, 13, 7, 10];
$notes3 = [6, 6, 17, 14, 13, 12];

$allnotes = [$notes1, $notes2, $notes3];

//Créer une fonction qui donne la moyenne de chacun des groupes de notes. Cette fonction prendra en paramètre un tableau, vous devrez donc passez chaque index du tableau $allnotes (càd l'appeller 3 fois pour obtenir les 3 moyennes, puis les affichez).

//Code à faire ici

function moynote($array)
{
	$n = 0;
	$i = 0;
	foreach ($array as $nb)
	{
		$n += $nb;
		$i ++;
	}
	$n /= $i;
	return $n;
}

// $moy = 0;
// $moy = moynote($notes1);
// echo "$moy </br>";
// $moy = moynote($notes2);
// echo "$moy </br>";
// $moy = moynote($notes3);
// echo "$moy </br>";