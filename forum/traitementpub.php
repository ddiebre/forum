<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<?php 

$bd = new PDO ('mysql:host=localhost;dbname=demo','root', '');

    $auteur = $_POST["auteur"];
    $titres = $_POST["titres"];
    $contenu = $_POST["contenu"];

 
    $preparation= $bd -> prepare("INSERT INTO publier (auteur, titres, contenu)
    VALUES ('$auteur','$titres','$contenu')");
    $data= array($auteur, $titres, $contenu);
    $preparation -> execute($data);
    
?>          