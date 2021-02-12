<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/consult.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
    <div class="container">
    <div class="row">
      <div class="col-10">
        <a href="index.html" class=""> <img src="images/logo2.png" width="21%" alt="..."></a>     </div>
    
      <div class="col-2 mt-3">
        <img src="images/bf.jpeg" width="50%" alt="...">
      </div>
    </div>
  </div>


  <div class="container-fluid bg-primary text-center font-weight-bold">
    <p><a href="recup.php">consulter la liste</a> </p>
  </div>
<div class="container">
    <div class="row">
    <div class="col ml-5">      
        <?php
        $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'apprenant';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);

    $req = "SELECT * FROM listes";
    $res = mysqli_query($conn,$req);
    while($data = mysqli_fetch_array($res))
   
    {
    $tablo[]=$data;
    }
    $nbcol=1;
    
    echo "<tr>";
    $nb=count($tablo);
    for($i=0;$i<$nb;$i++){
        $valeur1=$tablo[$i]['nom'];
        $valeur2=$tablo[$i]['prenom'];
        $valeur3=$tablo[$i]['email'];
        $valeur4=$tablo[$i]['naissance'];
        $valeur5=$tablo[$i]['genre'];
    
        if($i%$nbcol==0)

        if($i%$nbcol==($nbcol-1))
        echo '</tr>';
        
    
        }
        


		?>
       </div>
    </div>
		
</div>

<div class="container cercle">
<?php
echo $i;
echo '<p>apprenants</p>'
?>
</div>


	</body> 
</html>