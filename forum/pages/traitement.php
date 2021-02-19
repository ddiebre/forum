<?php

require_once 'connexion.php'; //permet de connecter premierement a la base de donnée

$NOM = $_POST['NOM'];//$_POST variable globale ou super globale
$PRENOM = $_POST['PRENOM'];
$NAISSANCE = $_POST['NAISSANCE'];
$ADRESSE = $_POST['ADRESSE'];
$TELEPHONE = $_POST['TELEPHONE'];
$EMAIL = $_POST['EMAIL'];

$preparation = $db->prepare('INSERT INTO liste (NOM, PRENOM, NAISSANCE, ADRESSE, TELEPHONE, EMAIL) VALUES(?, ?, ?, ?, ?, ?)');/// ce ci est appeler une requette preparé et il est un tableau

$data = array($NOM, $PRENOM, $NAISSANCE, $ADRESSE, $TELEPHONE, $EMAIL);
$preparation -> execute($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/liste.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>validation</title>
</head>
<body class="bg-light">
<?php include ('entete.php') ; ?>
<div class="container">
    <div class="row">
        <div class="offset-2">

        </div>
        <div class="col-md-8 mt-5">
        <div class="alert alert-danger mt-5 " role="alert">
  <h4 class="alert-heading do text-center font-weight-bold">votre enregistrement a été effectué avec succés!</h4>
  
  <hr>
  <p class="mb-0 text-center font-weight-bold"><a href="../pages/enregister.php" class="list-unstyled text-danger "> RETOUR</a></p>
</div>
        </div>
        <div class="-offset-2">

        </div>
    </div>

</div>

<!--
<p class="text-center text-uppercase text-danger font-weight-bold mt-5">votre enregistrement a été effectué avec succés</p>

<p class=" text-uppercase text-center font-weight-bold mt-5"><a href="../pages/enregister.php" class="list-unstyled text-danger "> RETOUR</a></p>-->


<script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../simplon/js/app1.js"></script>
</body>
</html>