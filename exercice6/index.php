<?php
$genderList = array('Monsieur', 'Madame');
// déclaration de variables par défaut
$name = '';
$firstName = '';
$genderUser = 0;
// recupération des données en $_GET ou $_POST
if (isset($_POST['nom'])) {
    $name = $_POST['nom'];
} elseif (isset($_GET['nom'])) {
    $name = $_GET['nom'];
}
// On retire tout ce qui peut etre malveillant 
$name = strip_tags($name);
// recupération des données en $_GET ou $_POST
if (isset($_POST['prenom'])) {
    $firstName = $_POST['prenom'];
} elseif (isset($_GET['prenom'])) {
    $firstName = $_GET['prenom'];
}
// On retire tout ce qui peut etre malveillant 
$firstName = strip_tags($firstName);
// recupération des données en $_GET ou $_POST
if (isset($_POST['sexe'])) {
    $genderUser = $_POST['sexe'];
} elseif (isset($_GET['sexe'])) {
    $genderUser = $_GET['sexe'];
}
// On retire tout ce qui peut etre malveillant 
$genderUser = strip_tags($genderUser);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice5/index.php">Exercice 5</a></li>
            <li><a href="../exercice7/index.php">Exercice 7</a></li>
        </ul>
        <?php
        if ($name != '' || $firstName != '') {
            ?>
            <p> Bonjour <?= $genderList[$genderUser] ?> <?= $name ?> <?= $firstName ?></p>
            <?php
        } else {
            ?>
            <form name="index" action="index.php" method="POST">
                <div id="formulaire">
                    <select name="sexe">
                        <?php
                        // On genere les options en allant chercher les données dans le tableau $genderList
                        foreach ($genderList as $key => $gender) {
                            ?>
                            <option value="<?= $key ?>"><?= $gender ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <label for="nom">Nom : </label><input type="text" name="nom" placeholder="Nom" required>
                    <label for="prenom">Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="submit" value="Valider" />
                </div>
            </form>
            <?php
        }
        ?>
    </body>
</html>