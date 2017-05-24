<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice4/index.php">Exercice 4</a></li>
            <li><a href="../exercice6/index.php">Exercice 6</a></li>
        </ul>
        <form name="index" action="index.php" method="POST">
            <div id="formulaire">
                <select name="sexe" size="1">
                    <option>Homme</option>
                    <option>Femme</option>
                </select>
                <label for="nom">Nom : </label><input type="text" name="nom" placeholder="Nom">
                <label for="prenom">Prénom : </label><input type="text" name="prenom" placeholder="Prénom">
                <input type="submit" value="Valider" />
            </div>
        </form>
        <p>
            Bonjour, tu t'appelles 
            <?php echo isset($_POST['prenom']) ? strip_tags($_POST['prenom']) : ''; ?> 
            <?php
            if (isset($_POST['nom'])) {
                echo strip_tags($_POST['nom']);
            } else {
                echo '';
            }
            ?>
            et tu es un(e) 
            <?php echo strip_tags(isset($_POST['sexe'])) ? $_POST['sexe'] : ''; ?>
        </p>
    </body>
</html>