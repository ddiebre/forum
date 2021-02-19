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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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



    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

 
<script src="bootstrap/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>