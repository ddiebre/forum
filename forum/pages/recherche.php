<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/enregistrer.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">+
    	<link rel="stylesheet" href="../simplon/styles/j-query/datatables.min.css">
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
	<title>Recherche</title>
</head>
<body>
<?php
    $bd = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
	$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	?>
<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-white ">
				<a class="navbar-brand simplon " href="index.php"><img src="../img/Ssimplon png.png" alt="" height="100px" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			  
				<div class="collapse navbar-collapse justify-content-end gauche" id="navbarSupportedContent">
				 <div class="">
					<ul class="navbar-nav">
					<li class="nav-item ">
						  <a class="nav-link ecart1 font-weight-bold text-danger" href="../index.php">ACCEUIL</a>
						</li>
						<li class="nav-item ">
						  <a class="nav-link ecart1 font-weight-bold text-danger" href="../pages/enregister.php">S'ENREGISTRER</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ecart2 font-weight-bold text-danger" href="../pages/liste.php">LISTE</a>
						  </li>
					  </ul>
				 </div>
				  <form class="form-inline my-2 my-lg-0" action="recherche.php" method="POST">

					<input class="form-control mr-sm-2 ipad" type="search" placeholder="Search" aria-label="Recherche" id="Recherche" name="search" >

					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="submit">Recherche</button>

				  </form>
				</div>
        </nav> 
		</header>
	<div class="container-fluid green">
        <div class="container">
            <table class="text-white text-uppercase font-weight-bold m-auto mr-2">
                <thead>
                    <tr class="border">
                <th>NOM</th>
                <th>PRENOM</th>
                <th>ADRESSE</th>
                <th>Date_naissance</th>
                <th>Telephone</th>
                <th>MAIL</th>
                    </tr>
                </thead>

            </table>
            <div class="php">
            <?php
require_once "connexion.php";
$Recherche = $_POST["search"];

if (isset($Recherche) && $Recherche != "") {

    $Recuperation= $db->prepare("SELECT * FROM liste WHERE NOM=? OR PRENOM=?");
    $success = $Recuperation -> execute (array($Recherche,$Recherche));
    ?>
    <table class="hh">
<?php
   
    if ($success) {
        while ($donnees = $Recuperation ->fetch()) {
            echo "<tr>";
            echo "<td>".$donnees["NOM"]. "</td>";
            echo "<td>".$donnees["PRENOM"]. "</td>";
            echo "<td>".$donnees["ADRESSE"]. "</td>";
            echo "<td>".$donnees["NAISSANCE"]. "</td>";
            echo "<td>".$donnees["TELEPHONE"]. "</td>";
            echo "<td>".$donnees["EMAIL"]. "</td>";
            echo "</tr>";
        }
        ?>
        </table>
        <?php
    } else {
        echo '<div class="alert alert-warning" role="alert">Aucun apprenant ne correspond</div>';
    }
}
else{
echo '<div class="alert alert-warning" role="alert">Aucun apprenant ne correspond</div>';
}

?>
</div>
        </div>
    </div>

</body>
</html>