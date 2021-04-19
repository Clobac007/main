<?php
//Créer une classe PHP Livre (ça n'a rien à voir avec une classe CSS). Donnez lui 2 propriétés publiques : "nom" et "auteur" ; un constructeur qui prend en paramètre un nom et un auteur puis définissez la méthode magique __toString() pour pouvoir facilement afficher un nouveau Livre créer. 

//IMPORTANT : cet exercice ainsi que le suivant aborde la notion d'objet et de classe ; ces notions ne nous serviront pas immédiatemment mais il est tout de même bien de voir à quoi cela ressemble

//Code à faire ici
class Livre {
	public $nom;
	public $auteur;

	public function __construct($n, $a)
	{
		$this->nom = $n;
		$this->auteur = $a;
	}

	public function __toString()
	{
		return "$this->nom par $this->auteur";
	}
}

// $livre = new Livre("Ma vie", "Michelle");
// echo $livre;