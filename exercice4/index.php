<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice3/index.php">Exercice 3</a></li>
            <li><a href="../exercice5/index.php">Exercice 5</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <!-- utilisation de la method post qui fait envoi vers user.php grace a l'action -->
        <form action="user.php" method="post">
            <div id="formulaire">
                <li><label for="nom">Nom : </label><input type="text" name="nom" placeholder="Nom"></li>
                <li><label for="prénom">Prénom : </label><input type="text" name="prenom" placeholder="Prénom"></li>
                <li><input type="submit" value="Valider" /></li>
            </div>
        </form>
    </body>
</html>