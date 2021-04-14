<?php
//Créer une variable qui contient un nombre aléatoire entre 5 et 20. Puis affichez dans différents paragraphes le résultat de l'addition cumulé du chiffre obtenu avec les entiers qui le précède (sauf 0) ; exemple :
/* Si vous obtenez 5, je veux :
1 : résultat = 5 (5+0)
2 : résultat = 9 (5+4)
3 : résultat = 12 (9+3)
4 : résultat = 14 (12+2)
5 : résultat = 15 (14+1)
*/

//Code à faire ici
$n = random_int (5,20);
$count = $n - 1;
echo "$n </br>";
for ($count; $count > 0; $count--)
{
	$n += $count; 
	echo "$n </br>";
}