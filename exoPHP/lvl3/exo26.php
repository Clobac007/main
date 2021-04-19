
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="exo26.php" method="post">
        <label for="note1">Note 1 : </label>
        <input type="number" name="note1" id="note1">
        <br>
        <br>
        <label for="note2">Note 2 : </label>
        <input type="number" name="note2" id="note2">
        <br>
        <br>
        <label for="note3">Note 3 : </label>
        <input type="number" name="note3" id="note3">
        <br>
        <br>
        <input type="submit" name="form_submit" value="Soumettre le formulaire">
    </form>
    <?php
    //Trouver un moyen de récupérer les notes envoyer par le formulaire après sa soumission puis afficher les, ainsi que la moyenne des 3 notes ! 

    //Code à faire ici
    echo "</br>";
    if (!empty($_POST))
    {
	    if (empty($_POST['note1']) || empty($_POST['note2']) || empty($_POST['note3']))
            echo "Veuillez renseigner tout les champs";
        else
	        echo (($_POST['note1'] + $_POST['note2'] + $_POST['note3']) / 3);
    }
    ?>
</body>

</html>