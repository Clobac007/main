<?php
//Créer un nombre aléatoire entre 0 et 30 et qui soit un multiple de 5 puis affichez le ! 

//Code à faire ici

$n = 1;
while ($n % 5 != 0)
{
	$n = random_int (0,30);
}
echo $n;