<?php
$animaux = [
    [
        "type" => "chien",
        "nom" => "Milou"
    ],
    [
        "type" => "chat",
        "nom" => "Félix"
    ],
    [
        "type" => "chien",
        "nom" => "Beethoven"
    ], 
    [
        "type" => "chat",
        "nom" => "Caramel"
    ]
];
//Créez un système grâce au html déjà présent pour filtrer les animaux dans le tableau à afficher en utilisant la méthode GET : soit tous, soit les chiens, soit les chats. Vous devrez créer différentes fonctions pour cela.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="?anim=tous">Tous</a>  <!-- href à compléter -->
        <a href="?anim=chien">Chien</a> <!-- href à compléter -->
        <a href="?anim=chats">Chats</a> <!-- href à compléter -->
    </nav>
    <br>
    <br>
    <br>
    <?php
		if (!empty($_GET['anim']))
		{
			if ($_GET['anim'] == "tous")
			{
				foreach ($animaux as $box)
				{
					$tbox = "a";
					foreach ($box as $type => $name)
					{
						if ($type == "type" && $name == "chien")
							$tbox = "chien";
						if ($type == "type" && $name == "chat")
							$tbox = "chat";
						if ($type != "type")
							echo $name . " est un " . $tbox . "</br>";
					}
				}
			}
			if ($_GET['anim'] == "chien")
			{
				foreach ($animaux as $box)
				{
					$test = 0;
					foreach ($box as $type => $name)
					{
						if ($type == "type" && $name == "chien")
							$test = 1;
						if ($test == 1 && $type == "nom")
							echo $name . " est un chien </br>";
					}
				}
			}
			if ($_GET['anim'] == "chats")
			{
				foreach ($animaux as $box)
				{
					$test = 0;
					foreach ($box as $type => $name)
					{
						if ($type == "type" && $name == "chat")
							$test = 1;
						if ($test == 1 && $type == "nom")
							echo $name . " est un chat </br>";
					}
				}
			}
		}
    ?>
</body>
</html>