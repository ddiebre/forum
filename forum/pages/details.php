
  <?php

require_once 'connexion.php'; //permet de connecter premierement a la base de données
require_once 'liste.php';

function detailsapprenant($idp){
    $db = new PDO("mysql:host=localhost;dbname=demo","root", '');
   $details= $db->prepare("SELECT  * FROM sign WHERE id=?");
   $details -> execute([$idp]);
   return ($details-> fetch(PDO::FETCH_ASSOC));
}

if(isset($_GET['idp'])){
/* effectuer la suppression de l'element*/
detailsapprenant($_GET['idp']);
$afficher=detailsapprenant($_GET['idp']);
print_r($afficher);
}
 ?>








