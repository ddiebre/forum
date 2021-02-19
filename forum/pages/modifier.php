
<?php
if(isset($_GET['ok'])){

	$Name=$_GET['ok'];
	$LastName=$_GET['oke'];
	$Birth=$_GET['okk'];
	$Adress=$_GET['okj'];
	$Cell=$_GET['okl'];
	$Mail=$_GET['okd'];
	$id=$_GET['ida'];

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>modifier</title>
    <link rel="stylesheet" href="../styles/enregistrer.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">
            <a class="navbar-brand " href="../index.html"><img src="../img/Ssimplon png.png" alt="" height="100px" width="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end gauche" id="navbarSupportedContent">
             <div class="">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link mr-5 font-weight-bold text-danger" href="../index.php"> <span class="pointer">ACCEUIL</span> </a>
                      </li>
                    <li class="nav-item ">
                      <a class="nav-link ecart1 font-weight-bold text-danger" href="enregister.php">S'ENREGISTRER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ecart2 font-weight-bold text-danger" href="./liste.php">LISTE</a>
					  </li>
					  <li class="nav-item ">
                      <a class="nav-link ecart1 font-weight-bold text-danger" href="./recherche.php">RECHERCHER</a>
                    </li>
                  </ul>
             </div>
         
            </div>
          </nav>
    </header>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1 class="font-weight-bold">Modifier votre formulaire</h1>
		<div class="main-agileinfo bg-white">
			<div class="agileits-top ">
				<div class="row">
					<div class="col-4">

					</div>
					<div class="col-4">
						<img src="../menu responsive/maquette/images4.png" width="" height="" alt="">
					</div>
					<div class="col-4">

					</div>
				</div>
				<form  action="Tmodifier.php?ida=$ligne[0]" method="post">
					NOM<input class="text mb-4 form-control" type="text" name="NOM" value="<?php echo $Name?>" placeholder="NOM" pattern="[a-zA-Z]{1,}" required="">
					PRENOM<input class="text mb-4" type="text" name="PRENOM" value="<?php echo $LastName?>" placeholder="PRÉNOMS" pattern="[a-zA-Z]{1,}" required="">
					DATE DE NAISSANCE <br><input class="text mb-4" type="date" name="NAISSANCE" value="<?php echo $Birth?>" placeholder="DATE DE NAISSANCE" required="">
					ADRESSE<input class="text mb-4" type="text" name="ADRESSE" value="<?php echo $Adress?>"  placeholder="ADRESSE" required="">
					TELEPHONE<input class="text mb-4" type="text" name="TELEPHONE" value="<?php echo $Cell?>"  placeholder="TELEPHONE" pattern="[0-9]{1,}" required="">
					EMAIL<input class="text email mb-4  mt-0" type="email" name="EMAIL"value="<?php echo $Mail?>"  placeholder="Email" required="">
					<input class="text email mb-4  mt-0" type="hidden" name="ID"value="<?php echo $id?>"  placeholder="Email" required="">
				
					
					<input type="submit" value="modifier" name="modifier">
				</form>

				<p><a href="../index.php" class="list-unstyled"> RETOUR</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© Copyright 2021.| Design by Groupe 5</p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
		   
		</ul>
    </div>
    
	<!-- //main -->
	<script type="application/x-javascript"> addEventListener("load", function() 
	{ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</body>
</html>
   <script src="../js/jquery-3.5.1.min.js"></script>
   <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/app1.js" ></script>
</body>
</html>