<?php
//Créer une fonction qui retourne la chaîne de caractère qui lui est envoyé sans voyelle (a, e, i, o, u, y) et affichez ce mot avant et après le changement ! Vous pouvez utiliser n'importe qu'elle mot pour cela comme girafe (ce qui donnerait grf) par exemple, peut-importe

//Code à faire ici

function offvowel($string)
{
	$c = 0;
	$sret = "";
	$cret = 0;
	$len = strlen($string);
	$string = str_split($string, 1);
	while ($c < $len)
	{
		if ($string[$c] != 'a' and $string[$c] != 'e' and $string[$c] != 'i' and $string[$c] != 'o' and $string[$c] != 'u' and $string[$c] != 'y'
		and $string[$c] != 'A' and $string[$c] != 'E' and $string[$c] != 'I' and $string[$c] != 'O' and $string[$c] != 'U' and $string[$c] != 'Y')
		{
			$sret[$cret] = $string[$c];
			$cret++;
		}
		$c++;
	}
	return $sret;
}

$string = "Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius";
echo "$string </br>";
$string = offvowel($string);
echo "$string </br>";