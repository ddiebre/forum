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
     "SELECT nom, prenom, email, naissance, genre FROM listes
      WHERE nom LIKE '%$recherche%'
      OR prenom LIKE '%$recherche%'
      OR email LIKE '%$recherche%'
      OR naissance LIKE '%$recherche%'
      OR genre LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     while( $data = mysqli_fetch_array($q))
     {
      $tablo[]=$data;
      }
      $nbcol=1;

      $nb=count($tablo);
      for($i=0;$i<$nb;$i++){
          $valeur1=$tablo[$i]['nom'];
          $valeur2=$tablo[$i]['prenom'];
          $valeur3=$tablo[$i]['email'];
          $valeur4=$tablo[$i]['naissance'];
          $valeur5=$tablo[$i]['genre'];
      
          if($i%$nbcol==0)

          if($i%$nbcol==($nbcol-1));
}
         echo $i;
     if ($i=)
          
?>