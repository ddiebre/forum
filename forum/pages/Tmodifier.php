
<?php
if(isset($_POST['modifier'])){

	$NOM=$_POST['NOM'];
	$PRENOM=$_POST['PRENOM'];
	$NAISSANCE=$_POST['NAISSANCE'];
	$ADRESSE=$_POST['ADRESSE'];
	$TELEPHONE=$_POST['TELEPHONE'];
	$EMAIL=$_POST['EMAIL'];
    $IDEN=$_POST['ID'];
    echo $IDEN;
	require_once 'connexion.php';
   $modifier = $db->prepare("UPDATE liste set NOM=?, PRENOM=?, NAISSANCE=?, ADRESSE=?, TELEPHONE=?, EMAIL=? WHERE id=$IDEN");  // ce ci est appeler une requette preparer et il est un tableau

   $data = array($NOM, $PRENOM, $NAISSANCE, $ADRESSE, $TELEPHONE, $EMAIL);
   $modifier-> execute($data);

}
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
  <h4 class="alert-heading do text-center font-weight-bold">votre modification a été effectué avec succés!</h4>
  
  <hr>
  <p class="mb-0 text-center font-weight-bold"><a href="../pages/modifier.php" class="list-unstyled text-danger "> RETOUR</a></p>
</div>
        </div>
        <div class="-offset-2">

        </div>
    </div>

</div>
