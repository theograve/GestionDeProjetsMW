<?php
require('connexion.php');

if(isset($_POST['insert'])){
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
        header('Location: ../ajout.php');
    }else{
        echo "Échec de l'opération d'insertion";
    }
}

if(isset($_POST['modify'])){
    $sql = "UPDATE customer SET name = :name, notes = :notes, code = :code WHERE id = :id";
    $statement = $db->prepare($sql);
    foreach ($_POST['id'] as $id) {
        $name = $_POST['name'][$id] ?? '';
        $notes = $_POST['notes'][$id] ?? '';
        $code = $_POST['code'][$id] ?? '';
        $statement->execute(compact('id', 'name', 'notes', 'code'));

        header('Location: ../modif.php');
    }
}

$sql = "SELECT * FROM customer";
$statement = $db->prepare($sql);
$statement->execute();
$listClient = $statement->fetchAll(PDO::FETCH_OBJ);