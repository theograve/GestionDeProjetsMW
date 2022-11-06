<?php
require('include/navbar.php');
require('BDD/requets.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier des données dans la table Users</title>
</head>
<body>

<form action='BDD/requets.php' method='post'>
    <ul>
        <?php foreach ($listClient as $client) { ?>
            <li>
                <input type="hidden" value="<?= $client->id; ?>" name="id[]" />
                <label>Nom : </label>
                <input type="text" value="<?= $client->name; ?>" name="name[<?= $client->id; ?>]" />
                <label>Notes : </label>
                <input type="text" value="<?= $client->notes; ?>" name="notes[<?= $client->id; ?>]" />
                <label>Code : </label>
                <input type="text" value="<?= $client->code; ?>" name="code[<?= $client->id; ?>]" />
            </li>
        <?php } ?>
    </ul>
    <div><input type='submit' name='modifyCustomer' value='Appliquer les modifications' /></div>
</form>
<button onclick="window.location.href='ajoutClient.php';">Ajouter un client</button>
</body>
</html>