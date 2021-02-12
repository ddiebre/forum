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
    <p><a href="">consulter la liste</a> </p>
  </div>

<div class="container">
<form method="POST" action=""> 
     Rechercher un mot : <input type="email" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
</div>

<div class="container mt-5">
    <div class="row">
    <div class="col ml-5">      
        <?php
        $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'apprenant';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);

     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "DELETE FROM listes
      WHERE email LIKE '$recherche'
      LIMIT 2");
/*
     // affichage du résultat
     while( $data = mysqli_fetch_array($q))
     {
      $tablo[]=$data;
      }
      $nbcol=1;
      
      echo '<table>';
      echo "<tr>";
      echo "<th>nom</th>";
      echo "<th>prenom</th>";
      echo " <th>email</th>";
      echo "<th>naissance</th>";
      echo " <th>genre</th>";
      echo "</tr>";
      $nb=count($tablo);
      for($i=0;$i<$nb;$i++){
          $valeur1=$tablo[$i]['nom'];
          $valeur2=$tablo[$i]['prenom'];
          $valeur3=$tablo[$i]['email'];
          $valeur4=$tablo[$i]['naissance'];
          $valeur5=$tablo[$i]['genre'];
      
          if($i%$nbcol==0)
          echo '<tr>';
          echo '<td>',$valeur1,'</td>';
          echo '<td>',$valeur2,'</td>';
          echo '<td>',$valeur3,'</td>';
          echo '<td>',$valeur4,'</td>';
          echo '<td>',$valeur5,'</td>';
      
          if($i%$nbcol==($nbcol-1))
          echo '</tr>';
          
      
          }
          echo '</table>';
     */
          
?>
<form action="suprimeok.php" method="POST">
<div class="form-check">
                    <input class="form-check-input" type="radio" name="delete" id="gridRadios2" value="<?php $valeur3;?>" >
                    <label class="form-check-label" for="gridRadios2">
                      suprimer
                    </label>

  </div>
  <button>suprimer</button>

</form>
       </div>
    </div>
		
</div>




	</body> 
</html>