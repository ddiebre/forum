<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>acceuil</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
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
        <a class="nav-link text-light" href="../welcome.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Membres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a href="../pages/liste.php" class="dropdown-item">liste des membres</a>
        <a href="../form.php" class="dropdown-item">ajouter des membres</a>
        <a href="../pages/liste.php" class="dropdown-item">parametre membres</a>
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

		<div class="container-fluid fond">
			<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mt-5 text-uppercase font-weight-bold text-danger">
                        <h1>Liste des Apprénants</h1>
                    </div>
                </div>


                <?php
    $bd = new PDO("mysql:host=localhost;dbname=demo","root", "");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $bd->query("SELECT * FROM membre ORDER BY username ASC");

    if (!$result){
        echo"la recuperation a echoue";
    }else{
        $nbre = $result->rowCount();
        ?>

        <h6 class="text-center text-uppercase text-danger mb-5">La table comprend <?= $nbre ?> personnes enregistrées</h6>
       <table class="m-auto    table table-bordered table-striped bg-white">
            <tr class="border bg-white">
                  <th class="text-left text-uppercase">identifiant</th>
                  <th class="text-left text-uppercase">non d'utilisateur</th>
                  <th class="text-left text-uppercase">email &nbsp;</th>
                <!-- <th class="text-center text-uppercase">naissance</th>
                  <th class="text-center text-uppercase">adresse</th>
                  <th class="text-center text-uppercase">telephone</th>
                  <th class="text-center text-uppercase">email</th>-->
                  <th class="text-left text-uppercase">Action1</th>
                  <th class="text-center text-uppercase">Action2</th> 
            </tr>
          <tr>
              <?php
                while($ligne = $result->fetch()){
                
                    echo"<tr class='mb-5'>";
                              echo"<td>".$ligne['id']."</td>";
                              echo"<td>".$ligne['username']."</td>";
                              echo"<td>".$ligne['email']."</td>";
                            /* echo"<td>".$ligne['NAISSANCE']."</td>";
                              echo"<td>".$ligne['ADRESSE']."</td>";
                              echo"<td>".$ligne['TELEPHONE']."</td>";
                              echo"<td>".$ligne['EMAIL']."</td>";*/
                              echo"<td>  <a href='modifier.php?ida=$ligne[0]&ok=$ligne[1]&oke=$ligne[2]&okk=$ligne[3]' class='btn btn-info'> modifier </a></td>

                                      <td class='text-center'>  <a href='supprimer.php?ida=$ligne[0]' class='btn btn-danger' onclick ='return confirmation();'> supprimer </a></td>";
                    echo"</tr>"; 
                }
            ?>
       </table>
       <?php  
    }
    ?>
    <script>
      function confirmation(){
        return confirm("voulez vous vraiment supprimer cet element?")
      }
  </script>

  
                    </div>
                </div>
        </div>
        
      </div>
            <?php
            include("pied.php")
               ?>

  <script src="../bootstrap/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.js"></script>

</body>
</html>