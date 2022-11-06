<?php
require('include/navbar.php');
require('BDD/requets.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier des données dans la table Projet</title>
</head>
<body>

<form action='BDD/requets.php' method='post'>
    <ul>
        <?php foreach ($listProjet as $projet) { ?>
            <li>
                <input type="hidden" value="<?= $projet->id; ?>" name="id[]" />
                <label>Nom : </label>
                <input type="text" value="<?= $projet->name; ?>" name="name[<?= $projet->id; ?>]" />
                <label>Notes : </label>
                <input type="text" value="<?= $projet->notes; ?>" name="notes[<?= $projet->id; ?>]" />
                <label>Code : </label>
                <input type="text" value="<?= $projet->code; ?>" name="code[<?= $projet->id; ?>]" />
                <label>Dossier Lastpass : </label>
                <input type="text" value="<?= $projet->lastpass_folder; ?>" name="lastpass_folder[<?= $projet->id; ?>]" />
                <label>Lien maquettes : </label>
                <input type="text" value="<?= $projet->link_mock_ups; ?>" name="link_mock_ups[<?= $projet->id; ?>]" />
                <label>Serveur infogéré : </label>
                <input type="text" value="<?= $projet->managed_server; ?>" name="managed_server[<?= $projet->id; ?>]" />
                <label>Client : </label>
                <input type="text" value="<?= $projet->customer_id; ?>" name="customer_id[<?= $projet->id; ?>]" />
                <label>Hébergeur : </label>
                <input type="text" value="<?= $projet->host_id; ?>" name="host_id[<?= $projet->id; ?>]" />
            </li>
        <?php } ?>
    </ul>
    <div><input type='submit' name='modifyProjet' value='Appliquer les modifications' /></div>
</form>
<button onclick="window.location.href='ajoutProjet.php';">Ajouter un projet</button>
</body>
</html>