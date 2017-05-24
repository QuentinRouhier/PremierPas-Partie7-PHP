<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice7/index.php">Exercice 7</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>
            <?php
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe'])) {
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_fichier = $infosfichier['extension'];
                $extensions_autorisees = array('pdf');
                echo strip_tags($_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . $_POST['sexe']);
                if (in_array($extension_fichier, $extensions_autorisees)) {
                    echo basename($_FILES['monfichier']['name']) . 'ca marche';
                } else {
                    echo ' ca marche pas ';
                }
            } else {
                ?>  <form name="index" action="index.php" method="post" enctype="multipart/form-data">
                <div id="formulaire">
                    <li>
                        <select name="sexe" size="1">
                            <option>Homme</option>
                            <option>Femme</option>
                        </select>
                    </li>
                    <li><label for="nom">Nom : </label><input type="text" name="nom" placeholder="Nom" required></li>
                    <li><label for="prénom">Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required></li>
                    <li><input type="file" name="monfichier" /></li>
                    <li><input type="submit" value="Valider" /></li>
                </div>
            </form>
            <?php
        }
        ?>
    </p>
</body>
</html>