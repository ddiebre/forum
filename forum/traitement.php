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

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $naissance = $_POST["naissance"];
    $genre = $_POST["genre"];
    $password = $_POST["password"];
 
    $preparation= $bd -> prepare("INSERT INTO membre (nom, prenom, username, email, naissance, genre, password)
    VALUES ('$nom','$prenom','$username','$email', '$naissance','$genre', '".hash('sha256', $password)."')");
    $data= array($nom, $prenom, $username, $email, $naissance, $genre, $password);
    $preparation -> execute($data);
?>          