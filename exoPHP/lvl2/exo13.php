<?php
//Vous devez créer une variable qui contient un nombre aléatroire entre 1 et 12. Ce nombre correspondra à un mois (1 = janvier, 2 = février, etc...). Puis affichez le nombre aléatoire et le mois associé à celui-ci (utilisez un switch !).

//Code à faire ici
$n = random_int(1,12);
switch ($n)
{
	case 1:
		echo "$n janvier";
		break;
	case 2:
		echo "$n fevrier";
		break;
	case 3:
		echo"$n mars";
		break;
	case 4:
		echo "$n avril";
		break;
	case 5:
		echo "$n mai";
		break;
	case 6:
		echo "$n juin";
		break;
	case 7:
		echo "$n juillet";
		break;
	case 8:
		echo "$n aout";
		break;
	case 9:
		echo "$n septembre";
		break;
	case 10:
		echo "$n octobre";
		break;
	case 11:
		echo "$n novembre";
		break;
	case 12:
		echo "$n decembre";
		break;
}