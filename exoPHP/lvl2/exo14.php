<?php
//Générer un nombre aléatoire entre 1 et 100, si celui-ci est inférieur à 75 affichez la valeur du nombre aléatoire et un compteur d'essais de nombre jusqu'à ce que le nombre aléatoire soit supérieur strictement à 75 ! (Utilisez une boucle ! Mais quelle boucle prendre lorsque que l'on ne sait pas le nombre d'itération nécessaire ?)

//Code à faire ici
$n = random_int(1,100);
$try = 0;
while ($n <= 75)
{
	echo "Essai n°$try - $n </br>";
	$try++;
	$n = random_int(1,100);
}
echo "Essai n°$try - $n </br>";