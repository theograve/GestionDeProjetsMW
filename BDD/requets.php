<?php
require('connexion.php');

if(isset($_POST['insertCustomer'])){
    // récupérer les valeurs
    $name = $_POST['name'];
    $notes = $_POST['notes'];
    $code = $_POST['id'];

    // Requête mysql pour insérer des données
    $sql = "INSERT INTO customer(name, notes, code) VALUES (:name, :notes, '0000')";
    $res = $db->prepare($sql);
    $exec = $res->execute(array(":name"=>$name,":notes"=>$notes));

    // vérifier si la requête d'insertion a réussi
    if($exec){
        header('Location: ../ajoutClient.php');
    }else{
        echo "Échec de l'opération d'insertion";
    }
}

if(isset($_POST['modifyCustomer'])){
    $sql = "UPDATE customer SET name = :name, notes = :notes, code = :code WHERE id = :id";
    $statement = $db->prepare($sql);
    foreach ($_POST['id'] as $id) {
        $name = $_POST['name'][$id] ?? '';
        $notes = $_POST['notes'][$id] ?? '';
        $code = $_POST['code'][$id] ?? '';
        $statement->execute(compact('id', 'name', 'notes', 'code'));

        header('Location: ../modifClient.php');
    }
}

if(isset($_POST['insertHost'])){
    // récupérer les valeurs
    $name = $_POST['name'];
    $notes = $_POST['notes'];
    $code = $_POST['id'];

    // Requête mysql pour insérer des données
    $sql = "INSERT INTO host(name, notes, code) VALUES (:name, :notes, '0000')";
    $res = $db->prepare($sql);
    $exec = $res->execute(array(":name"=>$name,":notes"=>$notes));

    // vérifier si la requête d'insertion a réussi
    if($exec){
        header('Location: ../ajoutClient.php');
    }else{
        echo "Échec de l'opération d'insertion";
    }
}

if(isset($_POST['modifyHost'])){
    $sql = "UPDATE host SET name = :name, notes = :notes, code = :code WHERE id = :id";
    $statement = $db->prepare($sql);
    foreach ($_POST['id'] as $id) {
        $name = $_POST['name'][$id] ?? '';
        $notes = $_POST['notes'][$id] ?? '';
        $code = $_POST['code'][$id] ?? '';
        $statement->execute(compact('id', 'name', 'notes', 'code'));

        header('Location: ../modifHebergeur.php');
    }
}

$sqlClient = "SELECT * FROM customer";
$statement = $db->prepare($sqlClient);
$statement->execute();
$listClient = $statement->fetchAll(PDO::FETCH_OBJ);

$sqlHost = "SELECT * FROM host";
$statement = $db->prepare($sqlHost);
$statement->execute();
$listHost = $statement->fetchAll(PDO::FETCH_OBJ);