<?php
require('include/navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insérer des données dans la table Users</title>
</head>
<body>
<form action="BDD/requets.php" method="post">
    <label>Nom : </label>
    
    <p><input type="text" name="name"></p>
    <label>Notes : </label>
    
    <p><input type="text" name="notes"></p>
    <p><input type="submit" name="insertCustomer" value="Insérer le client"></p>
</form>
<button onclick="window.location.href='modifClient.php';">Modifier des clients</button>
</body>
</html>
