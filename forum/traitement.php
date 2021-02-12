<?php

    require_once'connexion.php';

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $naissance = $_POST["naissance"];
    $genre = $_POST["genre"];

 
    $preparation= $bd -> prepare('INSERT INTO listes (nom,prenom,email,naissance, genre) VALUES(?, ?, ?, ?, ?)');
    $data= array($nom, $prenom, $email, $naissance, $genre);
    $preparation -> execute($data);
?>          