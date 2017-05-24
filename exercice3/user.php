<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>user</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice2/index.php">Exercice 2</a></li>
            <li><a href="../exercice4/index.php">Exercice 4</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <p>Bonjour !</p>
        <!-- inject par la methose GET le nom et le prenom-->
        <p>Je sais comment tu t'appelles, <?php echo $_GET['prenom'] . $_GET['nom']; ?> !</p>
    </body>
</html>
