<?php
    $bd = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT * FROM liste ORDER BY NOM ASC";
    $result = $bd->query("SELECT NOM  FROM liste ");

    if (!$result){
        echo"la recuperation a echoue";
    }else{
        $nbre = $result->rowCount();
        ?>

        <h4>il ya<?= $nbre ?> personne enregistrer</h4>
       <table>
       <tr>

            <th>nom</th>
            <th>prenom</th>
            <th>date</th>
            <th>adresse</th>
            <th>telephone</th>
            <th>email</th>
            
           
        </tr>
        <?php
    while($ligne = $result->fetch(PDO::FETCH_NUM)){
        echo"<tr>";
        foreach($ligne as $valeur);{
            echo"<td>$valeur </td> ";
        
        }
        echo"</tr>";
    }

?>
       </table>
       <?php
        
    }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white ">
				<a class="navbar-brand simplon " href="#"><img src="../img/Ssimplon png.png" alt="" height="100px" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			  
				<div class="collapse navbar-collapse justify-content-end gauche" id="navbarSupportedContent">
				 <div class="">
					<ul class="navbar-nav">
						<li class="nav-item ">
							<a class="nav-link mr-5 font-weight-bold text-danger" href="../index.php">ACCEUIL</a>
						  </li>
						<li class="nav-item ">
						  <a class="nav-link ecart1 font-weight-bold text-danger" href="../pages/enregister.php">S'ENREGISTRER</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ecart2 font-weight-bold text-danger" href="../pages/liste.php">LISTE</a>
						  </li>
					  </ul>
				 </div>
				  <form class="form-inline my-2 my-lg-0" action="test.php" method="GET">
					<input class="form-control mr-sm-2 ipad" type="search" placeholder="Search" aria-label="Recherche" id="Recherche" name="search" >
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Recherche</button>
				  </form>
				</div>
        </nav>