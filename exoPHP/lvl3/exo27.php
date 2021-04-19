<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="exo27.php" method="post">
        <label for="nom">Entrer votre nom : </label>
        <input type="text" name="nom" id="nom">
        <br>
        <br>
        <label for="email">Entrer votre email : </label>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <label for="age">Entrer votre age (vous devez être majeur) : </label>
        <input type="number" name="age" id="age">
        <br>
        <br>
        <label for="message"></label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" name="form_submit" value="Soumettre le formulaire">
    </form>
    <?php
    //Trouver un moyen de récupérer les informations envoyer par le formulaire après sa soumission puis afficher les ! Il faut vérifier que : le nom ne soit pas vide, que l'adresse email soit valide, que l'age soit supérieur ou égal à 18 et que le message ne soit pas vide. Trouver un moyen d'afficher le message avec des retours à la ligne si celui-ci en possède.

    //Code à faire ici
    echo "</br>";
	if (!empty($_POST))
	{
		if (!empty($_POST['nom']) && !empty($_POST['email']) && ($_POST['age'] >= 18) && !empty($_POST['message']))
		{
			echo "M/Mme ", $_POST['nom'], "(", $_POST['email'], ")", " ayant ", $_POST['age'], " ans a dit: </br>";
			echo $_POST['message'];
		}
		else
		{
			if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['message']))
				echo "Veuillez remplir tout les champs";
			if (!empty($_POST['age']) && $_POST['age'] <= 18)
				echo "Vous devez être majeur";
		}
	}
    ?>
</body>