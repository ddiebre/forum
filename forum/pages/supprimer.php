<?php

require_once 'connexion.php'; //permet de connecter premierement a la base de données
function deleteapprenant($ida){
    $db = new PDO("mysql:host=localhost;dbname=demo","root", '');
   $sql= $db->prepare("DELETE FROM membre WHERE id=?");
   $sql -> execute([$ida]);
   return ($sql);
}
if(isset($_GET['ida'])){
/* effectuer la suppression de l'element*/
deleteapprenant($_GET['ida']);
/*header("Location:liste.php");*/
}
?>

