<?php
$array = ["b" => 7, "d" => 8, "a" => 56, "g" => 78, "f" => 23, "h" => 1, "j" => 74, "i" => 2, "e" => 3, "c" => 56];

//Trouver les fonctions PHP pour : trier ce tableau dans l'ordre croissant des valeurs (tout en conservant les clés), trier dans l'ordre croissant des clés, trier dans l'ordre décroissant des valeurs (tout en conservant les clés), trier dans l'ordre décroissant des valeurs et enfin inverser l'ordre de ce tableau. Vérifier tout cela en débuggant vos variables. Attention, lisez bien la doc ou vous risquez d'avoir des surprises ! N'hésitez pas à copier le tableau $array dans d'autres variables si cela vous aide

//Code à faire ici

asort($array);
print_r($array);
echo "</br>";
echo "</br>";
ksort($array);
print_r($array);
echo "</br>";
echo "</br>";
arsort($array);
print_r($array);
echo "</br>";
echo "</br>";
$array = array_reverse($array, true);
print_r($array);