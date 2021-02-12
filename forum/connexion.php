<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>validation</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<div class="container">
    <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-8"><a href="index.html"></a>
            <img src="images/logo2.png" width="21%" alt="...">   </a>
          </div>
     
      <div class="col-sm-10 col-md-4 col-lg-4 mt-2">
        <img src="images/bf.jpeg" width="21%" alt="...">
      </div>
    </div>
  </div>
  <div class="container-fluid bg-danger text-white text-center">
    <p>formulaire d'inscription</p>
  </div>

  <div class="container">
  <a href="../logout.php">
        <input class="btn btn-primary" type="SUBMIT" value="Déconnexion" > 
    </a>
    <a href="index.html">
        <input class="btn btn-danger" type="SUBMIT" value="précédent" > 
      </a>
  </div>
<div class="container">
<?php
  try
  {
   $bd = new PDO ('mysql:host=localhost;dbname=apprenant','root', '');
}

  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }
if(extension_loaded('PDO')){ echo 'opération reussi apprenant ajouté';
}
?>
</div>

</body>
</html>
