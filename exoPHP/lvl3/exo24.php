<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="exo24.php" method="get">
    <label for="nom">Entrer votre nom : </label>
    <input type="text" name="nom" id="nom">
    <br>
    <br>
    <label for="age">Entrer votre âge : </label>
    <input type="number" name="age" id="age">
    <br>
    <br>
    <input type="submit" name="form_submit" value="Soumettre le formulaire">
    </form>
    <?php
    //Trouver un moyen de récupérer le nom et l'âge envoyer par le formulaire après sa soumission puis afficher le dans un paragraphe ! Il faut vérifier que les informations ont bien été envoyées avant d'afficher quoi que ce soit.

    //Code à faire ici
	echo "</br>";
	if (isset($_GET['nom']))
		echo "Bonjour M/Mme , ", $_GET['nom'], "</br>";
	if (isset($_GET['age']))
		echo "Vous avez ", $_GET['age'];
    ?>
</body>
</html>