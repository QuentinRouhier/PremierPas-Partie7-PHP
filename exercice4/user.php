<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>user</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice3/index.php">Exercice 3</a></li>
            <li><a href="../exercice5/index.php">Exercice 5</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <!-- inject par la methose POST le nom et le prenom-->
        <p>Je sais comment tu t'appelles <?php echo $_POST['prenom'] . $_POST['nom']; ?> !</p>
    </body>
</html>
