<?php
//Créer la même classe PHP Livre que l'exercice précédent mais cette fois mettez ses propriétés en privées et créer lui ses getters et setters.

//Code à faire ici
class Livre {
	private $nom;
	private $auteur;

	public function __construct($n, $a)
	{
		$this->nom = $n;
		$this->auteur = $a;
	}

	public function __toString()
	{
		return "$this->nom par $this->auteur";
	}

	public function __set($field, $value)
	{
		if ($field == "nom")
			$this->nom = $value;
		if ($field == "auteur")
			$this->auteur = $value;
	}

	public function __get($field)
	{
		if ($field == "nom")
			return $this->nom;
		if ($field == "auteur")
			return $this->auteur;
	}
}

// $livre = new Livre("Ma vie", "Michelle");
// echo "$livre </br>";
// $livre -> __set("nom", "Ma mort");
// echo "$livre </br>";
// $livre -> __set("auteur", "Mephisto");
// echo "$livre </br>";