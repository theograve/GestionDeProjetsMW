<?php
require('include/navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insérer des données dans la table Projet</title>
</head>
<body>
<form action="BDD/requets.php" method="post">
    <label>Nom : </label>
    <p><input type="text" name="name"></p>
    
    <label>Client : </label>  <br>
    <p><input type="text" name="client"></p>
    
    <label>Hébergeur : </label>  <br>
    <p><input type="text" name="host"></p>

    <br><input type="checkbox" class="check-box" name="ServeurInfo"> <label>Serveur infogéré </label><br>
    <label>Notes/remarques : </label>
    <p><input type="text" name="notes"></p>
    <label>Dossier Lastpass : </label>
    <p><input type="text" name="DossierLastpass"></p>
    <label>Lien maquettes : </label>
    <p><input type="text" name="LienMaquettes "></p>

    <p><input type="submit" name="insertProjet" value="Insérer le projet"></p>
</form>
<button onclick="window.location.href='modifProjet.php';">Modifier des projets</button>
</body>
</html>
