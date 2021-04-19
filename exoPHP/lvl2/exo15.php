<?php
//Créer une fonction PHP qui retourne vraie ou faux si un nombre qui lui est passé en paramètre est pair ou impair (respectivement). Vous pouvez tester tout cela facilement.

//Code à faire ici
function pairnumber($n)
{
	if ($n % 2 == 0)
		return true;
	else
		return false;
}