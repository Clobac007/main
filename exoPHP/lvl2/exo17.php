<?php
$tableau = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

//Parcourez le tableau $tableau en affichant en PHP son indice puis la valeur associée, exemple : 0 => lundi

//Code à faire ici

$c = 0;
foreach ($tableau as $day)
{
	echo "$c => $day </br>";
	$c++;
}