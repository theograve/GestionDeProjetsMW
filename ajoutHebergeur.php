<?php
require('include/navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insérer des données dans la table Hebergeur</title>
</head>
<body>
<form action="BDD/requets.php" method="post">
    <label>Nom : </label>
    <p><input type="text" name="name"></p>
    <label>Notes : </label>
    <p><input type="text" name="notes"></p>
    <p><input type="submit" name="insertHost" value="Insérer l'hébergeur"></p>
</form>
<button onclick="window.location.href='modifHebergeur.php';">Modifier des hébergeurs</button>
</body>
</html>