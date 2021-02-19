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
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
        <a href="pages/liste.php" class="dropdown-item">liste des membres</a>
        <a href="form.php" class="dropdown-item">ajouter des membres</a>
        <a href="pages/liste.php" class="dropdown-item">parametre membres</a>
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
  


  <div class="container-fluid text-center">
    <p class="font-weight-bold text-uppercase mt-2">formulaire d'inscription</p>
  </div>
 
  <div class="wrapper fadeInDown">
  <div id="formContent">
  <div class="container">
    <div class="row" >   
      <div class="col m-auto">
        <img src="images/ajouter.jpg" alt="" width="55%">
        <p class="font-italic text-uppercase">inscrivez des apprenants en remplissant <br> le formulaire puis en cliquant  sur envoyer</p>
      </div> 
      <div class="col">
      <div class="card">
            <form class="mt-3 ml-5 mr-5 mb-3" action="traitement.php" method="POST">
                  <div class="form-group">
                    <labe>Nom :    </label>
                    <input type="text" required class="form-control" name="nom" aria-describedby="emailHelp"
                      placeholder="saisir votre nom">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">  Prenom :</label>
                    <input type="text" required class="form-control" name="prenom" placeholder="saisir votre prenom">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">nom d'utilisateur :</label>
                    <input type="text" required class="form-control" name="username" placeholder="saisir votre nom d'utilisateur">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">email :</label>
                    <input type="email" required class="form-control" name="email" placeholder="saisir votre email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">date de naissance</label>
                    <input type="date" required class="form-control" name="naissance" placeholder="11/09/2019">
                  </div>

                  <fieldset class="form-group">
              <div class="row">
                <label>genre</label>
                <div class="col-sm-10" >
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="gridRadios1" value="homme"required>
                    <label class="form-check-label" for="gridRadios1">
                    homme
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="gridRadios2" value="femme">
                    <label class="form-check-label" for="gridRadios2">
                      femme
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group">
                    <labe>mot de passe :    </label>
                    <input type="password" required class="form-control" name="password" aria-describedby="emailHelp"
                      placeholder="saisir votre nom">
            </div>
                  <button type="submit" class="btn btn-success" value="envoyer">envoyer</button>

          </form>
    </div>
      </div>
    </div>
  </div> 

  </div>

<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

  </body>