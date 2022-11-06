<?php
require('include/navbar.php');
require('BDD/requets.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier des données dans la table Hébergeur</title>
</head>
<body>

<form action='BDD/requets.php' method='post'>
    <ul>
        <?php foreach ($listHost as $host) { ?>
            <li>
                <input type="hidden" value="<?= $host->id; ?>" name="id[]" />
                <label>Nom : </label>
                <input type="text" value="<?= $host->name; ?>" name="name[<?= $host->id; ?>]" />
                <label>Notes : </label>
                <input type="text" value="<?= $host->notes; ?>" name="notes[<?= $host->id; ?>]" />
                <label>Code : </label>
                <input type="text" value="<?= $host->code; ?>" name="code[<?= $host->id; ?>]" />
            </li>
        <?php } ?>
    </ul>
    <div><input type='submit' name='modifyHost' value='Appliquer les modifications' /></div>
</form>
<button onclick="window.location.href='ajoutHebergeur.php';">Ajouter un Hébergeur</button>
</body>
</html>