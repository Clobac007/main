<?php
$notes1 = [15, 16, 17, 18, 16, 19];
$notes2 = [5, 11, 12, 13, 7, 10];

//Vous avez à votre disposition 2 tableaux. Afffichez la moyenne des 2 tableaux !

//Code à faire ici !

$c = 0;
$moy1 = 0;
foreach ($notes1 as $mark)
{
	$moy1 += $mark;
	$c++;
}

$moy1 = $moy1 / $c;
echo "$moy1</br>";

$c = 0;
$moy2 = 0;
foreach ($notes2 as $mark)
{
	$moy2 += $mark;
	$c++;
}

$moy2 = $moy2 / $c;
echo "$moy2</br>";

$moy2 /= 2;
echo "$moy2</br>";