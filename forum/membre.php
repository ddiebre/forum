<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
	</head>
	<body>
  <div class="container-fluid bg-primary">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="welcome.php">Lactsof</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link text-light" href="welcome.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Membres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a href="membre.php" class="dropdown-item">liste des membres</a>
        <a href="form.php" class="dropdown-item">ajouter des membres</a>
        <a href="#" class="dropdown-item">modifier des membres</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Publications</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Commentaires</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a href="logout.php" class="dropdown-item">Sign Out of Your Account</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</div>

  <div class="container-fluid bg-primary text-center font-weight-bold">
    <p><a href="recup.php">consulter la liste</a> </p>
  </div>
 

<div class="container mt-2">
    <div class="row">
    <div class="col ml-5">      
        <?php
        $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'demo';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);

    $delette= "delette";
    $req = "SELECT * FROM membre";
    $res = mysqli_query($conn,$req);
    while($data = mysqli_fetch_array($res))
   
    {
    $tablo[]=$data;
    }

    $nbcol=1;
    
    echo '<table class="table table-striped"">';
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>nom</th>";
    echo "<th>prenom</th>";
    echo " <th>email</th>";
    echo "<th>naissance</th>";
    echo " <th>genre</th>";
    echo " <th>modifier</th>";
    echo "</tr>";
    
    $nb=count($tablo);
    for($i=0;$i<$nb;$i++){
        $valeur1=$tablo[$i]['id'];
        $valeur2=$tablo[$i]['nom'];
        $valeur3=$tablo[$i]['prenom'];
        $valeur4=$tablo[$i]['email'];
        $valeur5=$tablo[$i]['naissance'];
        $valeur6=$tablo[$i]['genre'];
        $valeur7=$tablo[$i]["id"];
    
        if($i%$nbcol==0)




    
        echo '<tr>';
        echo '<td>',$valeur1,'</td>';
        echo '<td>',$valeur2,'</td>';
        echo '<td>',$valeur3,'</td>';
        echo '<td>',$valeur4,'</td>';
        echo '<td>',$valeur5,'</td>';
        echo '<td>',$valeur6,'</td>';
        echo '<td>',$valeur7,'</td>';
        
        if($i%$nbcol==($nbcol-1))
        echo '</tr>';
        
    
        }
        echo '</table>';
        


		?>
       </div>
    </div>
		
</div>

<div class="container cercle">

</div>

<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
	</body> 
</html>